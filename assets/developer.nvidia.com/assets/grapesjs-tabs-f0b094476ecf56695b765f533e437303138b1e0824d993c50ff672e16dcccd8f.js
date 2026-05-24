const doInitTabsComponent = (el, props, {history, _isEditor, document}) => {
  const {classTabActive, selectorTab, attrTabindex, attrSelected, roleTab, roleTabContent} = props;
  const {body, location} = document;

  const matches = body.matchesSelector || body.webkitMatchesSelector || body.mozMatchesSelector || body.msMatchesSelector;

  const each = (items, clb) => {
    const arr = items || [];
    for (let i = 0; i < arr.length; i++) {
      clb(arr[i], i)
    }
  }

  const hideContents = () => {
    each(el.querySelectorAll(roleTabContent), i => i.hidden = true);
  }

  const getTabId = item => item.getAttribute(selectorTab)
  const qS = (elem, qs) => elem.querySelector(qs);
  const getAllTabs = () => el.querySelectorAll(roleTab);
  const upTabIdx = (item, val) => !_isEditor && (item[attrTabindex] = val);

  const activeTab = (tabEl) => {
    let tabIdx = 0;
    each(getAllTabs(), (item) => {
      item.className = item.className.replace(classTabActive, '').trim();
      item[attrSelected] = 'false';
      item.dataset['tabIdx'] = `${tabIdx++}`;
      upTabIdx(item, '-1');
    });

    hideContents();
    tabEl.className += ' ' + classTabActive;
    tabEl[attrSelected] = 'true';
    upTabIdx(tabEl, '0');
    const tabContentId = getTabId(tabEl);
    const tabContent = tabContentId && qS(el, `#${tabContentId}`);
    tabContent && (tabContent.hidden = false);

    const {width: tabWidth} = tabEl.getBoundingClientRect();
    el.style.setProperty('--active-tab-width', `${tabWidth}px`);

    const allTabs = tabEl.parentNode.children;
    const currentTabIdx = parseInt(tabEl.dataset['tabIdx']);
    let xOffset = 0;
    for (let i = 0; i < currentTabIdx; i++) {
      const {width: w} = allTabs[i].getBoundingClientRect();
      xOffset += w;
    }
    el.style.setProperty('--active-tab-x-offset', `${xOffset}px`);
  };

  const getTabByHash = () => {
    const hashId = (location.hash || '').replace('#', '');
    const qrStr = att => `${roleTab}[${att}=${hashId}]`;
    return hashId && qS(el, qrStr(selectorTab));
  };

  const getSelectedTab = (target) => {
    let found;
    each(getAllTabs(), (item) => {
      if (found) {
        return;
      }
      if (item.contains(target)) {
        found = item;
      }
    });
    return found;
  };

  let tabToActive = qS(el, `.${classTabActive}${roleTab}`);
  tabToActive = tabToActive || getTabByHash() || qS(el, roleTab);
  tabToActive && activeTab(tabToActive);

  el.addEventListener('click', (ev) => {
    let {target} = ev;
    let found = matches.call(target, roleTab);

    if (!found) {
      target = getSelectedTab(target);
      if (target) {
        found = 1;
      }
    }

    if (found && !ev.__trg && target.className.indexOf(classTabActive) < 0) {
      ev.preventDefault();
      ev.__trg = 1;
      activeTab(target);
      const id = getTabId(target);
      try {
        history && history.pushState(null, null, `#${id}`);
      } catch (e) {
      }
    }
  });
}

const initTabsComponent = function (props) {
  const isEditorPage = document.querySelector('#gjs');
  if (isEditorPage) {
    const {editor} = window;
    const {rElement} = props;
    if (!editor || !rElement) {
      return;
    }

    try {
      doInitTabsComponent(rElement, props, window);
    } catch (e) {
    }
    editor.editor.on('load', (e) => {
      const editorContainer = e.getContainer();
      const iframe = editorContainer.firstChild.querySelector('iframe');
      doInitTabsComponent(rElement.parentNode, props, iframe.contentWindow);
    });
  } else {
    const tabsContainers = document.querySelectorAll('.tab-container');
    if (tabsContainers.length) {
      tabsContainers.forEach(container => {
        doInitTabsComponent(container.parentNode, props, window);
      });
    }
  }
};

(() => {
  initTabsComponent({
    classTabActive: 'tab-active',
    selectorTab: 'aria-controls',
    attrTabindex: 'tabIndex',
    attrSelected: 'ariaSelected',
    roleTab: '[role=tab]',
    roleTabContent: '[role=tabpanel]',
  });
})();
