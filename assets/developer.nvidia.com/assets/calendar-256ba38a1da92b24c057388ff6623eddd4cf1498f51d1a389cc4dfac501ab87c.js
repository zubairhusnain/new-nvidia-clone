(() => {
  function formatDateTimeRange(datetimeStart, datetimeEnd, timeZone) {
    const startDateObj = moment.tz(datetimeStart, 'YYYY-MM-DD HH:mm:ss', timeZone);
    const endDateObj = moment.tz(datetimeEnd, 'YYYY-MM-DD HH:mm:ss', timeZone);

    const prefix = startDateObj.format('dddd, MMMM D');
    const startTime = startDateObj.format('hh:mm A');
    const endTime = endDateObj.format('hh:mm A');
    const suffix = moment.tz(timeZone).format('z');

    return `${prefix} ${startTime} - ${endTime} (${suffix})`;
  }

  document.addEventListener('DOMContentLoaded', function () {
    const calendarWidgets = document.querySelectorAll('.nv-add-event-calendar');
    if (calendarWidgets.length < 1) {
      return;
    }

    let config = {
      target: '',
      component: 'Recommender',
      options: {
        layout: '4-cols',
        recommendations: [],
        showGreenElement: false,
        overflow: false,
        ctaText: 'Add to Calendar',
        navigationPlacement: 'side',
        noResultsText: 'No results found.'
      }
    };

    async function fetchUpcomingEvents(calendar_id) {
      const response = await fetch(`/calendars/${calendar_id}`);
      if(!response.ok) {
        throw new Error(response.status);
      }
      return await response.json();
    }

    for (let widget of calendarWidgets) {
      if (!widget.children.length) {
        continue;
      }
      const props = JSON.parse(widget.children[0].getAttribute('data-react-props'));

      const configInstance = {...config};
      configInstance.options.noResultsText = props['no_results_text'] ? `${props['no_results_text']}` : config.options.noResultsText;
      configInstance.target = `#${props['container_id']}`;

      fetchUpcomingEvents(props['calendar_id'])
        .then(data => {
          configInstance.options.recommendations = data.map(entry => {
            const {title, link_long, datetime_start, datetime_end, timezone} = entry;
            const pretitle = formatDateTimeRange(datetime_start, datetime_end, timezone)
            return {
              title: title,
              pretitle: pretitle,
              url: link_long,
            };
          });
        })
        .catch(error => {
          console.log(`Calendar: Failed to fetch data; Code: ${error.message}`)
        })
        .finally(() => {
          if (configInstance.target) {
            initializeComponent(configInstance);
          }
        });
    }
  });
})();
