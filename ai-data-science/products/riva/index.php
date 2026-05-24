<!DOCTYPE html><html lang="en-US" class="h-100" data-color-scheme="light"><head class="at-element-marker">

<title>Riva Speech AI SDK - Get Started | NVIDIA Developer</title>
<link rel="stylesheet" href="../../../assets/developer.nvidia.com/assets/application-de0dfeb89ab4403528e5b9685074245e3303c48d350220e68ed0036165ad8020.css" media="all">
<link rel="stylesheet" href="../../../assets/developer.nvidia.com/assets/one-trust-bea625cf16a072ce5fdb0707a19f2645daf63c05eb1a016db72773eba008fc07.css">
<link rel="icon" type="image/x-icon" href="../../../assets/favicon-81bff16cada05fcff11e5711f7e6212bdc2e0a32ee57cd640a8cf66c87a6cbe6.ico">
<style class="vjs-styles-defaults">
      .video-js {
        width: 300px;
        height: 150px;
      }

      .vjs-fluid:not(.vjs-audio-only-mode) {
        padding-top: 56.25%
      }
    </style>
<style>.librarian-ul-list {
  margin-top: 0px !important;
  margin-bottom: 0px !important;
  padding-left: 0px;
  list-style: none !important;
}

.librarian-results {
  margin-bottom: 45px;
  font-weight: 400;
  list-style: none !important;
}


.librarian-result-heading {
  display: flex;
  align-items: flex-start;
  gap: 4px;
  margin-bottom: 8px;
  justify-content: left;
  text-align: left;
}

.librarian-result-body {
  display: flex;
  flex-direction: column;
  flex: 1;
  min-width: 0;
}

.librarian-result-title {
  color: #000;
  text-decoration: none;
  font-weight: bold;
  font-size: 20px;
  line-height: normal;
}

.librarian-result-number {
  display: inline-block;
  box-sizing: border-box;
  min-width: calc(1.25em + 4px);
  padding: 0 4px;
  margin-right: 4px;
  border: 2px solid #76B900;
  color: #1a1a1a;
  font-weight: 700;
  line-height: 1.25;
  text-align: center;
  vertical-align: bottom;
}

.librarian-result-item:hover .librarian-result-number,
.librarian-result-item:focus-visible .librarian-result-number {
  border-color: #000;
}

.librarian-result-description {
    font-size: 16px;
    color: #1a1a1a;
    padding-bottom: 0px !important;
    margin-bottom: 10px;
    overflow: hidden;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    text-overflow: ellipsis;
    -webkit-line-clamp: 3;
    line-clamp: 3;
}

/* mobile and tablet viewport */
@media screen and (max-width: 1023px) {
  .librarian-result-description {
    line-height: 22px;
  }
}

/* laptop and desktop viewport */
@media screen and (min-width: 1024px) {
  .librarian-result-description {
    line-height: 24px;
    margin-bottom: 5px;
  }
}

.librarian-result-item {
  text-decoration: none !important;
  display: block;
  border-radius: 4px;
}

.librarian-result-item:focus {
  outline: none;
}

.librarian-result-item:focus-visible {
  outline: 2px solid #76B900;
  outline-offset: -2px;
}

.librarian-result-link {
  color: #999;
  overflow-wrap: break-word;
  font-size: 14px;
  line-height: 22px;
}
</style>
<style>.librarian-box-container{
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: auto;
  min-height: 50vh;
  margin: 0 auto;
  max-width: 1070px;
  max-width: 100%;
}

.librarian-results-layout {
  display: flex;
}

.librarian-search-row {
  width: 100%;
  display: flex;
}

.librarian-genai-summery-active {
  margin-top: 30px;
}

.librarian-results-divider {
  background: #ccc;
  border: none;
  height: 1px;
}

#target-div {
  height: 10px;
  background: transparent;
}
.librarian-error{
  padding: 20px;
}

.librarian-result-count-and-promos {
  width: 100%
}

.librarian-page-cascade {
  width: 100%;
}

.librarian-page-cascade > * {
  opacity: 0;
}

.librarian-page-cascade-ready > * {
  animation: librarian-page-cascade-in 0.45s ease-out both;
}

.librarian-page-cascade-ready > *:nth-child(1) { animation-delay: 1.4s; }
.librarian-page-cascade-ready > *:nth-child(2) { animation-delay: 1.5s; }
.librarian-page-cascade-ready > *:nth-child(3) { animation-delay: 1.6s; }
.librarian-page-cascade-ready > *:nth-child(4) { animation-delay: 1.7s; }
.librarian-page-cascade-ready > *:nth-child(n+5) { animation-delay: 1.8s; }

@keyframes librarian-page-cascade-in {
  from { opacity: 0; transform: translateY(8px); }
  to { opacity: 1; transform: translateY(0); }
}
.librarian-loader-container{
  height: 260px;
  display: flex;
  justify-content: center;
}

.librarian-results-count{
  font-size: 18px; 
  font-weight: 700; 
  color:#000;
  line-height: 125%;
  padding: 0px !important
}

.librarian-recommendedForYouDesktopAndLaptop{
  width: 370px;
  border-right: 2px solid #DEDFDF;
  margin-right: 60px;
  padding-right: 60px;
}

.librarian-showFilterIcon {
  display: none;
  width: 120px;
  justify-content: space-evenly;
}

.librarian-showFilterIcon-opened {
  p {
    color: #76b900 !important;
  }
  svg {
    path{
    stroke: #76b900 !important;
  }
}
}

.librarian-showFilterIcon-label{
  color: #76b900 !important;
}
.librarian-showFilterIcon-path{
  stroke: #76b900 !important;
}

#nv__card__container {
  padding: 0px !important;
}

/* Mobile devices */
@media only screen and (max-width: 639px) {
  .librarian-box-container{
    width: 458px;
  }
  .librarian-recommendedForYouDesktopAndLaptop{
    display: none;
  }
  .librarian-result-count-and-promos {
    padding-top: 40px;
  }
  .librarian-showFilterIcon{
    display: flex;
    align-items: center;
  }
}

/* Tablet devices */
@media only screen and (min-width: 640px) and (max-width: 1023px) {
  .librarian-box-container{
    width: 620px; 
  }
  .librarian-recommendedForYouDesktopAndLaptop{
    display: none;
  }
  .librarian-result-count-and-promos {
    padding-top: 40px;
  }
  .librarian-showFilterIcon{
    display: flex;
    align-items: center;
  }
}

/* Laptop Devices */
@media only screen and (min-width: 1024px) and (max-width: 1349px) {
  .librarian-box-container{
    width: 790px; 
  }
  .librarian-recommendedForYouMobileandTablet{
    display: none;
  }
  .librarian-result-count-and-promos {
    padding-top: 50px;
  }
}

/* Desktop Devices */
@media only screen and (min-width: 1350px) {
  .librarian-box-container{
    width: 1070px;
  }
  .librarian-search-row {
    max-width: 900px;
    align-self: flex-start;
  }
  .librarian-recommendedForYouMobileandTablet{
    display: none;
  }
  .librarian-result-count-and-promos {
    padding-top: 50px;
  }
}

.librarian-recommendedForYouMobileandTablet {
  margin-top: 30px;
  align-self: flex-start;
}

#mobile-generated-banner-list {
  padding-left: 0px !important;
  padding-right: 0px !important;
}

#search-promo-container #nv__rfc__section__wrapper #rfu123 .nv-teaser {
  margin-bottom: 30px !important;
}

#mobile-generated-banner-list #nv__rfc__section__wrapper-2 #rfu123-2 .nv-teaser {
  margin-right: 20px !important;
}

#mobile-generated-banner-list .at-rec-container-mobile {
  padding-left: 0px !important;
}

#search-promo-container #nv__rfc__section__wrapper #rfu123 .nv-card-data {
  padding-bottom: 15px !important;
}

#search-promo-container #nv__rfc__section__wrapper h4 {
  font-size: 20px !important;
  padding-top: 0px !important;
}

#mobile-generated-banner-list #nv__rfc__section__wrapper-2 h4 {
  font-size: 20px !important;
  padding-top: 0px !important;
}

</style>
<style>@property --angle {
  syntax: "<angle>";
  initial-value: 0deg;
  inherits: false;
}

@keyframes rotateGradientBorder {
  from { --angle: 0deg; }
  to   { --angle: 360deg; }
}

.rotating-gradient-border {
  position: relative;
  isolation: isolate;
  border: 2px solid transparent;
  background-origin: border-box;
  background-clip: padding-box, border-box;
  background-image:
    linear-gradient(
      var(--gradient-border-bg, transparent),
      var(--gradient-border-bg, transparent)
    ),
    conic-gradient(
      from var(--angle, 0deg),
      #8b7355 0%, #6d5a3a 5%, #7a6542 10%, #d4c4a8 15%, #b8956e 20%,
      #c9a86c 25%, #e8dcc4 30%, #f5ede0 35%, #c4a064 40%, #8b7355 45%,
      #7a6542 50%, #b89b6a 55%, #d4c4a8 60%, #e8dcc4 65%, #c9a86c 70%,
      #b8956e 75%, #a68b5b 80%, #8b7355 85%, #6d5a3a 90%, #9a8262 95%,
      #8b7355 100%
    );
  animation: rotateGradientBorder 20s linear infinite;
}

@media (prefers-reduced-motion: reduce) {
  .rotating-gradient-border {
    animation: none;
  }
}
</style>
<style>.librarian-search-input-wrapper {
    box-sizing: border-box;
    border-radius: 12px;
    width: 100%;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 6px 6px 6px 14px;
    height: 51px !important;
    background-color: #0b0b0b;
    box-shadow: 0 0 24px rgba(196, 160, 100, 0.18);
    --gradient-border-bg: #0b0b0b;
}

.librarian-search-input-wrapper .librarian-search-ai-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    flex-shrink: 0;
}

.librarian-resultsContainer {
    padding-top: 30px;
    width: 100%;
}

.librarian-search-input {
    border: none;
    width: 100%;
    font-size: 16px;
    font-weight: 400;
    background-color: transparent;
    color: #fff;
    caret-color: #d4c4a8;
}

.librarian-search-input::placeholder {
    color: #b3b3b3;
    opacity: 1;
}

.librarian-search-input:focus {
    outline: none;
}

.librarian-search-icon {
    background-color: transparent;
    border: none;
    align-items: center;
    color: #b3b3b3;
    cursor: pointer;
}

.librarian-cross-icon {
    background-color: transparent;
    border: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #b3b3b3;
    cursor: pointer;
    padding: 4px;
}

.librarian-cross-icon:hover {
    color: #fff;
}

.librarian-paperplane-icon {
    border: none;
    background: #76B900;
    width: 36px;
    height: 36px;
    border-radius: 6px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    cursor: pointer;
    padding: 0;
    transition: background 0.2s ease, opacity 0.2s ease;
}

.librarian-paperplane-icon:hover:not(:disabled) {
    background: #8FD400;
}

.librarian-paperplane-icon:disabled {
    cursor: auto;
    opacity: 0.6;
}

.librarian-genAI-loader-title {
    font-size: 16px;
    color: #666;
    font-weight: 500;
    padding: 40px !important;
    margin-block-start: 0px !important;
}

</style>
<style>.librarian-search-pagination-wrapper {
  display: flex;
  width: 100%;
  padding: 20px 0;
}

/* only mobile viewport */
@media screen and (max-width: 639px) {
  .librarian-search-pagination-wrapper {
    font-size: 14px;
  }
}

/* tablet, laptop and desktop viewport */
@media screen and (min-width: 640px) {
  .librarian-search-pagination-wrapper {
    font-size: 16px;
  }
}

.librarian-pager-left {
  flex: 0 0 128px;
}

.librarian-pager-center {
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
  background: #f7f7f7 0 0 no-repeat padding-box;
  letter-spacing: 0;
  color: #000;
  font-weight: bold;
  font-size: 20px;
  height: 50px;
}

.librarian-pager-right {
  flex: 0 0 128px;
}

.librarian-pagination-button {
  width: 128px;
  padding: 12px !important;
  margin: 0;
  padding: 0;
  border: 0;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  background: #76B900 0 0 no-repeat padding-box;
  text-align: center;
  color: #000;
  font-weight: bold;
  -webkit-appearance: none;
  -moz-appearance: none;
  cursor: pointer;
  font-size: 18px;
  box-sizing: border-box;
  height: 50px;

  &:disabled {
    background-color: #fff;
    border: 2px solid #76B900;
    cursor: auto;
  }
}</style>
<style>.librarian-show-more {
  font-size: 16px;
  white-space: nowrap;
  font-weight: bold;
}

.librarian-show-more-button {
  display: inline-flex;
  align-items: center;
  background: transparent;
  cursor: pointer;
  border: none;
  outline: none;
  line-height: 125%;
  font-weight: 700;
  color: #EEE;
  justify-content: flex-start;
  padding: 0px !important;
  gap: 6px;
}

.librarian-show-more-button:focus-visible {
  outline: 2px solid #76B900;
  outline-offset: 4px;
  border-radius: 4px;
}

.librarian-show-more-btn-container {
  display: flex;
  box-sizing: border-box;
  justify-content: center;
  align-items: center;
  padding: 16px;
  width: 100%;
  background-color: #000;
  border-radius: 0 0 10px 10px;
}

.librarian-genAI-summary-btn-container .librarian-show-more-button {
  margin-right: auto;
}

.librarian-show-more-btn-sub-container {
  display: flex;
  justify-content: space-between;
  width: 100%;
  gap: 30px;
}

.librarian-arrow {
  display: inline-block;
  margin-left: 5px;
  transition: transform 0.3s ease;
  color: #76b900;
}

.librarian-rotated {
  transform: rotate(-180deg);
  padding-top: 0px;
}

.librarian-genai-summery {
  width: 100%;
  position: relative;
}

.librarian-genai-wrapper {
  background-color: #161616;
  margin: 20px;
  padding: 20px;
  border-radius: 0 10px 10px 10px;
  color: #EEE;
}

.librarian-genai-container{
  p{
    margin-bottom: 0px !important;
  }
}

.librarian-genai-container {
  box-sizing: border-box;
  border-radius: 12px;
  padding: 14px 14px 0px 14px;
  max-width: 100%;
  color: #EEE;
  background-color: #000;
  overflow: hidden;
  transition: max-height 0.5s cubic-bezier(0.4, 0, 0.2, 1);
  max-height: 80px;
  --gradient-border-bg: #000;
}

.librarian-genai-container.librarian-genai-measured {
  max-height: var(--librarian-genai-container-height, 80px);
}

.librarian-genai-container.librarian-genai-revealed {
  max-height: none;
}

.librarian-genai-container.librarian-genai-empty {
  padding-bottom: 14px;
}

.librarian-genai-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.librarian-genai-title-text {
  padding-left: 10px;
}

.librarian-genai-fade-in {
  animation: librarian-genai-fade-in 0.45s ease-out both;
  animation-delay: 0.5s;
}

.librarian-genai-fade-in ~ .librarian-genai-fade-in {
  animation-delay: 0.6s;
}

.librarian-genai-fade-in ~ .librarian-genai-fade-in ~ .librarian-genai-fade-in {
  animation-delay: 0.7s;
}

@keyframes librarian-genai-fade-in {
  from { opacity: 0; transform: translateY(8px); }
  to { opacity: 1; transform: translateY(0); }
}

.librarian-ai-summery-text {
  position: relative;
  display: block;
  color: #EEE;
  overflow: hidden;
  text-overflow: ellipsis;
  margin-top: 0;
  margin-bottom: 0;
  padding-bottom: 30px !important;
  padding-top: 30px !important;
  padding-left: 65px !important;
  font-size: 15px;
  line-height: 25px;
  white-space: pre-line;
  list-style: none !important;
  transition: max-height 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

.librarian-ai-summery-text::before {
  content: "";
  position: absolute;
  top: 4px;
  bottom: 4px;
  left: 15px;
  width: 2px;
  background-color: #76B900;
  border-radius: 2px;
}

.librarian-ai-summery-text > li {
  margin-bottom: 15px;
  list-style: none !important;
  animation: librarian-genai-fade-in 0.45s ease-out both;
}

.librarian-ai-summery-text > li:nth-child(1) { animation-delay: 0.50s; }
.librarian-ai-summery-text > li:nth-child(2) { animation-delay: 0.58s; }
.librarian-ai-summery-text > li:nth-child(3) { animation-delay: 0.66s; }
.librarian-ai-summery-text > li:nth-child(4) { animation-delay: 0.74s; }
.librarian-ai-summery-text > li:nth-child(5) { animation-delay: 0.82s; }
.librarian-ai-summery-text > li:nth-child(6) { animation-delay: 0.90s; }
.librarian-ai-summery-text > li:nth-child(7) { animation-delay: 0.98s; }
.librarian-ai-summery-text > li:nth-child(8) { animation-delay: 1.06s; }
.librarian-ai-summery-text > li:nth-child(9) { animation-delay: 1.14s; }
.librarian-ai-summery-text > li:nth-child(10) { animation-delay: 1.22s; }
.librarian-ai-summery-text > li:nth-child(n+11) { animation-delay: 1.30s; }

.librarian-ai-summery-text.librarian-summery-measured {
  max-height: var(--librarian-genai-content-height, none);
}

.librarian-ai-summery-text.librarian-summery-measured.librarian-show-less-text {
  max-height: 242px;
}

.librarian-ai-summery-text > li::marker {
  content: '';
}

.librarian-ai-summery-text > li:last-child {
  margin-bottom: 0;
}

.librarian-ai-summery-text>li::before {
  content: "";
  display: inline-block;
  width: 8px;
  height: 14px;
  margin-left: -16px;
  margin-right: 10px;
  vertical-align: middle;
  background: url("data:image/svg+xml;utf8,<svg xmlns=%27http://www.w3.org/2000/svg%27 width=%278%27 height=%2714%27 viewBox=%270 0 8 14%27 fill=%27none%27><path d=%27M1 1l6 6-6 6%27 stroke=%27%23EEEEEE%27 stroke-width=%272%27 stroke-linecap=%27square%27/></svg>") no-repeat center / contain;
}

.librarian-citation {
  display: inline-block;
  box-sizing: border-box;
  min-width: 20px;
  height: 20px;
  padding: 0 4px;
  font-weight: 700 !important;
  color: #EEE !important;
  font-family: inherit;
  border: 1px solid #76B900;
  text-decoration: none !important;
  font-size: 12px !important;
  line-height: 18px !important;
  text-align: center;
  margin-right: 5px !important;
}

.librarian-citation:hover,
.librarian-citation:focus-visible {
  border-color: #FFFFFF;
}

.librarian-citation:last-child {
  margin-right: 0px !important;
}

.librarian-show-less-text {
  max-height: 242px;
}

.librarian-ai-summery-text::after {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  height: 70px;
  pointer-events: none;
  opacity: 0;
  background: linear-gradient(
    180deg,
    rgba(0, 0, 0, 0) 0%,
    rgba(0, 0, 0, 0.7) 60%,
    #000 100%
  );
  transition: opacity 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

.librarian-show-less-text::after {
  opacity: 1;
}

.librarian-genAi-summery-title {
  font-size: 15px;
  color: #EEE;
  font-weight: 700;
  line-height: 1;
  display: flex;
  align-items: center;
  padding-top: 0px;
  padding: 0px !important;
}

.librarian-genAi-summery-title > span {
  display: inline-flex;
  align-items: center;
}

.librarian-genAI-summary-btn-container {
  display: flex;
  width: 100%;
  box-sizing: border-box;
  justify-content: flex-end;
  align-items: center;
  gap: 20px;
  padding: 8px 16px;

  &:hover {
    svg {
      cursor: pointer;
    }
  }
}

.librarian-tooltip > div,
.librarian-thumbs-up > div,
.librarian-thumbs-down > div {
  width: 24px;
  height: 24px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.librarian-tooltip,
.librarian-thumbs-up,
.librarian-thumbs-down {
  position: relative;
  display: inline-block;
}

.librarian-tooltip .librarian-tooltiptext,
.librarian-thumbs-up .librarian-thumbsuptext,
.librarian-thumbs-down .librarian-thumbsdowntext {
  visibility: hidden;
  width: max-content;
  max-width: 240px;
  background-color: #313131;
  color: #fff;
  text-align: center;
  font-family: "NVIDIA Sans", "NVIDIA Sans Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-size: 12px;
  font-style: normal;
  font-weight: 500;
  line-height: 1;
  padding: 8px 16px;
  border: 1px solid #636363;
  border-radius: 4px;
  box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.12);
  position: absolute;
  z-index: 1080;
  bottom: calc(100% + 8px);
  left: 50%;
  transform: translateX(-50%);
  margin-left: 0;
  opacity: 0;
  transition: opacity 0.3s;
}

/* .librarian-tooltip .librarian-tooltiptext::after, .librarian-thumbs-up .librarian-thumbsuptext::after, .librarian-thumbs-down .librarian-thumbsdowntext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
} */

.librarian-tooltip:hover .librarian-tooltiptext,
.librarian-thumbs-up:hover .librarian-thumbsuptext,
.librarian-thumbs-down:hover .librarian-thumbsdowntext {
  visibility: visible;
  opacity: 1;
}

/* Mobile devices */
@media only screen and (max-width: 639px) {
  .librarian-genai-container {
    max-width: 460px;
  }

  .librarian-show-more-btn-container {
    flex-direction: column;
    text-align: center;
  }

  .librarian-show-more-btn-sub-container {
    flex-direction: column;
    text-align: center;
    align-items: center;
  }

  .librarian-show-less-text,
  .librarian-ai-summery-text.librarian-summery-measured.librarian-show-less-text {
    max-height: calc(240px + var(--librarian-btn-bar-height, 130px) + 12px);
  }

  .librarian-disclaimer-container {
    margin-top: 5px;
  }
}

/* Tablet devices */
@media only screen and (min-width: 640px) and (max-width: 1023px) {
  .librarian-show-more-btn-container {
    flex-direction: column;
    text-align: center;
  }

  .librarian-show-more-btn-sub-container {
    flex-direction: column;
    text-align: center;
    align-items: center;
  }

  .librarian-show-less-text,
  .librarian-ai-summery-text.librarian-summery-measured.librarian-show-less-text {
    max-height: calc(203px + var(--librarian-btn-bar-height, 120px) + 12px);
  }

  .librarian-disclaimer-container {
    margin: auto;
    margin-top: 5px;
  }
}

/*Laptop*/
@media only screen and (min-width: 1024px) and (max-width: 1349px) {
  .librarian-genai-container {
    max-width: 790px;
  }
}

/*Desktop*/
@media only screen and (min-width: 1350px) {
  .librarian-genai-container {
    max-width: 900px;
  }
}

.librarian-search-refinements {
  margin-top: 30px;
  align-self: flex-start;
}

.librarian-search-refinements-header {
  font-size: 15px;
  font-style: normal;
  font-weight: 700;
  line-height: 166.7%;
  padding: 0 !important
}

.librarian-search-refinements-items {
  color: #EEE;
  font-size: 15px;
  font-style: normal;
  font-weight: 400;
  line-height: 100%;
  border-bottom: 1px solid #76B900;
  cursor: pointer;
  padding-top: 15px;
  width: fit-content
}

.librarian-search-refinements-container {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  padding-top: 16px;
}

.librarian-search-refinements-capsule {
  color: #222;
  font-size: 11px;
  font-style: normal;
  font-weight: 700;
  line-height: 15.4px;
  border-radius: 18px;
  border: 1px solid #808080;
  padding: 5px 10px;
  align-items: center;
  cursor: pointer;
}

.librarian-disclaimer-container {
  font-size: 10px !important;
  line-height: 130%;
  p{
    color: #CCC !important;
    font-size: 10px !important;
    padding: 0;
  }
}

.librarian-disclaimer-container a {
  text-decoration-thickness: 1px !important;
  &:hover{
    text-decoration-color: #fff;
  }
}

.librarian-generating-dots > span {
  display: inline-block;
  opacity: 0;
  animation: librarian-generating-dot 1.2s ease-in-out infinite;
}

.librarian-generating-dots > span:nth-child(2) {
  animation-delay: 0.2s;
}

.librarian-generating-dots > span:nth-child(3) {
  animation-delay: 0.4s;
}

@keyframes librarian-generating-dot {
  0%, 80%, 100% { opacity: 0; }
  40% { opacity: 1; }
}</style>
<style>img {
    border: 0;
}

.librarian-search-results-wrapper {
    padding-top: 30px;
}

/* only mobile viewport */
@media screen and (max-width: 639px) {
    .librarian-search-results-wrapper .search-results-item {
        padding-bottom: 40px;
    }

    .librarian-search-results-wrapper .search-results-item:last-child {
        padding-bottom: 0px !important;
    }
}


/* tablet, laptop and desktop viewport */
@media screen and (min-width: 640px) {
    .librarian-search-results-wrapper .search-results-item {
        padding-bottom: 30px;
    }

    .librarian-search-results-wrapper .search-results-item:last-child {
        padding-bottom: 0px !important;
    }
}

.librarian-search-results-wrapper .promoted-item {
    align-content: center;
    align-items: flex-start;
    display: flex;
    flex-direction: row;
}

/* laptop and desktop viewport */
@media screen and (min-width: 1024px) {
    .librarian-search-results-wrapper .promoted-item .event-item-image {
        min-width: 30%;
        width: 30%;
    }

    .librarian-search-results-wrapper .event-item-image {
        display: inline-block;
        padding: 0 30px 0 0;
        height: auto;
    }
}

/* only tablet viewport */
@media screen and (min-width: 640px) and (max-width: 1023px) {
    .librarian-search-results-wrapper .promoted-item .event-item-image {
        min-width: 50%;
        width: 50%;
    }

    .librarian-search-results-wrapper .event-item-image {
        display: inline-block;
        padding: 0 15px 0 0;
        height: auto;
    }
}

/* only mobile viewport */
@media screen and (max-width: 639px) {
    .librarian-search-results-wrapper .promoted-item .event-item-image {
        min-width: 50%;
        width: 50%;
    }

    .librarian-search-results-wrapper .event-item-image {
        display: none;
        padding: 0 30px 0 0;
        height: auto;
    }
}

/* only mobile viewport */
@media screen and (max-width: 639px) {
    .librarian-search-results-text {
        max-width: 100%
    }
}

/* only tablet viewport */
@media screen and (min-width: 640px) and (max-width: 1023px) {
    .librarian-search-results-text {
        max-width: 50%
    }
}

.librarian-item-image {
    background-color: #ccc;
    height: 0;
    padding-bottom: 56.25%;
    position: relative;
    width: 100%;
}

.librarian-item-image img.thumbnail {
    height: 100%;
    left: 0;
    opacity: 0;
    position: absolute;
    transition: opacity 1s ease;
    width: 100%;
}

.librarian-item-image img.thumbnail.in {
    opacity: 1;
}

.librarian-search-results-wrapper .search-results-item>div {
    line-height: 1.25em;
}

.librarian-search-results-wrapper .promoted-item .recommended {
    border: 2px solid #ccc;
    color: #000;
    display: inline-block;
    font-size: 14px;
    line-height: 24px;
    padding: 0 5px;
    font-weight: 500;
}

/* mobile and tablet viewport */
@media screen and (max-width: 1023px) {
    .librarian-search-results-wrapper .promoted-item .recommended {
        margin-bottom: 10px;
    }
}

/* laptop and desktop viewport */
@media screen and (min-width: 1024px) {
    .librarian-search-results-wrapper .promoted-item .recommended {
        margin-bottom: 15px;
    }
}

.librarian-search-results-wrapper .search-results-item .librarian-item-title {
    font-weight: bold;
}

/* mobile and tablet viewport */
@media screen and (max-width: 1023px) {
    .librarian-search-results-wrapper .search-results-item .librarian-item-title {
        padding-bottom: 5px;
    }
}

/* laptop and desktop viewport */
@media screen and (min-width: 1024px) {
    .librarian-search-results-wrapper .search-results-item .librarian-item-title {
        padding-bottom: 10px;
    }
}

/* only mobile viewport */
@media screen and (max-width: 639px) {
    .librarian-search-results-wrapper .search-results-item .librarian-item-title a {
        font-size: 20px;
        line-height: normal;
    }
}

/* tablet, laptop and desktop viewport */
@media screen and (min-width: 640px) {
    .librarian-search-results-wrapper .search-results-item .librarian-item-title a {
        font-size: 20px;
        line-height: normal;
    }
}

/* only mobile viewport */
@media screen and (max-width: 639px) {
    .librarian-search-results-wrapper .search-results-item .librarian-item-summary {
        font-size: 16px;
        line-height: 24px;
        padding-bottom: 5px;
        color: #1a1a1a;
    }
}

/* tablet, laptop and desktop viewport */
@media screen and (min-width: 640px) {
    .librarian-search-results-wrapper .search-results-item .librarian-item-summary {
        font-size: 16px;
        line-height: 24px;
        padding-bottom: 10px;
        color: #1a1a1a;
    }
}

.librarian-search-results-wrapper .search-results-item .librarian-item-footer {
    padding-bottom: 0;
    overflow-x: hidden;
    text-overflow: ellipsis;
    font-size: 14px;
    line-height: 22px;
}

.librarian-search-results-wrapper .search-results-item .librarian-item-footer .librarian-item-footer-inner {
    white-space: wrap;
    clip: auto;
}

.librarian-search-results-wrapper .search-results-item .librarian-item-footer .librarian-item-footer-inner .librarian-item-link a {
    color: #999;
    text-decoration: none;
}

.librarian-result-item {
    text-decoration: none !important;
}</style>
<style>.librarian-no-results-container {
  width: 100%;
}

.librarian-no-results-text {
  font-size: 22px;
  line-height: 175%;
}

.librarian-no-results-term {
  font-weight: bold;
}

.librarian-no-results-list {
  list-style-type: disc;
  padding-left: 15px;
  font-size: 15px;
  line-height: 25px;
  color: #666 !important;
}
.librarian-no-results-list li span{
  color: #000 !important;
}

.librarian-no-result-tips {
  font-size: 15px;
  font-weight: 700;
}

.librarian-search-tips-container {
  background-color: #f7f7f7;
  padding: 20px 30px;  
}
</style>
<style>.librarian-show-all-btn {
  color: #000;
  font-size: 15px;
  font-style: normal;
  font-weight: 700;
  line-height: 25px;
  background-color: transparent;
  border: none;
  cursor: pointer;
  padding-left: 0px !important;
  display: flex;
  align-items: center;
  width: 100%;
  gap: 12px;
  margin-top: -15px;
  line-height: 1em;
}

.librarian-show-all-btn::before,
.librarian-show-all-btn::after {
  content: "";
  flex: 1;
  height: 1px;
  background-color: #ccc;
}

.librarian-more-less-btn {
  color: #000;
  font-size: 15px;
  font-style: normal;
  font-weight: 700;
  line-height: 25px;
  background-color: transparent;
  border: none;
  cursor: pointer;
  display: inline-block;
  text-decoration: underline;
  text-align: center;
  padding: 0;
  padding-left: 15px;
  line-height: 1em;
}

.librarian-hide-filters {
  max-height: 0;
  display: none;
  transition: max-height 1s ease-in-out;
  transition: height 0.2s;
}

.librarian-filters-container {
  width: 100%;
  justify-content: space-around;
  background-color: #F7F7F7;
  display: flex;
  flex-direction: column;
  opacity: 1;
  /* max-height: 5000px; */
  transition: opacity 0.5s ease, max-height 0.5s ease;
  overflow: hidden;
  margin-top: 30px;
}

.librarian-filters-container-items {
  display: flex;
  padding: 30px;
}

.librarian-filters-container-hide {
  opacity: 0;
  max-height: 0;
  margin-top: 0px;
  transition: opacity 0.5s ease, max-height 0.5s ease, margin-top 0.5s ease;
}

.librarian-filter-title {
  font-size: 18px !important;
  font-style: normal;
  font-weight: 700;
  line-height: 125%;
}

.librarian-filters-reset-apply-container {
  background-color: transparent !important;
  margin-top: 8px !important;
  display: flex !important;
  justify-content: center !important;
  gap: 16px !important;
  margin-top: 15px !important;
}

.librarian-reset-btn {
  cursor: pointer !important;
  background-color: #fff !important;
  border-radius: 0 !important;
  outline: none !important;
  font-weight: 700 !important;
  font-size: 14px !important;
  padding: 6px !important;
  color: #000 !important;
  flex: 1 !important;
  max-width: 130px !important;
  text-transform: none !important;
  line-height: normal !important;
  text-align: center !important;
  border: 2px solid  #76B900
}

.librarian-reset-btn:hover {
  background-color: #f2f2f2 !important;
}

.librarian-apply-btn {
  cursor: pointer !important;
  background-color: #76b900 !important;
  border: 2px solid #76b900 !important;
  border-radius: 0 !important;
  outline: none !important;
  font-weight: 700 !important;
  font-size: 14px !important;
  padding: 6px !important;
  color: #000 !important;
  flex: 1 !important;
  max-width: 160px !important;
  text-transform: none !important;
  line-height: normal !important;
  text-align: center !important;
}

.librarian-apply-btn:hover {
  background-color: #659f00 !important;
  border-color: #659f00 !important;
}

.librarian-filter-items-container {
  padding: 30px 0;
}

.librarian-checkbox-item {
  display: flex;
  align-items: flex-start;
}

.librarian-checkbox-label {
  font-size: 15px;
  font-style: normal;
  font-weight: 400;
  line-height: 140%;
  padding-left: 15px;
  cursor: pointer;
  color: #000 !important;
}

.librarian-checkbox-label-disabled {
  color: #999 !important;
  cursor: auto;
}

.librarian-select-deselect-top {
  padding-top: 15px;
}

.librarian-site-filters-list {
  padding: 30px 0 0 0;
}

.librarian-mobile-filters-content {
  width: 100%;
}

.librarian-checkbox {
  width: 16px;
  height: 16px;
  accent-color: #fff !important;
  cursor: pointer;
  appearance: none;
  content: '' !important;
  -webkit-appearance: none;
  border-radius: 0;
  background-color: transparent !important;
  position: relative;
  margin:2px;

  @supports (-webkit-touch-callout: none) {
    content: '';
    accent-color: #fff !important;
  }
}

.librarian-checkbox-span {
  width: 16px;
  height: 16px;
  border-radius: 0;
  position: relative;
  margin:2px;
  cursor: pointer;
}

.librarian-checkbox:disabled {
  cursor: auto;
}

.librarian-checkbox:checked::before {
  outline: 2px solid #999;
  content: '\f00c';
  display: block;
  text-align: center;
  color: #666;
  font-family: "Font Awesome 6 Pro";
  font-size: 14px;
  font-style: normal;
  font-weight: 400;
  line-height: 125%;
}

.librarian-checkbox:not(:checked) {
  outline: 2px solid #999;
  border-radius: 0px;

  @supports (-webkit-touch-callout: none) {
    outline: 2px solid #999;
    border: none;
    -webkit-appearance: none;
    border-radius: 0px;
  }
}

.librarian-filter-title-container {
  display: flex;
  justify-content: space-between;
  padding-bottom: 12px;
  border-bottom: 2px solid #dedfdf;
}

.librarian-arrow-icon {
  display: inline-block;
  transition: transform 0.3s ease;
  cursor: pointer;
}

.librarian-arrow-icon-rotated {
  transform: rotate(180deg);
}

.librarian-filter-headings {
  width: 220px;
  display: flex;
  flex-direction: column;
  gap: 12px;
  padding-bottom: 30px;
}

.librarian-items-container {
  display: flex;
  column-gap: 40px;
  row-gap: 0;
  flex-wrap: wrap;
  padding-top: 30px
}

.librarian-filter-headings p {
  font-weight: bold;
  font-size: 15px;
  color: #000;
  margin: 0;
  padding: 0 !important;
  line-height: 1em;
}

.librarian-select-deselect {
  cursor: pointer;
  color: #000;
  font-family: "NVIDIA Sans";
  font-size: 14px;
  font-style: normal;
  font-weight: 700;
  line-height: 166.7%;
  text-decoration-style: solid;
  text-decoration-skip-ink: none;
  text-decoration-thickness: auto;
  text-underline-offset: auto;
  text-underline-position: from-font;
}

.librarian-checkbox-all {
  display: flex;
  align-items: center;
  cursor: pointer;
}

.librarian-select-deselect-label {
  font-weight: 700;
  text-decoration: none;
}

/*Mobile*/
@media only screen and (max-width: 639px) {
  .librarian-filters-container-items {
    justify-content: center;
    padding-bottom: 0px !important;
  }
}

/*Tablet*/
@media only screen and (min-width: 640px) and (max-width: 1023px) {
  .librarian-filters-container-items {
    justify-content: center;
  }

  /* .librarian-checkbox-item {
    display: block;
  } */
}

/*Laptop and Desktop*/
@media only screen and (min-width: 1024px) {
  .librarian-filters-container {
    display: none !important;
  }

  .librarian-filters-reset-apply-container {
    justify-content: flex-start !important;
    margin: 15px !important;
  }

  .librarian-reset-btn,
  .librarian-apply-btn {
    flex: none !important;
    min-width: 100px !important;
  }
}</style>
<style>.librarian-notfound-container {
  text-align: center;
  padding: 80px 20px;
  background-color: #fff;
  color: #000;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: 40px;
}

.librarian-notfound-status {
  color: #000;
  font-size: 20px !important;
  font-weight:700;
  line-height: 25px !important;
}

.librarian-notfound-title {
  color: #000;
  font-size: 48px;
  font-weight:700;
  line-height: 60px;
}

.librarian-notfound-description {
  font-size: 15px !important;
  color: #000;
  width: 740px;
  max-width: 90%;
  margin: auto;
  font-weight: 400;
  line-height: 25px;
}

.librarian-notfound-button {
  background-color: #76b900;
  color: #000;
  border: none;
  outline: none;
  text-decoration: none !important;
  padding: 13px 15px;
  font-weight: 700 !important;
  font-family: 18px !important;
  display: inline-block;
  &:hover {
    background-color: #91c733;;
  }
}

/* Tablet devices */
@media only screen and (min-width: 640px) and (max-width: 1023px) {
  .librarian-notfound-title{
    font-size: 36px !important;
    line-height: 45px !important;
  }
}

/* Mobile devices */
@media only screen and (max-width: 639px){
  .librarian-notfound-title{
    font-size: 36px !important;
    line-height: 45px !important;
  }
}</style>
<style>/* * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: NVIDIA-NALA, Arial, Helvetica, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

ul{
    list-style-type: none;
    padding-left: 0px;
}

a {
    color: #000000;
} */</style>
<style>.librarian-overlay-container {
  background: #161616;
  box-shadow: 0px 2px 6px 0px rgba(0, 0, 0, 0.19), 0px 0px 2px 0px rgba(0, 0, 0, 0.19);
  padding: 60px 0;
  text-align: center;
  width: 100%;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.librarian-overlay-text {
  font-size: 36px !important;
  font-weight: 700 !important;
  line-height: 45px !important;
  color: #fff !important;
}

@media only screen and (max-width: 1199px) {
  .librarian-overlay-text {
    font-size: 28px !important;
    line-height: 35px !important;
  }
}

@media only screen and (max-width: 1023px) {
  .librarian-overlay-text {
    font-size: 24px !important;
    line-height: 30px !important;
  }
}

.librarian-overlay-text-container {
  margin: 0 auto;
}

.librarian-overlay-topWrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 30px;
}

.librarian-overlay {
  position: fixed;
  top: var(--nv-global-nav-pull-up, 44px);
  left: 0;
  height: calc(100% - 40px);
  width: 100%;
  min-height: 50%;
  background-color: transparent;
  box-shadow: 0 2px 4px #000d;
  background-color: #0009;
  display: flex;
  flex-direction: column;
  box-sizing: border-box;
  z-index: 1000;
}

.librarian-inline {
  width: 100%;
  display: block;
}

.librarian-inline .librarian-overlay-container.librarian-inline-container {
  position: relative;
  width: 100%;
  max-width: 100%;
  padding: 60px 0;
  box-shadow: none;
}

@media only screen and (max-width: 1023px) {
  .librarian-overlay-container,
  .librarian-inline .librarian-overlay-container.librarian-inline-container {
    padding: 30px 0;
  }
}

@media only screen and (max-width:639px){
  .librarian-overlay-container,
  .librarian-inline .librarian-overlay-container.librarian-inline-container {
    padding-top: 0 !important;
  }
}

.librarian-show-overlay {
  display: block;
}

.librarian-close-button {
  position: absolute;
  top: 10px;
  right: 20px;
  font-size: 30px;
  cursor: pointer;
}

.librarian-search-input-home {
  max-width: 910px;
}

.librarian-search-ai-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 32px;
  height: 32px;
  flex-shrink: 0;
}

.librarian-search-input-container .librarian-search-input {
  flex: 1;
  background-color: transparent !important;
  color: #fff !important;
  border: none !important;
  outline: none !important;
  font-size: 16px;
  height: 100%;
  caret-color: #d4c4a8;
}

.librarian-search-input-container .librarian-search-input::placeholder {
  color: #b3b3b3;
  opacity: 1;
}

.librarian-suggestedPillsWrapper {
  /* overflow-x: scroll;
  scrollbar-width: none; */
  width: 731px;
  margin: 0 auto;
  flex-direction: column;
  text-align: center;
}

.librarian-try-searches-header {
  margin: 30px auto 0;
  color: #fff !important;
  font-size: 15px;
  font-style: normal;
  font-weight: 700;
  line-height: 166.7%;
  padding: 0 !important;
  background: transparent;
  border: none;
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  gap: 8px;
}

.librarian-try-searches-header:focus-visible {
  outline: 2px solid #d4c4a8;
  outline-offset: 4px;
  border-radius: 4px;
}

.librarian-try-searches-chevron {
  display: inline-flex;
  align-items: center;
  transition: transform 0.25s ease;
}

.librarian-try-searches-chevron.librarian-rotated {
  transform: rotate(180deg);
}

.librarian-suggestedPillsContainer {
  /* scrollbar-width: none;
  -ms-overflow-style: none; */
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

/* .librarian-suggestedPillsContainer::-webkit-scrollbar {
  display: none;
} */


.librarian-suggestedPills {
  color: #EEE;
  font-size: 11px;
  font-style: normal;
  font-weight: 700;
  line-height: 15.4px;
  border-radius: 18px;
  border: 1px solid #808080;
  padding: 5px 10px;
  align-items: center;
  cursor: pointer;
  margin-right: 16px;
  margin-top: 16px;
}

.librarian-hidden-div{
  display: none;
}

@media only screen and (max-width:639px) {
  .librarian-hidden-div{
    display: block;
    height: 100px;
  }
}

/* Mobile devices */
@media (max-width:639px) {
  .librarian-overlay-topWrapper {
    margin-top: 60px;
  }
}

@media only screen and (max-width:399px) {
  .librarian-overlay-container{
    min-height: none;
    overflow: scroll;
  }
}
@media only screen and (max-width: 639px) {
  .librarian-overlay-container,
  .librarian-inline .librarian-overlay-container.librarian-inline-container {
    padding-left: 16px;
    padding-right: 16px;
  }

  .librarian-overlay-container .general-container {
    max-width: 630px !important;
    width: 100% !important;
    padding: 0px !important;
  }

  .librarian-search-input-home {
    max-width: 455px;
  }

  .librarian-search-input {
    font-size: 16px;
  }

  .librarian-suggestedPillsWrapper {
    width: 100%;
    max-width: 100%;
  }
}

/* Tablet devices */
@media only screen and (min-width: 640px) and (max-width: 1023px) {
  .librarian-overlay-container .general-container {
    max-width: 630px !important;
    width: 100% !important;
  }

  .librarian-search-input-home {
    max-width: 620px;
  }

  .librarian-search-input {
    font-size: 16px;
  }

  .librarian-suggestedPillsWrapper {
    width: 630px;
    max-width: 100vw;
  }
}


/* Laptop devices */
@media only screen and (min-width: 1024px) and (max-width: 1349px) {
  .librarian-overlay-container .general-container {
    max-width: 954px !important;
    width: 100% !important;
  }

  .librarian-search-input-home {
    max-width: 790px;
  }
}

/* Desktop devices */
@media only screen and (min-width: 1350px) {
  .librarian-overlay-container .general-container {
    max-width: 1290px !important;
    width: 100% !important;
  }

  .librarian-search-input-home {
    max-width: 910px;
  }
}

#paperplane-icon-btn {
  border: none;
  background: #76b900;
  width: 30px;
  height: 30px;
  border-radius: 2px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  flex-shrink: 0;
  transition: background 0.2s ease, opacity 0.2s ease;
}

#paperplane-icon-btn:hover:not(:disabled) {
  background: #8fd400;
}

#paperplane-icon-btn:disabled {
  cursor: auto;
  background: #ccc;
  opacity: 0.7;
  cursor: not-allowed;
}


.librarian-search-input-container .librarian-search-icon[aria-label="cross-button"] {
  background: transparent;
  border: none;
  color: #b3b3b3;
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 4px;
  margin-right: 4px;
}

.librarian-search-input-container .librarian-search-icon[aria-label="cross-button"]:hover {
  color: #fff;
}</style>
<style>/* :root {
  --app-font: NVIDIA Sans, Arial, Helvetica, sans-serif;
  --padding-tb-30: 30px 0px;
  --padding-tb-15: 15px 0px;
  --brand-color: #76b900;
} */

/* body {
  font-family: NVIDIA-NALA, Arial, Helvetica, sans-serif;
} */
</style>
<style>@charset "UTF-8";
.vjs-modal-dialog .vjs-modal-dialog-content, .video-js .vjs-modal-dialog, .vjs-button > .vjs-icon-placeholder:before, .video-js .vjs-big-play-button .vjs-icon-placeholder:before {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.vjs-button > .vjs-icon-placeholder:before, .video-js .vjs-big-play-button .vjs-icon-placeholder:before {
  text-align: center;
}

@font-face {
  font-family: VideoJS;
  src: url(data:application/font-woff;charset=utf-8;base64,d09GRgABAAAAABDkAAsAAAAAG6gAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAABHU1VCAAABCAAAADsAAABUIIslek9TLzIAAAFEAAAAPgAAAFZRiV3hY21hcAAAAYQAAADaAAADPv749/pnbHlmAAACYAAAC3AAABHQZg6OcWhlYWQAAA3QAAAAKwAAADYZw251aGhlYQAADfwAAAAdAAAAJA+RCLFobXR4AAAOHAAAABMAAACM744AAGxvY2EAAA4wAAAASAAAAEhF6kqubWF4cAAADngAAAAfAAAAIAE0AIFuYW1lAAAOmAAAASUAAAIK1cf1oHBvc3QAAA/AAAABJAAAAdPExYuNeJxjYGRgYOBiMGCwY2BycfMJYeDLSSzJY5BiYGGAAJA8MpsxJzM9kYEDxgPKsYBpDiBmg4gCACY7BUgAeJxjYGS7wTiBgZWBgaWQ5RkDA8MvCM0cwxDOeI6BgYmBlZkBKwhIc01hcPjI+FGJHcRdyA4RZgQRADK3CxEAAHic7dFZbsMgAEXRS0ycyZnnOeG7y+qC8pU1dHusIOXxuoxaOlwZYWQB0Aea4quIEN4E9LzKbKjzDeM6H/mua6Lmc/p8yhg0lvdYx15ZG8uOLQOGjMp3EzqmzJizYMmKNRu27Nhz4MiJMxeu3Ljz4Ekqm7T8P52G8PP3lnTOVk++Z6iN6QZzNN1F7ptuN7eGOjDUoaGODHVsuvU8MdTO9Hd5aqgzQ50b6sJQl4a6MtS1oW4MdWuoO0PdG+rBUI+GejLUs6FeDPVqqDdDvRvqw1CfhpqM9At0iFLaAAB4nJ1YDXBTVRZ+5/22TUlJ8we0pHlJm7RJf5O8F2j6EymlSPkpxaL8U2xpa3DKj0CBhc2IW4eWKSokIoLsuMqssM64f+jA4HSdWXXXscBq67IOs3FXZ1ZYWVyRFdo899yXtIBQZ90k7717zz3v3HPPOfd854YCCj9cL9dL0RQFOqCbGJnrHb5EayiKIWN8iA/hWBblo6hUWm8TtCDwE80WMJus/irwyxOdxeB0MDb14VNJHnXYoLLSl6FfCUYO9nYPTA8Epg9090LprfbBbZ2hY0UlJUXHQp3/vtWkS6EBv8+rPMq5u9692f/dNxJNiqwC1xPE9TCUgCsSdQWgE3XQD25lkG4CN2xmTcOXWBOyser6RN6KnGbKSbmQ3+d0OI1m2W8QzLLkI2sykrWAgJJEtA8vGGW/2Q+CmT3n8zS9wZwu2DCvtuZKZN3xkrLh36yCZuUomQSqGpY8t/25VfHVhw8z4ebGBtfLb0ya9PCaDc+8dGTvk2dsh6z7WzvowlXKUSWo9MJ15a3KrEP2loOr2Ojhw6iW6hf2BDdEccQvZGpaAy7YovSwq8kr7HGllxpd71rkS6G0Sf11sl9OvMK1+jwPPODxjUwkOim9CU3ix1wNjXDfmJSEn618Bs6lpWwUpU+8PCqLMY650zjq8VhCIP17NEKTx3eaLL+s5Pi6yJWaWjTHLR1jYzPSV9VF/6Ojdb/1kO3Mk3uhHC0x6gc1BjlKQ+nQFxTYdaJkZ7ySVxLBbhR1dsboNXp1tCYKW2LRaEzpYcIx2BKNxaL0ZaUnSqfFoiNhHKR/GkX6PWUSAaJelQaqZL1EpoHNsajSEyPSoJ9IjhIxTdjHLmwZvhRDOiFTY/YeQnvrVZmiTQtGncECXtFTBZLOVwwMRgoXHAkXzMzPn1nAJJ8jYSbMDaqN2waGLzNhih/bZynUBMpIWSg7VYi7DRx2m8ALkIdRCJwI6ArJx2EI8kaDWeTQKeAFk9fjl/1AvwktjQ1P7NjyMGQyfd4vjipX6M/i52D7Cq80kqlcxEcGXRr/FEcgs0u5uGgB4VWuMFfpdn2Re6Hi3PqzmxWKsz6+ae2Pn9hXXw/fqM859UiGC0oKYYILJBqJrsn1Z1E5qOs9rQCiUQRREjm8yJcbHF5cUJufX1vAHlefw0XgUoboS3ETfQlTxBC4SOtuE8VPRJTBSCQSjZCpk7Gqzu+masaZ2y7Zjehho4F3g82BNDkAHpORG4+OCS+f6JTPmtRn/PH1kch6d04sp7AQb25aQ/pqUyXeQ8vrebG8OYQdXOQ+585u0sdW9rqalzRURiJ+9F4MweRFrKUjl1GUYhH1A27WOHw5cTFSFPMo9EeUIGnQTZHIaJ7AHLaOKsOODaNF9jkBjYG2QEsQ2xjMUAx2bBEbeTBWMHwskBjngq56S/yfgkBnWBa4K9sqKtq2t1UI8S9He5XuBRbawAdatrQEAi30Aks2+LM8WeCbalVZkWNylvJ+dqJnzVb+OHlSoKW8nPCP7Rd+CcZ2DdWAGqJ2CBFOphgywFFCFBNtfAbGtNPBCwxvygHeYMZMY9ZboBqwq/pVrsbgN5tkv152ODlbMfiqwGMBgxa4Exz3QhovRIUp6acqZmQzRq0ypDXS2TPLT02YIkQETnOE445oOGxOmXAqUJNNG7XgupMjPq2ua9asrj5yY/yuKteO1Kx0YNJTufrirLe1mZnat7OL6rnUdCWenpW6I8mAnbsY8KWs1PuSovCW9A/Z25PQ24a7cNOqgmTkLmBMgh4THgc4b9k2IVv1/g/F5nGljwPLfOgHAzJzh45V/4+WenTzmMtR5Z7us2Tys909UHqrPY7KbckoxRvRHhmVc3cJGE97uml0R1S0jdULVl7EvZtDFVBF35N9cEdjpgmAiOlFZ+Dtoh93+D3zzHr8RRNZQhnCNMNbcegOvpEwZoL+06cJQ07h+th3fZ/7PVbVC6ngTAV/KoLFuO6+2KFcU651gEb5ugPSIb1D+Xp8V4+k3sEIGnw5mYe4If4k1lFYr6SCzmM2EQ8iWtmwjnBI9kTwe1TlfAmXh7H02by9fW2gsjKwtv0aaURKil4OdV7rDL1MXIFNrhdxohcZXYTnq47WisrKitaObbf5+yvkLi5J6lCNZZ+B6GC38VNBZBDidSS/+mSvh6s+srgC8pyKMvDtt+de3c9fU76ZPfuM8ud4Kv0fyP/LqfepMT/3oZxSqpZaTa1DaQYLY8TFsHYbWYsPoRhRWfL5eSSQbhUGgGC3YLbVMk6PitTFNGpAsNrC6D1VNBKgBHMejaiuRWEWGgsSDBTJjqWIl8kJLlsaLJ2tXDr6xGfT85bM2Q06a46x2HTgvdnV8z5YDy/27J4zt6x2VtkzjoYpkq36kaBr4eQSg7tyiVweWubXZugtadl58ydapfbORfKsDTuZ0OBgx4cfdjCf5tbWNITnL120fdOi1RV1C3uKGzNdwYLcMvZ3BxoPyTOCD1XvXTp7U10gWCVmTV9b3r2z0SkGWovb2hp9I89O8a2smlyaO8muMU+dRmtzp60IzAoFpjLr1n388boLyf0dRvxhsHZ0qbWqDkwqvvpkj4l0fY6EIXRi5sQSrAvsVYwXRy4qJ2EVtD1AN7a0HWth9ymvL1xc3WTUKK/TAHA/bXDVtVWfOMfuGxGZv4Ln/jVr9jc3j1yMv0tndmyt9Vq88Y9gH1wtLX3KWjot5++jWHgAoZZkQ14wGQ20Fli71UmKJAy4xKMSTGbVdybW7FDDAut9XpD5AzWrYO7zQ8qffqF8+Ynd/clrHcdyxGy3a/3+mfNnzC/cBsveTjnTvXf1o6vzOlZw7WtqtdmPK/Errz/6NNtD72zmNOZfbmYdTGHfoofqI79Oc+R2n1lrnL6pOm0Up7kwxhTW12Amm7WYkXR2qYrF2AmgmbAsxZjwy1xpg/m1Je2vrp8v/nz2xpmlBg4E9hrMU341wVpTOh/OfmGvAnra8q6uctr60ZQHV3Q+WMQJykMj8ZsWn2QBOmmHMB+m5pDIpTFonYigiaKAhGEiAHF7EliVnQkjoLVIMPtJpBKHYd3A8GYH9jJzrWwmHx5Qjp7vDAX0suGRym1vtm/9W1/HyR8vczfMs6Sk8DSv855/5dlX9oQq52hT8syyp2rx5Id17IAyAM3wIjQPMOHzytEB64q6D5zT91yNbnx3V/nqnd017S9Y0605k3izoXLpsxde2n38yoOV9s1LcjwzNjbdX6asnBVaBj/6/DwKwPkpcqbDG7BnsXoSqWnUAmottYF6jMSdVyYZh3zVXCjwTiwwHH6sGuRiEHQGzuRX6whZkp123oy1BWE2mEfJ/tvIRtM4ZM5bDXiMsPMaAKOTyc5uL57rqyyc5y5JE5pm1i2S2iUX0CcaQ6lC6Zog7JqSqZmYlosl2K6pwNA84zRnQW6SaALYZQGW5lhCtU/W34N6o+bKfZ8cf3/Cl/+iTX3wBzpOY4mRkeNf3rptycGSshQWgGbYt5jFc2e0+DglIrwl6DVWQ7BuwaJ3Xk1J4VL5urnLl/Wf+gHU/hZoZdKNym6lG+I34FaNeZKcSpJIo2IeCVvpdsDGfKvzJnAwmeD37Ow65ZWwSowpgwX5T69s/rB55dP5BcpgDKFV8p7q2sn/1uc93bVzT/w6UrCqDTWvfCq/oCD/qZXNoUj8BL5Kp6GU017frfNXkAtiiyf/SOCEeLqnd8R/Ql9GlCRfctS6k5chvIBuQ1zCCjoCHL2DHNHIXxMJ3kQeO8lbsUXONeSfA5EjcG6/E+KdhN4bP04vBhdi883+BFBzQbxFbvZzQeY9LNBZc0FNfn5NwfDn6rCTnTw6R8o+gfpf5hCom33cRuiTlss3KHmZjD+BPN+5gXuA2ziS/Q73mLxUkpbKN/eqwz5uK0X9F3h2d1V4nGNgZGBgAOJd776+iue3+crAzc4AAje5Bfcg0xz9YHEOBiYQBQA8FQlFAHicY2BkYGBnAAGOPgaG//85+hkYGVCBMgBGGwNYAAAAeJxjYGBgYB8EmKOPgQEAQ04BfgAAAAAAAA4AaAB+AMwA4AECAUIBbAGYAcICGAJYArQC4AMwA7AD3gQwBJYE3AUkBWYFigYgBmYGtAbqB1gIEghYCG4IhAi2COh4nGNgZGBgUGYoZWBnAAEmIOYCQgaG/2A+AwAYCQG2AHicXZBNaoNAGIZfE5PQCKFQ2lUps2oXBfOzzAESyDKBQJdGR2NQR3QSSE/QE/QEPUUPUHqsvsrXjTMw83zPvPMNCuAWP3DQDAejdm1GjzwS7pMmwi75XngAD4/CQ/oX4TFe4Qt7uMMbOzjuDc0EmXCP/C7cJ38Iu+RP4QEe8CU8pP8WHmOPX2EPz87TPo202ey2OjlnQSXV/6arOjWFmvszMWtd6CqwOlKHq6ovycLaWMWVydXKFFZnmVFlZU46tP7R2nI5ncbi/dDkfDtFBA2DDXbYkhKc+V0Bqs5Zt9JM1HQGBRTm/EezTmZNKtpcAMs9Yu6AK9caF76zoLWIWcfMGOSkVduvSWechqZsz040Ib2PY3urxBJTzriT95lipz+TN1fmAAAAeJxtkMl2wjAMRfOAhABlKm2h80C3+ajgCKKDY6cegP59TYBzukAL+z1Zsq8ctaJTTKPrsUQLbXQQI0EXKXroY4AbDDHCGBNMcYsZ7nCPB8yxwCOe8IwXvOIN7/jAJ76wxHfUqWX+OzgumWAjJMV17i0Ndlr6irLKO+qftdT7i6y4uFSUvCknay+lFYZIZaQcmfH/xIFdYn98bqhra1aKTM/6lWMnyaYirx1rFUQZFBkb2zJUtoXeJCeg0WnLtHeSFc3OtrnozNwqi0TkSpBMDB1nSde5oJXW23hTS2/T0LilglXX7dmFVxLnq5U0vYATHFk3zX3BOisoQHNDFDeZnqKDy9hRNawN7Vh727hFzcJ5c8TILrKZfH7tIPxAFP0BpLeJPA==) format("woff");
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-play, .video-js .vjs-play-control .vjs-icon-placeholder, .video-js .vjs-big-play-button .vjs-icon-placeholder:before {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-play:before, .video-js .vjs-play-control .vjs-icon-placeholder:before, .video-js .vjs-big-play-button .vjs-icon-placeholder:before {
  content: "\f101";
}

.vjs-icon-play-circle {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-play-circle:before {
  content: "\f102";
}

.vjs-icon-pause, .video-js .vjs-play-control.vjs-playing .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-pause:before, .video-js .vjs-play-control.vjs-playing .vjs-icon-placeholder:before {
  content: "\f103";
}

.vjs-icon-volume-mute, .video-js .vjs-mute-control.vjs-vol-0 .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-volume-mute:before, .video-js .vjs-mute-control.vjs-vol-0 .vjs-icon-placeholder:before {
  content: "\f104";
}

.vjs-icon-volume-low, .video-js .vjs-mute-control.vjs-vol-1 .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-volume-low:before, .video-js .vjs-mute-control.vjs-vol-1 .vjs-icon-placeholder:before {
  content: "\f105";
}

.vjs-icon-volume-mid, .video-js .vjs-mute-control.vjs-vol-2 .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-volume-mid:before, .video-js .vjs-mute-control.vjs-vol-2 .vjs-icon-placeholder:before {
  content: "\f106";
}

.vjs-icon-volume-high, .video-js .vjs-mute-control .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-volume-high:before, .video-js .vjs-mute-control .vjs-icon-placeholder:before {
  content: "\f107";
}

.vjs-icon-fullscreen-enter, .video-js .vjs-fullscreen-control .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-fullscreen-enter:before, .video-js .vjs-fullscreen-control .vjs-icon-placeholder:before {
  content: "\f108";
}

.vjs-icon-fullscreen-exit, .video-js.vjs-fullscreen .vjs-fullscreen-control .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-fullscreen-exit:before, .video-js.vjs-fullscreen .vjs-fullscreen-control .vjs-icon-placeholder:before {
  content: "\f109";
}

.vjs-icon-square {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-square:before {
  content: "\f10a";
}

.vjs-icon-spinner {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-spinner:before {
  content: "\f10b";
}

.vjs-icon-subtitles, .video-js .vjs-subs-caps-button .vjs-icon-placeholder,
.video-js.video-js:lang(en-GB) .vjs-subs-caps-button .vjs-icon-placeholder,
.video-js.video-js:lang(en-IE) .vjs-subs-caps-button .vjs-icon-placeholder,
.video-js.video-js:lang(en-AU) .vjs-subs-caps-button .vjs-icon-placeholder,
.video-js.video-js:lang(en-NZ) .vjs-subs-caps-button .vjs-icon-placeholder, .video-js .vjs-subtitles-button .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-subtitles:before, .video-js .vjs-subs-caps-button .vjs-icon-placeholder:before,
.video-js.video-js:lang(en-GB) .vjs-subs-caps-button .vjs-icon-placeholder:before,
.video-js.video-js:lang(en-IE) .vjs-subs-caps-button .vjs-icon-placeholder:before,
.video-js.video-js:lang(en-AU) .vjs-subs-caps-button .vjs-icon-placeholder:before,
.video-js.video-js:lang(en-NZ) .vjs-subs-caps-button .vjs-icon-placeholder:before, .video-js .vjs-subtitles-button .vjs-icon-placeholder:before {
  content: "\f10c";
}

.vjs-icon-captions, .video-js:lang(en) .vjs-subs-caps-button .vjs-icon-placeholder,
.video-js:lang(fr-CA) .vjs-subs-caps-button .vjs-icon-placeholder, .video-js .vjs-captions-button .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-captions:before, .video-js:lang(en) .vjs-subs-caps-button .vjs-icon-placeholder:before,
.video-js:lang(fr-CA) .vjs-subs-caps-button .vjs-icon-placeholder:before, .video-js .vjs-captions-button .vjs-icon-placeholder:before {
  content: "\f10d";
}

.vjs-icon-chapters, .video-js .vjs-chapters-button .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-chapters:before, .video-js .vjs-chapters-button .vjs-icon-placeholder:before {
  content: "\f10e";
}

.vjs-icon-share {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-share:before {
  content: "\f10f";
}

.vjs-icon-cog {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-cog:before {
  content: "\f110";
}

.vjs-icon-circle, .vjs-seek-to-live-control .vjs-icon-placeholder, .video-js .vjs-volume-level, .video-js .vjs-play-progress {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-circle:before, .vjs-seek-to-live-control .vjs-icon-placeholder:before, .video-js .vjs-volume-level:before, .video-js .vjs-play-progress:before {
  content: "\f111";
}

.vjs-icon-circle-outline {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-circle-outline:before {
  content: "\f112";
}

.vjs-icon-circle-inner-circle {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-circle-inner-circle:before {
  content: "\f113";
}

.vjs-icon-hd {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-hd:before {
  content: "\f114";
}

.vjs-icon-cancel, .video-js .vjs-control.vjs-close-button .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-cancel:before, .video-js .vjs-control.vjs-close-button .vjs-icon-placeholder:before {
  content: "\f115";
}

.vjs-icon-replay, .video-js .vjs-play-control.vjs-ended .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-replay:before, .video-js .vjs-play-control.vjs-ended .vjs-icon-placeholder:before {
  content: "\f116";
}

.vjs-icon-facebook {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-facebook:before {
  content: "\f117";
}

.vjs-icon-gplus {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-gplus:before {
  content: "\f118";
}

.vjs-icon-linkedin {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-linkedin:before {
  content: "\f119";
}

.vjs-icon-twitter {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-twitter:before {
  content: "\f11a";
}

.vjs-icon-tumblr {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-tumblr:before {
  content: "\f11b";
}

.vjs-icon-pinterest {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-pinterest:before {
  content: "\f11c";
}

.vjs-icon-audio-description, .video-js .vjs-descriptions-button .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-audio-description:before, .video-js .vjs-descriptions-button .vjs-icon-placeholder:before {
  content: "\f11d";
}

.vjs-icon-audio, .video-js .vjs-audio-button .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-audio:before, .video-js .vjs-audio-button .vjs-icon-placeholder:before {
  content: "\f11e";
}

.vjs-icon-next-item {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-next-item:before {
  content: "\f11f";
}

.vjs-icon-previous-item {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-previous-item:before {
  content: "\f120";
}

.vjs-icon-picture-in-picture-enter, .video-js .vjs-picture-in-picture-control .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-picture-in-picture-enter:before, .video-js .vjs-picture-in-picture-control .vjs-icon-placeholder:before {
  content: "\f121";
}

.vjs-icon-picture-in-picture-exit, .video-js.vjs-picture-in-picture .vjs-picture-in-picture-control .vjs-icon-placeholder {
  font-family: VideoJS;
  font-weight: normal;
  font-style: normal;
}
.vjs-icon-picture-in-picture-exit:before, .video-js.vjs-picture-in-picture .vjs-picture-in-picture-control .vjs-icon-placeholder:before {
  content: "\f122";
}

.video-js {
  display: block;
  vertical-align: top;
  box-sizing: border-box;
  color: #fff;
  background-color: #000;
  position: relative;
  padding: 0;
  font-size: 10px;
  line-height: 1;
  font-weight: normal;
  font-style: normal;
  font-family: Arial, Helvetica, sans-serif;
  word-break: initial;
}
.video-js:-moz-full-screen {
  position: absolute;
}
.video-js:-webkit-full-screen {
  width: 100% !important;
  height: 100% !important;
}

.video-js[tabindex="-1"] {
  outline: none;
}

.video-js *,
.video-js *:before,
.video-js *:after {
  box-sizing: inherit;
}

.video-js ul {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  list-style-position: outside;
  margin-left: 0;
  margin-right: 0;
  margin-top: 0;
  margin-bottom: 0;
}

.video-js.vjs-fluid,
.video-js.vjs-16-9,
.video-js.vjs-4-3,
.video-js.vjs-9-16,
.video-js.vjs-1-1 {
  width: 100%;
  max-width: 100%;
}

.video-js.vjs-fluid:not(.vjs-audio-only-mode),
.video-js.vjs-16-9:not(.vjs-audio-only-mode),
.video-js.vjs-4-3:not(.vjs-audio-only-mode),
.video-js.vjs-9-16:not(.vjs-audio-only-mode),
.video-js.vjs-1-1:not(.vjs-audio-only-mode) {
  height: 0;
}

.video-js.vjs-16-9:not(.vjs-audio-only-mode) {
  padding-top: 56.25%;
}

.video-js.vjs-4-3:not(.vjs-audio-only-mode) {
  padding-top: 75%;
}

.video-js.vjs-9-16:not(.vjs-audio-only-mode) {
  padding-top: 177.7777777778%;
}

.video-js.vjs-1-1:not(.vjs-audio-only-mode) {
  padding-top: 100%;
}

.video-js.vjs-fill:not(.vjs-audio-only-mode) {
  width: 100%;
  height: 100%;
}

.video-js .vjs-tech {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.video-js.vjs-audio-only-mode .vjs-tech {
  display: none;
}

body.vjs-full-window {
  padding: 0;
  margin: 0;
  height: 100%;
}

.vjs-full-window .video-js.vjs-fullscreen {
  position: fixed;
  overflow: hidden;
  z-index: 1000;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
}

.video-js.vjs-fullscreen:not(.vjs-ios-native-fs) {
  width: 100% !important;
  height: 100% !important;
  padding-top: 0 !important;
}

.video-js.vjs-fullscreen.vjs-user-inactive {
  cursor: none;
}

.vjs-hidden {
  display: none !important;
}

.vjs-disabled {
  opacity: 0.5;
  cursor: default;
}

.video-js .vjs-offscreen {
  height: 1px;
  left: -9999px;
  position: absolute;
  top: 0;
  width: 1px;
}

.vjs-lock-showing {
  display: block !important;
  opacity: 1 !important;
  visibility: visible !important;
}

.vjs-no-js {
  padding: 20px;
  color: #fff;
  background-color: #000;
  font-size: 18px;
  font-family: Arial, Helvetica, sans-serif;
  text-align: center;
  width: 300px;
  height: 150px;
  margin: 0px auto;
}

.vjs-no-js a,
.vjs-no-js a:visited {
  color: #66A8CC;
}

.video-js .vjs-big-play-button {
  font-size: 3em;
  line-height: 1.5em;
  height: 1.63332em;
  width: 3em;
  display: block;
  position: absolute;
  top: 10px;
  left: 10px;
  padding: 0;
  cursor: pointer;
  opacity: 1;
  border: 0.06666em solid #fff;
  background-color: #2B333F;
  background-color: rgba(43, 51, 63, 0.7);
  border-radius: 0.3em;
  transition: all 0.4s;
}
.vjs-big-play-centered .vjs-big-play-button {
  top: 50%;
  left: 50%;
  margin-top: -0.81666em;
  margin-left: -1.5em;
}

.video-js:hover .vjs-big-play-button,
.video-js .vjs-big-play-button:focus {
  border-color: #fff;
  background-color: #73859f;
  background-color: rgba(115, 133, 159, 0.5);
  transition: all 0s;
}

.vjs-controls-disabled .vjs-big-play-button,
.vjs-has-started .vjs-big-play-button,
.vjs-using-native-controls .vjs-big-play-button,
.vjs-error .vjs-big-play-button {
  display: none;
}

.vjs-has-started.vjs-paused.vjs-show-big-play-button-on-pause .vjs-big-play-button {
  display: block;
}

.video-js button {
  background: none;
  border: none;
  color: inherit;
  display: inline-block;
  font-size: inherit;
  line-height: inherit;
  text-transform: none;
  text-decoration: none;
  transition: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

.vjs-control .vjs-button {
  width: 100%;
  height: 100%;
}

.video-js .vjs-control.vjs-close-button {
  cursor: pointer;
  height: 3em;
  position: absolute;
  right: 0;
  top: 0.5em;
  z-index: 2;
}
.video-js .vjs-modal-dialog {
  background: rgba(0, 0, 0, 0.8);
  background: linear-gradient(180deg, rgba(0, 0, 0, 0.8), rgba(255, 255, 255, 0));
  overflow: auto;
}

.video-js .vjs-modal-dialog > * {
  box-sizing: border-box;
}

.vjs-modal-dialog .vjs-modal-dialog-content {
  font-size: 1.2em;
  line-height: 1.5;
  padding: 20px 24px;
  z-index: 1;
}

.vjs-menu-button {
  cursor: pointer;
}

.vjs-menu-button.vjs-disabled {
  cursor: default;
}

.vjs-workinghover .vjs-menu-button.vjs-disabled:hover .vjs-menu {
  display: none;
}

.vjs-menu .vjs-menu-content {
  display: block;
  padding: 0;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  overflow: auto;
}

.vjs-menu .vjs-menu-content > * {
  box-sizing: border-box;
}

.vjs-scrubbing .vjs-control.vjs-menu-button:hover .vjs-menu {
  display: none;
}

.vjs-menu li {
  list-style: none;
  margin: 0;
  padding: 0.2em 0;
  line-height: 1.4em;
  font-size: 1.2em;
  text-align: center;
  text-transform: lowercase;
}

.vjs-menu li.vjs-menu-item:focus,
.vjs-menu li.vjs-menu-item:hover,
.js-focus-visible .vjs-menu li.vjs-menu-item:hover {
  background-color: #73859f;
  background-color: rgba(115, 133, 159, 0.5);
}

.vjs-menu li.vjs-selected,
.vjs-menu li.vjs-selected:focus,
.vjs-menu li.vjs-selected:hover,
.js-focus-visible .vjs-menu li.vjs-selected:hover {
  background-color: #fff;
  color: #2B333F;
}

.video-js .vjs-menu *:not(.vjs-selected):focus:not(:focus-visible),
.js-focus-visible .vjs-menu *:not(.vjs-selected):focus:not(.focus-visible) {
  background: none;
}

.vjs-menu li.vjs-menu-title {
  text-align: center;
  text-transform: uppercase;
  font-size: 1em;
  line-height: 2em;
  padding: 0;
  margin: 0 0 0.3em 0;
  font-weight: bold;
  cursor: default;
}

.vjs-menu-button-popup .vjs-menu {
  display: none;
  position: absolute;
  bottom: 0;
  width: 10em;
  left: -3em;
  height: 0em;
  margin-bottom: 1.5em;
  border-top-color: rgba(43, 51, 63, 0.7);
}

.vjs-menu-button-popup .vjs-menu .vjs-menu-content {
  background-color: #2B333F;
  background-color: rgba(43, 51, 63, 0.7);
  position: absolute;
  width: 100%;
  bottom: 1.5em;
  max-height: 15em;
}

.vjs-layout-tiny .vjs-menu-button-popup .vjs-menu .vjs-menu-content,
.vjs-layout-x-small .vjs-menu-button-popup .vjs-menu .vjs-menu-content {
  max-height: 5em;
}

.vjs-layout-small .vjs-menu-button-popup .vjs-menu .vjs-menu-content {
  max-height: 10em;
}

.vjs-layout-medium .vjs-menu-button-popup .vjs-menu .vjs-menu-content {
  max-height: 14em;
}

.vjs-layout-large .vjs-menu-button-popup .vjs-menu .vjs-menu-content,
.vjs-layout-x-large .vjs-menu-button-popup .vjs-menu .vjs-menu-content,
.vjs-layout-huge .vjs-menu-button-popup .vjs-menu .vjs-menu-content {
  max-height: 25em;
}

.vjs-workinghover .vjs-menu-button-popup.vjs-hover .vjs-menu,
.vjs-menu-button-popup .vjs-menu.vjs-lock-showing {
  display: block;
}

.video-js .vjs-menu-button-inline {
  transition: all 0.4s;
  overflow: hidden;
}

.video-js .vjs-menu-button-inline:before {
  width: 2.222222222em;
}

.video-js .vjs-menu-button-inline:hover,
.video-js .vjs-menu-button-inline:focus,
.video-js .vjs-menu-button-inline.vjs-slider-active,
.video-js.vjs-no-flex .vjs-menu-button-inline {
  width: 12em;
}

.vjs-menu-button-inline .vjs-menu {
  opacity: 0;
  height: 100%;
  width: auto;
  position: absolute;
  left: 4em;
  top: 0;
  padding: 0;
  margin: 0;
  transition: all 0.4s;
}

.vjs-menu-button-inline:hover .vjs-menu,
.vjs-menu-button-inline:focus .vjs-menu,
.vjs-menu-button-inline.vjs-slider-active .vjs-menu {
  display: block;
  opacity: 1;
}

.vjs-no-flex .vjs-menu-button-inline .vjs-menu {
  display: block;
  opacity: 1;
  position: relative;
  width: auto;
}

.vjs-no-flex .vjs-menu-button-inline:hover .vjs-menu,
.vjs-no-flex .vjs-menu-button-inline:focus .vjs-menu,
.vjs-no-flex .vjs-menu-button-inline.vjs-slider-active .vjs-menu {
  width: auto;
}

.vjs-menu-button-inline .vjs-menu-content {
  width: auto;
  height: 100%;
  margin: 0;
  overflow: hidden;
}

.video-js .vjs-control-bar {
  display: none;
  width: 100%;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 3em;
  background-color: #2B333F;
  background-color: rgba(43, 51, 63, 0.7);
}

.vjs-has-started .vjs-control-bar,
.vjs-audio-only-mode .vjs-control-bar {
  display: flex;
  visibility: visible;
  opacity: 1;
  transition: visibility 0.1s, opacity 0.1s;
}

.vjs-has-started.vjs-user-inactive.vjs-playing .vjs-control-bar {
  visibility: visible;
  opacity: 0;
  pointer-events: none;
  transition: visibility 1s, opacity 1s;
}

.vjs-controls-disabled .vjs-control-bar,
.vjs-using-native-controls .vjs-control-bar,
.vjs-error .vjs-control-bar {
  display: none !important;
}

.vjs-audio.vjs-has-started.vjs-user-inactive.vjs-playing .vjs-control-bar,
.vjs-audio-only-mode.vjs-has-started.vjs-user-inactive.vjs-playing .vjs-control-bar {
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
}

.vjs-has-started.vjs-no-flex .vjs-control-bar {
  display: table;
}

.video-js .vjs-control {
  position: relative;
  text-align: center;
  margin: 0;
  padding: 0;
  height: 100%;
  width: 4em;
  flex: none;
}

.video-js .vjs-control.vjs-visible-text {
  width: auto;
  padding-left: 1em;
  padding-right: 1em;
}

.vjs-button > .vjs-icon-placeholder:before {
  font-size: 1.8em;
  line-height: 1.67;
}

.vjs-button > .vjs-icon-placeholder {
  display: block;
}

.video-js .vjs-control:focus:before,
.video-js .vjs-control:hover:before,
.video-js .vjs-control:focus {
  text-shadow: 0em 0em 1em white;
}

.video-js *:not(.vjs-visible-text) > .vjs-control-text {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}

.vjs-no-flex .vjs-control {
  display: table-cell;
  vertical-align: middle;
}

.video-js .vjs-custom-control-spacer {
  display: none;
}

.video-js .vjs-progress-control {
  cursor: pointer;
  flex: auto;
  display: flex;
  align-items: center;
  min-width: 4em;
  touch-action: none;
}

.video-js .vjs-progress-control.disabled {
  cursor: default;
}

.vjs-live .vjs-progress-control {
  display: none;
}

.vjs-liveui .vjs-progress-control {
  display: flex;
  align-items: center;
}

.vjs-no-flex .vjs-progress-control {
  width: auto;
}

.video-js .vjs-progress-holder {
  flex: auto;
  transition: all 0.2s;
  height: 0.3em;
}

.video-js .vjs-progress-control .vjs-progress-holder {
  margin: 0 10px;
}

.video-js .vjs-progress-control:hover .vjs-progress-holder {
  font-size: 1.6666666667em;
}

.video-js .vjs-progress-control:hover .vjs-progress-holder.disabled {
  font-size: 1em;
}

.video-js .vjs-progress-holder .vjs-play-progress,
.video-js .vjs-progress-holder .vjs-load-progress,
.video-js .vjs-progress-holder .vjs-load-progress div {
  position: absolute;
  display: block;
  height: 100%;
  margin: 0;
  padding: 0;
  width: 0;
}

.video-js .vjs-play-progress {
  background-color: #fff;
}
.video-js .vjs-play-progress:before {
  font-size: 0.9em;
  position: absolute;
  right: -0.5em;
  top: -0.3333333333em;
  z-index: 1;
}

.video-js .vjs-load-progress {
  background: rgba(115, 133, 159, 0.5);
}

.video-js .vjs-load-progress div {
  background: rgba(115, 133, 159, 0.75);
}

.video-js .vjs-time-tooltip {
  background-color: #fff;
  background-color: rgba(255, 255, 255, 0.8);
  border-radius: 0.3em;
  color: #000;
  float: right;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 1em;
  padding: 6px 8px 8px 8px;
  pointer-events: none;
  position: absolute;
  top: -3.4em;
  visibility: hidden;
  z-index: 1;
}

.video-js .vjs-progress-holder:focus .vjs-time-tooltip {
  display: none;
}

.video-js .vjs-progress-control:hover .vjs-time-tooltip,
.video-js .vjs-progress-control:hover .vjs-progress-holder:focus .vjs-time-tooltip {
  display: block;
  font-size: 0.6em;
  visibility: visible;
}

.video-js .vjs-progress-control.disabled:hover .vjs-time-tooltip {
  font-size: 1em;
}

.video-js .vjs-progress-control .vjs-mouse-display {
  display: none;
  position: absolute;
  width: 1px;
  height: 100%;
  background-color: #000;
  z-index: 1;
}

.vjs-no-flex .vjs-progress-control .vjs-mouse-display {
  z-index: 0;
}

.video-js .vjs-progress-control:hover .vjs-mouse-display {
  display: block;
}

.video-js.vjs-user-inactive .vjs-progress-control .vjs-mouse-display {
  visibility: hidden;
  opacity: 0;
  transition: visibility 1s, opacity 1s;
}

.video-js.vjs-user-inactive.vjs-no-flex .vjs-progress-control .vjs-mouse-display {
  display: none;
}

.vjs-mouse-display .vjs-time-tooltip {
  color: #fff;
  background-color: #000;
  background-color: rgba(0, 0, 0, 0.8);
}

.video-js .vjs-slider {
  position: relative;
  cursor: pointer;
  padding: 0;
  margin: 0 0.45em 0 0.45em;
  /* iOS Safari */
  -webkit-touch-callout: none;
  /* Safari */
  -webkit-user-select: none;
  /* Konqueror HTML */
  /* Firefox */
  -moz-user-select: none;
  /* Internet Explorer/Edge */
  -ms-user-select: none;
  /* Non-prefixed version, currently supported by Chrome and Opera */
  user-select: none;
  background-color: #73859f;
  background-color: rgba(115, 133, 159, 0.5);
}

.video-js .vjs-slider.disabled {
  cursor: default;
}

.video-js .vjs-slider:focus {
  text-shadow: 0em 0em 1em white;
  box-shadow: 0 0 1em #fff;
}

.video-js .vjs-mute-control {
  cursor: pointer;
  flex: none;
}
.video-js .vjs-volume-control {
  cursor: pointer;
  margin-right: 1em;
  display: flex;
}

.video-js .vjs-volume-control.vjs-volume-horizontal {
  width: 5em;
}

.video-js .vjs-volume-panel .vjs-volume-control {
  visibility: visible;
  opacity: 0;
  width: 1px;
  height: 1px;
  margin-left: -1px;
}

.video-js .vjs-volume-panel {
  transition: width 1s;
}
.video-js .vjs-volume-panel.vjs-hover .vjs-volume-control, .video-js .vjs-volume-panel:active .vjs-volume-control, .video-js .vjs-volume-panel:focus .vjs-volume-control, .video-js .vjs-volume-panel .vjs-volume-control:active, .video-js .vjs-volume-panel.vjs-hover .vjs-mute-control ~ .vjs-volume-control, .video-js .vjs-volume-panel .vjs-volume-control.vjs-slider-active {
  visibility: visible;
  opacity: 1;
  position: relative;
  transition: visibility 0.1s, opacity 0.1s, height 0.1s, width 0.1s, left 0s, top 0s;
}
.video-js .vjs-volume-panel.vjs-hover .vjs-volume-control.vjs-volume-horizontal, .video-js .vjs-volume-panel:active .vjs-volume-control.vjs-volume-horizontal, .video-js .vjs-volume-panel:focus .vjs-volume-control.vjs-volume-horizontal, .video-js .vjs-volume-panel .vjs-volume-control:active.vjs-volume-horizontal, .video-js .vjs-volume-panel.vjs-hover .vjs-mute-control ~ .vjs-volume-control.vjs-volume-horizontal, .video-js .vjs-volume-panel .vjs-volume-control.vjs-slider-active.vjs-volume-horizontal {
  width: 5em;
  height: 3em;
  margin-right: 0;
}
.video-js .vjs-volume-panel.vjs-hover .vjs-volume-control.vjs-volume-vertical, .video-js .vjs-volume-panel:active .vjs-volume-control.vjs-volume-vertical, .video-js .vjs-volume-panel:focus .vjs-volume-control.vjs-volume-vertical, .video-js .vjs-volume-panel .vjs-volume-control:active.vjs-volume-vertical, .video-js .vjs-volume-panel.vjs-hover .vjs-mute-control ~ .vjs-volume-control.vjs-volume-vertical, .video-js .vjs-volume-panel .vjs-volume-control.vjs-slider-active.vjs-volume-vertical {
  left: -3.5em;
  transition: left 0s;
}
.video-js .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-hover, .video-js .vjs-volume-panel.vjs-volume-panel-horizontal:active, .video-js .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-slider-active {
  width: 10em;
  transition: width 0.1s;
}
.video-js .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-mute-toggle-only {
  width: 4em;
}

.video-js .vjs-volume-panel .vjs-volume-control.vjs-volume-vertical {
  height: 8em;
  width: 3em;
  left: -3000em;
  transition: visibility 1s, opacity 1s, height 1s 1s, width 1s 1s, left 1s 1s, top 1s 1s;
}

.video-js .vjs-volume-panel .vjs-volume-control.vjs-volume-horizontal {
  transition: visibility 1s, opacity 1s, height 1s 1s, width 1s, left 1s 1s, top 1s 1s;
}

.video-js.vjs-no-flex .vjs-volume-panel .vjs-volume-control.vjs-volume-horizontal {
  width: 5em;
  height: 3em;
  visibility: visible;
  opacity: 1;
  position: relative;
  transition: none;
}

.video-js.vjs-no-flex .vjs-volume-control.vjs-volume-vertical,
.video-js.vjs-no-flex .vjs-volume-panel .vjs-volume-control.vjs-volume-vertical {
  position: absolute;
  bottom: 3em;
  left: 0.5em;
}

.video-js .vjs-volume-panel {
  display: flex;
}

.video-js .vjs-volume-bar {
  margin: 1.35em 0.45em;
}

.vjs-volume-bar.vjs-slider-horizontal {
  width: 5em;
  height: 0.3em;
}

.vjs-volume-bar.vjs-slider-vertical {
  width: 0.3em;
  height: 5em;
  margin: 1.35em auto;
}

.video-js .vjs-volume-level {
  position: absolute;
  bottom: 0;
  left: 0;
  background-color: #fff;
}
.video-js .vjs-volume-level:before {
  position: absolute;
  font-size: 0.9em;
  z-index: 1;
}

.vjs-slider-vertical .vjs-volume-level {
  width: 0.3em;
}
.vjs-slider-vertical .vjs-volume-level:before {
  top: -0.5em;
  left: -0.3em;
  z-index: 1;
}

.vjs-slider-horizontal .vjs-volume-level {
  height: 0.3em;
}
.vjs-slider-horizontal .vjs-volume-level:before {
  top: -0.3em;
  right: -0.5em;
}

.video-js .vjs-volume-panel.vjs-volume-panel-vertical {
  width: 4em;
}

.vjs-volume-bar.vjs-slider-vertical .vjs-volume-level {
  height: 100%;
}

.vjs-volume-bar.vjs-slider-horizontal .vjs-volume-level {
  width: 100%;
}

.video-js .vjs-volume-vertical {
  width: 3em;
  height: 8em;
  bottom: 8em;
  background-color: #2B333F;
  background-color: rgba(43, 51, 63, 0.7);
}

.video-js .vjs-volume-horizontal .vjs-menu {
  left: -2em;
}

.video-js .vjs-volume-tooltip {
  background-color: #fff;
  background-color: rgba(255, 255, 255, 0.8);
  border-radius: 0.3em;
  color: #000;
  float: right;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 1em;
  padding: 6px 8px 8px 8px;
  pointer-events: none;
  position: absolute;
  top: -3.4em;
  visibility: hidden;
  z-index: 1;
}

.video-js .vjs-volume-control:hover .vjs-volume-tooltip,
.video-js .vjs-volume-control:hover .vjs-progress-holder:focus .vjs-volume-tooltip {
  display: block;
  font-size: 1em;
  visibility: visible;
}

.video-js .vjs-volume-vertical:hover .vjs-volume-tooltip,
.video-js .vjs-volume-vertical:hover .vjs-progress-holder:focus .vjs-volume-tooltip {
  left: 1em;
  top: -12px;
}

.video-js .vjs-volume-control.disabled:hover .vjs-volume-tooltip {
  font-size: 1em;
}

.video-js .vjs-volume-control .vjs-mouse-display {
  display: none;
  position: absolute;
  width: 100%;
  height: 1px;
  background-color: #000;
  z-index: 1;
}

.video-js .vjs-volume-horizontal .vjs-mouse-display {
  width: 1px;
  height: 100%;
}

.vjs-no-flex .vjs-volume-control .vjs-mouse-display {
  z-index: 0;
}

.video-js .vjs-volume-control:hover .vjs-mouse-display {
  display: block;
}

.video-js.vjs-user-inactive .vjs-volume-control .vjs-mouse-display {
  visibility: hidden;
  opacity: 0;
  transition: visibility 1s, opacity 1s;
}

.video-js.vjs-user-inactive.vjs-no-flex .vjs-volume-control .vjs-mouse-display {
  display: none;
}

.vjs-mouse-display .vjs-volume-tooltip {
  color: #fff;
  background-color: #000;
  background-color: rgba(0, 0, 0, 0.8);
}

.vjs-poster {
  display: inline-block;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: 50% 50%;
  background-size: contain;
  background-color: #000000;
  cursor: pointer;
  margin: 0;
  padding: 0;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  height: 100%;
}

.vjs-has-started .vjs-poster,
.vjs-using-native-controls .vjs-poster {
  display: none;
}

.vjs-audio.vjs-has-started .vjs-poster,
.vjs-has-started.vjs-audio-poster-mode .vjs-poster {
  display: block;
}

.video-js .vjs-live-control {
  display: flex;
  align-items: flex-start;
  flex: auto;
  font-size: 1em;
  line-height: 3em;
}

.vjs-no-flex .vjs-live-control {
  display: table-cell;
  width: auto;
  text-align: left;
}

.video-js:not(.vjs-live) .vjs-live-control,
.video-js.vjs-liveui .vjs-live-control {
  display: none;
}

.video-js .vjs-seek-to-live-control {
  align-items: center;
  cursor: pointer;
  flex: none;
  display: inline-flex;
  height: 100%;
  padding-left: 0.5em;
  padding-right: 0.5em;
  font-size: 1em;
  line-height: 3em;
  width: auto;
  min-width: 4em;
}

.vjs-no-flex .vjs-seek-to-live-control {
  display: table-cell;
  width: auto;
  text-align: left;
}

.video-js.vjs-live:not(.vjs-liveui) .vjs-seek-to-live-control,
.video-js:not(.vjs-live) .vjs-seek-to-live-control {
  display: none;
}

.vjs-seek-to-live-control.vjs-control.vjs-at-live-edge {
  cursor: auto;
}

.vjs-seek-to-live-control .vjs-icon-placeholder {
  margin-right: 0.5em;
  color: #888;
}

.vjs-seek-to-live-control.vjs-control.vjs-at-live-edge .vjs-icon-placeholder {
  color: red;
}

.video-js .vjs-time-control {
  flex: none;
  font-size: 1em;
  line-height: 3em;
  min-width: 2em;
  width: auto;
  padding-left: 1em;
  padding-right: 1em;
}

.vjs-live .vjs-time-control {
  display: none;
}

.video-js .vjs-current-time,
.vjs-no-flex .vjs-current-time {
  display: none;
}

.video-js .vjs-duration,
.vjs-no-flex .vjs-duration {
  display: none;
}

.vjs-time-divider {
  display: none;
  line-height: 3em;
}

.vjs-live .vjs-time-divider {
  display: none;
}

.video-js .vjs-play-control {
  cursor: pointer;
}

.video-js .vjs-play-control .vjs-icon-placeholder {
  flex: none;
}

.vjs-text-track-display {
  position: absolute;
  bottom: 3em;
  left: 0;
  right: 0;
  top: 0;
  pointer-events: none;
}

.video-js.vjs-controls-disabled .vjs-text-track-display,
.video-js.vjs-user-inactive.vjs-playing .vjs-text-track-display {
  bottom: 1em;
}

.video-js .vjs-text-track {
  font-size: 1.4em;
  text-align: center;
  margin-bottom: 0.1em;
}

.vjs-subtitles {
  color: #fff;
}

.vjs-captions {
  color: #fc6;
}

.vjs-tt-cue {
  display: block;
}

video::-webkit-media-text-track-display {
  transform: translateY(-3em);
}

.video-js.vjs-controls-disabled video::-webkit-media-text-track-display,
.video-js.vjs-user-inactive.vjs-playing video::-webkit-media-text-track-display {
  transform: translateY(-1.5em);
}

.video-js .vjs-picture-in-picture-control {
  cursor: pointer;
  flex: none;
}
.video-js.vjs-audio-only-mode .vjs-picture-in-picture-control {
  display: none;
}

.video-js .vjs-fullscreen-control {
  cursor: pointer;
  flex: none;
}
.video-js.vjs-audio-only-mode .vjs-fullscreen-control {
  display: none;
}

.vjs-playback-rate > .vjs-menu-button,
.vjs-playback-rate .vjs-playback-rate-value {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.vjs-playback-rate .vjs-playback-rate-value {
  pointer-events: none;
  font-size: 1.5em;
  line-height: 2;
  text-align: center;
}

.vjs-playback-rate .vjs-menu {
  width: 4em;
  left: 0em;
}

.vjs-error .vjs-error-display .vjs-modal-dialog-content {
  font-size: 1.4em;
  text-align: center;
}

.vjs-error .vjs-error-display:before {
  color: #fff;
  content: "X";
  font-family: Arial, Helvetica, sans-serif;
  font-size: 4em;
  left: 0;
  line-height: 1;
  margin-top: -0.5em;
  position: absolute;
  text-shadow: 0.05em 0.05em 0.1em #000;
  text-align: center;
  top: 50%;
  vertical-align: middle;
  width: 100%;
}

.vjs-loading-spinner {
  display: none;
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -25px 0 0 -25px;
  opacity: 0.85;
  text-align: left;
  border: 6px solid rgba(43, 51, 63, 0.7);
  box-sizing: border-box;
  background-clip: padding-box;
  width: 50px;
  height: 50px;
  border-radius: 25px;
  visibility: hidden;
}

.vjs-seeking .vjs-loading-spinner,
.vjs-waiting .vjs-loading-spinner {
  display: block;
  -webkit-animation: vjs-spinner-show 0s linear 0.3s forwards;
          animation: vjs-spinner-show 0s linear 0.3s forwards;
}

.vjs-loading-spinner:before,
.vjs-loading-spinner:after {
  content: "";
  position: absolute;
  margin: -6px;
  box-sizing: inherit;
  width: inherit;
  height: inherit;
  border-radius: inherit;
  opacity: 1;
  border: inherit;
  border-color: transparent;
  border-top-color: white;
}

.vjs-seeking .vjs-loading-spinner:before,
.vjs-seeking .vjs-loading-spinner:after,
.vjs-waiting .vjs-loading-spinner:before,
.vjs-waiting .vjs-loading-spinner:after {
  -webkit-animation: vjs-spinner-spin 1.1s cubic-bezier(0.6, 0.2, 0, 0.8) infinite, vjs-spinner-fade 1.1s linear infinite;
  animation: vjs-spinner-spin 1.1s cubic-bezier(0.6, 0.2, 0, 0.8) infinite, vjs-spinner-fade 1.1s linear infinite;
}

.vjs-seeking .vjs-loading-spinner:before,
.vjs-waiting .vjs-loading-spinner:before {
  border-top-color: white;
}

.vjs-seeking .vjs-loading-spinner:after,
.vjs-waiting .vjs-loading-spinner:after {
  border-top-color: white;
  -webkit-animation-delay: 0.44s;
  animation-delay: 0.44s;
}

@keyframes vjs-spinner-show {
  to {
    visibility: visible;
  }
}
@-webkit-keyframes vjs-spinner-show {
  to {
    visibility: visible;
  }
}
@keyframes vjs-spinner-spin {
  100% {
    transform: rotate(360deg);
  }
}
@-webkit-keyframes vjs-spinner-spin {
  100% {
    -webkit-transform: rotate(360deg);
  }
}
@keyframes vjs-spinner-fade {
  0% {
    border-top-color: #73859f;
  }
  20% {
    border-top-color: #73859f;
  }
  35% {
    border-top-color: white;
  }
  60% {
    border-top-color: #73859f;
  }
  100% {
    border-top-color: #73859f;
  }
}
@-webkit-keyframes vjs-spinner-fade {
  0% {
    border-top-color: #73859f;
  }
  20% {
    border-top-color: #73859f;
  }
  35% {
    border-top-color: white;
  }
  60% {
    border-top-color: #73859f;
  }
  100% {
    border-top-color: #73859f;
  }
}
.video-js.vjs-audio-only-mode .vjs-captions-button {
  display: none;
}

.vjs-chapters-button .vjs-menu ul {
  width: 24em;
}

.video-js.vjs-audio-only-mode .vjs-descriptions-button {
  display: none;
}

.video-js .vjs-subs-caps-button + .vjs-menu .vjs-captions-menu-item .vjs-menu-item-text .vjs-icon-placeholder {
  vertical-align: middle;
  display: inline-block;
  margin-bottom: -0.1em;
}

.video-js .vjs-subs-caps-button + .vjs-menu .vjs-captions-menu-item .vjs-menu-item-text .vjs-icon-placeholder:before {
  font-family: VideoJS;
  content: "";
  font-size: 1.5em;
  line-height: inherit;
}

.video-js.vjs-audio-only-mode .vjs-subs-caps-button {
  display: none;
}

.video-js .vjs-audio-button + .vjs-menu .vjs-main-desc-menu-item .vjs-menu-item-text .vjs-icon-placeholder {
  vertical-align: middle;
  display: inline-block;
  margin-bottom: -0.1em;
}

.video-js .vjs-audio-button + .vjs-menu .vjs-main-desc-menu-item .vjs-menu-item-text .vjs-icon-placeholder:before {
  font-family: VideoJS;
  content: " ";
  font-size: 1.5em;
  line-height: inherit;
}

.video-js.vjs-layout-small .vjs-current-time,
.video-js.vjs-layout-small .vjs-time-divider,
.video-js.vjs-layout-small .vjs-duration,
.video-js.vjs-layout-small .vjs-remaining-time,
.video-js.vjs-layout-small .vjs-playback-rate,
.video-js.vjs-layout-small .vjs-volume-control, .video-js.vjs-layout-x-small .vjs-current-time,
.video-js.vjs-layout-x-small .vjs-time-divider,
.video-js.vjs-layout-x-small .vjs-duration,
.video-js.vjs-layout-x-small .vjs-remaining-time,
.video-js.vjs-layout-x-small .vjs-playback-rate,
.video-js.vjs-layout-x-small .vjs-volume-control, .video-js.vjs-layout-tiny .vjs-current-time,
.video-js.vjs-layout-tiny .vjs-time-divider,
.video-js.vjs-layout-tiny .vjs-duration,
.video-js.vjs-layout-tiny .vjs-remaining-time,
.video-js.vjs-layout-tiny .vjs-playback-rate,
.video-js.vjs-layout-tiny .vjs-volume-control {
  display: none;
}
.video-js.vjs-layout-small .vjs-volume-panel.vjs-volume-panel-horizontal:hover, .video-js.vjs-layout-small .vjs-volume-panel.vjs-volume-panel-horizontal:active, .video-js.vjs-layout-small .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-slider-active, .video-js.vjs-layout-small .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-hover, .video-js.vjs-layout-x-small .vjs-volume-panel.vjs-volume-panel-horizontal:hover, .video-js.vjs-layout-x-small .vjs-volume-panel.vjs-volume-panel-horizontal:active, .video-js.vjs-layout-x-small .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-slider-active, .video-js.vjs-layout-x-small .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-hover, .video-js.vjs-layout-tiny .vjs-volume-panel.vjs-volume-panel-horizontal:hover, .video-js.vjs-layout-tiny .vjs-volume-panel.vjs-volume-panel-horizontal:active, .video-js.vjs-layout-tiny .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-slider-active, .video-js.vjs-layout-tiny .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-hover {
  width: auto;
  width: initial;
}
.video-js.vjs-layout-x-small .vjs-progress-control, .video-js.vjs-layout-tiny .vjs-progress-control {
  display: none;
}
.video-js.vjs-layout-x-small .vjs-custom-control-spacer {
  flex: auto;
  display: block;
}
.video-js.vjs-layout-x-small.vjs-no-flex .vjs-custom-control-spacer {
  width: auto;
}

.vjs-modal-dialog.vjs-text-track-settings {
  background-color: #2B333F;
  background-color: rgba(43, 51, 63, 0.75);
  color: #fff;
  height: 70%;
}

.vjs-text-track-settings .vjs-modal-dialog-content {
  display: table;
}

.vjs-text-track-settings .vjs-track-settings-colors,
.vjs-text-track-settings .vjs-track-settings-font,
.vjs-text-track-settings .vjs-track-settings-controls {
  display: table-cell;
}

.vjs-text-track-settings .vjs-track-settings-controls {
  text-align: right;
  vertical-align: bottom;
}

@supports (display: grid) {
  .vjs-text-track-settings .vjs-modal-dialog-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 1fr;
    padding: 20px 24px 0px 24px;
  }

  .vjs-track-settings-controls .vjs-default-button {
    margin-bottom: 20px;
  }

  .vjs-text-track-settings .vjs-track-settings-controls {
    grid-column: 1/-1;
  }

  .vjs-layout-small .vjs-text-track-settings .vjs-modal-dialog-content,
.vjs-layout-x-small .vjs-text-track-settings .vjs-modal-dialog-content,
.vjs-layout-tiny .vjs-text-track-settings .vjs-modal-dialog-content {
    grid-template-columns: 1fr;
  }
}
.vjs-track-setting > select {
  margin-right: 1em;
  margin-bottom: 0.5em;
}

.vjs-text-track-settings fieldset {
  margin: 5px;
  padding: 3px;
  border: none;
}

.vjs-text-track-settings fieldset span {
  display: inline-block;
}

.vjs-text-track-settings fieldset span > select {
  max-width: 7.3em;
}

.vjs-text-track-settings legend {
  color: #fff;
  margin: 0 0 5px 0;
}

.vjs-text-track-settings .vjs-label {
  position: absolute;
  clip: rect(1px 1px 1px 1px);
  clip: rect(1px, 1px, 1px, 1px);
  display: block;
  margin: 0 0 5px 0;
  padding: 0;
  border: 0;
  height: 1px;
  width: 1px;
  overflow: hidden;
}

.vjs-track-settings-controls button:focus,
.vjs-track-settings-controls button:active {
  outline-style: solid;
  outline-width: medium;
  background-image: linear-gradient(0deg, #fff 88%, #73859f 100%);
}

.vjs-track-settings-controls button:hover {
  color: rgba(43, 51, 63, 0.75);
}

.vjs-track-settings-controls button {
  background-color: #fff;
  background-image: linear-gradient(-180deg, #fff 88%, #73859f 100%);
  color: #2B333F;
  cursor: pointer;
  border-radius: 2px;
}

.vjs-track-settings-controls .vjs-default-button {
  margin-right: 1em;
}

@media print {
  .video-js > *:not(.vjs-tech):not(.vjs-poster) {
    visibility: hidden;
  }
}
.vjs-resize-manager {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: none;
  z-index: -1000;
}

.js-focus-visible .video-js *:focus:not(.focus-visible) {
  outline: none;
}

.video-js *:focus:not(:focus-visible) {
  outline: none;
}
</style>
<style>.cleanslate,.cleanslate a,.cleanslate abbr,.cleanslate acronym,.cleanslate address,.cleanslate applet,.cleanslate area,.cleanslate article,.cleanslate aside,.cleanslate audio,.cleanslate b,.cleanslate big,.cleanslate blockquote,.cleanslate button,.cleanslate canvas,.cleanslate caption,.cleanslate cite,.cleanslate code,.cleanslate col,.cleanslate colgroup,.cleanslate datalist,.cleanslate dd,.cleanslate del,.cleanslate dfn,.cleanslate div,.cleanslate dl,.cleanslate dt,.cleanslate em,.cleanslate fieldset,.cleanslate figcaption,.cleanslate figure,.cleanslate footer,.cleanslate form,.cleanslate h1,.cleanslate h2,.cleanslate h3,.cleanslate h4,.cleanslate h5,.cleanslate h6,.cleanslate header,.cleanslate hr,.cleanslate i,.cleanslate iframe,.cleanslate img,.cleanslate input,.cleanslate ins,.cleanslate kbd,.cleanslate label,.cleanslate legend,.cleanslate li,.cleanslate main,.cleanslate map,.cleanslate mark,.cleanslate menu,.cleanslate meta,.cleanslate nav,.cleanslate object,.cleanslate ol,.cleanslate optgroup,.cleanslate option,.cleanslate output,.cleanslate p,.cleanslate pre,.cleanslate progress,.cleanslate q,.cleanslate samp,.cleanslate section,.cleanslate select,.cleanslate small,.cleanslate span,.cleanslate strike,.cleanslate strong,.cleanslate sub,.cleanslate summary,.cleanslate sup,.cleanslate svg,.cleanslate table,.cleanslate tbody,.cleanslate td,.cleanslate textarea,.cleanslate tfoot,.cleanslate th,.cleanslate thead,.cleanslate time,.cleanslate tr,.cleanslate tt,.cleanslate ul,.cleanslate var,.cleanslate video{backgroundImage:none;clip:auto;font-feature-settings:normal;-webkit-backface-visibility:visible;-moz-backface-visibility:visible;-ms-backface-visibility:visible;-o-backface-visibility:visible;backface-visibility:visible;background-attachment:scroll;-webkit-background-clip:border-box;background-clip:initial;background-color:#0000;-webkit-background-origin:padding-box;background-origin:initial;background-position:0 0;background-repeat:repeat;-webkit-background-size:auto;-moz-background-size:auto;background-size:auto;border:none;-webkit-border-image:none;-moz-border-image:none;-o-border-image:none;border-image:none;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;bottom:auto;-webkit-box-shadow:none;box-shadow:none;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:initial;clear:none;color:inherit;-webkit-column-count:auto;-moz-column-count:auto;-webkit-column-gap:normal;-moz-column-gap:normal;column-gap:normal;-webkit-column-rule:medium none #000;-moz-column-rule:medium none #000;column-rule:medium none #000;-webkit-column-span:1;-moz-column-span:1;column-span:1;-webkit-column-width:auto;-moz-column-width:auto;columns:auto;counter-increment:none;counter-reset:none;direction:inherit;display:inline;float:none;font-family:inherit;font-size:inherit;font-style:inherit;font-variant:normal;font-weight:inherit;height:auto;-webkit-hyphens:manual;-moz-hyphens:manual;hyphens:manual;left:auto;letter-spacing:normal;line-height:inherit;list-style-image:none;list-style-position:outside;list-style-type:inherit;margin:0;max-height:none;max-width:none;min-height:0;min-width:0;opacity:1;outline:medium none invert;overflow:visible;overflow-x:visible;overflow-y:visible;padding:0;-webkit-perspective:none;-moz-perspective:none;-ms-perspective:none;-o-perspective:none;perspective:none;-webkit-perspective-origin:50% 50%;-moz-perspective-origin:50% 50%;-ms-perspective-origin:50% 50%;-o-perspective-origin:50% 50%;perspective-origin:50% 50%;position:static;quotes:" "";right:auto;table-layout:auto;text-align:inherit;text-decoration:inherit;text-indent:0;text-shadow:none;text-transform:none;top:auto;-webkit-transform:none;-moz-transform:none;-ms-transform:none;-o-transform:none;transform:none;-webkit-transform-origin:50% 50%;-moz-transform-origin:50% 50%;-ms-transform-origin:50% 50%;-o-transform-origin:50% 50%;transform-origin:50% 50%;-webkit-transform-style:flat;-moz-transform-style:flat;-ms-transform-style:flat;-o-transform-style:flat;transform-style:flat;-webkit-transition:all 0s ease 0s;transition:all 0s ease 0s;unicode-bidi:normal;vertical-align:initial;visibility:inherit;white-space:normal;width:auto;word-break:normal;word-spacing:normal;z-index:auto}.cleanslate,.cleanslate address,.cleanslate article,.cleanslate audio,.cleanslate blockquote,.cleanslate caption,.cleanslate colgroup,.cleanslate dd,.cleanslate dialog,.cleanslate div,.cleanslate dl,.cleanslate dt,.cleanslate fieldset,.cleanslate figure,.cleanslate footer,.cleanslate form,.cleanslate h1,.cleanslate h2,.cleanslate h3,.cleanslate h4,.cleanslate h5,.cleanslate h6,.cleanslate header,.cleanslate hgroup,.cleanslate hr,.cleanslate main,.cleanslate menu,.cleanslate nav,.cleanslate ol,.cleanslate option,.cleanslate p,.cleanslate pre,.cleanslate progress,.cleanslate section,.cleanslate summary,.cleanslate ul,.cleanslate video{display:block}.cleanslate h1,.cleanslate h2,.cleanslate h3,.cleanslate h4,.cleanslate h5,.cleanslate h6{font-weight:700}.cleanslate h1{font-size:2em;padding:.67em 0}.cleanslate h2{font-size:1.5em;padding:.83em 0}.cleanslate h3{font-size:1.17em;padding:.83em 0}.cleanslate h4{font-size:1em}.cleanslate h5{font-size:.83em}.cleanslate p{margin:1em 0}.cleanslate table{display:table}.cleanslate thead{display:table-header-group}.cleanslate tbody{display:table-row-group}.cleanslate tfoot{display:table-footer-group}.cleanslate tr{display:table-row}.cleanslate td,.cleanslate th{display:table-cell;padding:2px}.cleanslate ol,.cleanslate ul{margin:1em 0}.cleanslate ol li,.cleanslate ol ol li,.cleanslate ol ol ol li,.cleanslate ol ol ul li,.cleanslate ol ul ul li,.cleanslate ul li,.cleanslate ul ol ol li,.cleanslate ul ul li,.cleanslate ul ul ol li,.cleanslate ul ul ul li{list-style-position:inside;margin-top:.08em}.cleanslate ol ol,.cleanslate ol ol ol,.cleanslate ol ol ul,.cleanslate ol ul,.cleanslate ol ul ul,.cleanslate ul ol,.cleanslate ul ol ol,.cleanslate ul ul,.cleanslate ul ul ol,.cleanslate ul ul ul{margin:0;padding-left:40px}.cleanslate nav ol,.cleanslate nav ul{list-style-type:none}.cleanslate menu,.cleanslate ul{list-style-type:disc}.cleanslate ol{list-style-type:decimal}.cleanslate menu menu,.cleanslate menu ul,.cleanslate ol menu,.cleanslate ol ul,.cleanslate ul menu,.cleanslate ul ul{list-style-type:circle}.cleanslate menu menu menu,.cleanslate menu menu ul,.cleanslate menu ol menu,.cleanslate menu ol ul,.cleanslate menu ul menu,.cleanslate menu ul ul,.cleanslate ol menu menu,.cleanslate ol menu ul,.cleanslate ol ol menu,.cleanslate ol ol ul,.cleanslate ol ul menu,.cleanslate ol ul ul,.cleanslate ul menu menu,.cleanslate ul menu ul,.cleanslate ul ol menu,.cleanslate ul ol ul,.cleanslate ul ul menu,.cleanslate ul ul ul{list-style-type:square}.cleanslate li{display:list-item;min-height:auto;min-width:auto;padding-left:20px}.cleanslate strong{font-weight:700}.cleanslate em{font-style:italic}.cleanslate code,.cleanslate kbd,.cleanslate pre,.cleanslate samp{font-family:monospace}.cleanslate a{color:blue;text-decoration:underline}.cleanslate a:visited{color:#529}.cleanslate a,.cleanslate a *,.cleanslate button,.cleanslate input[type=button],.cleanslate input[type=checkbox],.cleanslate input[type=radio],.cleanslate input[type=submit],.cleanslate select{cursor:pointer}.cleanslate button,.cleanslate input[type=submit]{-webkit-appearance:push-button;background:#d3d3d3;background:#fff;background:-moz-linear-gradient(top,#fff 0,#ddd 100%,#d1d1d1 100%,#ddd 100%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0,#fff),color-stop(100%,#ddd),color-stop(100%,#d1d1d1),color-stop(100%,#ddd));background:-webkit-linear-gradient(top,#fff,#ddd 100%,#d1d1d1 0,#ddd 0);background:-o-linear-gradient(top,#fff 0,#ddd 100%,#d1d1d1 100%,#ddd 100%);background:-ms-linear-gradient(top,#fff 0,#ddd 100%,#d1d1d1 100%,#ddd 100%);background:linear-gradient(180deg,#fff 0,#ddd 100%,#d1d1d1 0,#ddd 0);border:1px solid #a6a6a6;border-radius:4px;-webkit-box-shadow:1px 1px 0 #eee;-moz-box-shadow:1px 1px 0 #eee;-o-box-shadow:1px 1px 0 #eee;box-shadow:1px 1px 0 #eee;color:buttontext;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ffffff",endColorstr="#dddddd",GradientType=0);font-family:arial,helvetica,sans-serif;font-size:small;padding:2px 6px 3px;text-align:center;text-decoration:none}.cleanslate button:active,.cleanslate input[type=button]:active,.cleanslate input[type=submit]:active{background:#3b679e;background:-moz-linear-gradient(top,#3b679e 0,#2b88d9 50%,#207cca 51%,#7db9e8 100%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0,#3b679e),color-stop(50%,#2b88d9),color-stop(51%,#207cca),color-stop(100%,#7db9e8));background:-webkit-linear-gradient(top,#3b679e,#2b88d9 50%,#207cca 51%,#7db9e8);background:-o-linear-gradient(top,#3b679e 0,#2b88d9 50%,#207cca 51%,#7db9e8 100%);background:-ms-linear-gradient(top,#3b679e 0,#2b88d9 50%,#207cca 51%,#7db9e8 100%);background:linear-gradient(180deg,#3b679e 0,#2b88d9 50%,#207cca 51%,#7db9e8);border-color:#5259b0}.cleanslate button{margin-right:5px;padding:1px 6px 2px}.cleanslate input[type=hidden]{display:none}.cleanslate textarea{word-wrap:break-word;-webkit-appearance:textarea;background:#fff;font-family:arial,helvetica,sans-serif;font-size:11px;line-height:13px;margin-left:4px;padding:2px;resize:both;white-space:pre-wrap}.cleanslate input,.cleanslate select,.cleanslate textarea{border:1px solid #ccc}.cleanslate select{display:inline-block;font-family:helvetica,arial,sans-serif;font-size:11px}.cleanslate input:focus,.cleanslate textarea:focus{outline:5px auto -webkit-focus-ring-color;outline:initial}.cleanslate input[type=text]{background:#fff;font-family:initial;font-size:small;padding:1px}.cleanslate input[type=checkbox],.cleanslate input[type=radio]{border:1px solid #2b2b2b;border-radius:4px;outline:initial}.cleanslate input[type=radio]{margin:2px 2px 3px}.cleanslate abbr[title],.cleanslate acronym[title],.cleanslate dfn[title]{border-bottom-style:dotted;border-bottom-width:1px;cursor:help}.cleanslate ins{background-color:#ff9;color:#000}.cleanslate del{text-decoration:line-through}.cleanslate blockquote,.cleanslate q{quotes:none}.cleanslate blockquote:after,.cleanslate blockquote:before,.cleanslate li:after,.cleanslate li:before,.cleanslate q:after,.cleanslate q:before{content:""}.cleanslate input,.cleanslate select{vertical-align:middle}.cleanslate table{border-collapse:collapse;border-spacing:0}.cleanslate hr{border:0;border-top:1px solid #ccc;display:block;height:1px;margin:1em 0}.cleanslate [dir=rtl]{direction:rtl}.cleanslate mark{background-color:#ff9;color:#000;font-style:italic;font-weight:700}.cleanslate menu{padding-left:40px;padding-top:8px}.cleanslate [hidden],.cleanslate template{display:none}.cleanslate abbr[title]{border-bottom:1px dotted}.cleanslate sub,.cleanslate sup{font-size:75%;line-height:0;position:relative;vertical-align:initial}.cleanslate sup{top:-.5em}.cleanslate sub{bottom:-.25em}.cleanslate img{border:0}.cleanslate figure{margin:0}.cleanslate textarea{overflow:auto;vertical-align:top}.cleanslate{color:#000;direction:ltr;font-family:Times New Roman,Times,serif;font-size:medium;font-style:normal;font-weight:400;line-height:1;list-style-type:disc;text-align:left;text-align:start;text-decoration:none}.cleanslate pre{white-space:pre}body[data-edit-mode=""] .hide-modal-content,body[data-edit-mode=""] .hide-price,body[data-edit-mode=""] .parsys .new.section{display:none}body[data-edit-mode=true] .hide-desktop,body[data-edit-mode=true] .hide-desktop-devices,body[data-edit-mode=true] .hide-laptop,body[data-edit-mode=true] .hide-modal-content,body[data-edit-mode=true] .hide-price{display:block}body[data-edit-mode=true] .navigation .global-nav{position:static}body[data-edit-mode=true] #page-content{margin-top:0}.text-bold{font-weight:700}.text-center{text-align:center}@media screen and (max-width:639px){.text-center.mob-text-left,.text-center.mob-text-left .description,.text-center.mob-text-left .text-button,.text-center.mob-text-left .title{text-align:left}.text-center.mob-text-left .text-button .mobile-align-center{text-align:center}.text-center.mob-text-left .text-button .text-center.mobile-align{text-align:left}}@media screen and (min-width:640px)and (max-width:1023px){.text-center.tab-text-left,.text-center.tab-text-left .description,.text-center.tab-text-left .text-button,.text-center.tab-text-left .title{text-align:left}.text-center.tab-text-left .text-button .mobile-align-center{text-align:center}.text-center.tab-text-left .text-button .text-center.mobile-align{text-align:left}}@media screen and (max-width:639px){.text-center.mob-text-right,.text-center.mob-text-right .description,.text-center.mob-text-right .text-button,.text-center.mob-text-right .title{text-align:right}.text-center.mob-text-right .text-button .mobile-align-center{text-align:center}.text-center.mob-text-right .text-button .text-center.mobile-align{text-align:right}}@media screen and (min-width:640px)and (max-width:1023px){.text-center.tab-text-right,.text-center.tab-text-right .description,.text-center.tab-text-right .text-button,.text-center.tab-text-right .title{text-align:right}.text-center.tab-text-right .text-button .mobile-align-center{text-align:center}.text-center.tab-text-right .text-button .text-center.mobile-align{text-align:right}}.text-left{text-align:left}@media screen and (max-width:639px){.text-left.mob-text-center,.text-left.mob-text-center .description,.text-left.mob-text-center .text-button,.text-left.mob-text-center .title{text-align:center}}@media screen and (min-width:640px)and (max-width:1023px){.text-left.tab-text-center,.text-left.tab-text-center .description,.text-left.tab-text-center .text-button,.text-left.tab-text-center .title{text-align:center}}@media screen and (max-width:639px){.text-left.mob-text-right,.text-left.mob-text-right .description,.text-left.mob-text-right .text-button,.text-left.mob-text-right .title{text-align:right}.text-left.mob-text-right .text-button .mobile-align-center{text-align:center}.text-left.mob-text-right .text-button .text-center.mobile-align{text-align:right}}@media screen and (min-width:640px)and (max-width:1023px){.text-left.tab-text-right,.text-left.tab-text-right .description,.text-left.tab-text-right .text-button,.text-left.tab-text-right .title{text-align:right}.text-left.tab-text-right .text-button .mobile-align-center{text-align:center}.text-left.tab-text-right .text-button .text-center.mobile-align{text-align:right}}.text-right{text-align:right}@media screen and (max-width:639px){.text-right.mob-text-center,.text-right.mob-text-center .description,.text-right.mob-text-center .text-button,.text-right.mob-text-center .title{text-align:center}}@media screen and (min-width:640px)and (max-width:1023px){.text-right.tab-text-center,.text-right.tab-text-center .description,.text-right.tab-text-center .text-button,.text-right.tab-text-center .title{text-align:center}}@media screen and (max-width:639px){.text-right.mob-text-left,.text-right.mob-text-left .description,.text-right.mob-text-left .text-button,.text-right.mob-text-left .title{text-align:left}.text-right.mob-text-left .text-button .mobile-align-center{text-align:center}.text-right.mob-text-left .text-button .text-center.mobile-align{text-align:left}}@media screen and (min-width:640px)and (max-width:1023px){.text-right.tab-text-left,.text-right.tab-text-left .description,.text-right.tab-text-left .text-button,.text-right.tab-text-left .title{text-align:left}.text-right.tab-text-left .text-button .mobile-align-center{text-align:center}.text-right.tab-text-left .text-button .text-center.mobile-align{text-align:left}}@media screen and (max-width:639px){.mob-text-center{text-align:center}.mob-text-left{text-align:left}.mob-text-right{text-align:right}}@media screen and (min-width:640px)and (max-width:1023px){.tab-text-left{text-align:left}.tab-text-right{text-align:right}}.text-underline{text-decoration:underline}.background-white{background-color:#fff}.background-black{background-color:#000}.background-none{background-color:#0000}.background-body-copy{background-color:#eee}.background-ui-elements{background-color:#ccc}.background-light-grey{background-color:#333!important}.background-dark-grey{background-color:#666}.background-section-grey{background-color:#f1f1f1}.background-secondary-grey{background-color:#1a1a1a}.background-dark-green{background-color:#004831}.background-brand-green{background-color:#76b900}.background-yellow{background-color:#ffeb3b}.background-red{background-color:#f44336}.background-lightgray-1{background-color:#f7f7f7}.background-lightgray-3{background-color:#ddd}.background-lightuigraphics{background-color:#999}.background-darkgray-3{background-color:#222}.background-darkgray-1{background-color:#111}.color-brand-green,.color-brand-green ol,.color-brand-green ul{color:#76b900}.color-black,.color-black ol,.color-black ul{color:#000}.color-error-red{color:#f44336}.color-white{color:#fff}.color-secondary-grey{color:#1a1a1a}.color-section-grey{color:#f1f1f1}.color-light-grey{color:#333}.color-dark-green{color:#004831}.color-dark-grey{color:#666}.color-yellow{color:#ffeb3b}.color-red{color:#f44336}.color-inherit{color:inherit}.color-body-copy,.color-body-copy ol,.color-body-copy ul{color:#eee}.color-ui-elements,.color-ui-elements ol,.color-ui-elements ul{color:#ccc}.clearfix:after,.clearfix:before{content:" ";display:table}.clearfix:after{clear:both}.no-padding{padding:0}@media screen and (min-width:1024px){.p-h-110{padding-left:109.95px;padding-right:109.95px}.p-h-85{padding-left:84.9px;padding-right:84.9px}.p-h-30{padding-left:30px;padding-right:30px}.p-t-0{padding-top:0}.p-t-8{padding-top:8px}.p-t-15{padding-top:15px}.p-t-25{padding-top:24.9px}.p-t-30{padding-top:30px}.p-t-45{padding-top:45px}.p-t-60{padding-top:60px}.p-t-75{padding-top:75px}.p-t-90{padding-top:90px}.p-t-105{padding-top:105px}.p-t-120{padding-top:120px}.p-r-5{padding-right:5px}.p-r-15{padding-right:15px}.p-r-30{padding-right:30px}.p-r-45{padding-right:45px}.p-r-110{padding-right:109.95px}.p-r-150{padding-right:150px}.p-r-160{padding-right:159.9px}.p-l-5{padding-left:5px}.p-l-15{padding-left:15px}.p-l-30{padding-left:30px}.p-l-45{padding-left:45px}.p-l-110{padding-left:109.95px}.p-l-120{padding-left:120px}.p-l-150{padding-left:150px}.p-l-160{padding-left:159.9px}.p-b-0{padding-bottom:0}.p-b-8{padding-bottom:8px}.p-b-15{padding-bottom:15px}.p-b-25{padding-bottom:24.9px}.p-b-30{padding-bottom:30px}.p-b-45{padding-bottom:45px}.p-b-60{padding-bottom:60px}.p-b-75{padding-bottom:75px}.p-b-90{padding-bottom:90px}.p-b-105{padding-bottom:105px}.p-b-120{padding-bottom:120px}.m-r-7{margin-right:7px}.m-t-0{margin-top:0}.m-t-5{margin-top:5px}.m-t-10{margin-top:10px}.m-t-15{margin-top:15px}.m-t-20,.m-t-25{margin-top:24.9px}.m-t-30{margin-top:30px}.m-t-45{margin-top:45px}.m-t-60{margin-top:60px}.m-t-75{margin-top:75px}.m-t-90{margin-top:90px}.m-t-105{margin-top:105px}.m-t-120{margin-top:120px}.m-t-135{margin-top:135px}.m-t-150{margin-top:150px}.m-t-165{margin-top:165px}.m-t-170{margin-top:169.95px}.m-t-180{margin-top:180px}.m-t-185{margin-top:184.5px}.m-t-195{margin-top:195px}.m-t-200{margin-top:199.5px}.m-t-255{margin-top:255px}.m-b-0{margin-bottom:0}.m-b-5{margin-bottom:5px}.m-b-10{margin-bottom:10px}.m-b-15{margin-bottom:15px}.m-b-30{margin-bottom:30px}.m-b-45{margin-bottom:45px}.m-b-60{margin-bottom:60px}.m-b-75{margin-bottom:75px}.m-b-90{margin-bottom:90px}.m-b-105{margin-bottom:105px}.m-b-120{margin-bottom:120px}.m-b-135{margin-bottom:135px}.m-b-150{margin-bottom:150px}.m-b-165{margin-bottom:165px}.m-b-180{margin-bottom:180px}.m-b-185{margin-bottom:184.5px}.m-b-195{margin-bottom:195px}.m-b-200{margin-bottom:199.5px}.m-b-315{margin-bottom:315px}.m-r-15{margin-right:15px}.m-r-30{margin-right:30px}.m-l-30{margin-left:30px}}@media screen and (max-width:639px){.mob-m-r-7{margin-right:7px}.mob-m-r-15{margin-right:15px}.mob-m-r-30{margin-right:30px}.mob-m-l-30{margin-left:30px}.mob-p-l-0{padding-left:0}.mob-p-l-5{padding-left:5px}.mob-p-l-15{padding-left:15px}.mob-p-l-30{padding-left:30px}.mob-p-l-40{padding-left:39.9px}.mob-p-r-5{padding-right:5px}.mob-p-r-15{padding-right:15px}.mob-p-r-30{padding-right:30px}.mob-p-r-45{padding-right:45px}.mob-m-t-0{margin-top:0}.mob-m-t-5{margin-top:5px}.mob-m-t-10{margin-top:10px}.mob-m-t-20{margin-top:19.95px}.mob-m-t-15{margin-top:15px}.mob-m-t-25{margin-top:24.9px}.mob-m-t-30{margin-top:30px}.mob-m-t-45{margin-top:45px}.mob-m-t-60{margin-top:60px}.mob-m-t-75{margin-top:75px}.mob-m-t-90{margin-top:90px}.mob-m-t-105{margin-top:105px}.mob-m-t-120{margin-top:120px}.mob-m-t-135{margin-top:135px}.mob-m-t-150{margin-top:150px}.mob-m-t-170{margin-top:169.95px}.mob-m-b-0{margin-bottom:0}.mob-m-b-5{margin-bottom:5px}.mob-m-b-10{margin-bottom:10px}.mob-m-b-15{margin-bottom:15px}.mob-m-b-30{margin-bottom:30px}.mob-m-b-45{margin-bottom:45px}.mob-m-b-60{margin-bottom:60px}.mob-m-b-75{margin-bottom:75px}.mob-m-b-90{margin-bottom:90px}.mob-m-b-105{margin-bottom:105px}.mob-m-b-120{margin-bottom:120px}.mob-m-b-135{margin-bottom:135px}.mob-m-b-150{margin-bottom:150px}.mob-p-t-0{padding-top:0}.mob-p-t-5{padding-top:5px}.mob-p-t-8{padding-top:8px}.mob-p-t-10{padding-top:10px}.mob-p-t-15{padding-top:15px}.mob-p-t-25{padding-top:24.9px}.mob-p-t-30{padding-top:30px}.mob-p-t-45{padding-top:45px}.mob-p-t-60{padding-top:60px}.mob-p-t-75{padding-top:75px}.mob-p-t-90{padding-top:90px}.mob-p-t-105{padding-top:105px}.mob-p-t-120{padding-top:120px}.mob-p-b-5{padding-bottom:5px}.mob-p-b-8{padding-bottom:8px}.mob-p-b-10{padding-bottom:10px}.mob-p-b-15{padding-bottom:15px}.mob-p-b-25{padding-bottom:24.9px}.mob-p-b-30{padding-bottom:30px}.mob-p-b-45{padding-bottom:45px}.mob-p-b-60{padding-bottom:60px}.mob-p-b-75{padding-bottom:75px}.mob-p-b-90{padding-bottom:90px}.mob-p-b-105{padding-bottom:105px}.mob-p-b-120{padding-bottom:120px}.mob-text-small{font-size:14px}}@media screen and (min-width:640px)and (max-width:1023px){.tab-p-l-5{padding-left:5px}.tab-p-l-15{padding-left:15px}.tab-p-l-30{padding-left:30px}.tab-p-l-60{padding-left:60px}.tab-p-l-90{padding-left:90px}.tab-p-r-60{padding-right:60px}.tab-p-r-5{padding-right:5px}.tab-p-r-15{padding-right:15px}.tab-p-r-30{padding-right:30px}.tab-m-r-7{margin-right:7px}.tab-m-r-15{margin-right:15px}.tab-m-r-30{margin-right:30px}.tab-m-l-30{margin-left:30px}.tab-m-l-5-per{margin-left:5%}.tab-m-t-10{margin-top:10px}.tab-m-t-0{margin-top:0}.tab-m-t-15{margin-top:15px}.tab-m-t-20,.tab-m-t-25{margin-top:24.9px}.tab-m-t-30{margin-top:30px}.tab-m-t-40{margin-top:39.9px}.tab-m-t-45{margin-top:45px}.tab-m-t-60{margin-top:60px}.tab-m-t-75{margin-top:75px}.tab-m-t-90{margin-top:90px}.tab-m-t-105{margin-top:105px}.tab-m-t-120{margin-top:120px}.tab-m-t-135{margin-top:135px}.tab-m-t-150{margin-top:150px}.tab-m-t-190{margin-top:189.9px}.tab-m-b-0{margin-bottom:0}.tab-m-b-5{margin-bottom:5px}.tab-m-b-15{margin-bottom:15px}.tab-m-b-30{margin-bottom:30px}.tab-m-b-45{margin-bottom:45px}.tab-m-b-60{margin-bottom:60px}.tab-m-b-75{margin-bottom:75px}.tab-m-b-90{margin-bottom:90px}.tab-m-b-105{margin-bottom:105px}.tab-m-b-120{margin-bottom:120px}.tab-m-b-135{margin-bottom:135px}.tab-m-b-150{margin-bottom:150px}.tab-m-b-255{margin-bottom:255px}.tab-p-t-5{padding-top:5px}.tab-p-t-8{padding-top:8px}.tab-p-t-7{padding-top:7px}.tab-p-t-6{padding-top:6px}.tab-p-t-10{padding-top:10px}.tab-p-t-15{padding-top:15px}.tab-p-t-25{padding-top:24.9px}.tab-p-t-30{padding-top:30px}.tab-p-t-45{padding-top:45px}.tab-p-t-60{padding-top:60px}.tab-p-t-75{padding-top:75px}.tab-p-t-90{padding-top:90px}.tab-p-t-105{padding-top:105px}.tab-p-t-120{padding-top:120px}.tab-p-t-135{padding-top:135px}.tab-p-t-150{padding-top:150px}.tab-p-b-5{padding-bottom:5px}.tab-p-b-8{padding-bottom:8px}.tab-p-b-10{padding-bottom:10px}.tab-p-b-15{padding-bottom:15px}.tab-p-b-20{padding-bottom:20px}.tab-p-b-25{padding-bottom:24.9px}.tab-p-b-30{padding-bottom:30px}.tab-p-b-45{padding-bottom:45px}.tab-p-b-60{padding-bottom:60px}.tab-p-b-75{padding-bottom:75px}.tab-p-b-90{padding-bottom:90px}.tab-p-b-105{padding-bottom:105px}.tab-p-b-120{padding-bottom:120px}.tab-p-b-135{padding-bottom:135px}.tab-p-b-150{padding-bottom:150px}}@media screen and (min-width:1290px){.xl-p-l-75{padding-left:75px}.xl-p-l-240{padding-left:210px}.xl-p-r-75{padding-right:75px}.xl-p-r-240{padding-right:210px}}@media screen and (min-width:1024px){.op-0{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0}.op-40{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.4)";opacity:.4}.op-50{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.5)";opacity:.5}.op-60{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.6)";opacity:.6}.op-70{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.7)";opacity:.7}.video .op-0{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0}.video .op-40{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.4)";opacity:.4}.video .op-50{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.5)";opacity:.5}.video .op-60{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.6)";opacity:.6}.video .op-70{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.7)";opacity:.7}}@media screen and (min-width:640px)and (max-width:1023px){.tab-op-0{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0}.tab-op-40{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.4)";opacity:.4}.tab-op-50{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.5)";opacity:.5}.tab-op-60{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.6)";opacity:.6}.tab-op-70{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.7)";opacity:.7}.video .tab-op-0{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0}.video .tab-op-40{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.4)";opacity:.4}.video .tab-op-50{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.5)";opacity:.5}.video .tab-op-60{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.6)";opacity:.6}.video .tab-op-70{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.7)";opacity:.7}}@media screen and (max-width:639px){.mob-op-0{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0}.mob-op-40{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.4)";opacity:.4}.mob-op-50{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.5)";opacity:.5}.mob-op-60{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.6)";opacity:.6}.mob-op-70{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.7)";opacity:.7}.video .mob-op-0{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0}.video .mob-op-40{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.4)";opacity:.4}.video .mob-op-50{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.5)";opacity:.5}.video .mob-op-60{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.6)";opacity:.6}.video .mob-op-70{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0.7)";opacity:.7}}.line-height-small{line-height:1}.line-height-medium{line-height:1.5}.break-word{word-break:break-word}.no-wrap{white-space:nowrap}.hide{display:none!important}.show{display:block!important}.fade{opacity:0}.fade.in{opacity:1}.pull-left{float:left}.pull-right{float:right}.noscroll{height:100vh!important;overflow:hidden!important}.pos-absolute{position:absolute}.btn-more{border:1px solid #76b900;color:#fff;font-family:NVIDIA Sans,Arial,Helvetica,Sans-Serif;font-size:18px;font-weight:700;line-height:1}.btn-more:lang(ja-jp){font-family:NVIDIA Sans,source-han-sans-japanese,Arial,Helvetica,Sans-Serif}.btn-more:lang(ko-kr){font-family:NVIDIA Sans,source-han-sans-korean,Arial,Helvetica,Sans-Serif}.btn-more:lang(zh-tw){font-family:NVIDIA Sans,source-han-sans-traditional,Arial,Helvetica,Sans-Serif}.btn-more:lang(zh-cn){font-family:NVIDIA Sans,Source-Han-Sans-SC,Arial,Helvetica,Sans-Serif}.btn-more{background-color:#76b900;display:inline-block;margin:0 auto;min-width:50px;position:relative;text-align:center;text-decoration:none}.btn-more .txt-more{display:block;min-width:205px;padding:15px;text-align:center}@media screen and (min-width:640px)and (max-width:1023px){.btn-more .txt-more{padding:12px}}@media screen and (max-width:639px){.btn-more .txt-more{padding:12px}}.btn-more:active,.btn-more:hover{background-color:#76d300}@media screen and (max-width:639px){.hide-mob{display:none}}@media screen and (min-width:640px)and (max-width:1023px){.hide-tablet{display:none}}@media screen and (min-width:1024px){.hide-desktop{display:none}}.card{box-shadow:0 8px 6px -6px #ccc}.notched-g{font-family:GeForce-alt!important}.rounded-img{border-radius:50%}.text-uppercase{text-transform:uppercase}.auto-height{height:auto}.ht-560{height:560px}.ht-660{height:660px}.ht-760{height:760px}.brand-spinner{animation:spin 1.4s linear infinite;border:6px solid #76b900;border-radius:50%;border-right-color:#0000;height:60px;margin:50vh auto;width:60px}@keyframes spin{0%{transform:rotate(0deg)}50%{transform:rotate(220deg)}to{transform:rotate(1turn)}}.full-overlay{background-color:#000;height:100%;left:0;opacity:.85;position:fixed;top:0;width:100%;z-index:10000}.block-display{display:block}.flex-display{display:flex}.inline-flex-display{display:inline-flex}.align-items-center{align-items:center}.justify-content-center{justify-content:center}.justify-content-end{justify-content:flex-end}.justify-content-space-between{justify-content:space-between}.justify-content-space-around{justify-content:space-around}.justify-content-space-evenly{justify-content:space-evenly}.flex-wrap{flex-wrap:wrap}.flex-column{flex-direction:column}@media screen and (max-width:639px){.mob-flex-wrap{flex-wrap:wrap}}.inline-block-display{display:inline-block}.radix-modal-overlay{background-color:#00000073;inset:0;position:fixed;z-index:1000}.radix-modal-wrapper{align-items:flex-start;display:flex;inset:0;justify-content:center;outline:0;overflow:auto;padding:100px 0 24px;position:fixed;z-index:1000}.radix-modal-wrapper.centered{align-items:center;padding:0}.radix-modal-content{background-clip:padding-box;background-color:#fff;border:0;border-radius:2px;box-shadow:0 3px 6px -4px #0000001f,0 6px 16px 0 #00000014,0 9px 28px 8px #0000000d;margin:0 auto;max-width:calc(100vw - 32px);pointer-events:auto;position:relative;width:520px}.radix-modal-content:focus{outline:none}.radix-modal-close-btn{align-items:center;background:#0000;border:0;color:#00000073;cursor:pointer;display:flex;font-size:22px;font-weight:300;height:56px;justify-content:center;line-height:1;padding:0;position:absolute;right:0;text-decoration:none;top:0;width:56px;z-index:10}.radix-modal-close-btn:hover{color:#000000bf}.radix-modal-body{word-wrap:break-word;font-size:14px;line-height:1.5715;padding:24px}.radix-modal-footer{background:#0000;border-radius:0 0 2px 2px;border-top:1px solid #eee;padding:10px 16px;text-align:right}.sr-only{clip:rect(0,0,0,0);border:0;height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;white-space:nowrap;width:1px}.ondemand-modal-wrapper .radix-modal-content{width:260px!important}.ondemand-modal-wrapper .radix-modal-content .radix-modal-body{color:#666;font-family:inherit;font-size:16px;font-weight:400;line-height:24px;padding:12px 16px}.ondemand-modal-wrapper .radix-modal-content .title{margin-bottom:10px}.ondemand-modal-wrapper .radix-modal-content .instructions{padding:15px;text-align:center}.ondemand-modal-wrapper .radix-modal-content .list-container{margin-bottom:7.5px;max-height:220px;min-height:20px;overflow-y:auto}.ondemand-modal-wrapper .radix-modal-content .list-checkbox{display:flex;padding-bottom:10px}.ondemand-modal-wrapper .radix-modal-content .list-checkbox:last-child{padding-bottom:5px}.ondemand-modal-wrapper .radix-modal-content .loading{color:#999;font-size:12px;height:20px}.ondemand-modal-wrapper .radix-modal-content .popover-btn{background:none;border:none;border-radius:0;box-shadow:none;display:inline;margin:0;padding:0;text-decoration:none}.ondemand-modal-wrapper .radix-modal-content .popover-btn:focus,.ondemand-modal-wrapper .radix-modal-content .popover-btn:hover{text-decoration:none}.ondemand-modal-wrapper .radix-modal-content .popover-btn{color:#666;color:#666!important;cursor:pointer;display:block!important;font-family:inherit;font-size:15px;font-weight:400;line-height:15px}.ondemand-modal-wrapper .radix-modal-content .popover-btn:hover{color:#76b900!important}.ondemand-modal-wrapper .radix-modal-content .popover-btn:hover .btn-container span{color:#76b900}.ondemand-modal-wrapper .radix-modal-content .popover-btn .btn-container{display:table-row}.ondemand-modal-wrapper .radix-modal-content .popover-btn .btn-container .svg-container{display:table-cell;vertical-align:middle}.ondemand-modal-wrapper .radix-modal-content .popover-btn .btn-container span{color:#1a1a1a;cursor:pointer;display:table-cell;line-height:24px;padding:8px;vertical-align:middle}.ondemand-modal-wrapper .radix-modal-content .popover-btn .btn-container span.add{padding-left:3px}.ondemand-modal-wrapper .radix-modal-content .popover-actions{border-top:1px solid #ccc;margin-top:10px;padding-bottom:5px;padding-top:15px;text-align:center}.ondemand-modal-wrapper .radix-modal-content .popover-actions .popover-action-btn{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.ondemand-modal-wrapper .radix-modal-content .popover-actions .popover-action-btn:focus,.ondemand-modal-wrapper .radix-modal-content .popover-actions .popover-action-btn:hover{text-decoration:none}.ondemand-modal-wrapper .radix-modal-content .popover-actions .popover-action-btn{color:#666;color:#666!important;font-family:inherit;font-size:15px;font-weight:400;line-height:15px}.ondemand-modal-wrapper .radix-modal-content .popover-actions .popover-action-btn:hover{color:#76b900!important}.ondemand-modal-wrapper .radix-modal-content .popover-actions .popover-action-btn.primary{font-weight:700;margin-right:40px}.ondemand-modal-wrapper .radix-modal-content .new-list-input{border:none;height:26px;margin-bottom:5px;width:220px}.ondemand-modal-wrapper .radix-modal-content .new-list-input:focus{outline:none!important}.ondemand-modal-wrapper.share .radix-modal-content{width:155px!important}.ondemand-info-modal-wrapper .radix-modal-content .radix-modal-body{color:#1a1a1a;font-family:inherit;font-size:16px;font-weight:400;line-height:24px}@media screen and (min-width:640px){.ondemand-info-modal-wrapper .radix-modal-content .modal-content{display:flex}}.ondemand-info-modal-wrapper .radix-modal-content .modal-content .modal-image{margin-right:20px;padding-top:15px;width:130px}.ondemand-info-modal-wrapper .radix-modal-content .modal-content .modal-image img{max-width:100%}.ondemand-info-modal-wrapper .radix-modal-content .modal-content .modal-image .profile-photo-placeholder{background-color:#ccc;height:130px}.ondemand-info-modal-wrapper .radix-modal-content .modal-content .modal-info{flex:1}.ondemand-info-modal-wrapper .radix-modal-content .modal-content .modal-info .speaker-name{font-size:22px;font-weight:400;line-height:30px;margin-bottom:15px;margin-top:10px}.ondemand-info-modal-wrapper .radix-modal-content .modal-content .modal-info .speaker-bio{margin-bottom:20px}.ondemand-info-modal-wrapper .radix-modal-content .modal-action-btn{background-color:#999;border:none;color:#fff;cursor:pointer;font-family:inherit;font-size:16px;font-weight:700;line-height:23px;margin-bottom:20px;min-width:100px;padding:10px 15px}.ondemand-info-modal-wrapper .radix-modal-content .modal-action-btn:hover{background-color:#8c8c8c}.ondemand-info-modal-wrapper .radix-modal-content .modal-action-btn.primary{background-color:#76b900;font-weight:700}.ondemand-info-modal-wrapper .radix-modal-content .modal-action-btn.primary:hover{background-color:#66a000}.ondemand-info-modal-wrapper .radix-modal-content .fade-in{animation:fadeIn 1s ease}.ondemand-info-modal-wrapper .radix-modal-content img.profile-image{opacity:0}.ondemand-info-modal-wrapper .radix-modal-content img.profile-image.fade-in{opacity:1}.ondemand-info-modal-wrapper .video-player-widget{padding-top:25px}.ondemand-info-modal-wrapper .event-details-wrapper{padding-bottom:0}.ondemand-confirm-modal-wrapper .radix-modal-content{text-align:center}.ondemand-confirm-modal-wrapper .radix-modal-content:focus{outline:none}.ondemand-confirm-modal-wrapper .radix-modal-content .title{color:#76b900;font-family:inherit;font-size:32px;font-weight:400;line-height:40px}.ondemand-confirm-modal-wrapper .radix-modal-content .message{color:#1a1a1a;font-family:inherit;font-size:18px;font-weight:400;line-height:23px;padding:30px 0}.ondemand-confirm-modal-wrapper .radix-modal-content .actions{border-top:1px solid #ccc;padding-bottom:15px;padding-top:30px}.ondemand-confirm-modal-wrapper .radix-modal-content .actions .modal-action-btn{margin:0 15px}.small-confirm-modal .radix-modal-content{width:350px!important}.session-rating .radix-modal-content{text-align:center}.session-rating .radix-modal-content .radix-modal-body{padding:48px 24px}.session-rating .radix-modal-content .title{font-size:24px;margin-bottom:15px}.session-rating .radix-modal-content .message{font-size:18px}.session-rating .radix-modal-content .rating{display:flex;margin-top:30px;width:100%}.session-rating .radix-modal-content .rating button{background-color:#fff;border:1px solid #999;border-right:none;color:#1a1a1a;flex:1;font-size:16px;padding:7px 0;text-align:center}.session-rating .radix-modal-content .rating button:hover{color:#76b900;cursor:pointer}.session-rating .radix-modal-content .rating button.selected{background-color:#76b900;color:#1a1a1a;font-weight:700}.session-rating .radix-modal-content .rating button:first-child{border-bottom-left-radius:20px;border-top-left-radius:20px}.session-rating .radix-modal-content .rating button:last-child{border-bottom-right-radius:20px;border-right:1px solid #999;border-top-right-radius:20px}.session-rating .radix-modal-content .rating-label{display:flex;margin-bottom:30px}.session-rating .radix-modal-content .rating-label .rating-label-item{color:#1a1a1a;flex:1;font-size:12px;font-weight:400;padding-top:5px;text-align:center}.session-rating .radix-modal-content .modal-action-btn{color:#000;font-size:14px;margin-bottom:0;padding:5px 15px}.session-rating .radix-modal-content .modal-action-btn.disabled{opacity:.6}.session-rating .radix-modal-content .modal-action-btn.disabled:hover{background-color:#76b900;cursor:inherit}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body{color:#1a1a1a;font-family:inherit;font-size:16px;font-weight:400;line-height:24px;text-align:center}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .title{font-size:22px;font-weight:400;line-height:30px;margin-bottom:15px;margin-top:10px}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .social-buttons{border-bottom:1px solid #ccc;font-size:12px;line-height:16px;padding:15px 0 30px}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .social-button{background-color:#0000;border:none;box-shadow:none;cursor:pointer;margin:0 15px;text-align:center}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .social-button .social-frame{border-radius:25px;color:#fff;height:36px;margin:0 auto 4px;padding:5px;width:36px}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .social-button .social-frame.facebook{background-color:#1877f2}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .social-button .social-frame.linkedin{background-color:#007ab7}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .social-button .social-frame.twitter{background-color:#1d9bf0}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .social-button .social-frame.weibo{background-color:#d52a2a}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .social-button .social-frame.wechat{background-color:#2cc100}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .social-button:focus{outline:none!important}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .social-button:focus .facebook{background-color:#0d6ae4}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .social-button:focus .linkedin{background-color:#00699e}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .social-button:focus .twitter{background-color:#0f8ee4}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection{padding:30px 0 15px}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .radix-slider,.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .share-url,.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .subtitle{margin-bottom:30px}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .share-url-field{background-color:#f1f1f1;display:flex;height:36px;padding:0 10px;text-align:left}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .share-url-field input{background:#0000;border:none;flex:1;font-size:14px;height:100%;width:100%}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .share-url-field input:focus{outline:none!important}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .share-url-field button{background:#0000;border:none;box-shadow:none;color:#76b900;cursor:pointer;font-family:inherit;font-size:14px;font-weight:700;height:100%;line-height:20px;padding-left:10px;padding-right:0}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .share-url-field button:hover{color:#66a000}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .share-url-field button:focus{color:#66a000;outline:none!important}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .time-fields{display:flex;font-size:14px}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .time-fields .end-time{display:flex;flex:1;justify-content:flex-end}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .time-fields input{border:none;border-bottom:1px solid #999;font-size:14px;height:24px;margin-left:15px;width:60px}.share-from-time-modal-wrapper .radix-modal-content .radix-modal-body .time-selection .time-fields input:focus{outline:none!important}.radix-popover-content{background-clip:padding-box;background-color:#fff;border-radius:2px;box-shadow:0 3px 6px -4px #0000001f,0 6px 16px 0 #00000014,0 9px 28px 8px #0000000d;padding:12px 16px;z-index:1030}.radix-popover-content:focus{outline:none}.radix-popover-content.ondemand-popover-wrapper{color:#666;font-family:inherit;font-size:16px;font-weight:400;line-height:18px;width:260px}.radix-popover-content.ondemand-popover-wrapper.share{width:160px}.radix-popover-content.ondemand-popover-wrapper.hidden{padding:0}.radix-popover-content.ondemand-popover-wrapper .title{margin-bottom:10px}.radix-popover-content.ondemand-popover-wrapper .instructions{padding:15px;text-align:center}.radix-popover-content.ondemand-popover-wrapper .list-container{margin-bottom:7.5px;max-height:220px;min-height:20px;overflow-y:auto}.radix-popover-content.ondemand-popover-wrapper .loading{color:#999;font-size:12px;height:20px}.radix-popover-content.ondemand-popover-wrapper .popover-btn{background:none;border:none;border-radius:0;box-shadow:none;display:inline;margin:0;padding:0;text-decoration:none}.radix-popover-content.ondemand-popover-wrapper .popover-btn:focus,.radix-popover-content.ondemand-popover-wrapper .popover-btn:hover{text-decoration:none}.radix-popover-content.ondemand-popover-wrapper .popover-btn{color:#666;color:#666!important;cursor:pointer;display:block!important;font-family:inherit;font-size:15px;font-weight:400;line-height:15px}.radix-popover-content.ondemand-popover-wrapper .popover-btn:hover{color:#76b900!important}.radix-popover-content.ondemand-popover-wrapper .popover-btn:hover .btn-container span{color:#76b900}.radix-popover-content.ondemand-popover-wrapper .popover-btn .btn-container{display:table-row}.radix-popover-content.ondemand-popover-wrapper .popover-btn .btn-container .svg-container{display:table-cell;vertical-align:middle}.radix-popover-content.ondemand-popover-wrapper .popover-btn .btn-container span{color:#1a1a1a;cursor:pointer;display:table-cell;line-height:24px;padding:8px;vertical-align:middle}.radix-popover-content.ondemand-popover-wrapper .popover-btn .btn-container span.add{padding-left:3px}.radix-popover-content.ondemand-popover-wrapper .popover-actions{border-top:1px solid #ccc;margin-top:10px;padding-bottom:5px;padding-top:15px;text-align:center}.radix-popover-content.ondemand-popover-wrapper .popover-actions .popover-action-btn{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.radix-popover-content.ondemand-popover-wrapper .popover-actions .popover-action-btn:focus,.radix-popover-content.ondemand-popover-wrapper .popover-actions .popover-action-btn:hover{text-decoration:none}.radix-popover-content.ondemand-popover-wrapper .popover-actions .popover-action-btn{color:#666;color:#666!important;font-family:inherit;font-size:15px;font-weight:400;line-height:15px}.radix-popover-content.ondemand-popover-wrapper .popover-actions .popover-action-btn:hover{color:#76b900!important}.radix-popover-content.ondemand-popover-wrapper .popover-actions .popover-action-btn.primary{font-weight:700;margin-right:40px}.radix-popover-content.ondemand-popover-wrapper .new-list-input{border:none;height:26px;margin-bottom:5px;width:220px}.radix-popover-content.ondemand-popover-wrapper .new-list-input:focus{outline:none!important}.radix-popover-content.ondemand-popover-wrapper .list-checkbox{display:flex;padding-bottom:10px}.radix-popover-content.ondemand-popover-wrapper .list-checkbox:last-child{padding-bottom:5px}.radix-checkbox-wrapper{align-items:center;cursor:pointer;display:inline-flex;gap:10px;line-height:1}.radix-checkbox-root{-webkit-tap-highlight-color:rgba(0,0,0,0);all:unset;align-items:center;background-color:#fff;border:2px solid #999;border-radius:2px;box-sizing:border-box;cursor:pointer;display:inline-flex;flex-shrink:0;height:18px;justify-content:center;transition:background-color .3s,border-color .3s;width:18px}.radix-checkbox-root:active,.radix-checkbox-root:focus-visible{background:#fff;border-color:#999;box-shadow:none;outline:none}.radix-checkbox-root.radix-checkbox-checked,.radix-checkbox-root[data-state=checked]{background:#76b900;border-color:#76b900}.radix-checkbox-root.radix-checkbox-checked:active,.radix-checkbox-root[data-state=checked]:active{background:#76b900;border-color:#76b900;box-shadow:none}.radix-checkbox-indicator{align-items:center;color:#fff;display:flex;justify-content:center;line-height:0}.radix-checkbox-indicator:after{border:solid #fff;border-width:0 2px 2px 0;content:"";display:block;height:8px;margin-top:-2px;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg);width:4px}.radix-checkbox-label{user-select:none}.cleanslate .radix-checkbox-wrapper{align-items:center;cursor:pointer;display:inline-flex;gap:10px;line-height:1}.cleanslate .radix-checkbox-root{-webkit-tap-highlight-color:rgba(0,0,0,0);all:unset;align-items:center;background-color:#fff;border:2px solid #999;border-radius:2px;box-sizing:border-box;cursor:pointer;display:inline-flex;flex-shrink:0;height:18px;justify-content:center;transition:background-color .3s,border-color .3s;width:18px}.cleanslate .radix-checkbox-root:active,.cleanslate .radix-checkbox-root:focus-visible{background:#fff;border-color:#999;box-shadow:none;outline:none}.cleanslate .radix-checkbox-root.radix-checkbox-checked,.cleanslate .radix-checkbox-root[data-state=checked]{background:#76b900;border-color:#76b900}.cleanslate .radix-checkbox-root.radix-checkbox-checked:active,.cleanslate .radix-checkbox-root[data-state=checked]:active{background:#76b900;border-color:#76b900;box-shadow:none}.cleanslate .radix-checkbox-indicator{align-items:center;color:#fff;display:flex;justify-content:center;line-height:0}.cleanslate .radix-checkbox-indicator:after{border:solid #fff;border-width:0 2px 2px 0;content:"";display:block;height:8px;margin-top:-2px;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg);width:4px}.cleanslate .radix-checkbox-label{user-select:none}.cleanslate .radix-accordion{background:none;border:none}.cleanslate .radix-accordion-item{border-bottom:none;padding-bottom:15px}.cleanslate .radix-accordion-header{all:unset;align-items:center;border-bottom:1px solid #ccc;display:flex;margin:0}.cleanslate .radix-accordion-trigger{-webkit-tap-highlight-color:rgba(0,0,0,0);all:unset;align-items:center;box-sizing:border-box;color:#999;cursor:pointer;display:flex;flex:1;font-family:inherit;font-size:16px;font-weight:700;line-height:24px;padding-bottom:7.5px;padding-left:37.5px;position:relative;user-select:none}.cleanslate .radix-accordion-trigger:active{background:none}.cleanslate .radix-accordion-arrow{display:inline-flex;height:16px;left:8px;position:absolute;transition:transform .3s;width:16px}.cleanslate .radix-accordion-arrow:before{border-bottom:2px solid #999;border-right:2px solid #999;content:"";display:block;height:8px;margin:auto;transform:rotate(45deg);transition:transform .3s;width:8px}.cleanslate .radix-accordion-trigger[data-state=open] .radix-accordion-arrow:before{transform:rotate(-135deg)}.cleanslate .radix-accordion-extra .facets-checkbox-group-clear{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .radix-accordion-extra .facets-checkbox-group-clear:focus,.cleanslate .radix-accordion-extra .facets-checkbox-group-clear:hover{text-decoration:none}.cleanslate .radix-accordion-extra .facets-checkbox-group-clear{color:#76b900;font-family:inherit;font-size:12px;font-weight:400;line-height:15px}.cleanslate .radix-accordion-extra .facets-checkbox-group-clear:hover{text-decoration:underline}.cleanslate .radix-accordion-content{overflow:hidden}.cleanslate .radix-accordion-content[data-state=open]{animation:radix-accordion-slideDown .2s ease-out}.cleanslate .radix-accordion-content[data-state=closed]{animation:radix-accordion-slideUp .2s ease-out}.cleanslate .radix-accordion-content-box{padding:15px 5px 5px;position:relative}@keyframes radix-accordion-slideDown{0%{height:0}to{height:var(--radix-accordion-content-height)}}@keyframes radix-accordion-slideUp{0%{height:var(--radix-accordion-content-height)}to{height:0}}.cleanslate .radix-autocomplete-dropdown{background-color:#f7f7f7;border:none;border-radius:0;box-shadow:0 5px 5px #00000026;left:0;max-height:750px;overflow-y:auto;padding:0;position:absolute;width:100%;z-index:1050}.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-label{color:#999;font-family:inherit;font-size:12px;font-weight:400;height:auto;line-height:15px;padding:15px}.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options{padding-bottom:5px}.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options .radix-autocomplete-option{align-items:center;color:#999;cursor:pointer;display:flex;font-family:inherit;font-size:16px;font-weight:400;line-height:20px;padding:5px 15px}.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options .radix-autocomplete-option.radix-autocomplete-option-active,.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options .radix-autocomplete-option:hover{background-color:#999;color:#eee}.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options .radix-autocomplete-option.radix-autocomplete-option-active svg,.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options .radix-autocomplete-option:hover svg{fill:#eee}.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options .radix-autocomplete-option:last-child{border-radius:0}.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options .radix-autocomplete-option span{cursor:pointer}.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options .radix-autocomplete-option span.search-suggestion-icon{flex:0 0 15px;padding-top:2px}.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options .radix-autocomplete-option span.search-suggestion-icon svg{height:20px;width:20px}.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options .radix-autocomplete-option span.search-suggestion-text{flex:1;padding-left:12px}.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options .radix-autocomplete-option span.search-quicklink-text{flex:1;font-weight:bolder;padding-left:12px}@media screen and (min-width:640px){.cleanslate .radix-autocomplete-dropdown .radix-autocomplete-group-options .radix-autocomplete-option{color:#999;font-family:inherit;font-size:16px;font-weight:400;line-height:24px;padding:10px 15px}}.radix-slider{align-items:center;display:flex;height:20px;position:relative;touch-action:none;user-select:none;width:100%}.radix-slider[data-disabled]{opacity:.5;pointer-events:none}.radix-slider-track{background-color:#ccc;border-radius:2px;flex-grow:1;height:4px;position:relative}.radix-slider-range{background-color:#76b900;border-radius:2px;height:100%;position:absolute}.radix-slider-thumb{-webkit-tap-highlight-color:rgba(0,0,0,0);all:unset;background-color:#fff;border:2px solid #76b900;border-radius:50%;cursor:pointer;display:block;height:14px;width:14px}.radix-slider-thumb:hover{background-color:#76b900}.radix-slider-thumb:focus-visible{box-shadow:0 0 0 3px #76b9004d}.radix-slider-thumb:active{background:#fff}.cleanslate .radix-slider{align-items:center;display:flex;height:20px;position:relative;touch-action:none;user-select:none;width:100%}.cleanslate .radix-slider[data-disabled]{opacity:.5;pointer-events:none}.cleanslate .radix-slider-track{background-color:#ccc;border-radius:2px;flex-grow:1;height:4px;position:relative}.cleanslate .radix-slider-range{background-color:#76b900;border-radius:2px;height:100%;position:absolute}.cleanslate .radix-slider-thumb{-webkit-tap-highlight-color:rgba(0,0,0,0);all:unset;background-color:#fff;border:2px solid #76b900;border-radius:50%;cursor:pointer;display:block;height:14px;width:14px}.cleanslate .radix-slider-thumb:hover{background-color:#76b900}.cleanslate .radix-slider-thumb:focus-visible{box-shadow:0 0 0 3px #76b9004d}.cleanslate .radix-slider-thumb:active{background:#fff}.cleanslate{font-family:inherit}.cleanslate a{font-weight:700;text-transform:none}.cleanslate .h1,.cleanslate .h2,.cleanslate .h3,.cleanslate .h4,.cleanslate .h5,.cleanslate .h6,.cleanslate h1,.cleanslate h2,.cleanslate h3,.cleanslate h4,.cleanslate h5,.cleanslate h6{color:#000;font-weight:700;line-height:1.25em;text-transform:none}.cleanslate .h--large,.cleanslate .h1,.cleanslate h1{font-size:28px}.cleanslate .h--medium,.cleanslate .h2,.cleanslate h2{font-size:24px}.cleanslate .h--small,.cleanslate .h3,.cleanslate h3{font-size:20px}.cleanslate .h--smaller,.cleanslate .h4,.cleanslate h4{font-size:18px}.cleanslate .h--smallest,.cleanslate .h5,.cleanslate h5{font-size:16px}.cleanslate .p-large,.cleanslate .p-medium{font-size:15px}.cleanslate .p-small{font-size:11px}.cleanslate .anticon-down svg,.cleanslate .anticon-up svg{height:14px;padding-left:5px;width:16px}@media screen and (min-width:640px){.cleanslate .h--large,.cleanslate .h1,.cleanslate h1{font-size:36px}.cleanslate .h--medium,.cleanslate .h2,.cleanslate h2{font-size:28px}.cleanslate .h--small,.cleanslate .h3,.cleanslate h3{font-size:24px}.cleanslate .h--smaller,.cleanslate .h4,.cleanslate h4{font-size:20px}.cleanslate .h--smallest,.cleanslate .h5,.cleanslate h5{font-size:18px}.cleanslate .p-large{font-size:20px}}@media screen and (min-width:1024px){.cleanslate .h--large,.cleanslate .h1,.cleanslate h1{font-size:48px}.cleanslate .h--medium,.cleanslate .h2,.cleanslate h2{font-size:36px}.cleanslate .h--small,.cleanslate .h3,.cleanslate h3{font-size:28px}.cleanslate .h--smaller,.cleanslate .h4,.cleanslate h4{font-size:24px}.cleanslate .h--smallest,.cleanslate .h5,.cleanslate h5{font-size:20px}.cleanslate .p-large{font-size:22px}}.cleanslate .display-flex{display:flex}.cleanslate .brand-highlight{color:#000;font-weight:700;text-decoration:underline;text-decoration-color:#76b900;text-decoration-thickness:2px;text-underline-offset:.3125em}.cleanslate .brand-highlight:hover{text-decoration:underline;text-decoration-color:#000;text-decoration-thickness:2px;text-underline-offset:.3125em}.cleanslate button.icon-btn svg{cursor:pointer}.cleanslate button.icon-btn.slick-disabled{cursor:inherit}.cleanslate button.icon-btn.slick-disabled svg{cursor:inherit;opacity:.4}.cleanslate button.icon-btn:hover{color:#76b900!important}.cleanslate button.icon-btn:hover:disabled{color:#1a1a1a!important}.cleanslate .action-rate{color:#000;font-weight:700}.cleanslate .action-rate-icon{color:#666}.cleanslate .next-video-label{color:#1a1a11}.cleanslate .search-page-container{min-height:530px}.cleanslate .search-page-header.background{background:#eee 0 0 no-repeat padding-box;padding:15px}.cleanslate .search-page-header .search-form-container{background:#fff 0 0 no-repeat padding-box;border:2px solid #999}.cleanslate .search-page-header .search-form-container:focus-within{border-color:#76b900}@media screen and (min-width:640px){.cleanslate .search-page-header.background{padding:30px}.cleanslate .search-page-header .search-form-container{margin:0 auto}}.cleanslate .search-page-content{position:relative}@media screen and (min-width:1024px){.cleanslate .search-page-content{margin:0 auto;max-width:1290px}}.cleanslate .search-header{color:#1a1a1a;font-family:inherit;font-size:28px;font-weight:700;line-height:36px;margin-top:30px;padding:0 7.5px}@media screen and (min-width:640px){.cleanslate .search-header{font-size:36px;line-height:45px;margin:30px 0 15px}}.cleanslate .playlist-header{border-bottom:1px solid #ccc;color:#1a1a1a;font-family:inherit;font-size:32px;font-weight:400;line-height:32px;padding:0}.cleanslate .playlist-header .playlist-name{display:block;flex:1}.cleanslate .playlist-header .playlist-name h2{font-size:28px;line-height:35px}.cleanslate .playlist-header .playlist-info{display:flex}.cleanslate .playlist-header .playlist-info .playlist-summary{flex:1;font-size:22px;line-height:38px}.cleanslate .playlist-header .playlist-actions{display:flex;margin-top:15px;min-width:142px}.cleanslate .playlist-header .playlist-actions .search-result-action-btn{display:inline-flex;margin:auto 15px auto 0;padding:0}@media screen and (min-width:640px){.cleanslate .playlist-header .playlist-name{display:flex;flex:1}.cleanslate .playlist-header .playlist-name span{flex:1}.cleanslate .playlist-header .playlist-actions{margin-left:35px;margin-top:0}}.cleanslate .nod-drag-handle-container{display:flex}.cleanslate .nod-drag-handle-container .nod-drag-handle{padding-top:10px;width:32px}.cleanslate .nod-drag-handle-container .nod-drag-handle .drag-icons{color:#666;margin:auto 0}.cleanslate .nod-drag-handle-container .nod-drag-handle .drag-icons .search-result-action-btn{padding:0}.cleanslate .nod-drag-handle-container .nod-drag-handle svg{display:block}.cleanslate .nod-drag-handle-container .nod-drag-handle:hover{cursor:grab}.cleanslate .nod-drag-handle-container .nod-drag-content{flex:1}.cleanslate .nod-draggable{background-color:inherit;padding:15px 5px 15px 0;transition:background-color .2s ease}.cleanslate .nod-draggable.nod-draggable-dragging{background-color:#fff;box-shadow:0 3px 6px rgba(0,0,0,.161)}.cleanslate div.is-dnd-dragging{cursor:grabbing}.cleanslate div.is-dnd-dragging .nod-draggable{transition:transform .2s cubic-bezier(.2,0,0,1),opacity .2s cubic-bezier(.2,0,0,1)}.cleanslate .session-attribute-item{align-items:center;background-color:#eee;border-radius:50px;display:inline-flex;margin:0 10px 15px 0;padding:5px 10px;width:fit-content}@media screen and (min-width:1024px){.cleanslate .session-attribute-item{display:flex}}.cleanslate .session-attribute-item .region-select{background-color:#0000;border:none;box-shadow:none;cursor:pointer;font-family:inherit;font-size:inherit;outline:none}.cleanslate .session-attribute-item .region-select option{font-family:inherit;font-size:inherit}.cleanslate .session-attribute-item button{flex:1}.cleanslate .to-search-page{background:none!important;border:none;color:#000;cursor:pointer;font-size:15px;margin-left:5px;padding:0!important;text-align:left;text-decoration:none}.cleanslate .anticon-right svg{fill:#76b900;font-size:small}.cleanslate .select-box{background-color:#fff;border:1px solid #999;color:#1a1a1a;font-family:inherit;font-size:16px;font-weight:400;height:36px;line-height:24px;padding-left:15px;padding-right:15px}.cleanslate .select-box option:hover{box-shadow:inset 0 0 10px 100px #76b900}.cleanslate .search-data-container{flex:1;padding-top:20px}.cleanslate .search-data-container.first-search{padding-left:0}.cleanslate .search-facets-container,.cleanslate .search-results-container,.cleanslate .search-summary-container{padding:15px 7.5px 0}@media screen and (min-width:640px){.cleanslate .search-facets-container,.cleanslate .search-results-container,.cleanslate .search-summary-container{margin:0 auto}}.cleanslate .search-results-container{padding-top:0}.cleanslate .search-pager-container{padding:15px 0}@media screen and (min-width:640px){.cleanslate .search-pager-container{margin:0 auto;max-width:1290px;padding:30px 0 15px}}@media screen and (min-width:1024px){.cleanslate .search-pager-container,.cleanslate .search-results-container,.cleanslate .search-summary-container{margin:0}.cleanslate .search-facets-container{border-right:1px solid #0000;margin:30px 30px 0 0;padding-right:40px;padding-top:0;right:0;top:0;width:300px}.cleanslate .search-facets-container>div:first-child{margin-top:-16px}.cleanslate .search-facets-container.border{border-right:1px solid #ccc}}.cleanslate .banner-list-container{margin-top:30px;overflow:hidden}.cleanslate .banner-list-container #mobile-generated-banner-list{display:flex;flex-wrap:nowrap;overflow-x:auto}.cleanslate .banner-list-container #mobile-generated-banner-list a{flex:0 0 auto;margin:0 15px 0 0}.cleanslate .banner-list-container #mobile-generated-banner-list.single a{margin:0 auto}.cleanslate #search-promo-container{overflow:auto}.cleanslate .promoted-item-image{background-origin:content-box;background-repeat:no-repeat;background-size:100%;height:300px;margin:0 auto 15px;width:300px}@media screen and (min-width:1024px){.cleanslate .promoted-item-image{height:300px;margin-bottom:15px;padding:0;width:300px}}.cleanslate .promoted-item-facet-image{background-origin:content-box;background-repeat:no-repeat;background-size:100%;height:auto;margin:0 auto 15px;width:300px}@media screen and (min-width:1024px){.cleanslate .promoted-item-facet-image{height:auto;padding:0;width:300px}}.cleanslate .search-input-wrapper{position:relative}.cleanslate .search-input-wrapper *,.cleanslate .search-input-wrapper :after{-webkit-box-sizing:inherit;-moz-box-sizing:inherit;box-sizing:inherit}.cleanslate .search-input-wrapper ul li{margin:0;padding-left:0}.cleanslate .search-input-wrapper .search-input-block{align-items:normal;background:#fff 0 0 no-repeat padding-box;display:flex;height:18px;padding:15px}.cleanslate .search-input-wrapper .search-input-block .search-input-right{flex:1}.cleanslate .search-input-wrapper .search-input-block .search-input-right input{border:none;color:#1a1a1a;font-family:inherit;font-size:16px;font-weight:400;height:100%;letter-spacing:0;line-height:24px;width:100%}.cleanslate .search-input-wrapper .search-input-block .search-input-right input::placeholder{color:#999}.cleanslate .search-input-wrapper .search-input-block .search-input-right input::-webkit-input-placeholder{color:#999}.cleanslate .search-input-wrapper .search-input-block .search-input-right input:-ms-input-placeholder{color:#999}.cleanslate .search-input-wrapper .search-input-block .search-input-left{flex:0 0 30px;text-align:left}.cleanslate .search-input-wrapper .search-input-block .search-input-left button{background:none;border:none;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;color:#999;height:22px;margin:0;padding:0;width:22px}.cleanslate .search-input-wrapper .search-input-block .search-input-left button .search-icon{cursor:pointer}.cleanslate .search-input-wrapper .search-input-block .search-input-left button:hover{filter:brightness(.5)}.cleanslate .search-input-wrapper .search-input-block .search-input-left button svg{height:22px;width:22px}.cleanslate .search-container{display:flex;margin:0 auto 15px;max-width:100%}.cleanslate .search-container .search-form-container{flex:1;margin:7.5px}.cleanslate .search-container .search-filter{margin:auto 0;padding-right:10px;text-align:right}.cleanslate .search-container .search-filter button{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .search-container .search-filter button:focus,.cleanslate .search-container .search-filter button:hover{text-decoration:none}.cleanslate .search-container .search-filter button{color:#1a1a1a;font-size:15px}.cleanslate .search-container .search-filter button svg{margin-bottom:-6px}.cleanslate .search-container .search-filter button span{cursor:pointer;display:none;margin-bottom:5px;padding-left:10px}@media screen and (min-width:481px){.cleanslate .search-container .search-filter{flex:0 0 90px}.cleanslate .search-container .search-filter button span{display:inline-block}}.cleanslate .nvidia-on-demand .search-page-header{background:#0000;margin:0 auto;max-width:1290px;padding:0}.cleanslate .nvidia-on-demand .search-container{margin:0;max-width:100%}.cleanslate .nvidia-on-demand .search-form-container{border:2px solid #999;margin:7.5px}.cleanslate .nvidia-on-demand .search-form-container:focus-within{border-color:#76b900}@media screen and (min-width:640px){.cleanslate .nvidia-on-demand .search-form-container{max-width:600px}}.cleanslate .nvidia-on-demand .search-pager-container,.cleanslate .nvidia-on-demand .search-results-container,.cleanslate .nvidia-on-demand .search-summary-container{margin:0 auto;max-width:1290px}@media screen and (min-width:1024px){.cleanslate .nvidia-on-demand .search-results-container,.cleanslate .nvidia-on-demand .search-summary-container{margin:0;width:calc(100% - 15px)}}@media screen and (min-width:640px){.cleanslate .nvidia-on-demand .my-playlists{display:flex}.cleanslate .nvidia-on-demand .my-playlists .list-container{flex:1}.cleanslate .nvidia-on-demand .my-playlists .promotion{text-align:right;width:310px}}@media screen and (min-width:1024px){.cleanslate .nvidia-on-demand .my-playlists .promotion{width:330px}.cleanslate .nvidia-on-demand .search-pager-container{margin:0;width:100%}}.cleanslate .nvidia-on-demand .ondemand-facets-wrapper .facet-label span{font-weight:700}.cleanslate .ondemand-facets-wrapper{background-color:#fff;height:0;overflow:hidden;position:relative;-webkit-transition:height .2s;-moz-transition:height .2s;-ie-transition:height .2s;-o-transition:height .2s;transition:height .2s;width:100%}.cleanslate .ondemand-facets-wrapper .facets-loading{background-color:#00000080;border-radius:4px;color:#fff;font-family:inherit;font-size:16px;font-weight:400;height:100%;left:50%;line-height:25px;position:absolute;top:50%;transform:translate(-50%,-50%);width:100%;z-index:100}.cleanslate .ondemand-facets-wrapper .facets-loading .swg-spinner-wrapper{height:100%;padding:0}.cleanslate .ondemand-facets-wrapper .facets-loading .swg-spinner-wrapper .swg-spinner{border-color:#76b900 #76b900 #76b900 #0000}.cleanslate .ondemand-facets-wrapper .facet-groups{color:#1a1a1a;font-family:inherit;font-size:15px;font-weight:400;line-height:25px;min-height:20px;padding:15px}.cleanslate .ondemand-facets-wrapper .facet-groups .parent-child-facet-group{display:block}.cleanslate .ondemand-facets-wrapper .facet-groups .parent-child-facet-group .parent-container{height:100%}.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group{display:inline-block;margin:15px;max-width:375px;vertical-align:top}@media screen and (min-width:640px){.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group.max-width{width:375px}}.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group.partitioned{max-width:550px}.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .header,.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .main-header{border-bottom:1px solid #ccc;font-weight:700;margin-bottom:10px;padding-bottom:7.5px}.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .filtered-facets{display:block}@media screen and (min-width:640px){.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .filtered-facets{display:flex}}.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .filtered-facets .facet-group:first-child{margin:0 30px 15px 0}@media screen and (min-width:640px){.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .filtered-facets .facet-group:first-child{margin:0 15px 0 0}}.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .filtered-facets .facet-group:last-child{margin:0}@media screen and (min-width:640px){.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .filtered-facets .facet-group:last-child{margin:0 0 0 15px}}.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .filtered-facets .header{border-bottom:none;margin-bottom:2px}.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .facets-checkbox-item{color:#1a1a1a;display:flex;font-family:inherit;font-size:15px;font-weight:400;line-height:25px;padding-bottom:7.5px}.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .facets-checkbox-item.expanded-item{display:block;position:relative}.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .facets-checkbox-item.expanded-item.hidden-item{display:none;position:absolute}.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .facets-checkbox-item label.facet-label{flex:1;padding-left:10px;padding-top:2px}.cleanslate .ondemand-facets-wrapper .facet-groups .facet-group .search-facets-subitems{padding-left:24px}.cleanslate .ondemand-facets-wrapper .facet-groups .child-facet-group{display:flex;flex-direction:column;max-width:375px}@media(max-width:639px){.cleanslate .ondemand-facets-wrapper .facet-groups .child-facet-group{height:270px}}.cleanslate .ondemand-facets-wrapper .facet-groups .child-facet-group.hidden{visibility:hidden}@media(max-width:639px){.cleanslate .ondemand-facets-wrapper .facet-groups .child-facet-group.hidden{display:none}}.cleanslate .ondemand-facets-wrapper .facet-groups .child-facet-group .header{border-bottom:none;margin-bottom:0}.cleanslate .ondemand-facets-wrapper .facet-groups .child-facet-group .child-facet-container{border:1px solid #ccc;flex:1;overflow-y:auto;padding:10px 15px}@media(min-width:850px){.cleanslate .ondemand-facets-wrapper .facet-groups .parent-child-facet-group{display:inline-flex}.cleanslate .ondemand-facets-wrapper .facet-groups .child-facet-group{display:inline-flex;width:375px}}.cleanslate .ondemand-facets-wrapper .facet-actions{background-color:#333;color:#666;font-family:inherit;font-size:16px;font-weight:400;height:44px;line-height:18px;text-align:center}.cleanslate .ondemand-facets-wrapper .facet-actions button{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .ondemand-facets-wrapper .facet-actions button:focus,.cleanslate .ondemand-facets-wrapper .facet-actions button:hover{text-decoration:none}.cleanslate .ondemand-facets-wrapper .facet-actions button{color:#666;margin:0 25px;padding:13px}.cleanslate .ondemand-facets-wrapper .facet-actions button:hover{cursor:pointer}.cleanslate .ondemand-facets-wrapper .facet-actions button.facet-actions-done{color:#76b900;font-weight:700}.cleanslate .ondemand-facets-wrapper .facet-actions button.facet-actions-reset{color:#f7f7f7}.cleanslate .ondemand-facets-wrapper.dark-theme{background-color:#eee}.cleanslate .ondemand-facets-wrapper.dark-theme .facet-groups{padding-top:0;text-align:center}.cleanslate .ondemand-facets-wrapper.dark-theme .facet-groups .facet-group{min-width:300px;text-align:left}.cleanslate .ondemand-facets-wrapper.dark-theme .facet-actions{background-color:#ddd}.cleanslate .search-summary-wrapper{border-bottom:1px solid #ccc}.cleanslate .search-summary-wrapper,.cleanslate .search-summary-wrapper .summary-spelling{align-items:left;display:flex;flex-direction:column}.cleanslate .search-summary-wrapper .summary-spelling .spelling-suggestion{color:#1a1a1a;flex:1;font-family:inherit;font-size:16px;font-weight:700;letter-spacing:0;line-height:1.25em}.cleanslate .search-summary-wrapper .summary-spelling .spelling-dontsuggest{color:#1a1a1a;flex:1;font-family:inherit;font-size:14px;font-weight:400;letter-spacing:0;line-height:1.25em}.cleanslate .search-summary-wrapper .summary-spelling .spelling-dontsuggest button{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .search-summary-wrapper .summary-spelling .spelling-dontsuggest button:focus,.cleanslate .search-summary-wrapper .summary-spelling .spelling-dontsuggest button:hover{text-decoration:none}.cleanslate .search-summary-wrapper .summary-spelling .spelling-dontsuggest button{color:#76b900;font-family:inherit;font-size:inherit;text-decoration:underline}.cleanslate .search-summary-wrapper .search-summary-info{align-items:center;border-bottom:1px solid #ccc;display:flex}.cleanslate .search-summary-wrapper .search-summary-info .summary-total{color:#1a1a1a;flex:1;font-family:inherit;font-size:12px;font-weight:700;letter-spacing:0;line-height:1.25em;overflow-x:hidden;text-overflow:ellipsis;white-space:nowrap}.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting{align-items:center;display:flex;justify-content:flex-end;margin:0 0 3px}.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li{list-style:none;margin:0;padding:0 1px}.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li button{background:none;border:none;border-radius:0;box-shadow:none;display:inline;margin:0;padding:0}.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li button:focus,.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li button:hover{text-decoration:none}.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li button{align-items:center;color:#999;cursor:pointer;display:flex;font-family:inherit;font-size:12px;font-weight:400;height:24px;line-height:24px;padding:5px 7.5px;text-decoration:none}.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li button svg{fill:#999;cursor:pointer;width:24px}.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li button.order-desc svg{transform:rotate(0deg)}.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li button.order-asc svg{-webkit-transform:rotate(180deg) scaleX(-1);-moz-transform:rotate(180deg) scaleX(-1);-o-transform:rotate(180deg) scaleX(-1);transform:rotate(180deg) scaleX(-1)}.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li button.active,.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li button:hover{border-bottom:3px solid #76b900;margin-bottom:-3px}.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li button:disabled{cursor:default}.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li button span{margin-left:10px}.cleanslate .search-summary-wrapper .search-summary-info.on-demand .summary-total{align-items:center;display:flex;font-weight:400}.cleanslate .search-summary-wrapper .search-summary-info.on-demand ul.summary-sorting>li button{color:#1a1a1a}.cleanslate .search-summary-wrapper .search-summary-info.on-demand ul.summary-sorting>li button span{color:#666}@media screen and (min-width:640px){.cleanslate .search-summary-wrapper .search-summary-info .summary-total{font-size:16px}.cleanslate .search-summary-wrapper .search-summary-info ul.summary-sorting>li button{font-size:16px;padding:10px 7.5px}.cleanslate .search-summary-wrapper .search-summary-info.on-demand .summary-total,.cleanslate .search-summary-wrapper .search-summary-info.on-demand ul.summary-sorting>li button{font-size:22px}}.cleanslate ul.summary-layout-select{align-items:center;display:flex;flex:0 0 70px;justify-content:flex-end;margin:0 0 3px}.cleanslate ul.summary-layout-select>li{list-style:none;margin:0;padding:0 1px}.cleanslate ul.summary-layout-select>li button{background:none;border:none;border-radius:0;box-shadow:none;display:inline;margin:0;padding:0}.cleanslate ul.summary-layout-select>li button:focus,.cleanslate ul.summary-layout-select>li button:hover{text-decoration:none}.cleanslate ul.summary-layout-select>li button{color:#999;cursor:pointer;display:block;font-family:inherit;font-size:12px;font-weight:400;height:24px;line-height:24px;padding:5px 7.5px;text-decoration:none}.cleanslate ul.summary-layout-select>li button svg{cursor:pointer}.cleanslate ul.summary-layout-select>li button.active,.cleanslate ul.summary-layout-select>li button:hover{color:#76b900}.cleanslate ul.summary-layout-select>li button:disabled,.cleanslate ul.summary-layout-select>li button:disabled svg{cursor:default}.cleanslate .search-tips{background-color:#f7f7f7;color:#1a1a1a;margin:30px 0;padding:30px}.cleanslate .search-tips .search-tips-text{color:#1a1a1a;font-family:inherit;font-size:15px;font-weight:700;line-height:25px}.cleanslate .search-tips ul{list-style:none;margin:0}.cleanslate .search-tips ul li{color:#1a1a1a;font-family:inherit;font-size:15px;font-weight:400;line-height:25px;padding-left:15px;position:relative}.cleanslate .search-tips ul li:before{color:#76b900;content:">";height:20px;left:0;position:absolute;top:0;width:20px}.cleanslate .search-no-results-popular{border-bottom:1px solid #999}.cleanslate .search-no-results-headline{color:#000;font-family:inherit;font-size:20px;font-weight:400;line-height:25px}.cleanslate .search-no-results-headline .bold{color:#000;font-family:inherit;font-size:20px;font-weight:700;line-height:25px}.cleanslate .grid-layout-wrapper{display:block;padding-top:15px}.cleanslate .grid-layout-wrapper .search-results-item.no-results{color:#76b900;font-family:inherit;font-size:18px;font-weight:400;line-height:25px;text-decoration:none}@media screen and (min-width:640px){.cleanslate .grid-layout-wrapper .search-results-item.no-results{font-size:24px;line-height:31px}}.cleanslate .grid-layout-wrapper .grid-cell{display:inline-flex;width:33%}.cleanslate .grid-layout-wrapper .grid-cell .grid-cell-contents{padding:7.5px;width:100%}@media screen and (min-width:1024px){.cleanslate .grid-layout-wrapper .grid-cell .grid-cell-contents{padding:15px}}@media(max-width:1023px){.cleanslate .grid-layout-wrapper .grid-cell,.cleanslate .grid-layout-wrapper .grid-cell.reduced{width:50%}}@media(max-width:666px){.cleanslate .grid-layout-wrapper .grid-cell{width:100%}}.cleanslate .grid-layout-wrapper.reduced .grid-cell{width:33%}@media(max-width:1023px){.cleanslate .grid-layout-wrapper.reduced .grid-cell{width:50%}}@media(max-width:414px){.cleanslate .grid-layout-wrapper.reduced .grid-cell{width:100%}}.cleanslate .fade-in{animation:fadeIn 1s ease;-webkit-animation:fadeIn 1s ease;-moz-animation:fadeIn 1s ease}@keyframes fadeIn{0%{opacity:0}to{opacity:1}}@-moz-keyframes fadeIn{0%{opacity:0}to{opacity:1}}@-webkit-keyframes fadeIn{0%{opacity:0}to{opacity:1}}.cleanslate .item-image{background-color:#ccc;height:0;padding-bottom:56.25%;position:relative;width:100%}.cleanslate .item-image .overlay{background-color:#000;bottom:0;left:0;opacity:.2;position:absolute;right:0;top:0;z-index:100}.cleanslate .item-image .private{bottom:7px;position:absolute;right:10px;z-index:999}.cleanslate .item-image .private svg{color:#fff}.cleanslate .item-image img.thumbnail{height:100%;left:0;opacity:0;position:absolute;transition:opacity 1s ease;width:100%}.cleanslate .item-image img.thumbnail.in{opacity:1}.cleanslate .item-image .video-duration-container{background-color:#333;color:#f1f1f1;font-family:inherit;font-size:11px;font-weight:400;line-height:11px;padding:5px;position:absolute;right:5px;text-decoration:none;top:5px;z-index:100}.cleanslate img.ondemand-ad{opacity:0}.cleanslate img.ondemand-ad.fade-in{opacity:1}.cleanslate .img-placeholder{height:0;padding-bottom:56.25%;position:relative;width:100%}.cleanslate .img-placeholder .img-placeholder-inner{height:100%;left:0;opacity:0;position:absolute;width:100%}.cleanslate .img-placeholder .img-placeholder-inner.fade-in{opacity:1}.cleanslate .search-results-wrapper{padding-top:30px}@media screen and (min-width:640px){.cleanslate .search-results-wrapper.my-playlists{flex:1}}.cleanslate .search-results-wrapper .related-sessions-container{padding-bottom:50px}@media screen and (min-width:640px){.cleanslate .search-results-wrapper .related-sessions-container{padding-bottom:75px}}.cleanslate .search-results-wrapper .search-results-event-item,.cleanslate .search-results-wrapper .search-results-item{letter-spacing:0;overflow-wrap:break-word;padding-bottom:50px}.cleanslate .search-results-wrapper .search-results-event-item>div,.cleanslate .search-results-wrapper .search-results-item>div{line-height:1.25em}.cleanslate .search-results-wrapper .search-results-event-item .item-title a,.cleanslate .search-results-wrapper .search-results-event-item.no-results,.cleanslate .search-results-wrapper .search-results-item .item-title a,.cleanslate .search-results-wrapper .search-results-item.no-results{color:#1a1a1a;font-size:18px;line-height:26px;text-decoration:none}.cleanslate .search-results-wrapper .search-results-event-item .item-title,.cleanslate .search-results-wrapper .search-results-event-item.no-results,.cleanslate .search-results-wrapper .search-results-item .item-title,.cleanslate .search-results-wrapper .search-results-item.no-results{padding-bottom:5px}.cleanslate .search-results-wrapper .search-results-event-item .item-title a,.cleanslate .search-results-wrapper .search-results-event-item.no-results a,.cleanslate .search-results-wrapper .search-results-item .item-title a,.cleanslate .search-results-wrapper .search-results-item.no-results a{color:#1a1a1a;font-size:16px;line-height:24px;text-decoration:none}.cleanslate .search-results-wrapper .search-results-event-item .item-new,.cleanslate .search-results-wrapper .search-results-item .item-new{color:red;font-weight:700}.cleanslate .search-results-wrapper .search-results-event-item .item-summary,.cleanslate .search-results-wrapper .search-results-item .item-summary{color:#1a1a1a;font-size:16px;padding-bottom:5px}.cleanslate .search-results-wrapper .search-results-event-item .item-footer,.cleanslate .search-results-wrapper .search-results-item .item-footer{color:#999;font-size:12px;overflow-x:hidden;padding-bottom:0;text-overflow:ellipsis}.cleanslate .search-results-wrapper .search-results-event-item .item-footer .item-footer-inner,.cleanslate .search-results-wrapper .search-results-event-item .item-footer .item-footer-inner *,.cleanslate .search-results-wrapper .search-results-item .item-footer .item-footer-inner,.cleanslate .search-results-wrapper .search-results-item .item-footer .item-footer-inner *{white-space:nowrap}.cleanslate .search-results-wrapper .search-results-event-item .item-footer .item-footer-inner .item-date,.cleanslate .search-results-wrapper .search-results-item .item-footer .item-footer-inner .item-date{font-weight:700}.cleanslate .search-results-wrapper .search-results-event-item .item-footer .item-footer-inner .item-link a,.cleanslate .search-results-wrapper .search-results-item .item-footer .item-footer-inner .item-link a{color:#999;text-decoration:none}.cleanslate .search-results-wrapper .search-results-item:last-child{padding-bottom:30px}.cleanslate .search-results-wrapper .nod-drag-content .search-results-event-item{padding-bottom:0}.cleanslate .search-results-wrapper .search-results-event-item{display:flex}.cleanslate .search-results-wrapper .promoted-item{align-content:center;align-items:flex-start;display:flex;flex-direction:row}.cleanslate .search-results-wrapper .promoted-item:not(:last-child){margin-bottom:30px}.cleanslate .search-results-wrapper .promoted-item .recommended{border:2px solid #ccc;color:#1a1a1a;display:inline-block;font-size:16px;line-height:24px;margin-bottom:8px;padding:0 5px}.cleanslate .search-results-wrapper .promoted-item a.call-to-action{color:#76b900;text-decoration:none}@media screen and (min-width:640px){.cleanslate .search-results-wrapper .promoted-item .event-item-image{min-width:26%;width:26%}}.cleanslate .search-results-wrapper .promoted-item .promoted-item-image{background-origin:content-box;background-repeat:no-repeat;background-size:100%;height:0;margin-bottom:15px;padding-bottom:56.25%;width:100%}@media screen and (min-width:640px){.cleanslate .search-results-wrapper .promoted-item .promoted-item-image{height:176px;margin-bottom:0;margin-right:15px;padding-bottom:0;width:176px}}.cleanslate .search-results-wrapper .promoted-item.small-view{display:block}.cleanslate .search-results-wrapper .promoted-item.small-view .event-item-image{display:block;margin-bottom:15px;max-width:310px;width:100%}.cleanslate .search-results-wrapper .event-item-image{display:inline-block;min-width:50%;padding:0 15px 0 0;width:50%}@media screen and (min-width:640px){.cleanslate .search-results-wrapper .event-item-image{height:auto;min-width:30%;padding:0 30px 0 0;width:30%}.cleanslate .search-results-wrapper.reduced .event-item-image{padding:0 15px 0 0}}@media screen and (min-width:1024px){.cleanslate .search-results-wrapper.reduced .event-item-image{padding:0 30px 0 0}}.cleanslate .search-results-wrapper .event-item-info{display:flex;flex:1}.cleanslate .search-results-wrapper .event-item-info .event-item-text{flex:1}.cleanslate .search-results-wrapper .event-item-info .event-item-text .item-summary{display:none}.cleanslate .search-results-wrapper .event-item-info .event-item-text .item-summary.playlists{display:block}.cleanslate .search-results-wrapper .event-item-info .event-item-text .item-date{color:#999;font-size:15px;font-style:italic;line-height:25px}.cleanslate .search-results-wrapper .event-item-info .event-item-text .authors{font-size:15px;line-height:25px;margin-bottom:10px}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags{display:flex;margin-bottom:15px}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type{background-color:#fff;border:2px solid #999;border-radius:18px;color:#1a1a1a;font-family:inherit;font-size:12px;font-weight:500;line-height:12px;margin-right:10px;overflow:hidden;padding:4px 8px;text-overflow:ellipsis;white-space:nowrap}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.talk{background-color:#ef9100;border-color:#ef9100}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.tutorial{background-color:#d73d00;border-color:#d73d00;color:#fff}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.panel{background-color:#ef9100;border-color:#ef9100}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.demo{background-color:#cd8ef0;border-color:#cd8ef0}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.inception-startup-showcase,.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.startup-showcase{background-color:#0074df;border-color:#0074df;color:#fff}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.special-event{background-color:#961515;border-color:#961515;color:#fff}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.poster,.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.posters{background-color:#4d1368;border-color:#4d1368;color:#fff}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.dli-training,.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.training-lab{background-color:#1dbba4;border-color:#1dbba4}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.episode{background-color:#bff230;border-color:#bff230}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.keynote{background-color:#76b900;border-color:#76b900}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.expo-theater{background-color:#741d9d;border-color:#741d9d;color:#fff}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.fireside-chat{background-color:#c21e1e;border-color:#c21e1e;color:#fff}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.training{background-color:#f9c500;border-color:#f9c500}.cleanslate .search-results-wrapper .event-item-info .event-item-text .session-tags .session-type.sponsored-talk{background-color:#0046a4;border-color:#0046a4;color:#fff}@media screen and (min-width:640px){.cleanslate .search-results-wrapper .event-item-info .event-item-text .item-summary{display:block}}.cleanslate .search-results-wrapper .event-item-info .event-item-actions,.cleanslate .search-results-wrapper .event-item-info .event-item-share{margin-left:5px}@media screen and (min-width:640px){.cleanslate .search-results-wrapper .event-item-info .event-item-actions,.cleanslate .search-results-wrapper .event-item-info .event-item-share{margin-left:25px}}.cleanslate .search-results-wrapper .search-result-action-btn{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .search-results-wrapper .search-result-action-btn:focus,.cleanslate .search-results-wrapper .search-result-action-btn:hover{text-decoration:none}.cleanslate .search-results-wrapper .search-result-action-btn{color:#666;display:block;font-size:14pt;margin-left:auto;padding:5px 0 5px 5px}.cleanslate .search-results-wrapper .search-result-action-btn svg{cursor:pointer}.cleanslate .search-results-wrapper .search-result-action-btn:hover{color:#76b900}@media screen and (min-width:640px){.cleanslate .search-results-wrapper .search-results-event-item,.cleanslate .search-results-wrapper .search-results-item{padding-bottom:50px}.cleanslate .search-results-wrapper .search-results-event-item .item-title a,.cleanslate .search-results-wrapper .search-results-event-item.no-results,.cleanslate .search-results-wrapper .search-results-item .item-title a,.cleanslate .search-results-wrapper .search-results-item.no-results{font-size:24px;line-height:30px}.cleanslate .search-results-wrapper .search-results-event-item .item-summary,.cleanslate .search-results-wrapper .search-results-item .item-summary{font-size:15px;line-height:22px}.cleanslate .search-results-wrapper .search-results-event-item .item-footer,.cleanslate .search-results-wrapper .search-results-item .item-footer{font-size:12px;padding-bottom:0}.cleanslate .search-results-wrapper.reduced .search-results-event-item .item-title a{font-size:16px;line-height:24px}}@media screen and (min-width:1024px){.cleanslate .search-results-wrapper.reduced .search-results-event-item .item-title a{font-size:24px;line-height:30px}}.cleanslate .search-facets-wrapper .radix-accordion-content-box .facets-checkbox-item{color:#1a1a1a;display:flex;font-family:inherit;font-size:16px;font-weight:400;line-height:24px;padding-bottom:10px}.cleanslate .search-facets-wrapper .radix-accordion-content-box .facets-checkbox-item.expanded-item{opacity:1;position:relative;visibility:visible}.cleanslate .search-facets-wrapper .radix-accordion-content-box .facets-checkbox-item.expanded-item.hidden-item{opacity:0;position:absolute;visibility:hidden}.cleanslate .search-facets-wrapper .radix-accordion-content-box .facets-checkbox-item label.facet-label{flex:1;padding-left:5px}.cleanslate .search-facets-wrapper .radix-accordion-content-box .search-facets-subitems{padding-left:23px}.cleanslate .search-facets-show-more-wrapper{padding-bottom:5px}.cleanslate .search-facets-show-more-wrapper .search-facets-show-more-btn{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .search-facets-show-more-wrapper .search-facets-show-more-btn:focus,.cleanslate .search-facets-show-more-wrapper .search-facets-show-more-btn:hover{text-decoration:none}.cleanslate .search-facets-show-more-wrapper .search-facets-show-more-btn{align-items:center;color:#000;display:inline-flex;font-family:inherit;font-size:16px;font-weight:700;gap:8px;line-height:24px;padding-left:25.5px}.cleanslate .search-facets-show-more-wrapper .facet-show-more-arrow{border-bottom:2px solid #000;border-right:2px solid #000;display:inline-block;height:8px;width:8px}.cleanslate .search-facets-show-more-wrapper .facet-show-more-arrow.down{margin-bottom:6px;transform:rotate(45deg)}.cleanslate .search-facets-show-more-wrapper .facet-show-more-arrow.up{margin-top:2px;transform:rotate(-135deg)}.cleanslate .slick-slider{-webkit-touch-callout:none;-webkit-tap-highlight-color:rgba(0,0,0,0);box-sizing:border-box;display:block;position:relative;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-khtml-user-select:none}.cleanslate .slick-list{display:block;margin:0;overflow:hidden;padding:0;position:relative}.cleanslate .slick-list:focus{outline:none}.cleanslate .slick-list.dragging{cursor:pointer;cursor:hand}.cleanslate .slick-slider .slick-list,.cleanslate .slick-slider .slick-track{-webkit-transform:translateZ(0);-moz-transform:translateZ(0);-ms-transform:translateZ(0);-o-transform:translateZ(0);transform:translateZ(0)}.cleanslate .slick-track{display:block;left:0;margin-left:auto;margin-right:auto;position:relative;top:0}.cleanslate .slick-track:after,.cleanslate .slick-track:before{content:"";display:table}.cleanslate .slick-track:after{clear:both}.cleanslate .slick-loading .slick-track{visibility:hidden}.cleanslate .slick-slide{display:none;float:left;height:100%;min-height:1px}.cleanslate [dir=rtl] .slick-slide{float:right}.cleanslate .slick-slide img{display:block}.cleanslate .slick-slide.slick-loading img{display:none}.cleanslate .slick-slide.dragging img{pointer-events:none}.cleanslate .slick-initialized .slick-slide{display:block}.cleanslate .slick-loading .slick-slide{visibility:hidden}.cleanslate .slick-vertical .slick-slide{border:1px solid #0000;display:block;height:auto}.cleanslate .slick-arrow.slick-hidden{display:none}.cleanslate .slick-next,.cleanslate .slick-prev{background:#0000;border:none;color:#0000;cursor:pointer;display:block;font-size:0;height:20px;line-height:0;outline:none;padding:0;position:absolute;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);width:20px}.cleanslate .slick-next:focus,.cleanslate .slick-next:hover,.cleanslate .slick-prev:focus,.cleanslate .slick-prev:hover{background:#0000;color:#0000;outline:none}.cleanslate .slick-next:focus:before,.cleanslate .slick-next:hover:before,.cleanslate .slick-prev:focus:before,.cleanslate .slick-prev:hover:before{opacity:1}.cleanslate .slick-next.slick-disabled,.cleanslate .slick-prev.slick-disabled{opacity:.25}.cleanslate .slick-next:before,.cleanslate .slick-prev:before{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;color:#fff;font-family:slick;font-size:20px;line-height:1;opacity:.75}.cleanslate .slick-prev{left:-30px}.cleanslate [dir=rtl] .slick-prev{left:auto;right:-30px}.cleanslate .slick-prev:before,.cleanslate [dir=rtl] .slick-prev:before{content:none!important}.cleanslate .slick-next{right:-30px}.cleanslate [dir=rtl] .slick-next{left:-30px;right:auto}.cleanslate .slick-next:before,.cleanslate [dir=rtl] .slick-next:before{content:none!important}.cleanslate.small .slick-prev{left:-20px}.cleanslate.small .slick-next,.cleanslate.small [dir=rtl] .slick-prev{right:-20px}.cleanslate.small [dir=rtl] .slick-next{left:-20px}.cleanslate .featured-videos-container{border-bottom:1px solid #d8d8d8;border-top:1px solid #d8d8d8;padding:30px 0}@media screen and (min-width:640px){.cleanslate .featured-videos-container{margin:-15px 0 -30px}}.cleanslate .gallery-wrapper .next button,.cleanslate .gallery-wrapper .prev button{align-items:center;background:none;background-color:#76b900;border:none;border-radius:0;box-shadow:none;color:#1a1a1a;display:flex;height:35px;justify-content:center;padding:0;width:30px}.cleanslate .gallery-wrapper .next button.slick-disabled:hover,.cleanslate .gallery-wrapper .prev button.slick-disabled:hover{background-color:#76b900!important;cursor:inherit}.cleanslate .gallery-wrapper .next button:hover,.cleanslate .gallery-wrapper .prev button:hover{background-color:#66a000}.cleanslate .gallery-wrapper .next button svg:hover,.cleanslate .gallery-wrapper .prev button svg:hover{cursor:pointer}.cleanslate .gallery-wrapper .next button.slick-disabled svg:hover,.cleanslate .gallery-wrapper .prev button.slick-disabled svg:hover{cursor:inherit}.cleanslate .gallery-wrapper .next button{margin-right:0}.cleanslate .gallery-wrapper .contents{color:#1a1a1a;flex:1;flex-direction:column;font-family:inherit;font-size:16px;font-weight:400;line-height:22px}.cleanslate .gallery-wrapper .contents .item-col{box-sizing:border-box;-webkit-box-sizing:border-box;padding-bottom:8px;padding-left:7.5px;padding-right:7.5px}@media screen and (min-width:1290px){.cleanslate .gallery-wrapper .contents .item-col{padding-left:15px;padding-right:15px}}.cleanslate .gallery-wrapper .contents .see-all{text-align:center}.cleanslate .gallery-wrapper .contents .see-all a{border-bottom:2px solid #76b900;color:#1a1a1a;font-family:inherit;font-size:15px;font-weight:700;line-height:20px;text-decoration:none}.cleanslate .gallery-wrapper .contents .header{align-items:end;display:flex;justify-content:space-between;margin-bottom:15px;padding:0 7.5px}@media screen and (min-width:1290px){.cleanslate .gallery-wrapper .contents .header{padding:0 15px}}.cleanslate .gallery-wrapper .contents .header .heading{color:#1a1a1a;flex:1;font-family:inherit;font-size:24px;font-weight:700;line-height:24px;padding:0;text-align:left}.cleanslate .gallery-wrapper .contents .header .heading span{font-size:15px;font-weight:300;margin-left:10px}.cleanslate .gallery-wrapper .contents .header .heading a{color:#1a1a1a;text-decoration:none}.cleanslate .gallery-wrapper .contents .header .heading.small-heading{font-size:18px;line-height:18px}.cleanslate .gallery-wrapper .contents .header .header-actions{align-items:center;display:flex}.cleanslate .gallery-wrapper .contents .header .header-actions .nav-buttons{align-items:center;display:flex;margin-left:15px}.cleanslate .gallery-wrapper .contents .footer{margin-top:15px}.cleanslate .gallery-wrapper.featured .contents .item-col{padding-bottom:0;padding-left:7.5px;padding-right:7.5px}@media screen and (min-width:1290px){.cleanslate .gallery-wrapper.featured .contents .item-col{padding-left:15px;padding-right:15px}}.cleanslate .gallery-wrapper.featured .contents .card{box-shadow:none}.cleanslate .gallery-wrapper.featured .contents .topic{padding-left:12px}.cleanslate .gallery-wrapper .card,.cleanslate .grid-layout-wrapper .card{border-radius:0;box-shadow:0 3px 6px rgba(0,0,0,.161)}.cleanslate .gallery-wrapper .card a,.cleanslate .grid-layout-wrapper .card a{text-decoration:none}.cleanslate .gallery-wrapper .card .item-info,.cleanslate .grid-layout-wrapper .card .item-info{background-color:#fff;height:195px;overflow:hidden;padding:15px}.cleanslate .gallery-wrapper .card .item-info .more,.cleanslate .grid-layout-wrapper .card .item-info .more{background:none;float:right;position:relative;text-align:right}.cleanslate .gallery-wrapper .card .item-info .more button,.cleanslate .grid-layout-wrapper .card .item-info .more button{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .gallery-wrapper .card .item-info .more button:focus,.cleanslate .gallery-wrapper .card .item-info .more button:hover,.cleanslate .grid-layout-wrapper .card .item-info .more button:focus,.cleanslate .grid-layout-wrapper .card .item-info .more button:hover{text-decoration:none}.cleanslate .gallery-wrapper .card .item-info .more button,.cleanslate .grid-layout-wrapper .card .item-info .more button{color:#1a1a1a}.cleanslate .gallery-wrapper .card .item-info .speakers,.cleanslate .grid-layout-wrapper .card .item-info .speakers{color:#1a1a1a;font-family:inherit;font-size:15px;font-weight:700;height:20px;line-height:20px;margin-bottom:15px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.cleanslate .gallery-wrapper .card .item-info .title,.cleanslate .grid-layout-wrapper .card .item-info .title{color:#000;font-family:inherit;font-size:18px;font-weight:700;line-height:24px;margin-bottom:15px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;width:100%}.cleanslate .gallery-wrapper .card .item-info .summary,.cleanslate .grid-layout-wrapper .card .item-info .summary{color:#1a1a1a;font-family:inherit;font-size:15px;font-weight:400;line-height:25px;overflow:hidden}.cleanslate .gallery-wrapper .card .item-info .session-tags,.cleanslate .grid-layout-wrapper .card .item-info .session-tags{display:flex;margin-bottom:15px}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type{background-color:#fff;border:2px solid #999;border-radius:18px;color:#1a1a1a;font-family:inherit;font-size:12px;font-weight:500;line-height:12px;margin-right:10px;overflow:hidden;padding:4px 8px;text-overflow:ellipsis;white-space:nowrap}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.talk,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.talk{background-color:#ef9100;border-color:#ef9100}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.tutorial,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.tutorial{background-color:#d73d00;border-color:#d73d00;color:#fff}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.panel,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.panel{background-color:#ef9100;border-color:#ef9100}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.demo,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.demo{background-color:#cd8ef0;border-color:#cd8ef0}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.inception-startup-showcase,.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.startup-showcase,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.inception-startup-showcase,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.startup-showcase{background-color:#0074df;border-color:#0074df;color:#fff}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.special-event,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.special-event{background-color:#961515;border-color:#961515;color:#fff}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.poster,.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.posters,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.poster,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.posters{background-color:#4d1368;border-color:#4d1368;color:#fff}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.dli-training,.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.training-lab,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.dli-training,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.training-lab{background-color:#1dbba4;border-color:#1dbba4}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.episode,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.episode{background-color:#bff230;border-color:#bff230}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.keynote,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.keynote{background-color:#76b900;border-color:#76b900}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.expo-theater,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.expo-theater{background-color:#741d9d;border-color:#741d9d;color:#fff}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.fireside-chat,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.fireside-chat{background-color:#c21e1e;border-color:#c21e1e;color:#fff}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.training,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.training{background-color:#f9c500;border-color:#f9c500}.cleanslate .gallery-wrapper .card .item-info .session-tags .session-type.sponsored-talk,.cleanslate .grid-layout-wrapper .card .item-info .session-tags .session-type.sponsored-talk{background-color:#0046a4;border-color:#0046a4;color:#fff}.cleanslate .gallery-wrapper .card .item-info.grid .more,.cleanslate .grid-layout-wrapper .card .item-info.grid .more{background:none;margin-right:0;margin-top:0;padding-right:0;width:auto}.cleanslate .gallery-wrapper .card .item-info.grid .more button,.cleanslate .grid-layout-wrapper .card .item-info.grid .more button{color:#1a1a1a}.cleanslate .gallery-wrapper .card .item-info.grid .speakers,.cleanslate .grid-layout-wrapper .card .item-info.grid .speakers{display:block}@media screen and (min-width:481px){.cleanslate .gallery-wrapper .card .item-info,.cleanslate .grid-layout-wrapper .card .item-info{padding:15px}}@media screen and (min-width:640px){.cleanslate .gallery-wrapper .card .item-info .title,.cleanslate .grid-layout-wrapper .card .item-info .title{font-size:24px;line-height:30px}}.cleanslate .gallery-wrapper .card .featured-info,.cleanslate .grid-layout-wrapper .card .featured-info{background:linear-gradient(0deg,#000,#0000);display:flex;flex-flow:row;height:68px;line-height:normal;margin-top:-95px;padding:20px 15px 10px;pointer-events:none;position:relative;z-index:101}.cleanslate .gallery-wrapper .card .featured-info.no-background,.cleanslate .grid-layout-wrapper .card .featured-info.no-background{background:none}.cleanslate .gallery-wrapper .card .featured-info .info,.cleanslate .grid-layout-wrapper .card .featured-info .info{display:flex;flex:1;flex-flow:column}.cleanslate .gallery-wrapper .card .featured-info .info .title,.cleanslate .grid-layout-wrapper .card .featured-info .info .title{color:#fff;font-family:inherit;font-size:22px;font-weight:700;line-height:23px;max-height:49px;overflow:hidden;padding-bottom:5px}.cleanslate .gallery-wrapper .card .featured-info .info .speakers,.cleanslate .grid-layout-wrapper .card .featured-info .info .speakers{color:#fff;font-family:inherit;font-size:15px;font-weight:400;line-height:21px;margin-bottom:5px;margin-top:auto;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.cleanslate .gallery-wrapper .card .featured-info .more,.cleanslate .grid-layout-wrapper .card .featured-info .more{display:flex;flex-flow:column;min-width:24px}.cleanslate .gallery-wrapper .card .featured-info .more button,.cleanslate .grid-layout-wrapper .card .featured-info .more button{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .gallery-wrapper .card .featured-info .more button:focus,.cleanslate .gallery-wrapper .card .featured-info .more button:hover,.cleanslate .grid-layout-wrapper .card .featured-info .more button:focus,.cleanslate .grid-layout-wrapper .card .featured-info .more button:hover{text-decoration:none}.cleanslate .gallery-wrapper .card .featured-info .more button,.cleanslate .grid-layout-wrapper .card .featured-info .more button{color:#fff;margin-top:auto;pointer-events:all}.cleanslate .gallery-wrapper .card .featured-info .more button svg,.cleanslate .grid-layout-wrapper .card .featured-info .more button svg{margin-bottom:-3px}.cleanslate .related-item-small{padding-bottom:30px}.cleanslate .related-item-small a{text-decoration:none}.cleanslate .related-item-small .item-info{background-color:#fff;height:68px;padding:10px 0}.cleanslate .related-item-small .item-info .speakers{color:#1a1a1a;font-family:inherit;font-size:15px;font-weight:400;line-height:20px}.cleanslate .related-item-small .item-info .title{color:#76b900;font-family:inherit;font-size:16px;font-weight:400;line-height:22px;margin-bottom:13px;max-height:44px;overflow:hidden}.cleanslate .related-item-small .item-info .item-date{color:#999;font-family:inherit;font-size:12px;font-weight:700;line-height:18px}.cleanslate .error-message{color:#1a1a1a;font-family:inherit;font-size:16px;font-weight:400;line-height:24px;padding:30px}.cleanslate .event-details-wrapper{padding-bottom:30px}.cleanslate .event-details-wrapper a{color:#76b900;text-decoration:none}.cleanslate .event-details-wrapper a:hover{text-decoration:underline}.cleanslate .event-details-wrapper .placeholder{background-color:#000;height:0;overflow:hidden;padding-top:40%;width:100%}.cleanslate .event-details-wrapper .event-details{display:block;width:100%}@media screen and (min-width:1024px){.cleanslate .event-details-wrapper .event-details{display:flex}}.cleanslate .event-details-wrapper .event-details .session-details{color:#1a1a1a;flex:1;font-family:inherit;font-size:16px;font-weight:400;line-height:24px;margin-right:30px}.cleanslate .event-details-wrapper .event-details .session-details .header-info{flex:1}.cleanslate .event-details-wrapper .event-details .session-details .header-info .title{color:#1a1a1a;font-size:32px;margin-bottom:22.5px;padding:0}.cleanslate .event-details-wrapper .event-details .session-details .header-info .speakers{margin-bottom:22.5px}.cleanslate .event-details-wrapper .event-details .session-details .info{flex:1}.cleanslate .event-details-wrapper .event-details .session-details .info .summary{margin-bottom:22.5px}.cleanslate .event-details-wrapper .event-details .session-details .learn-more-about-topic{border-top:1px solid #ccc;margin-bottom:30px;margin-top:30px;padding-top:30px}.cleanslate .event-details-wrapper .event-details .session-details .learn-more-about-topic h3{font-size:26px;padding-top:0}.cleanslate .event-details-wrapper .event-details .session-details .learn-more-about-topic h4{font-size:20px;margin-bottom:10px}.cleanslate .event-details-wrapper .event-details .session-details .learn-more-about-topic ul{list-style-type:none}.cleanslate .event-details-wrapper .event-details .session-details .learn-more-about-topic li.topic-item{margin-bottom:8px}.cleanslate .event-details-wrapper .event-details .session-details .learn-more-about-topic li.topic-item .topic-item-bullet{font-size:12px;padding-right:10px}.cleanslate .event-details-wrapper .event-details .session-details .learn-more-about-topic li.topic-item .topic-item-label{font-weight:700;margin-right:10px}.cleanslate .event-details-wrapper .event-details .session-details .learn-more-about-topic li.topic-item .topic-item-link{padding-left:6px}.cleanslate .event-details-wrapper .event-details .session-details .learn-more-about-topic li.topic-item ul.topic-sub-item-list{list-style-type:circle}.cleanslate .event-details-wrapper .event-details .session-details .learn-more-about-topic li.topic-item ul.topic-sub-item-list li.topic-sub-item{list-style-position:outside;padding-left:5px}.cleanslate .event-details-wrapper .event-details .session-metadata{width:100%}@media screen and (min-width:1024px){.cleanslate .event-details-wrapper .event-details .session-metadata{width:300px}}.cleanslate .event-details-wrapper .event-details .session-metadata .actions{text-align:left;width:100%}.cleanslate .event-details-wrapper .event-details .session-metadata .actions .btn-container{display:inline-flex}.cleanslate .event-details-wrapper .event-details .session-metadata .actions .btn-container .action-btn{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .event-details-wrapper .event-details .session-metadata .actions .btn-container .action-btn:focus,.cleanslate .event-details-wrapper .event-details .session-metadata .actions .btn-container .action-btn:hover{text-decoration:none}.cleanslate .event-details-wrapper .event-details .session-metadata .actions .btn-container .action-btn{color:#666;display:inline-block;font-size:15px;line-height:167%;margin-right:30px;max-width:80px}.cleanslate .event-details-wrapper .event-details .session-metadata .actions .btn-container .action-btn i,.cleanslate .event-details-wrapper .event-details .session-metadata .actions .btn-container .action-btn span,.cleanslate .event-details-wrapper .event-details .session-metadata .actions .btn-container .action-btn svg{cursor:pointer}.cleanslate .event-details-wrapper .event-details .session-metadata .actions .btn-container .action-btn span{color:#000;font-weight:700}.cleanslate .event-details-wrapper .event-details .session-metadata .actions .btn-container:last-child .action-btn{margin-right:0}.cleanslate .event-details-wrapper .event-details .session-metadata .metadata-bottom{display:flex;flex-direction:column}@media screen and (min-width:640px){.cleanslate .event-details-wrapper .event-details .session-metadata .metadata-bottom{flex-direction:row}}@media screen and (min-width:1024px){.cleanslate .event-details-wrapper .event-details .session-metadata .metadata-bottom{flex-direction:column}}.cleanslate .event-details-wrapper .event-details .session-metadata .metadata-bottom .event-data{color:#1a1a1a;flex:1;font-family:inherit;font-size:15px;font-weight:500;line-height:15px;margin-bottom:30px;margin-top:30px}.cleanslate .event-details-wrapper .event-details .session-metadata .metadata-bottom .event-data .label{font-weight:700}.cleanslate .event-details-wrapper .event-details .session-metadata .metadata-bottom .promotion{margin-bottom:30px;margin-top:30px;max-width:300px}.cleanslate .event-details-wrapper .event-details .session-metadata .download-session-attachments{margin-top:30px}.cleanslate .event-details-wrapper .event-details .session-metadata .download-session-attachments .download-link{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .event-details-wrapper .event-details .session-metadata .download-session-attachments .download-link:focus,.cleanslate .event-details-wrapper .event-details .session-metadata .download-session-attachments .download-link:hover{text-decoration:none}.cleanslate .event-details-wrapper .event-details .session-metadata .download-session-attachments .download-link{color:#76b900;display:block;font-family:inherit;font-size:15px;font-weight:400;line-height:22px;text-align:left}.cleanslate .event-details-wrapper .event-details .session-metadata .download-session-attachments .download-link:hover{text-decoration:underline;text-decoration-color:#000;text-decoration-thickness:2px;text-underline-offset:.3125em}.cleanslate .event-details-wrapper .event-details .session-metadata .download-session-attachments .download-link span{cursor:pointer}.cleanslate .event-details-wrapper .event-details .session-metadata .download-session-attachments .download-link svg{cursor:pointer;margin-bottom:-5px}.cleanslate .event-details-wrapper .header{color:#1a1a1a;display:block;font-family:inherit;font-size:16px;font-weight:400;line-height:24px}.cleanslate .event-details-wrapper .header .header-info{flex:1}.cleanslate .event-details-wrapper .header .header-info .title{color:#1a1a1a;font-size:24px;margin-bottom:30px;padding:0}.cleanslate .event-details-wrapper .header .header-info .speakers{margin-bottom:15px}.cleanslate .event-details-wrapper .header .actions{border-top:1px solid #ccc;padding-top:15px;text-align:left;width:100%}.cleanslate .event-details-wrapper .header .actions .btn-container{display:inline-block}.cleanslate .event-details-wrapper .header .actions .action-btn{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .event-details-wrapper .header .actions .action-btn:focus,.cleanslate .event-details-wrapper .header .actions .action-btn:hover{text-decoration:none}.cleanslate .event-details-wrapper .header .actions .action-btn{color:#666;display:inline-block;font-size:16pt;margin:0 15px;max-width:80px;padding:5px 0 5px 5px}.cleanslate .event-details-wrapper .header .actions .action-btn i,.cleanslate .event-details-wrapper .header .actions .action-btn span,.cleanslate .event-details-wrapper .header .actions .action-btn svg{cursor:pointer}.cleanslate .event-details-wrapper .header .actions .action-btn span{color:#000;font-size:16px;font-weight:700}@media screen and (min-width:640px){.cleanslate .event-details-wrapper .header{display:flex}.cleanslate .event-details-wrapper .header .actions{border-top:none;padding-top:0;text-align:right;width:325px}}@media screen and (min-width:1024px){.cleanslate .event-details-wrapper .header .actions{width:350px}.cleanslate .event-details-wrapper .header .actions .action-btn{margin:0 15px}.cleanslate .event-details-wrapper .header .actions .action-btn span{color:#1a1a1a;font-size:16px;font-weight:700}}.cleanslate .event-details-wrapper .details{color:#1a1a1a;display:block;font-family:inherit;font-size:16px;font-weight:400;line-height:24px;margin-bottom:30px}.cleanslate .event-details-wrapper .details .info{flex:1}.cleanslate .event-details-wrapper .details .info .summary{margin:15px 0}.cleanslate .event-details-wrapper .details .info .event-data{border-top:1px solid #ccc;margin-bottom:30px;margin-top:30px;padding-top:30px}.cleanslate .event-details-wrapper .details .info .event-data .label{color:#1a1a1a;font-family:inherit;font-size:15px;font-weight:600;line-height:32px}.cleanslate .event-details-wrapper .details .info .download-link{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .event-details-wrapper .details .info .download-link:focus,.cleanslate .event-details-wrapper .details .info .download-link:hover{text-decoration:none}.cleanslate .event-details-wrapper .details .info .download-link{color:#76b900;display:block;font-family:inherit;font-size:16px;font-weight:400;line-height:24px;margin-right:20px}.cleanslate .event-details-wrapper .details .info .download-link:hover{text-decoration:underline;text-decoration-color:#000;text-decoration-thickness:2px;text-underline-offset:.3125em}.cleanslate .event-details-wrapper .details .info .download-link span{cursor:pointer}.cleanslate .event-details-wrapper .details .info .download-link svg{cursor:pointer;margin-bottom:-5px}.cleanslate .event-details-wrapper .details .promotion{text-align:left;width:100%}@media screen and (min-width:640px){.cleanslate .event-details-wrapper .details{display:flex}.cleanslate .event-details-wrapper .details .info .summary{margin-top:0}.cleanslate .event-details-wrapper .details .promotion{text-align:right;width:325px}}@media screen and (min-width:1024px){.cleanslate .event-details-wrapper .details .promotion{width:350px}}.cleanslate .event-details-wrapper .ai-summary-details-container{background:linear-gradient(90deg,#e9f5fb,#f4fae0);border-radius:4px;box-shadow:0 3px 6px #0000001f;margin:30px auto;width:100%}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-collapsible-header{align-items:center;color:#1a1a1a;cursor:pointer;display:flex;justify-content:space-between;padding:15px}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-collapsible-header span{color:#666;margin-left:6px}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-collapsible-header .ai-summary-details-actions,.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-collapsible-header .ai-summary-details-header-text{align-items:center;display:flex}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-collapsible-header .ai-summary-details-actions .summary-actions{align-items:center;display:none}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-collapsible-header .ai-summary-details-actions .summary-actions .summary-action-btn{align-items:center;background:#0000;border:none;box-shadow:none;cursor:pointer;display:flex;padding:6px}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-collapsible-header .ai-summary-details-actions svg.summary-toggle{margin-left:15px}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-collapsible-header.open .ai-summary-details-actions .summary-actions{display:flex}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-collapsible-header.open .ai-summary-details-actions svg.summary-toggle{-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-content{padding:0 20px}@media(max-width:396px){.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-content.open{padding:15px}}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-content h3{color:#1a1a1a;font-size:20px;padding-top:0}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-content li{list-style-type:disc}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-content li::marker{color:#76b900}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-content .ai-summary-details-text{color:#1a1a1a}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-content .ai-summary-details-text ul{margin:0;padding-left:15px}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-content .ai-summary-details-text ul li{list-style-position:outside;margin-bottom:15px;padding-left:5px}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-content .ai-summary-details-footer{color:#666;font-size:13px;padding:15px 0;text-align:left}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-content .ai-summary-details-footer a{border-bottom:2px solid #76b900;color:#666}.cleanslate .event-details-wrapper .ai-summary-details-container .ai-summary-details-content .ai-summary-details-footer a:hover{text-decoration:none}.cleanslate .search-pagination-wrapper{color:inherit;display:flex;font-family:inherit;font-size:12px;font-weight:700;line-height:1.25em}.cleanslate .search-pagination-wrapper .pager-left{flex:0 0 128px}.cleanslate .search-pagination-wrapper .pager-center{background:#eee 0 0 no-repeat padding-box;color:#999;display:flex;flex:1;flex-direction:column;justify-content:center;letter-spacing:0;text-align:center}.cleanslate .search-pagination-wrapper .pager-right{flex:0 0 128px}.cleanslate .search-pagination-wrapper button{background:#76b900 0 0 no-repeat padding-box;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;color:#fff;height:29px;margin:0;padding:0;text-align:center;width:128px}.cleanslate .search-pagination-wrapper button:disabled{background-color:#ccc}@media screen and (min-width:640px){.cleanslate .search-pagination-wrapper{font-size:16px}.cleanslate .search-pagination-wrapper button{height:39px}}.cleanslate .rating-container{display:flex;margin-bottom:22.5px;max-width:360px}.cleanslate .rating-container .rating-summary{background-color:#fff;border:2px solid #999;border-radius:30px;color:#1a1a1a;display:flex;font-size:15px;line-height:15px;margin-right:15px;padding:4px 10px;width:max-content}.cleanslate .rating-container .rating-summary.no-rating{border-color:#999;color:#999}.cleanslate .rating-container .add-rating-btn{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .rating-container .add-rating-btn:focus,.cleanslate .rating-container .add-rating-btn:hover{text-decoration:none}.cleanslate .rating-container .add-rating-btn{align-items:center;color:#1a1a1a;display:flex;font-family:inherit;font-size:16px;font-weight:700;line-height:16px}.cleanslate .rating-container .add-rating-btn span{border-bottom:2px solid #76b900}.cleanslate .rating-container .add-rating-btn svg{color:#666;margin-left:10px}.cleanslate .rating-container.display-rating{margin:30px 0}.cleanslate .stars{background-color:#fff;border-radius:30px;color:#666;display:flex;font-size:14px;margin-right:15px;padding:5px 15px 0;width:max-content}.cleanslate .stars svg{color:#76b900}.cleanslate .stars span{padding-left:10px;vertical-align:middle}.cleanslate .search-box-wrapper .search-box-popper{background-color:#fff;border-radius:0;margin:11px;max-width:300px}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-arrow{height:10px;position:absolute;width:24px}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-arrow[data-placement*=bottom]{height:10px;left:0;margin-top:-9px;top:0;width:24px}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-arrow[data-placement*=bottom]:before{border-color:#0000 #0000 #fff;border-width:0 12px 10px}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-arrow[data-placement*=top]{bottom:0;height:10px;left:0;margin-bottom:-9px;width:24px}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-arrow[data-placement*=top]:before{border-color:#fff #0000 #0000;border-width:10px 12px 0}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-arrow[data-placement*=right]{height:24px;left:0;margin-left:-9px;width:10px}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-arrow[data-placement*=right]:before{border-color:#0000 #fff #0000 #0000;border-width:12px 10px 12px 0}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-arrow[data-placement*=left]{height:24px;margin-right:-9px;right:0;width:10px}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-arrow[data-placement*=left]:before{border-color:#0000 #0000 #0000 #fff;border-width:12px 0 12px 10px}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-arrow:before{border-style:solid;content:"";display:block;height:0;margin:auto;width:0}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-content{background-color:#fff;opacity:1}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-content .search-input-wrapper .search-input-suggestions-dropdown{-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;top:28px!important}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-content .search-input-wrapper .search-input-block{align-items:center;padding:5px 15px}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-content .search-input-wrapper .search-input-block input{color:#1a1a1a;font-family:inherit;font-size:18px;font-weight:400;line-height:24px}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-content .search-input-wrapper .search-input-block .search-input-right button{padding-top:5px;width:24px}.cleanslate .search-box-wrapper .search-box-popper .search-box-popper-content .search-input-wrapper .search-input-block .search-input-right button svg{width:100%}.cleanslate .animated-thumbnail{position:relative}.cleanslate .animated-thumbnail .main-thumbnail{bottom:0;left:0;position:absolute;right:0;top:0;z-index:101}.cleanslate .speaker-info-btn{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .speaker-info-btn:focus,.cleanslate .speaker-info-btn:hover{text-decoration:none}.cleanslate .speaker-info-btn{color:#1a1a1a;font-family:inherit;font-size:inherit;font-weight:700;text-align:left;text-decoration:underline;text-decoration-color:#76b900;text-decoration-thickness:2px;text-underline-offset:.3125em}.cleanslate .speaker-info-btn:active,.cleanslate .speaker-info-btn:focus{background:none}.cleanslate .speaker-info-btn:hover{text-decoration:underline;text-decoration-color:#000;text-decoration-thickness:2px;text-underline-offset:.3125em}.cleanslate .swg-spinner-wrapper{align-items:center;display:flex;justify-content:center;padding:21px}.cleanslate .spinner-overlay{background-color:#0000;bottom:0;left:0;padding:0;position:absolute;right:0;top:0;z-index:101}.cleanslate .swg-spinner,.cleanslate .swg-spinner:after{border-radius:50%;height:5em;width:5em}.cleanslate .swg-spinner{-webkit-animation:load8 1.1s linear infinite;animation:load8 1.1s linear infinite;border:.6em solid #666;border-left-color:#0000;font-size:10px;margin:20px 0;position:relative;text-indent:-9999em;-webkit-transform:translateZ(0);-ms-transform:translateZ(0);transform:translateZ(0)}.cleanslate .spinner-overlay .swg-spinner-wrapper .swg-spinner{border:.6em solid #76b900;border-left-color:#0000;font-size:8px}.cleanslate .gallery-spinner-wrapper{height:300px}.cleanslate .gallery-spinner-wrapper.featured{height:250px}.cleanslate .gallery-spinner-wrapper .swg-spinner-wrapper .swg-spinner{margin-top:50px}.cleanslate .featured-videos-spinner-wrapper{height:180px}.cleanslate .featured-videos-spinner-wrapper .swg-spinner-wrapper .swg-spinner{border-color:#fff #fff #fff #0000;margin-top:50px}.cleanslate .thumbnail-slices-container{height:0;padding-bottom:56.25%;position:relative;width:100%}@-webkit-keyframes load8{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}@keyframes load8{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}.swg-small-spinner-wrapper{align-items:center;display:flex;justify-content:center}.swg-small-spinner,.swg-small-spinner:after{border-radius:50%;height:3em;width:3em}.swg-small-spinner{-webkit-animation:load8 1.1s linear infinite;animation:load8 1.1s linear infinite;border:.6em solid #666;border-left-color:#0000;font-size:5px;position:relative;text-indent:-9999em;-webkit-transform:translateZ(0);-ms-transform:translateZ(0);transform:translateZ(0)}.details-actions{align-items:center;display:flex;flex-direction:column;justify-content:center}@media screen and (min-width:640px){.details-actions{flex-direction:row;justify-content:space-between}}.details-actions .actions{display:flex}.details-actions .actions .btn-container{display:inline-block}.details-actions .actions .btn-container .action-btn{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.details-actions .actions .btn-container .action-btn:focus,.details-actions .actions .btn-container .action-btn:hover{text-decoration:none}.details-actions .actions .btn-container .action-btn{color:#666;display:inline-block;font-size:15px;line-height:167%;margin-right:30px;max-width:80px}.details-actions .actions .btn-container .action-btn i,.details-actions .actions .btn-container .action-btn span,.details-actions .actions .btn-container .action-btn svg{cursor:pointer}.details-actions .actions .btn-container .action-btn span{color:#000;font-weight:700}.details-actions .actions .btn-container:last-child .action-btn{margin-right:0}.player-view-toggle{display:flex;justify-content:center}.details-actions,.player-view-toggle{margin-bottom:30px}.details-actions .toggle-container,.player-view-toggle .toggle-container{background-color:#fff;border:1px solid #ccc;border-radius:50px;display:flex;margin-bottom:30px;padding:5px}@media screen and (min-width:640px){.details-actions .toggle-container,.player-view-toggle .toggle-container{margin-bottom:0}}.details-actions .toggle-container .toggles,.player-view-toggle .toggle-container .toggles{background-color:#f7f7f7;border-radius:50px;display:flex}.details-actions .toggle-container .toggles button.toggle-btn,.player-view-toggle .toggle-container .toggles button.toggle-btn{background:#0000;border:none;border-radius:50px;color:#666;font-size:16px;font-weight:700;padding:5px 10px}.details-actions .toggle-container .toggles button.toggle-btn sup,.player-view-toggle .toggle-container .toggles button.toggle-btn sup{font-size:12px;top:-.5em!important}.details-actions .toggle-container .toggles button.toggle-btn:hover,.player-view-toggle .toggle-container .toggles button.toggle-btn:hover{cursor:pointer}.details-actions .toggle-container .toggles button.toggle-btn.active,.player-view-toggle .toggle-container .toggles button.toggle-btn.active{background-color:#76b900;color:#1a1a1a}.details-actions .toggle-container .toggles button.toggle-btn.active:hover,.player-view-toggle .toggle-container .toggles button.toggle-btn.active:hover{cursor:default}.cleanslate .event-details-wrapper .session-video-container,.session-video-container{display:flex;flex-direction:row}.cleanslate .event-details-wrapper .session-video-player-container,.session-video-player-container{background-color:#000;height:240px;margin:0 auto 30px;position:relative;width:426px}@media screen and (min-width:1024px){.cleanslate .event-details-wrapper .session-video-player-container,.session-video-player-container{height:360px;width:640px}}@media screen and (min-width:1290px){.cleanslate .event-details-wrapper .session-video-player-container,.session-video-player-container{height:540px;width:960px}}.cleanslate .event-details-wrapper .session-video-player-container.sticky,.session-video-player-container.sticky{background-color:#f1f1f1;position:-webkit-sticky;position:sticky;top:46px;z-index:1}.cleanslate .event-details-wrapper .session-video-player-container .open-transcript-search,.session-video-player-container .open-transcript-search{position:absolute;right:-38px;top:0}.cleanslate .event-details-wrapper .session-video-player-container .open-transcript-search button,.session-video-player-container .open-transcript-search button{align-items:center;background-color:#fff;border:1px solid #ccc;border-left:none;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;display:flex;height:38px;margin:0;padding:0;width:38px}.cleanslate .event-details-wrapper .session-video-player-container .open-transcript-search button .search-icon,.session-video-player-container .open-transcript-search button .search-icon{cursor:pointer}.cleanslate .event-details-wrapper .session-video-player-container .open-transcript-search button .icon-container,.session-video-player-container .open-transcript-search button .icon-container{align-items:center;background:none;display:flex;height:100%;width:100%}.cleanslate .event-details-wrapper .session-video-player-container .open-transcript-search button .icon-container:hover,.session-video-player-container .open-transcript-search button .icon-container:hover{cursor:pointer;filter:brightness(.5)}.cleanslate .event-details-wrapper .session-video-player-container .open-transcript-search button svg,.session-video-player-container .open-transcript-search button svg{height:24px;margin:0 auto;width:24px}.cleanslate .transcript-search-container,.transcript-search-container{background-color:#fff;border:1px solid #ccc;box-sizing:border-box;color:#1a1a1a;display:flex;flex:1;flex-direction:column;font-family:inherit;font-size:16px;font-weight:400;height:360px;line-height:24px;margin-bottom:30px}@media screen and (min-width:1290px){.cleanslate .transcript-search-container,.transcript-search-container{height:540px}}.cleanslate .transcript-search-container .transcript-search-header,.transcript-search-container .transcript-search-header{border-bottom:1px solid #ccc;display:flex;flex-direction:row;padding:8px 15px 0}.cleanslate .transcript-search-container .transcript-search-header .search-header-title,.transcript-search-container .transcript-search-header .search-header-title{color:#1a1a1a;font-family:inherit;font-size:16px;font-weight:600;line-height:24px;margin-right:15px;padding-bottom:4px}.cleanslate .transcript-search-container .transcript-search-header .search-header-title sup,.transcript-search-container .transcript-search-header .search-header-title sup{font-size:.75em;position:relative;top:-.5em;vertical-align:initial}.cleanslate .transcript-search-container .transcript-search-header .search-header-title button,.transcript-search-container .transcript-search-header .search-header-title button{background-color:#0000;border:none;font:inherit;outline:none}.cleanslate .transcript-search-container .transcript-search-header .search-header-title button:hover,.transcript-search-container .transcript-search-header .search-header-title button:hover{color:#76b900;cursor:pointer}.cleanslate .transcript-search-container .transcript-search-header .search-header-title.active,.transcript-search-container .transcript-search-header .search-header-title.active{border-bottom:3px solid #76b900}.cleanslate .transcript-search-container .transcript-search-header .search-header-title.active button:hover,.transcript-search-container .transcript-search-header .search-header-title.active button:hover{color:inherit;cursor:default}.cleanslate .transcript-search-container .transcript-search-header .search-header-close,.transcript-search-container .transcript-search-header .search-header-close{flex:1;padding-bottom:4px;text-align:right;width:24px}.cleanslate .transcript-search-container .transcript-search-header .search-header-close .search-close-btn,.transcript-search-container .transcript-search-header .search-header-close .search-close-btn{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .transcript-search-container .transcript-search-header .search-header-close .search-close-btn:focus,.cleanslate .transcript-search-container .transcript-search-header .search-header-close .search-close-btn:hover,.transcript-search-container .transcript-search-header .search-header-close .search-close-btn:focus,.transcript-search-container .transcript-search-header .search-header-close .search-close-btn:hover{text-decoration:none}.cleanslate .transcript-search-container .transcript-search-header .search-header-close .search-close-btn,.transcript-search-container .transcript-search-header .search-header-close .search-close-btn{color:#999;font-size:18px}.cleanslate .transcript-search-container .transcript-search-header .search-header-close .search-close-btn:hover,.transcript-search-container .transcript-search-header .search-header-close .search-close-btn:hover{filter:brightness(.5)}.cleanslate .transcript-search-container .transcript-search-content,.transcript-search-container .transcript-search-content{display:none}.cleanslate .transcript-search-container .transcript-search-content.active,.transcript-search-container .transcript-search-content.active{display:block}.cleanslate .transcript-search-container .transcript-search-input,.transcript-search-container .transcript-search-input{border-bottom:1px solid #ccc}.cleanslate .transcript-search-container .search-input-block,.transcript-search-container .search-input-block{align-items:normal;background:#fff 0 0 no-repeat padding-box;display:flex;padding:8px 15px 3px}.cleanslate .transcript-search-container .search-input-block .search-input-left,.transcript-search-container .search-input-block .search-input-left{display:flex;flex:1;flex-direction:row}.cleanslate .transcript-search-container .search-input-block .search-input-left .search-icon-wrapper,.transcript-search-container .search-input-block .search-input-left .search-icon-wrapper{width:35px}.cleanslate .transcript-search-container .search-input-block .search-input-left input,.transcript-search-container .search-input-block .search-input-left input{border:none;color:#1a1a1a;font-family:inherit;font-size:16px;font-weight:400;height:22px;letter-spacing:0;line-height:24px;outline:none;width:100%}.cleanslate .transcript-search-container .search-input-block .search-input-left input::placeholder,.transcript-search-container .search-input-block .search-input-left input::placeholder{color:#999}.cleanslate .transcript-search-container .search-input-block .search-input-left input::-webkit-input-placeholder,.transcript-search-container .search-input-block .search-input-left input::-webkit-input-placeholder{color:#999}.cleanslate .transcript-search-container .search-input-block .search-input-left input:-ms-input-placeholder,.transcript-search-container .search-input-block .search-input-left input:-ms-input-placeholder{color:#999}.cleanslate .transcript-search-container .search-input-block .search-input-left input[type=search]::-webkit-search-cancel-button,.cleanslate .transcript-search-container .search-input-block .search-input-left input[type=search]::-webkit-search-decoration,.cleanslate .transcript-search-container .search-input-block .search-input-left input[type=search]::-webkit-search-results-button,.cleanslate .transcript-search-container .search-input-block .search-input-left input[type=search]::-webkit-search-results-decoration,.transcript-search-container .search-input-block .search-input-left input[type=search]::-webkit-search-cancel-button,.transcript-search-container .search-input-block .search-input-left input[type=search]::-webkit-search-decoration,.transcript-search-container .search-input-block .search-input-left input[type=search]::-webkit-search-results-button,.transcript-search-container .search-input-block .search-input-left input[type=search]::-webkit-search-results-decoration{display:none}.cleanslate .transcript-search-container .search-input-block button,.transcript-search-container .search-input-block button{background:none;border:none;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;color:#999;cursor:pointer;font-size:18px;height:24px;margin:0;padding:0;text-align:right;width:24px}.cleanslate .transcript-search-container .search-input-block button .search-icon,.transcript-search-container .search-input-block button .search-icon{cursor:pointer}.cleanslate .transcript-search-container .search-input-block button:hover,.transcript-search-container .search-input-block button:hover{filter:brightness(.5)}.cleanslate .transcript-search-container .search-input-block button svg,.transcript-search-container .search-input-block button svg{height:24px;width:24px}.cleanslate .transcript-search-container .search-input-block .search-input-right,.transcript-search-container .search-input-block .search-input-right{flex:0 0 20px;text-align:right}.cleanslate .transcript-search-container .search-input-block .search-input-right button,.transcript-search-container .search-input-block .search-input-right button{font-size:12px}.cleanslate .transcript-search-container .transcript-search-items,.transcript-search-container .transcript-search-items{flex:1;overflow-y:auto}.cleanslate .transcript-search-container .transcript-search-items .no-items,.transcript-search-container .transcript-search-items .no-items{padding:15px;text-align:center}.cleanslate .transcript-search-container .transcript-search-items .transcript-search-row,.transcript-search-container .transcript-search-items .transcript-search-row{border-left:3px solid #fff;color:#333;cursor:pointer;display:flex;flex-direction:row;font-size:14px;line-height:20px;padding:8px 15px 8px 12px}.cleanslate .transcript-search-container .transcript-search-items .transcript-search-row:hover,.transcript-search-container .transcript-search-items .transcript-search-row:hover{background-color:#eee;border-left:3px solid #76b900}.cleanslate .transcript-search-container .transcript-search-items .transcript-search-row .time-container,.transcript-search-container .transcript-search-items .transcript-search-row .time-container{overflow:hidden}.cleanslate .transcript-search-container .transcript-search-items .transcript-search-row .time-container.minute-width,.transcript-search-container .transcript-search-items .transcript-search-row .time-container.minute-width{width:40px}.cleanslate .transcript-search-container .transcript-search-items .transcript-search-row .time-container.hour-width,.transcript-search-container .transcript-search-items .transcript-search-row .time-container.hour-width{width:52px}.cleanslate .transcript-search-container .transcript-search-items .transcript-search-row .text-container,.transcript-search-container .transcript-search-items .transcript-search-row .text-container{flex:1;padding-left:8px;word-break:break-word}.cleanslate .transcript-search-container .transcript-search-items .transcript-search-row .text-container span,.transcript-search-container .transcript-search-items .transcript-search-row .text-container span{color:#76b900;font-weight:700}.cleanslate .transcript-search-container .transcript-search-footer,.transcript-search-container .transcript-search-footer{border-top:1px solid #ccc;display:flex;flex-direction:row;justify-content:space-between;padding:0}.cleanslate .transcript-search-container .transcript-search-footer .language-selector,.transcript-search-container .transcript-search-footer .language-selector{flex:1;padding:8px 10px 4px 8px}.cleanslate .transcript-search-container .transcript-search-footer .language-selector .transcript-language-select,.transcript-search-container .transcript-search-footer .language-selector .transcript-language-select{background:#0000;border:none;color:#1a1a1a;font-family:inherit;font-size:16px;font-weight:600;line-height:24px}.cleanslate .transcript-search-container .transcript-search-footer .download-container,.transcript-search-container .transcript-search-footer .download-container{border-left:1px solid #ccc;padding:8px 8px 4px}.cleanslate .transcript-search-container .transcript-search-footer .download-container button,.transcript-search-container .transcript-search-footer .download-container button{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .transcript-search-container .transcript-search-footer .download-container button:focus,.cleanslate .transcript-search-container .transcript-search-footer .download-container button:hover,.transcript-search-container .transcript-search-footer .download-container button:focus,.transcript-search-container .transcript-search-footer .download-container button:hover{text-decoration:none}.cleanslate .transcript-search-container .transcript-search-footer .download-container button,.transcript-search-container .transcript-search-footer .download-container button{color:#666}.cleanslate .transcript-search-container .transcript-search-footer .download-container button:hover,.transcript-search-container .transcript-search-footer .download-container button:hover{color:#76b900}.cleanslate .transcript-search-container .transcript-search-footer .download-container .download-icon,.transcript-search-container .transcript-search-footer .download-container .download-icon{cursor:pointer}.cleanslate .transcript-search-container .nv-container #tabs-container,.transcript-search-container .nv-container #tabs-container{display:none}.cleanslate .transcript-search-container .nv-container .general-container,.transcript-search-container .nv-container .general-container{padding:0}.cleanslate .transcript-search-container .nv-container #main_wrapper,.transcript-search-container .nv-container #main_wrapper{height:auto}.cleanslate .transcript-search-container .nv-container #main_wrapper h2,.transcript-search-container .nv-container #main_wrapper h2{font-size:18px}.cleanslate .transcript-search-container .nv-container #main_wrapper #chatbot_wrapper,.transcript-search-container .nv-container #main_wrapper #chatbot_wrapper{height:498px}@media screen and (min-width:1024px){.cleanslate .transcript-search-container .nv-container #main_wrapper #chatbot_wrapper,.transcript-search-container .nv-container #main_wrapper #chatbot_wrapper{height:318px}}@media screen and (min-width:1290px){.cleanslate .transcript-search-container .nv-container #main_wrapper #chatbot_wrapper,.transcript-search-container .nv-container #main_wrapper #chatbot_wrapper{height:498px}}.cleanslate .transcript-search-container .nv-container #main_wrapper #chatbot_wrapper #vss_chats_container,.transcript-search-container .nv-container #main_wrapper #chatbot_wrapper #vss_chats_container{height:auto}.cleanslate .transcript-search-container .nv-container #main_wrapper #chatbot_wrapper #userInput,.transcript-search-container .nv-container #main_wrapper #chatbot_wrapper #userInput{font-size:12px}.cleanslate .transcript-search-container .nv-container #mobile_main_wrapper,.transcript-search-container .nv-container #mobile_main_wrapper{gap:0;padding-top:0}.cleanslate .transcript-search-container .nv-container #mobile_main_wrapper #chatbot_wrapper,.transcript-search-container .nv-container #mobile_main_wrapper #chatbot_wrapper{height:360px}.transcript-search-container.tabs .transcript-search-container{height:499px}@media screen and (min-width:1024px){.transcript-search-container.tabs .transcript-search-container{height:319px}}@media screen and (min-width:1290px){.transcript-search-container.tabs .transcript-search-container{height:499px}}.cleanslate .event-details-wrapper .event-details-player,.event-details-player{height:0;padding-top:56.25%;position:relative}.cleanslate .event-details-wrapper .event-details-player .video-error,.event-details-player .video-error{align-items:center;display:flex;height:100%;justify-content:center}.cleanslate .event-details-wrapper .event-details-player .video-error .video-error-message,.event-details-player .video-error .video-error-message{text-align:center}.cleanslate .event-details-wrapper .event-details-player .player-container,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail,.event-details-player .player-container,.event-details-player .video-thumbnail{background-color:#000;color:#fff;height:100%;left:0;margin:0 auto;position:absolute;top:0;width:100%}.cleanslate .event-details-wrapper .event-details-player .player-container.has-played .playkit-pre-playback-play-overlay .playkit-pre-playback-play-button,.cleanslate .event-details-wrapper .event-details-player .player-container.mobile-related-state .playkit-gui-area .playkit-bottom-bar,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail.has-played .playkit-pre-playback-play-overlay .playkit-pre-playback-play-button,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail.mobile-related-state .playkit-gui-area .playkit-bottom-bar,.event-details-player .player-container.has-played .playkit-pre-playback-play-overlay .playkit-pre-playback-play-button,.event-details-player .player-container.mobile-related-state .playkit-gui-area .playkit-bottom-bar,.event-details-player .video-thumbnail.has-played .playkit-pre-playback-play-overlay .playkit-pre-playback-play-button,.event-details-player .video-thumbnail.mobile-related-state .playkit-gui-area .playkit-bottom-bar{display:none}.cleanslate .event-details-wrapper .event-details-player .player-container .kaltura-player,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .kaltura-player,.event-details-player .player-container .kaltura-player,.event-details-player .video-thumbnail .kaltura-player{height:100%;width:100%}.cleanslate .event-details-wrapper .event-details-player .player-container .react-player,.cleanslate .event-details-wrapper .event-details-player .player-container .video-js-player,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .react-player,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .video-js-player,.event-details-player .player-container .react-player,.event-details-player .player-container .video-js-player,.event-details-player .video-thumbnail .react-player,.event-details-player .video-thumbnail .video-js-player{height:100%;position:relative;width:100%}.cleanslate .event-details-wrapper .event-details-player .player-container .video-js-player .video-js .vjs-play-progress,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .video-js-player .video-js .vjs-play-progress,.event-details-player .player-container .video-js-player .video-js .vjs-play-progress,.event-details-player .video-thumbnail .video-js-player .video-js .vjs-play-progress{background-color:#76b900}.cleanslate .event-details-wrapper .event-details-player .player-container .video-js-player .video-js .vjs-control-bar,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .video-js-player .video-js .vjs-control-bar,.event-details-player .player-container .video-js-player .video-js .vjs-control-bar,.event-details-player .video-thumbnail .video-js-player .video-js .vjs-control-bar{z-index:1}.cleanslate .event-details-wrapper .event-details-player .player-container .video-js-player .video-js .vjs-menu-item,.cleanslate .event-details-wrapper .event-details-player .player-container .video-js-player .video-js .vjs-menu-title,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .video-js-player .video-js .vjs-menu-item,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .video-js-player .video-js .vjs-menu-title,.event-details-player .player-container .video-js-player .video-js .vjs-menu-item,.event-details-player .player-container .video-js-player .video-js .vjs-menu-title,.event-details-player .video-thumbnail .video-js-player .video-js .vjs-menu-item,.event-details-player .video-thumbnail .video-js-player .video-js .vjs-menu-title{color:#fff}.cleanslate .event-details-wrapper .event-details-player .player-container .video-js-player .video-js .vjs-menu-item.vjs-selected,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .video-js-player .video-js .vjs-menu-item.vjs-selected,.event-details-player .player-container .video-js-player .video-js .vjs-menu-item.vjs-selected,.event-details-player .video-thumbnail .video-js-player .video-js .vjs-menu-item.vjs-selected{background-color:#76b900;color:#000}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay,.event-details-player .player-container .player-overlay,.event-details-player .video-thumbnail .player-overlay{bottom:0;left:0;overflow:hidden;pointer-events:none;position:absolute;right:0;top:0;z-index:1}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay.hidden,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay.hidden,.event-details-player .player-container .player-overlay.hidden,.event-details-player .video-thumbnail .player-overlay.hidden{visibility:hidden}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay.show-related,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay.show-related,.event-details-player .player-container .player-overlay.show-related,.event-details-player .video-thumbnail .player-overlay.show-related{background-color:#000c}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .skip-btn,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .skip-btn,.event-details-player .player-container .player-overlay .skip-btn,.event-details-player .video-thumbnail .player-overlay .skip-btn{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .skip-btn:focus,.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .skip-btn:hover,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .skip-btn:focus,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .skip-btn:hover,.event-details-player .player-container .player-overlay .skip-btn:focus,.event-details-player .player-container .player-overlay .skip-btn:hover,.event-details-player .video-thumbnail .player-overlay .skip-btn:focus,.event-details-player .video-thumbnail .player-overlay .skip-btn:hover{text-decoration:none}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .skip-btn,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .skip-btn,.event-details-player .player-container .player-overlay .skip-btn,.event-details-player .video-thumbnail .player-overlay .skip-btn{align-items:center;border:1px solid #fff;border-right:none;bottom:60px;color:#fff;display:flex;justify-content:center;opacity:.4;padding:5px;pointer-events:all;position:absolute;right:0;width:80px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .skip-btn i,.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .skip-btn span,.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .skip-btn svg,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .skip-btn i,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .skip-btn span,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .skip-btn svg,.event-details-player .player-container .player-overlay .skip-btn i,.event-details-player .player-container .player-overlay .skip-btn span,.event-details-player .player-container .player-overlay .skip-btn svg,.event-details-player .video-thumbnail .player-overlay .skip-btn i,.event-details-player .video-thumbnail .player-overlay .skip-btn span,.event-details-player .video-thumbnail .player-overlay .skip-btn svg{cursor:pointer}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .skip-btn span,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .skip-btn span,.event-details-player .player-container .player-overlay .skip-btn span,.event-details-player .video-thumbnail .player-overlay .skip-btn span{font-size:16px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .skip-btn:hover,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .skip-btn:hover,.event-details-player .player-container .player-overlay .skip-btn:hover,.event-details-player .video-thumbnail .player-overlay .skip-btn:hover{border-color:#76b900!important;color:#76b900!important;opacity:1}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .ad-banner,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .ad-banner,.event-details-player .player-container .player-overlay .ad-banner,.event-details-player .video-thumbnail .player-overlay .ad-banner{margin-left:15px;margin-top:15px;max-height:150px;max-width:700px;overflow:hidden;pointer-events:all}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .ad-banner a,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .ad-banner a,.event-details-player .player-container .player-overlay .ad-banner a,.event-details-player .video-thumbnail .player-overlay .ad-banner a{height:100%;width:100%}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .ad-banner a img,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .ad-banner a img,.event-details-player .player-container .player-overlay .ad-banner a img,.event-details-player .video-thumbnail .player-overlay .ad-banner a img{height:auto;width:auto}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container,.event-details-player .player-container .player-overlay .overlay-share-container,.event-details-player .video-thumbnail .player-overlay .overlay-share-container{background:linear-gradient(90deg,#0000,#0000004d);bottom:0;padding:15px 0 20px 20px;position:absolute;right:-130px;text-align:center;top:0;-webkit-transition:right .3s;-moz-transition:right .3s;-ie-transition:right .3s;-o-transition:right .3s;transition:right .3s}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container.shown,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container.shown,.event-details-player .player-container .player-overlay .overlay-share-container.shown,.event-details-player .video-thumbnail .player-overlay .overlay-share-container.shown{right:0}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container.add-rating,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container.add-rating,.event-details-player .player-container .player-overlay .overlay-share-container.add-rating,.event-details-player .video-thumbnail .player-overlay .overlay-share-container.add-rating{right:-240px;width:240px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container.add-rating.shown,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container.add-rating.shown,.event-details-player .player-container .player-overlay .overlay-share-container.add-rating.shown,.event-details-player .video-thumbnail .player-overlay .overlay-share-container.add-rating.shown{right:0}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container.add-rating .btn-container,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container.add-rating .btn-container,.event-details-player .player-container .player-overlay .overlay-share-container.add-rating .btn-container,.event-details-player .video-thumbnail .player-overlay .overlay-share-container.add-rating .btn-container{display:inline-block}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container .action-btn,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn,.event-details-player .player-container .player-overlay .overlay-share-container .action-btn,.event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container .action-btn:focus,.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container .action-btn:hover,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn:focus,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn:hover,.event-details-player .player-container .player-overlay .overlay-share-container .action-btn:focus,.event-details-player .player-container .player-overlay .overlay-share-container .action-btn:hover,.event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn:focus,.event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn:hover{text-decoration:none}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container .action-btn,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn,.event-details-player .player-container .player-overlay .overlay-share-container .action-btn,.event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn{color:#fff;display:block;font-size:16pt;margin:2px 15px;padding:5px 0 5px 5px;pointer-events:all;width:80px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container .action-btn i,.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container .action-btn span,.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container .action-btn svg,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn i,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn span,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn svg,.event-details-player .player-container .player-overlay .overlay-share-container .action-btn i,.event-details-player .player-container .player-overlay .overlay-share-container .action-btn span,.event-details-player .player-container .player-overlay .overlay-share-container .action-btn svg,.event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn i,.event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn span,.event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn svg{cursor:pointer}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container .action-btn span,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn span,.event-details-player .player-container .player-overlay .overlay-share-container .action-btn span,.event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn span{font-size:14px;font-weight:700}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-share-container .action-btn:hover,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn:hover,.event-details-player .player-container .player-overlay .overlay-share-container .action-btn:hover,.event-details-player .video-thumbnail .player-overlay .overlay-share-container .action-btn:hover{color:#76b900!important}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container,.event-details-player .player-container .player-overlay .overlay-related-videos-container,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container{bottom:50px;left:0;padding:0 10px;pointer-events:all;position:absolute;right:0}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container.small,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container.small,.event-details-player .player-container .player-overlay .overlay-related-videos-container.small,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container.small{top:0}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .error-message,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .error-message,.event-details-player .player-container .player-overlay .overlay-related-videos-container .error-message,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .error-message{color:#fff}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos{margin:0 auto;max-width:1600px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper.mobile,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper.mobile,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper.mobile,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper.mobile{padding:15px 20px 0}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .header,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .header,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .header,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .header{color:#fff;display:flex;font-family:inherit;font-size:20px;font-weight:400;justify-content:space-between;line-height:20px;margin-bottom:15px;padding:0 8px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .header .nav-buttons,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .header .nav-buttons,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .header .nav-buttons,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .header .nav-buttons{display:flex}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col{padding-bottom:0;padding-left:7.5px;padding-right:7.5px}@media screen and (min-width:1024px){.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col{padding-left:15px;padding-right:15px}}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col .card.next-session,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col .card.next-session,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col .card.next-session,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col .card.next-session{border:3px solid #76b900}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col .featured-info .info .title,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col .featured-info .info .title,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col .featured-info .info .title,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col .featured-info .info .title{font-size:18px;line-height:20px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col.mobile,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col.mobile,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col.mobile,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col.mobile{padding-left:5px;padding-right:5px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col.mobile .featured-info,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col.mobile .featured-info,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col.mobile .featured-info,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col.mobile .featured-info{padding:25px 8px 8px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col.mobile .featured-info .info .title,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col.mobile .featured-info .info .title,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col.mobile .featured-info .info .title,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .contents .item-col.mobile .featured-info .info .title{font-size:14px;max-height:58px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .actions,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .actions,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .actions,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .actions{display:flex;padding-top:15px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .actions .play-next,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .actions .play-next,.event-details-player .player-container .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .actions .play-next,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .related-videos .gallery-wrapper .actions .play-next{display:flex;flex:1;justify-content:flex-end}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .action-button,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .action-button,.event-details-player .player-container .player-overlay .overlay-related-videos-container .action-button,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .action-button{background:none;border:1px solid #76b900;border-radius:0;box-shadow:none;color:#76b900;cursor:pointer;font-family:inherit;font-size:15px;font-weight:700;line-height:23px;margin:0 8px;min-width:100px;padding:8px 15px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .action-button:hover,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .action-button:hover,.event-details-player .player-container .player-overlay .overlay-related-videos-container .action-button:hover,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .action-button:hover{background-color:#76b900;color:#fff}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .action-button.primary,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .action-button.primary,.event-details-player .player-container .player-overlay .overlay-related-videos-container .action-button.primary,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .action-button.primary{background-color:#76b900;border:none;color:#fff}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .action-button.primary:hover,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .action-button.primary:hover,.event-details-player .player-container .player-overlay .overlay-related-videos-container .action-button.primary:hover,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .action-button.primary:hover{background-color:#66a000}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .action-button span,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .action-button span,.event-details-player .player-container .player-overlay .overlay-related-videos-container .action-button span,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .action-button span{cursor:pointer;display:flex;vertical-align:middle}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .action-button span svg,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .action-button span svg,.event-details-player .player-container .player-overlay .overlay-related-videos-container .action-button span svg,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .action-button span svg{cursor:pointer}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .play-prev .action-button,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .play-prev .action-button,.event-details-player .player-container .player-overlay .overlay-related-videos-container .play-prev .action-button,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .play-prev .action-button{padding-left:10px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .play-next .action-button,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .play-next .action-button,.event-details-player .player-container .player-overlay .overlay-related-videos-container .play-next .action-button,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .play-next .action-button{padding-right:10px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .auto-play-container,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .auto-play-container,.event-details-player .player-container .player-overlay .overlay-related-videos-container .auto-play-container,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .auto-play-container{margin:15px auto;max-width:150px}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .mobile-controls,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .mobile-controls,.event-details-player .player-container .player-overlay .overlay-related-videos-container .mobile-controls,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .mobile-controls{margin-top:25px;text-align:center}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn,.event-details-player .player-container .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn{background:#0000;border:none;box-shadow:none;color:#fff}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn svg,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn svg,.event-details-player .player-container .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn svg,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn svg{cursor:pointer}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn:hover,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn:hover,.event-details-player .player-container .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn:hover,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn:hover{color:#76b900}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn:last-child,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn:last-child,.event-details-player .player-container .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn:last-child,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .mobile-controls .mobile-control-btn:last-child{margin:0}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .auto-play-control,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .auto-play-control,.event-details-player .player-container .player-overlay .overlay-related-videos-container .auto-play-control,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .auto-play-control{margin:8px;padding:10px 0;position:relative}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .auto-play-control .countdown-bar,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .auto-play-control .countdown-bar,.event-details-player .player-container .player-overlay .overlay-related-videos-container .auto-play-control .countdown-bar,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .auto-play-control .countdown-bar{background-color:#eee;height:4px;width:100%}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .auto-play-control .countdown-bar .progression-bar,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .auto-play-control .countdown-bar .progression-bar,.event-details-player .player-container .player-overlay .overlay-related-videos-container .auto-play-control .countdown-bar .progression-bar,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .auto-play-control .countdown-bar .progression-bar{background-color:#76b900;height:100%}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .auto-play-control button.auto-play-btn,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .auto-play-control button.auto-play-btn,.event-details-player .player-container .player-overlay .overlay-related-videos-container .auto-play-control button.auto-play-btn,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .auto-play-control button.auto-play-btn{background:#0000;border:none;box-shadow:none;margin:0;padding:0;position:absolute;right:-3px;top:0}.cleanslate .event-details-wrapper .event-details-player .player-container .player-overlay .overlay-related-videos-container .auto-play-control button.auto-play-btn svg,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .auto-play-control button.auto-play-btn svg,.event-details-player .player-container .player-overlay .overlay-related-videos-container .auto-play-control button.auto-play-btn svg,.event-details-player .video-thumbnail .player-overlay .overlay-related-videos-container .auto-play-control button.auto-play-btn svg{cursor:pointer}.cleanslate .event-details-wrapper .event-details-player .player-container .video-login,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .video-login,.event-details-player .player-container .video-login,.event-details-player .video-thumbnail .video-login{background:none;border:none;border-radius:0;box-shadow:none;cursor:pointer;display:inline;margin:0;padding:0;text-decoration:none}.cleanslate .event-details-wrapper .event-details-player .player-container .video-login:focus,.cleanslate .event-details-wrapper .event-details-player .player-container .video-login:hover,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .video-login:focus,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .video-login:hover,.event-details-player .player-container .video-login:focus,.event-details-player .player-container .video-login:hover,.event-details-player .video-thumbnail .video-login:focus,.event-details-player .video-thumbnail .video-login:hover{text-decoration:none}.cleanslate .event-details-wrapper .event-details-player .player-container .video-login,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .video-login,.event-details-player .player-container .video-login,.event-details-player .video-thumbnail .video-login{height:100%;width:100%}.cleanslate .event-details-wrapper .event-details-player .player-container .login-overlay,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .login-overlay,.event-details-player .player-container .login-overlay,.event-details-player .video-thumbnail .login-overlay{bottom:0;left:0;position:absolute;right:0;top:0;z-index:998}.cleanslate .event-details-wrapper .event-details-player .player-container .login-overlay:hover,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .login-overlay:hover,.event-details-player .player-container .login-overlay:hover,.event-details-player .video-thumbnail .login-overlay:hover{cursor:pointer}.cleanslate .event-details-wrapper .event-details-player .player-container .overlay-instructions,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .overlay-instructions,.event-details-player .player-container .overlay-instructions,.event-details-player .video-thumbnail .overlay-instructions{background-color:#000000b3;border:1px solid #76b900;color:#76b900;font-family:inherit;font-size:14px;font-weight:700;left:50%;line-height:18px;margin:0;max-width:300px;padding:10px 20px 8px;position:absolute;text-align:center;top:50%;transform:translate(-51%,-51%);z-index:999}.cleanslate .event-details-wrapper .event-details-player .player-container .overlay-instructions span,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .overlay-instructions span,.event-details-player .player-container .overlay-instructions span,.event-details-player .video-thumbnail .overlay-instructions span{position:relative;z-index:1000}.cleanslate .event-details-wrapper .event-details-player .player-container .overlay-instructions:hover,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .overlay-instructions:hover,.event-details-player .player-container .overlay-instructions:hover,.event-details-player .video-thumbnail .overlay-instructions:hover{cursor:pointer}.cleanslate .event-details-wrapper .event-details-player .player-container .download-control,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .download-control,.event-details-player .player-container .download-control,.event-details-player .video-thumbnail .download-control{background:#00000080;border-radius:50px;color:#fff;cursor:pointer;height:100px;left:50%;position:absolute;top:50%;transform:translate(-51%,-51%);width:100px;z-index:999}.cleanslate .event-details-wrapper .event-details-player .player-container .download-control svg,.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .download-control svg,.event-details-player .player-container .download-control svg,.event-details-player .video-thumbnail .download-control svg{color:#fff;cursor:pointer;padding:18px}.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .item-image,.event-details-player .video-thumbnail .item-image{background-color:inherit;height:100%;max-width:100%;padding-bottom:0}.cleanslate .event-details-wrapper .event-details-player .video-thumbnail .item-image img.thumbnail,.event-details-player .video-thumbnail .item-image img.thumbnail{display:block;height:auto;margin:0 auto;max-height:100%;max-width:100%;position:relative;width:auto}.audio-player-container{margin-bottom:30px;width:100%}.audio-player-container .kaltura-player-container{border-bottom-left-radius:0;border-bottom-right-radius:0}.audio-player-container .kaltura-audio-player{height:100%;position:relative;width:100%}.audio-player-container .kaltura-audio-player .playkit-player .playkit-seek-bar .playkit-progress-bar .playkit-progress{background-color:#76b900}.audio-player-container .kaltura-audio-player .playkit-ap-background-image,.audio-player-container .kaltura-audio-player .playkit-ap-bottom-controls .playkit-ap-current-time,.audio-player-container .kaltura-audio-player .playkit-ap-bottom-controls .playkit-ap-duration,.audio-player-container .kaltura-audio-player .playkit-ap-bottom-controls .playkit-ap-playback-controls{display:none}.audio-player-container .kaltura-audio-player .custom-player-controls{align-items:center;bottom:0;color:#ccc;display:flex;justify-content:space-between;left:272px;padding:0 16px 16px;pointer-events:auto;position:absolute;right:0;z-index:100}.audio-player-container .kaltura-audio-player .custom-player-controls.medium{left:122px;padding:0 8px 8px}.audio-player-container .kaltura-audio-player .custom-player-controls.small{left:0;padding:0 8px 8px}.audio-player-container .kaltura-audio-player .custom-player-controls .volume-slider-container{align-items:center;background:#1a1a1a;border:none;border-radius:6px;display:flex;height:24px;left:0;padding:0 8px;position:absolute;top:0;transform:translateY(-100%);width:80px;z-index:100}.audio-player-container .kaltura-audio-player .custom-player-controls .volume-slider-container .radix-slider-track{background-color:#999}.audio-player-container .kaltura-audio-player .custom-player-controls .volume-slider-container .radix-slider-range{background-color:#76b900}.audio-player-container .kaltura-audio-player .custom-player-controls .volume-slider-container .radix-slider-thumb{background-color:#76b900;border-color:#76b900;height:10px;width:10px}.audio-player-container .kaltura-audio-player .custom-player-controls .left-controls{align-items:center;display:flex}.audio-player-container .kaltura-audio-player .custom-player-controls .playback-rate-select{appearance:none;-webkit-appearance:none;-moz-appearance:none;background-color:#0000;border:none;border-radius:6px;color:#ccc;font-size:16px;outline:none}.audio-player-container .kaltura-audio-player .custom-player-controls .playback-rate-select.medium,.audio-player-container .kaltura-audio-player .custom-player-controls .playback-rate-select.small{font-size:14px}.audio-player-container .kaltura-audio-player .custom-player-controls .playback-rate-select:hover{color:#76b900;cursor:pointer}.audio-player-container .kaltura-audio-player .custom-player-controls .center-controls{align-items:center;display:flex}.audio-player-container .kaltura-audio-player .custom-player-controls .right-controls{align-items:center;display:flex;justify-content:flex-end;min-width:100px}.audio-player-container .kaltura-audio-player .custom-player-controls .right-controls.medium,.audio-player-container .kaltura-audio-player .custom-player-controls .right-controls.small{font-size:14px;min-width:85px}@media(min-width:381px)and (max-width:450px){.audio-player-container .kaltura-audio-player .custom-player-controls .right-controls{min-width:auto!important}}.audio-player-container .kaltura-audio-player .custom-player-controls .right-controls span{font-family:Lato,Helvetica Neue,Segoe UI,sans-serif!important}.audio-player-container .kaltura-audio-player .custom-player-controls .play-pause-btn{align-items:center;background-color:#76b900;border:none;border-radius:4px;display:flex;height:40px;justify-content:center;padding:16px 8px;width:40px}.audio-player-container .kaltura-audio-player .custom-player-controls .play-pause-btn.medium,.audio-player-container .kaltura-audio-player .custom-player-controls .play-pause-btn.small{height:32px;padding:8px;width:32px}.audio-player-container .kaltura-audio-player .custom-player-controls .play-pause-btn .pause-icon{height:24px;width:24px}.audio-player-container .kaltura-audio-player .custom-player-controls .play-pause-btn .pause-icon.medium,.audio-player-container .kaltura-audio-player .custom-player-controls .play-pause-btn .pause-icon.small{height:18px;width:18px}.audio-player-container .kaltura-audio-player .custom-player-controls .play-pause-btn .play-icon{color:#000;height:24px;width:24px}.audio-player-container .kaltura-audio-player .custom-player-controls .play-pause-btn .play-icon.medium,.audio-player-container .kaltura-audio-player .custom-player-controls .play-pause-btn .play-icon.small{height:18px;width:18px}.audio-player-container .kaltura-audio-player .custom-player-controls .play-pause-btn:hover{background-color:#66a000;cursor:pointer}.audio-player-container .kaltura-audio-player .custom-player-controls .player-control-btn{background:#0000;border:none;color:#ccc;height:32px;margin:0 15px;padding:0;width:32px}.audio-player-container .kaltura-audio-player .custom-player-controls .player-control-btn.medium,.audio-player-container .kaltura-audio-player .custom-player-controls .player-control-btn.small{margin:0 4px}.audio-player-container .kaltura-audio-player .custom-player-controls .player-control-btn:hover{color:#76b900;cursor:pointer}.audio-player-container .kaltura-audio-player .custom-player-controls .player-control-btn:first-child{margin-left:0}.audio-player-container .ai-podcast-details-container{background:linear-gradient(90deg,#e9f5fb,#f4fae0);border-bottom-left-radius:6px;border-bottom-right-radius:6px;box-shadow:0 3px 6px #0000001f;margin:0 auto;width:100%}.audio-player-container .ai-podcast-details-container .ai-podcast-details-collapsible-header{align-items:center;color:#1a1a1a;cursor:pointer;display:flex;font-size:18px;font-weight:700;justify-content:space-between;padding:15px;user-select:none}.audio-player-container .ai-podcast-details-container .ai-podcast-details-collapsible-header.open{padding:15px 15px 0}.audio-player-container .ai-podcast-details-container .ai-podcast-details-collapsible-header.open svg{transform:rotate(180deg)}.audio-player-container .ai-podcast-details-container .ai-podcast-details-collapsible-header span{margin-right:15px}.audio-player-container .ai-podcast-details-container .ai-podcast-details-content{padding:0 15px;transition:"0.3s ease-in-out"}.audio-player-container .ai-podcast-details-container .ai-podcast-details-content.open{padding:0 15px 15px}@media(max-width:396px){.audio-player-container .ai-podcast-details-container .ai-podcast-details-content.open{padding:15px}}.audio-player-container .ai-podcast-details-container .ai-podcast-details-content li{list-style-type:disc}.audio-player-container .ai-podcast-details-container .ai-podcast-details-content li::marker{color:#76b900}.audio-player-container .ai-podcast-details-container .ai-podcast-details-content .ai-podcast-details-header{font-size:18px;font-weight:700;margin-bottom:0!important}.audio-player-container .ai-podcast-details-container .ai-podcast-details-content .ai-podcast-details-header sup{font-size:16px}.audio-player-container .ai-podcast-details-container .ai-podcast-details-content .ai-podcast-details-formatted-text{line-height:1.3}.display-block{display:block}.display-none{display:none}.share-actions-container{color:#1a1a1a;display:flex;flex-direction:row;font-family:inherit;font-size:16px;font-weight:400;justify-content:center;line-height:24px}.share-actions-container .share-action-item{margin:0 30px}.share-actions-container .share-action-item .share-action-title{margin-bottom:15px}.share-actions-container .share-action-item .share-action-content{box-shadow:0 3px 7px 1px #00000026;margin-bottom:15px;padding:8px 8px 4px;position:relative}.share-actions-container .share-action-item .share-action-content.small{box-shadow:none;padding-top:0}.share-actions-container .share-action-item .share-action-content svg.icon{border-radius:30px}.share-actions-container .share-action-item .share-action-content .qr-icon-container{align-items:center;background-color:#0000;bottom:0;display:flex;justify-content:center;left:0;position:absolute;right:0;top:0}.share-actions-container .share-action-item .share-action-content .qr-icon{border:1px solid #fff;border-radius:2px}.share-actions-container .share-action-item .share-action-footer button{background-color:#76b900;border:none;color:#fff;cursor:pointer;margin-top:5px;padding:10px 4px;width:100%}.share-actions-container .share-action-item .share-action-footer button:hover{background-color:#66a000}.thumbnail-player-container{display:block}.thumbnail-player-container .thumbnail-player{margin-bottom:15px;padding:0;width:100%}.thumbnail-player-container .thumbnail-player-details{margin-bottom:15px}.thumbnail-player-container .thumbnail-player-details .item-title{color:#1a1a1a;font-family:inherit;font-size:24px;font-weight:400;line-height:32px;margin-bottom:15px}.thumbnail-player-container .thumbnail-player-details .speakers{margin-bottom:15px}.thumbnail-player-container .thumbnail-player-details .speaker-name{font-weight:700}@media screen and (min-width:640px){.thumbnail-player-container{display:flex}.thumbnail-player-container .thumbnail-player{height:auto;padding:0 15px 0 0;width:50%}.thumbnail-player-container .thumbnail-player-details{flex:1}}@media screen and (min-width:1024px){.thumbnail-player-container .thumbnail-player{padding:0 30px 0 0;width:33%}}</style>
<style id="_6si-shortening">/* This stylesheet is created by 6sense */
            .mktoForm .mktoFormRow:has(._6si_sff_filled) {
                display: none;
            }
            .mktoForm .mktoFormRow ._6si_sff_filled {
                display: none;
            }
            .hs-form .hs-form-field:has(._6si_sff_filled) {
                display: none;
            }
            .hs-form .hs-form-field ._6si_sff_filled {
                display: none;
            }
            form .form-field:not(.error):has(._6si_sff_filled) {
                display: none;
            }
            form .form-field:not(.error) ._6si_sff_filled {
                display: none;
            }
            .elq-form .row:has(._6si_sff_filled) {
                display: none;
            }
            .elq-form .row ._6si_sff_filled {
                display: none;
            }
            .elq-form .field-wrapper:has(._6si_sff_filled) {
                display: none;
            }
            .elq-form .field-wrapper ._6si_sff_filled {
                display: none;
            }</style>
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "NVIDIA Developer",
    "url": "https://developer.nvidia.com",
    "logo": "https://www.nvidia.com/en-us/about-nvidia/legal-info/logo-brand-usage/_jcr_content/root/responsivegrid/nv_container_392921705/nv_container_412055486/nv_image.coreimg.100.630.png/1703060329095/nvidia-logo-horz.png",
    "sameAs": [
      "https://github.com/nvidia",
      "https://www.linkedin.com/company/nvidia/",
      "https://x.com/nvidiadeveloper"
    ]
  }
</script>
</head>

  <body class="d-flex flex-column h-100" style="overflow: hidden auto;"><header id="main-header">
<div class="meganavigation navigation">
<!-- SVG SYMBOL DEFINITIONS -->
<svg class="hide" style="display: none;" xmlns="http://www.w3.org/2000/svg">
<symbol id="n24-nvidia-logo" viewBox="0 0 108.472 20">
<title id="nvidia_logo_desktop">NVIDIA Home</title>
<desc>NVIDIA Home</desc>
<path d="M1072.628,253.918v-.3h.192c.105,0,.248.008.248.136s-.073.163-.2.163h-.243m0,.211h.129l.3.524h.327l-.33-.545a.3.3,0,0,0,.311-.323c0-.285-.2-.377-.53-.377h-.482v1.245h.276v-.524m1.4-.1a1.2,1.2,0,1,0-1.2,1.157,1.14,1.14,0,0,0,1.2-1.157m-.347,0a.854.854,0,0,1-.855.891v0a.889.889,0,1,1,.855-.887Z" id="nvidia-logo-reg" transform="translate(-965.557 -237.878)"></path>
<path d="M463.9,151.934v13.127h3.707V151.934Zm-29.164-.018v13.145h3.74v-10.2l2.918.01a2.674,2.674,0,0,1,2.086.724c.586.625.826,1.632.826,3.476v5.995h3.624V157.8c0-5.183-3.3-5.882-6.536-5.882Zm35.134.018v13.127h6.013c3.2,0,4.249-.533,5.38-1.727a7.352,7.352,0,0,0,1.316-4.692,7.789,7.789,0,0,0-1.2-4.516c-1.373-1.833-3.352-2.191-6.306-2.191Zm3.677,2.858h1.594c2.312,0,3.808,1.039,3.808,3.733s-1.5,3.734-3.808,3.734h-1.594Zm-14.992-2.858-3.094,10.4-2.965-10.4h-4l4.234,13.127h5.343l4.267-13.127Zm25.749,13.127h3.708V151.935h-3.709ZM494.7,151.939l-5.177,13.117h3.656l.819-2.318h6.126l.775,2.318h3.969l-5.216-13.118Zm2.407,2.393,2.246,6.145h-4.562Z" id="nvidia-logo-NVIDIA" transform="translate(-399.551 -148.155)"></path>
<path d="M129.832,124.085v-1.807c.175-.013.353-.022.533-.028,4.941-.155,8.183,4.246,8.183,4.246s-3.5,4.863-7.255,4.863a4.553,4.553,0,0,1-1.461-.234v-5.478c1.924.232,2.31,1.082,3.467,3.01l2.572-2.169a6.81,6.81,0,0,0-5.042-2.462,9.328,9.328,0,0,0-1,.059m0-5.968v2.7c.177-.014.355-.025.533-.032,6.871-.232,11.348,5.635,11.348,5.635s-5.142,6.253-10.5,6.253a7.906,7.906,0,0,1-1.383-.122v1.668a9.1,9.1,0,0,0,1.151.075c4.985,0,8.59-2.546,12.081-5.559.578.463,2.948,1.591,3.435,2.085-3.319,2.778-11.055,5.018-15.44,5.018-.423,0-.829-.026-1.228-.064v2.344h18.947v-20Zm0,13.009v1.424c-4.611-.822-5.89-5.615-5.89-5.615a9.967,9.967,0,0,1,5.89-2.85v1.563h-.007a4.424,4.424,0,0,0-3.437,1.571s.845,3.035,3.444,3.908m-8.189-4.4a11.419,11.419,0,0,1,8.189-4.449v-1.463c-6.043.485-11.277,5.6-11.277,5.6s2.964,8.569,11.277,9.354v-1.555C123.731,133.451,121.643,126.728,121.643,126.728Z" data-name="Eye Mark" fill="#74b71b" id="nvidia-logo-eye-mark" transform="translate(-118.555 -118.117)"></path>
</symbol>
<symbol id="n24-menu" viewBox="0 0 24 24">
<title>Menu</title>
<desc>Menu icon</desc>
<defs>
<style>
.n24-icon-menu-bg {
	opacity: 0;
}

.n24-icon-menu-stroke {
	fill: none;
	stroke: #666;
	stroke-miterlimit: 10;
	stroke-width: 1.5px;
}
</style></defs>
<g id="n24-icon-menu-group">
<g class="n24-icon-menu-bg" id="n24-icon-menu-boundary">
<path d="M22.5,1.5v21H1.5V1.5h21M24,0H0V24H24V0Z"></path></g>
<line class="n24-icon-menu-stroke" x1="4.5" x2="19.5" y1="7.5" y2="7.5"></line>
<line class="n24-icon-menu-stroke" x1="4.5" x2="19.5" y1="12" y2="12"></line>
<line class="n24-icon-menu-stroke" x1="4.5" x2="19.5" y1="16.5" y2="16.5"></line>
</g>
</symbol>
<symbol id="n32-menu" viewBox="0 0 32 32">
<title>Menu</title>
<desc>Menu icon</desc>
<defs>
<style>
.n32-icon-menu-cls-1, .n32-icon-menu-cls-3, .n32-icon-menu-cls-4 {
	fill: none;
}

.n32-icon-menu-cls-1, .n32-icon-menu-cls-4 {
	stroke: #666;
	stroke-width: 2px;
}

.n32-icon-menu-cls-1 {
	stroke-miterlimit: 10;
}

.n32-icon-menu-cls-2 {
	opacity: 0;
}
</style></defs>
<line class="n32-icon-menu-cls-1" data-name="Line 3b" id="n32-icon-menu-line-3b" x1="16" x2="24" y1="23" y2="23"></line>
<line class="n32-icon-menu-cls-1" data-name="Line 3a" id="n32-icon-menu-line-3a" x1="8" x2="16" y1="23" y2="23"></line>
<line class="n32-icon-menu-cls-1" data-name="Line 2b" id="n32-icon-menu-line-2b" x1="16" x2="24" y1="16" y2="16"></line>
<line class="n32-icon-menu-cls-1" data-name="Line 2a" id="n32-icon-menu-line-2a" x1="8" x2="16" y1="16" y2="16"></line>
<line class="n32-icon-menu-cls-1" data-name="Line 1b" id="n32-icon-menu-line-1b" x1="16" x2="24" y1="9" y2="9"></line>
<line class="n32-icon-menu-cls-1" data-name="Line 1a" id="n32-icon-menu-line-1a" x1="8" x2="16" y1="9" y2="9"></line>
<g class="n32-icon-menu-cls-2" id="Container">
<rect class="n32-icon-menu-cls-3" height="32" width="32"></rect>
<rect class="n32-icon-menu-cls-4" height="30" width="30" x="1" y="1"></rect>
</g>
</symbol>
<symbol id="n24-close-small" viewBox="0 0 24 24">
<title>Close</title>
<desc>Close icon</desc>
<defs>
<style>
.n24-icon-close-small-cls-1 {
	opacity: 0;
}

.n24-icon-close-small-cls-2 {
	fill: none;
	stroke: #666;
	stroke-miterlimit: 10;
	stroke-width: 1.5px;
}
</style></defs>
<g id="n24-icon-close-small">
<g id="boundary">
<g class="n24-icon-close-small-cls-1">
<path d="M22.5,1.5v21H1.5V1.5h21M24,0H0V24H24V0Z"></path>
</g>
</g>
<line class="n24-icon-close-small-cls-2" x1="7.50005" x2="16.50005" y1="7.50002" y2="16.50002"></line>
<line class="n24-icon-close-small-cls-2" x1="7.50005" x2="16.50005" y1="16.50002" y2="7.50002"></line>
</g>
</symbol>
<symbol id="n24-close" viewBox="0 0 24 24">
<title>Close</title>
<desc>Close icon</desc>
<defs>
<style>
.n24-icon-close-cls-1 {
	opacity: 0;
}

.n24-icon-close-cls-2 {
	fill: none;
	stroke: #666;
	stroke-miterlimit: 10;
	stroke-width: 1.5px;
}
</style></defs>
<g id="n24-icon-close">
<g id="boundary">
<g class="n24-icon-close-cls-1">
<path d="M22.5,1.5v21H1.5V1.5h21M24,0H0V24H24V0Z"></path>
</g>
</g>
<line class="n24-icon-close-cls-2" x1="4.5" x2="19.5" y1="4.5" y2="19.5"></line>
<line class="n24-icon-close-cls-2" x1="4.5" x2="19.5" y1="19.5" y2="4.5"></line>
</g>
</symbol>
<symbol id="n32-close" viewBox="0 0 32 32">
<title>Close</title>
<desc>Close icon</desc>
<defs>
<style>
.close-icon {
	fill: #666;
	fill-rule: evenodd;
}
</style></defs>
<path class="close-icon" d="M25,8.82,23.18,7,16,14.18,8.82,7,7,8.82,14.18,16,7,23.18,8.82,25,16,17.82,23.18,25,25,23.18,17.82,16Z" data-name="Close icon path" id="n32-icon-close-path"></path>
</symbol>
<symbol id="n24-caret-down" viewBox="0 0 24 24">
<title>Caret down icon</title>
<desc>Accordion is closed, click to open.</desc>
<defs>
<style>
.n24-icon-caret-down-cls-1 {
	opacity: 0;
}

.n24-icon-caret-down-cls-2 {
	fill: none;
	stroke: #666;
	stroke-miterlimit: 10;
	stroke-width: 1.5px;
}
</style></defs>
<g id="n24-icon-caret-down">
<g id="n24-icon-caret-down-boundary">
<g class="n24-icon-caret-down-cls-1">
<path d="M22.5,1.5v21H1.5V1.5h21M24,0H0V24H24V0Z"></path>
</g>
</g>
<polyline class="n24-icon-caret-down-cls-2" points="4.5 8.25 12 15.75 19.5 8.25"></polyline>
</g>
</symbol>
<symbol id="n32-caret-down" viewBox="0 0 32 32">
<title>Caret down icon</title>
<desc>Accordion is closed, click to open.</desc>
<path d="M1,0,8,7,1,14" data-name="Line 1" fill="none" id="n32-icon-caret-down-line-1" stroke="#666" stroke-width="2" transform="translate(22.5 11.5) rotate(90)"></path>
<g fill="none" id="n32-icon-caret-down-container" opacity="0" stroke="#666" stroke-width="2">
<rect height="32" stroke="none" width="32"></rect>
<rect fill="none" height="30" width="30" x="1" y="1"></rect>
</g>
</symbol>
<symbol id="n32-caret-up" viewBox="0 0 32 32">
<title>Caret up icon</title>
<desc>Accordion is open, click to close.</desc>
<path d="M1,0,8,7,1,14" data-name="Line 1" fill="none" id="n32-icon-caret-up-line-1" stroke="#666" stroke-width="2" transform="translate(8.5 20.5) rotate(-90)"></path>
<g fill="none" id="n32-icon-caret-up-container" opacity="0" stroke="#666" stroke-width="2">
<rect height="32" stroke="none" width="32"></rect>
<rect fill="none" height="30" width="30" x="1" y="1"></rect>
</g>
</symbol>
<symbol id="n24-caret-right-small" viewBox="0 0 24 24">
<title>Caret right icon</title>
<desc>Click to expand</desc>
<defs>
<style>
.n24-icon-caret-right-small-cls-1 {
	fill: none;
	stroke: #666;
	stroke-miterlimit: 10;
	stroke-width: 1.5px;
}

.n24-icon-caret-right-small-cls-2 {
	opacity: 0;
}
</style></defs>
<g id="n24-icon-caret-right-small">
<g class="n24-icon-caret-right-small-cls-2">
<path d="M22.5,1.5v21H1.5V1.5h21M24,0H0V24H24V0Z"></path>
</g>
<polyline class="n24-icon-caret-right-small-cls-1" points="9.75 16.5 14.25 12 9.75 7.5"></polyline>
</g>
</symbol>
<symbol id="n24-caret-right" viewBox="0 0 24 24">
<title>Caret right icon</title>
<desc>Click to expand</desc>
<defs>
<style>
.n24-icon-caret-right-bg {
	opacity: 0;
}

.n24-icon-caret-right-stroke {
	fill: none;
	stroke: #666;
	stroke-miterlimit: 10;
	stroke-width: 1.5px;
}
</style></defs>
<g id="n24-icon-caret-right-icon">
<g class="n24-icon-caret-right-bg" id="n24-icon-caret-boundary">
<path d="M22.5,1.5v21H1.5V1.5h21M24,0H0V24H24V0Z"></path></g>
<polyline class="n24-icon-caret-right-stroke" points="8.25 19.5 15.75 12 8.25 4.5"></polyline>
</g>
</symbol>
<symbol id="n32-caret-right" viewBox="0 0 32 32">
<title>Caret right icon</title>
<desc>Click to expand menu.</desc>
<g fill="none" id="n32-icon-caret-right-bg" opacity="0" stroke="#666" stroke-width="2">
<rect height="32" stroke="none" width="32"></rect>
<rect fill="none" height="30" width="30" x="1" y="1"></rect>
</g>
<path d="M1,0,8,7,1,14" fill="none" id="n32-icon-caret-right-line-1" stroke="#666" stroke-width="2" transform="translate(11.5 9)"></path>
</symbol>
<symbol id="n24-caret-left-small" viewBox="0 0 24 24">
<title>Caret left icon</title>
<desc>Click to collapse menu.</desc>
<defs>
<style>
.n24-caret-left-small-cls-1 {
	fill: none;
	stroke: #666;
	stroke-miterlimit: 10;
	stroke-width: 1.5px;
}

.n24-caret-left-small-cls-2 {
	opacity: 0;
}
</style></defs>
<g id="n24-icon-caret-left-small">
<polyline class="n24-caret-left-small-cls-1" points="14.25 7.5 9.75 12 14.25 16.5"></polyline>
<g class="n24-caret-left-small-cls-2">
<path d="M22.5,1.5v21H1.5V1.5h21M24,0H0V24H24V0Z"></path>
</g>
</g>
</symbol>
<symbol id="n24-caret-left" viewBox="0 0 24 24">
<title>Caret left icon</title>
<desc>Click to collapse menu.</desc>
<defs>
<style>
.n24-icon-caret-left-bg {
	opacity: 0;
}

.n24-icon-caret-left-stroke {
	fill: none;
	stroke: #666;
	stroke-miterlimit: 10;
	stroke-width: 1.5px;
}
</style></defs>
<g id="n24-icon-caret-left">
<g class="n24-icon-caret-left-bg" id="boundary">
<path d="M22.5,1.5v21H1.5V1.5h21M24,0H0V24H24V0Z"></path></g>
<polyline class="n24-icon-caret-left-stroke" points="15.75 4.5 8.25 12 15.75 19.5"></polyline>
</g>
</symbol>
<symbol id="n32-caret-left" viewBox="0 0 32 32">
<title>Caret left icon</title>
<desc>Click to collapse menu.</desc>
<path d="M1,0,8,7,1,14" data-name="line 1" fill="none" id="n32-caret-left-line-1" stroke="#666" stroke-width="2" transform="translate(20.5 23) rotate(180)"></path>
<g fill="none" id="n32-caret-left-container" opacity="0" stroke="#666" stroke-width="2">
<rect height="32" stroke="none" width="32"></rect>
<rect fill="none" height="30" width="30" x="1" y="1"></rect>
</g>
</symbol>
<symbol id="n24-cart" viewBox="0 0 24 24">
<title id="shopping_cart">Shopping Cart</title>
<desc>Click to see cart items</desc>
<defs>
<style>
.n24-icon-cart-bg {
	opacity: 0;
}

.n24-icon-cart-stroke {
	fill: none;
	stroke: #666;
	stroke-miterlimit: 10;
	stroke-width: 1.5px;
}
</style></defs>
<g id="n24-icon-cart-icon">
<g class="n24-icon-cart-bg" id="n24-icon-cart-boundary">
<path d="M22.5,1.5v21H1.5V1.5h21M24,0H0V24H24V0Z"></path></g>
<polyline class="n24-icon-cart-stroke" points="1.5 3.75 4.894 3.75 7.707 14.25 16.5 14.25"></polyline>
<circle class="n24-icon-cart-stroke" cx="8.25" cy="18.75001" r="1.5"></circle>
<circle class="n24-icon-cart-stroke" cx="15.75" cy="18.75001" r="1.5"></circle>
<polyline class="n24-icon-cart-stroke" points="5.295 5.25 18.714 5.25 17.142 11.25 6.903 11.25"></polyline>
</g>
</symbol>
<symbol id="n24-search" viewBox="0 0 24 24">
<title id="search">Search icon</title>
<desc>Click to search</desc>
<defs>
<style>
.n24-icon-search-bg {
	opacity: 0;
}

.n24-icon-search-fill {
	fill: #666;
}

.n24-icon-search-stroke {
	fill: none;
	stroke: #666;
	stroke-miterlimit: 10;
	stroke-width: 1.5px;
}
</style></defs>
<g id="n24-icon-search-icon">
<g class="n24-icon-search-bg" id="n24-icon-search-boundary">
<path d="M22.5,1.5v21H1.5V1.5h21M24,0H0V24H24V0Z"></path></g>
<path class="n24-icon-search-fill" d="M9.9,4.05A5.85,5.85,0,1,1,4.05,9.9,5.8566,5.8566,0,0,1,9.9,4.05m0-1.5A7.35,7.35,0,1,0,17.25,9.9,7.35,7.35,0,0,0,9.9,2.55Z"></path>
<line class="n24-icon-search-stroke" x1="15" x2="19.875" y1="15" y2="19.875"></line>
</g>
</symbol>
<symbol id="n24-user-circle" viewBox="0 0 24 24">
<defs>
<style>
.n24-user-circle-cls-1 {
	fill: none;
	stroke: #666;
	stroke-miterlimit: 10;
	stroke-width: 1.5px;
}

.n24-bounds {
	fill: none;
}
</style></defs>
<rect class="n24-bounds" height="24" id="n24-icon-user-circle-bounds" width="24"></rect>
<g id="n24-icon-user-circle">
<circle class="n24-user-circle-cls-1" cx="12" cy="12" id="user-circle" r="9.75"></circle>
<polyline class="n24-user-circle-cls-1" id="user-body" points="17.55 20.01 16.34 15.48 7.66 15.48 6.45 20.01"></polyline>
<circle class="n24-user-circle-cls-1" cx="12" cy="9.91" id="user-head" r="3.48"></circle>
</g>
</symbol>
</svg>
<nav class="global-nav" id="meganavigation55c1b63f_f63e_4bd0_bb34_3be93688ea7b">
<!-- Geo Locator Starts -->
<div class="geo-locator hide">
<div class="geo-locator-container">
<div class="geo-locator-text">
<p>Visit your regional NVIDIA website for local content, pricing, and where to buy partners specific to your country.</p>
</div>
<div class="geo-locator-actions">
<div class="geo-locator-dropdown">
<select aria-label="Select your country" id="country-selector">
<option data-country="ar" value="/es-la/">Argentina</option>
<option data-country="au" value="/en-au/">Australia</option>
<option data-country="be-nl" value="/nl-nl/">België (Belgium)</option>
<option data-country="be-fr" value="/fr-be/">Belgique (Belgium)</option>
<option data-country="br" value="/pt-br/">Brasil (Brazil)</option>
<option data-country="ca" value="/en-us/">Canada</option>
<option data-country="cz" value="/cs-cz/">Česká Republika (Czech Republic)</option>
<option data-country="cl" value="/es-la/">Chile</option>
<option data-country="co" value="/es-la/">Colombia</option>
<option data-country="dk" value="/da-dk/">Danmark (Denmark)</option>
<option data-country="de" value="/de-de/">Deutschland (Germany)</option>
<option data-country="es" value="/es-es/">España (Spain)</option>
<option data-country="fr" value="/fr-fr/">France</option>
<option data-country="in" value="/en-in/">India</option>
<option data-country="it" value="/it-it/">Italia (Italy)</option>
<option data-country="mx" value="/es-la/">México (Mexico)</option>
<option data-country="me" value="/en-me/">Middle East</option>
<option data-country="nl" value="/nl-nl/">Nederland (Netherlands)</option>
<option data-country="no" value="/nb-no/">Norge (Norway)</option>
<option data-country="at" value="/de-at/">Österreich (Austria)</option>
<option data-country="pe" value="/es-la/">Peru</option>
<option data-country="pl" value="/pl-pl/">Polska (Poland)</option>
<option data-country="eu" value="/en-eu/">Rest of Europe</option>
<option data-country="ro" value="/ro-ro/">România (Romania)</option>
<option data-country="sg" value="/en-sg/">Singapore</option>
<option data-country="fi" value="/fi-fi/">Suomi (Finland)</option>
<option data-country="se" value="/sv-se/">Sverige (Sweden)</option>
<option data-country="tr" value="/tr-tr/">Türkiye (Turkey)</option>
<option data-country="gb" value="/en-gb/">United Kingdom</option>
<option data-country="us" value="/en-us/">United States</option>
<option data-country="kr" value="/ko-kr/">대한민국 (South Korea)</option>
<option data-country="cn" value="/zh-cn/">中国大陆 (Mainland China)</option>
<option data-country="tw" value="/zh-tw/">台灣 (Taiwan)</option>
<option data-country="jp" value="/ja-jp/">日本 (Japan)</option>
</select>
<span class="fa-light fa-chevron-down"></span>
</div>
<div class="geo-locator-cta">
<div class="nv-button button nv-button-small nv-no-left-padding nv-no-right-padding nv-no-top-padding nv-no-bottom-padding">
<div class="nv-button-standard button-left button-lap-left button-tab-left button-mob-left">
<a class="btn-content btncta" href="/" rel="noopener noreferrer">
<span class="btn-text">Continue</span>
</a>
</div>
</div>
<button class="close-button">
<span class="fa-light fa-xmark-large"></span>
</button>
</div>
</div>
</div>
</div>
<script type="text/javascript">
    (() => {
      const countrySelector = document.querySelector('#country-selector');
      const GEO_LOCATOR_COOKIE_NAME = 'geo_locator';
      const DISMISSAL_DAYS = 7;
      
      // Get cookie value by name
      const getCookie = (name) => {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        return parts.length === 2 ? parts.pop().split(";").shift() : null;
      };
      
      // Set cookie with expiration and domain
      const setCookie = (name, value, days) => {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        const expires = `expires=${date.toUTCString()}`;
        document.cookie = `${name}=${value};${expires};domain=.nvidia.com;path=/`;
      };
      
      // Get geo locator cookie data
      const getGeoLocatorCookie = () => {
        const cookieValue = getCookie(GEO_LOCATOR_COOKIE_NAME);
        if (!cookieValue) return null;
        try {
          return JSON.parse(cookieValue);
        } catch (e) {
          return null;
        }
      };
      
      // Set geo locator cookie data
      const setGeoLocatorCookie = (data) => {
        setCookie(GEO_LOCATOR_COOKIE_NAME, JSON.stringify(data), DISMISSAL_DAYS);
      };
      
      // Check if Geo Locator was dismissed
      const isDismissed = () => {
        const cookieData = getGeoLocatorCookie();
        return cookieData && cookieData.dismissed === true;
      };
      
      // Set dismissal status
      const setDismissed = () => {
        const existingData = getGeoLocatorCookie() || {};
        const updatedData = {
          ...existingData,
          dismissed: true,
          dismissedAt: new Date().toISOString()
        };
        setGeoLocatorCookie(updatedData);
      };
    
      // Update select option values based on <link rel="alternate"> in head.
      const updateOptionValuesFromHead = () => {
        const alternateLinks = document.querySelectorAll('head link[rel="alternate"][hreflang][href]');
        if (!alternateLinks.length) return;
        if (!countrySelector) return;
        Array.from(countrySelector.options).forEach(option => {
          const optCountry = option.getAttribute('data-country');
          if (!optCountry) return;
          alternateLinks.forEach(link => {
            const hreflang = link.getAttribute('hreflang');
            if (hreflang && hreflang.includes('-') && hreflang.toLowerCase().endsWith(`-${optCountry.toLowerCase()}`)) {
              option.value = link.getAttribute('href');
            }
          });
        });
      };
    
      // Fetch translations from the GraphQL endpoint.
      const fetchTranslations = () => 
        fetch('/graphql/execute.jsongeo-locator/translations')
          .then(response => response.json())
          .then(data => data.data.geoLocatorList.items)
          .catch(err => {
            console.error('Error fetching translations:', err);
            return [];
          });
      
      // Check current path against master.disableGeoLocRegExps
      const matchesDisableByRegex = (translations) => {
        const master = translations.find(item => item._variation === 'master');
        if (!master || !Array.isArray(master.disableGeoLocRegExps)) return false;

        const path = window.location.pathname;
        return master.disableGeoLocRegExps.some(pattern => {
          try {
            const rx = new RegExp(pattern);
            return rx.test(path);
          } catch (err) {
            console.error('Invalid regex in disableGeoLocRegExps:', pattern, err);
            return false;
          }
        });
      };

      const getUserGeoLocatorFlag = (translations, userRegion) => {
        const t = translations.find(item => {
          if (item._variation.includes('-')) {
            const regionPart = item._variation.split('-')[1].toUpperCase();
            return regionPart === userRegion.toUpperCase();
          }
          return false;
        });
        return t?.disableGeoLocatorUserRegion;
      };

      const getGeoLocatorFlag = (translations, pageRegion) => {
        const translation = translations.find(item => {
          if (item._variation.includes('-')) {
            const variantRegion = item._variation.split('-')[1].toUpperCase();
            return variantRegion === pageRegion.toUpperCase();
          }
          return false;
        });
        return translation?.disableGeoLocatorPageRegion;
      };
    
      // Select the correct translation by comparing last two characters of _variation with userRegion.
      const getTranslation = (translations, userRegion) => {
        let translation = translations.find(item => {
          if (item._variation.includes('-')) {
            const variantRegion = item._variation.split('-')[1].toUpperCase();
            return variantRegion === userRegion.toUpperCase();
          }
          return false;
        });
        return translation || translations.find(item => item._variation.toLowerCase() === 'master');
      };
    
      // Update the Geo Locator with the fetched translation and update UI.
      const updateGeoLocator = (translation, userRegion, lookupKey) => {
        if (!translation || translation?.disableGeoLocatorPageRegionFlag) return;
        
        // Check if Geo Locator was dismissed
        if (isDismissed()) {
          console.log('Geo Locator was dismissed by user. Will not show for 7 days.');
          return;
        }
        
        const geoLocator = document.querySelector('.geo-locator');
        if (!geoLocator) return;
        
        // Update the message text
        const geoLocatorText = geoLocator.querySelector('.geo-locator-text > p');
        if (geoLocatorText && translation.geoLocatorMessage) {
          geoLocatorText.textContent = translation.geoLocatorMessage.plaintext;
        }
        
        // Update the Continue button text
        const continueButton = geoLocator.querySelector('.geo-locator-cta .btn-content');
        if (continueButton) {
          continueButton.textContent = translation.continue;
        }
        
        // Update the country dropdown selection to match the user's region
        if (countrySelector) {
          // Use lookupKey if provided (for special cases like BE), otherwise use userRegion
          const countryKey = lookupKey || userRegion.toLowerCase();
          const optionToSelect = countrySelector.querySelector(`option[data-country="${countryKey}"]`);
          if (optionToSelect) {
            optionToSelect.selected = true;
            // Also update the Continue button's URL based on the selected option
            if (continueButton) {
              continueButton.href = optionToSelect.value;
            }
          }
        }
        
        // Remove the hide class to display the Geo Locator
        geoLocator.classList.remove('hide');
      };
    
      // Retrieve user's region from the cookie and page region from the xml:lang attribute.
      const userRegion = getCookie("c_code");
      const pageLocale = document.documentElement.getAttribute("xml:lang");
      let pageRegion = null;
      if (pageLocale) {
        const parts = pageLocale.split("-");
        if (parts.length > 1) pageRegion = parts[1].toUpperCase();
      }
    
      // Only proceed if both userRegion and pageRegion exist and they differ.
      if (userRegion && pageRegion && userRegion.toUpperCase() !== pageRegion) {
        // Special case: Skip Geo Locator for Canadian visitors on en-us pages to prevent infinite loop
        if (userRegion.toUpperCase() === 'CA' && pageLocale && pageLocale.toLowerCase() === 'en-us') {
          console.log('Skipping Geo Locator for Canadian visitors on en-us locale to prevent infinite loop.');
          return;
        }
        
        // Special case: Skip Geo Locator for Latin American visitors on es-la pages to prevent infinite loop
        const latinAmericanCountries = ['MX', 'CO', 'AR', 'PE', 'CL'];
        if (latinAmericanCountries.includes(userRegion.toUpperCase()) && pageLocale && pageLocale.toLowerCase() === 'es-la') {
          console.log(`Skipping Geo Locator for ${userRegion} visitors on es-la locale to prevent infinite loop.`);
          return;
        }
        
        // map BE to be-fr, otherwise use raw
        let lookupKey = userRegion.toLowerCase();
        if (lookupKey === 'be') lookupKey = 'be-fr';

        // if there's no matching dropdown entry, bail out
        const userOption = countrySelector.querySelector(`option[data-country="${lookupKey}"]`);
        // If we don't have a matching dropdown option, skip showing the Geo Locator
        if (!userOption) return;

        updateOptionValuesFromHead();
        fetchTranslations().then(translations => {
          if (matchesDisableByRegex(translations)) {
            console.log('Page path matches disableGeoLocRegExps, skipping Geo Locator.');
            return;
          }
          const pageFlag = getGeoLocatorFlag(translations, pageRegion);
          const userFlag = getUserGeoLocatorFlag(translations, userRegion);

          // only show if neither the page‐region nor the user‐region flag is set
          if (!pageFlag && !userFlag) {
            const translation = getTranslation(translations, userRegion);
            updateGeoLocator(translation, userRegion, lookupKey);
          }
        });
    
        // Update Continue button URL on dropdown change.
        if (countrySelector) {
          countrySelector.addEventListener('change', (e) => {
            const selectedUrl = e.target.value;
            const continueButton = document.querySelector('.geo-locator-cta .btn-content');
            if (continueButton) continueButton.href = selectedUrl;
          });
        }
    
        // Close button hides the Geo Locator.
        const closeButton = document.querySelector('.geo-locator .close-button');
        if (closeButton) {
          closeButton.addEventListener('click', () => {
            const geoLocator = document.querySelector('.geo-locator');
            if (geoLocator) {
              geoLocator.classList.add('hide');
              // Set dismissal cookie when user closes the Geo Locator
              setDismissed();
              console.log('Geo Locator dismissed. Will not show for 7 days.');
            }
          });
        }
      } else {
        // If there's no mismatch, do nothing or log as needed.
        console.log("User region and page region match, or data is missing. Geo Locator will not be shown.");
      }
    })();
</script>
<!-- Geo Locator Ends -->
<div class="nav-header desktop-nav">
<a class="skip-main" href="#page-content"><span>Skip to main content</span></a>
<div class="nav-header-container">
<div class="brand-container"><a alt="Artificial Intelligence Computing Leadership from NVIDIA" aria-labelledby="nvidia_logo_desktop" class="brand-link pull-left nvidia-logo" href="/" title="Artificial Intelligence Computing Leadership from NVIDIA">
<svg fill="none" height="35" viewBox="0 0 117 35" width="117" xmlns="http://www.w3.org/2000/svg">
<title>Artificial Intelligence Computing Leadership from NVIDIA</title>
<path d="M66.4201 15.476V29.238H70.2437V15.476H66.4201ZM36.3477 15.4573V29.238H40.2045V18.5408L43.2134 18.5513C44.2026 18.5513 44.8877 18.7928 45.3639 19.3097C45.9686 19.9653 46.2154 21.0212 46.2154 22.9532V29.238H49.9518V21.6243C49.9518 16.19 46.5447 15.4573 43.2122 15.4573H36.3477ZM72.5755 15.476V29.2368H78.7757C82.0795 29.2368 83.157 28.678 84.3241 27.4262C85.148 26.5465 85.6804 24.6168 85.6804 22.5075C85.6804 20.5732 85.2295 18.8477 84.4434 17.7732C83.0273 15.8517 80.987 15.476 77.9403 15.476H72.5755ZM76.367 18.472H78.0103C80.3949 18.472 81.9372 19.5605 81.9372 22.385C81.9372 25.2095 80.3949 26.2992 78.0103 26.2992H76.367V18.472ZM60.9085 15.476L57.7183 26.382L54.6613 15.476H50.5347L54.9011 29.2368H60.4104L64.8113 15.476H60.9096H60.9085ZM87.4591 29.2368H91.2827V15.476H87.458V29.2368H87.4591ZM98.176 15.4807L92.8377 29.2322H96.6073L97.4519 26.802H103.769L104.569 29.2322H108.661L103.283 15.4795H98.176V15.4807ZM100.657 17.9902L102.973 24.4325H98.2678L100.657 17.9902Z" fill="black"></path>
<path d="M11.6925 17.7697V15.8762C11.8738 15.8633 12.0563 15.8528 12.2422 15.847C17.3372 15.6837 20.68 20.2978 20.68 20.2978C20.68 20.2978 17.0699 25.3962 13.1992 25.3962C12.6415 25.3962 12.1423 25.3052 11.6925 25.1511V19.4077C13.6766 19.6515 14.0748 20.5417 15.2671 22.5623L17.919 20.2885C17.919 20.2885 15.9831 17.7067 12.7195 17.7067C12.3649 17.7067 12.0253 17.7323 11.6913 17.7685L11.6925 17.7697ZM11.6913 11.5128V14.342C11.8738 14.3268 12.0574 14.3152 12.241 14.3082C19.3259 14.0655 23.9425 20.2162 23.9425 20.2162C23.9425 20.2162 18.6408 26.7705 13.1166 26.7705C12.6105 26.7705 12.1366 26.7227 11.6913 26.6433V28.3922C12.0723 28.4412 12.4671 28.4703 12.8779 28.4703C18.0177 28.4703 21.7358 25.8021 25.3356 22.6428C25.9323 23.1281 28.3754 24.31 28.8781 24.828C25.4549 27.7412 17.4795 30.0885 12.9571 30.0885C12.521 30.0885 12.1022 30.0617 11.6913 30.022V32.479H31.2282V11.514H11.6925L11.6913 11.5128ZM11.6913 25.15V26.6433C6.93708 25.7812 5.6174 20.7575 5.6174 20.7575C5.6174 20.7575 7.89986 18.1862 11.6913 17.7697V19.4077C11.6913 19.4077 11.6867 19.4077 11.6845 19.4077C9.69462 19.165 8.14085 21.055 8.14085 21.055C8.14085 21.055 9.01183 24.2365 11.6925 25.1523L11.6913 25.15ZM3.24888 20.5417C3.24888 20.5417 6.06609 16.3148 11.6925 15.8773V14.3443C5.46134 14.853 0.0644531 20.2185 0.0644531 20.2185C0.0644531 20.2185 3.12036 29.2018 11.6925 30.0243V28.3945C5.40167 27.5895 3.24888 20.5417 3.24888 20.5417Z" fill="#76B900"></path>
</svg>
</a></div>
<!-- Mega menu code start -->
<div class="navoverlay"></div>
<input class="main-menu" id="nv-level1-tab1" name="nv-tab-level-1" type="radio" value="nv-level1-tab1">
<input class="main-menu" id="nv-level1-tab2" name="nv-tab-level-1" type="radio" value="nv-level1-tab2">
<input class="main-menu" id="nv-level1-tab3" name="nv-tab-level-1" type="radio" value="nv-level1-tab3">
<div class="nv-nav-container nv-menu">
<div class="menu-buttons-container">
<span class="menu-button main-menu-buttons-desktop">
<button class="menu-button caret-right hide">
<svg aria-controls="main-menu-navigation" aria-label="menu expand" class="n24-icon menu-button caret-right">
<use xlink:href="#n24-caret-right-small"></use></svg>
<span class="hide" id="mega-menu-expand-label">Main Menu</span>
</button>
<button aria-label="menu collapse" class="menu-button caret-left hide">
<svg class="n24-icon menu-button caret-left">
<use xlink:href="#n24-caret-left-small"></use></svg>
</button>
<button aria-label="menu close" class="menu-button close hide">
<svg class="n24-icon menu-button close">
<use xlink:href="#n24-close-small"></use></svg>
</button>
</span>
</div>
<ul aria-label="menu" class="nv-menu-list left" id="main-menu-navigation" role="menu" style="visibility: visible; max-width: 880px; white-space: nowrap;">
<li aria-expanded="false" aria-haspopup="true" class="nv-menu-item tmenu brand-nav-title" data-num="1" role="menuitem">
<label class="nv-menu-button menu-level-1 brand-nav-chevron" for="nv-level1-tab1" tabindex="0">
												Products
												
												
											</label>
<div class="nv-n-n25">
<div class="nv-menu3-container nv-level1-tab1 one-lvl">
<div class="nav-row-container">
<div class="level-menu3">

<div class="menu3-items">
		<div id="menu1-tab1" class="menu3-items-container active">
			<span class="h2-style">Products</span>
			<div class="menu3-item">
				<a class="menu3-item-card" href="/industries/healthcare-life-sciences/biopharma/" target="_self">
					<div class="menu3-item-card-content">
						<div class="nv-button button nv-button-text nv-button-caret">
							<div class="btn-content btncta">
								<span class="btn-text">BioNeMo</span>
							</div>
						</div>
						<p>AI-driven platform for life sciences research and discovery</p>
					</div>
				</a>
				<a class="menu3-item-card" href="/data-center/dgx-cloud/" target="_self">
					<div class="menu3-item-card-content">
						<div class="nv-button button nv-button-text nv-button-caret">
							<div class="btn-content btncta">
								<span class="btn-text">DGX Cloud</span>
							</div>
						</div>
						<p>NVIDIA’s AI factory in the cloud</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</li>
<li aria-expanded="false" aria-haspopup="true" class="nv-menu-item tmenu" data-num="2" role="menuitem">
<label class="nv-menu-button menu-level-1 brand-nav-chevron" for="nv-level1-tab2" tabindex="0">
												Solutions
												
												
											</label>
<div class="nv-n-n25">
<div class="nv-menu3-container nv-level1-tab2 one-lvl">
<div class="nav-row-container">
<div class="level-menu3">

<div class="menu3-items">
		<div id="menu2-tab1" class="menu3-items-container active">
			<span class="h2-style">Solutions</span>
			<div class="menu3-item">
				<a class="menu3-item-card" href="/solutions/ai/" target="_self">
					<div class="menu3-item-card-content">
						<div class="nv-button button nv-button-text nv-button-caret">
							<div class="btn-content btncta">
								<span class="btn-text">Overview</span>
							</div>
						</div>
						<p>NVIDIA technology is power powering solutions for every industry</p>
					</div>
				</a>
				<a class="menu3-item-card" href="/solutions/ai/agentic-ai/" target="_self">
					<div class="menu3-item-card-content">
						<div class="nv-button button nv-button-text nv-button-caret">
							<div class="btn-content btncta">
								<span class="btn-text">Agentic AI</span>
							</div>
						</div>
						<p>Build and run agentic AI workflows and microservices</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</li>
<li aria-expanded="false" aria-haspopup="true" class="nv-menu-item tmenu" data-num="3" role="menuitem">
<label class="nv-menu-button menu-level-1 brand-nav-chevron" for="nv-level1-tab3" tabindex="0">
												Industries
												
												
											</label>
<div class="nv-n-n25">
<div class="nv-menu3-container nv-level1-tab3 one-lvl">
<div class="nav-row-container">
<div class="level-menu3">
<div class="menu3-items">
<div class="menu3-items-container active" id="menu3-tab1">
<span class="h2-style">Industries</span>
<div class="menu3-item"><div class="menu3-item-card">
<a class="menu3-item-card-content" href="/industries/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Overview</span>
</div>
</div>
</a>
</div>
<div class="menu3-item-card">
<a class="menu3-item-card-content" href="/industries/aec/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Architecture, Engineering, Construction &amp; Operations</span>
</div>
</div>
</a>
</div></div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class="nv-menu-item tmenu more"><a href="#">…</a><ul class="dropdown"></ul></li><li class="menu-slider" role="presentation"></li>
</ul>
<ul aria-label="menu" class="nv-menu-list right" role="menu">

<li class="nv-menu-item" role="none"><a class="menu-button-link menu-level-1" href="/drivers/" role="menuitem" target="_self">Drivers</a>
</li>
<li class="nv-menu-item" role="none"><a class="menu-button-link menu-level-1" href="/support/" role="menuitem" target="_self">Support</a>
</li>
</ul>
</div>
<!-- Mega menu code ends -->
<div class="nav-tools-container">
<ul aria-label="Menu Tools" class="nav-header-list" role="list">

<li class="nav-header-item profile-item">
<div class="navglobicon dropdown-enabled" data-is-gatted="false" data-login-gate=" data-sso-enabled="true" id="acc-menu-dropdown">
<ul>

</ul>
</div>
</li>
<li class="nav-header-item hide"><a href="#" id="nod-login" style="display: none"> <span>Log In</span>
</a> <a href="#" id="nod-logout" style="display: none"> <span>LogOut</span>
</a></li>
</ul>
</div>
</div>
</div>
<!-- Mobile navigation starts -->
<div class="mobile-nav">
<div class="nav-header">
<a class="skip-main" href="#page-content"><span>Skip to main content</span></a>
<div class="nav-header-container">
<div class="nav-tools-container">
<ul class="nav-header-list" role="list">
<li class="nav-header-item mobile-menu-button-item">
<button aria-controls="mobile-menu-navigation" aria-expanded="false" aria-label="Main Menu" class="menu-button mobile-menu-button toplevel" id="menu-toggle" tabindex="0">
<span id="mega-nav-open-menu-icon">
<svg class="n24-icon mega-nav-open-menu-icon">
<use xlink:href="#n24-menu"></use>
</svg>
</span>
<span class="hide" id="mega-nav-close-menu-icon">
<svg class="n24-icon mega-nav-close-menu-icon">
<use xlink:href="#n24-close"></use>
</svg>
</span>
</button>
</li>

<li class="nav-header-item hide nv-cart-item" id="nv-cart-item" role="status">
<span class="nav-badge cart-counter">0</span>
<a aria-expanded="false" aria-haspopup="true" aria-label="Shopping Cart" class="nav-cart-link toplevel" href="/" role="status">
<svg aria-labelledby="shopping_cart" class="n24-icon nvcarticon n24-cart" style="">
<use xlink:href="#n24-cart"></use>
</svg>
</a>
</li>

</ul>
</div>
</div>
</div>
<div class="mega-nav" id="mega-nav" role="navigation">
<div class="mega-menu" style="opacity: 1; height: 44px; left: 0px;">
<!-- SVG SYMBOL DEFINITIONS -->
<svg class="hide" style="display: none;" xmlns="http://www.w3.org/2000/svg">
<symbol id="n24-nvidia-logo" viewBox="0 0 108.472 20">
<title id="nvidia_logo">NVIDIA</title>
<desc>NVIDIA logo</desc>
<path d="M1072.628,253.918v-.3h.192c.105,0,.248.008.248.136s-.073.163-.2.163h-.243m0,.211h.129l.3.524h.327l-.33-.545a.3.3,0,0,0,.311-.323c0-.285-.2-.377-.53-.377h-.482v1.245h.276v-.524m1.4-.1a1.2,1.2,0,1,0-1.2,1.157,1.14,1.14,0,0,0,1.2-1.157m-.347,0a.854.854,0,0,1-.855.891v0a.889.889,0,1,1,.855-.887Z" id="nvidia-logo-reg" transform="translate(-965.557 -237.878)"></path>
<path d="M463.9,151.934v13.127h3.707V151.934Zm-29.164-.018v13.145h3.74v-10.2l2.918.01a2.674,2.674,0,0,1,2.086.724c.586.625.826,1.632.826,3.476v5.995h3.624V157.8c0-5.183-3.3-5.882-6.536-5.882Zm35.134.018v13.127h6.013c3.2,0,4.249-.533,5.38-1.727a7.352,7.352,0,0,0,1.316-4.692,7.789,7.789,0,0,0-1.2-4.516c-1.373-1.833-3.352-2.191-6.306-2.191Zm3.677,2.858h1.594c2.312,0,3.808,1.039,3.808,3.733s-1.5,3.734-3.808,3.734h-1.594Zm-14.992-2.858-3.094,10.4-2.965-10.4h-4l4.234,13.127h5.343l4.267-13.127Zm25.749,13.127h3.708V151.935h-3.709ZM494.7,151.939l-5.177,13.117h3.656l.819-2.318h6.126l.775,2.318h3.969l-5.216-13.118Zm2.407,2.393,2.246,6.145h-4.562Z" id="nvidia-logo-NVIDIA" transform="translate(-399.551 -148.155)"></path>
<path d="M129.832,124.085v-1.807c.175-.013.353-.022.533-.028,4.941-.155,8.183,4.246,8.183,4.246s-3.5,4.863-7.255,4.863a4.553,4.553,0,0,1-1.461-.234v-5.478c1.924.232,2.31,1.082,3.467,3.01l2.572-2.169a6.81,6.81,0,0,0-5.042-2.462,9.328,9.328,0,0,0-1,.059m0-5.968v2.7c.177-.014.355-.025.533-.032,6.871-.232,11.348,5.635,11.348,5.635s-5.142,6.253-10.5,6.253a7.906,7.906,0,0,1-1.383-.122v1.668a9.1,9.1,0,0,0,1.151.075c4.985,0,8.59-2.546,12.081-5.559.578.463,2.948,1.591,3.435,2.085-3.319,2.778-11.055,5.018-15.44,5.018-.423,0-.829-.026-1.228-.064v2.344h18.947v-20Zm0,13.009v1.424c-4.611-.822-5.89-5.615-5.89-5.615a9.967,9.967,0,0,1,5.89-2.85v1.563h-.007a4.424,4.424,0,0,0-3.437,1.571s.845,3.035,3.444,3.908m-8.189-4.4a11.419,11.419,0,0,1,8.189-4.449v-1.463c-6.043.485-11.277,5.6-11.277,5.6s2.964,8.569,11.277,9.354v-1.555C123.731,133.451,121.643,126.728,121.643,126.728Z" data-name="Eye Mark" fill="#74b71b" id="nvidia-logo-eye-mark" transform="translate(-118.555 -118.117)"></path>
</symbol>
</svg>
<div class="nv-n-n25">
<nav aria-label="Accordion Navigation" class="accordion-menu">
<div class="menu-item">
<button aria-controls="submenu-1" aria-expanded="false" class="accordion-btn" id="menu-btn-2">
											Products
											<span aria-hidden="true" class="caret"></span>
</button>
<!--
-->
<div aria-labelledby="menu-btn-1-1" class="submenu level-3-menu one-lvl" id="submenu-1-1" role="menu">
		<div class="menu-item">
			<div class="submenu level-3-menu-items" id="submenu-1-1-1" role="menu">
				<a class="level-3-menu-item" href="/industries/healthcare-life-sciences/biopharma/" target="_self">
					<div class="nv-button button nv-button-text nv-button-caret">
						<div class="btn-content btncta">
							<span class="btn-text">BioNeMo</span>
						</div>
					</div>
					<p>AI-driven platform for life sciences research and discovery</p>
				</a>
				<a class="level-3-menu-item" href="/data-center/dgx-cloud/" target="_self">
					<div class="nv-button button nv-button-text nv-button-caret">
						<div class="btn-content btncta">
							<span class="btn-text">DGX Cloud</span>
						</div>
					</div>
					<p>NVIDIA’s AI factory in the cloud</p>
				</a>
			</div>
		</div>
	</div>
</div>
<div class="menu-item">
<button aria-controls="submenu-2" aria-expanded="false" class="accordion-btn" id="menu-btn-2">
											Solutions
											<span aria-hidden="true" class="caret"></span>
</button>
<!-- -->
<div aria-labelledby="menu-btn-1-2" class="submenu level-3-menu one-lvl" id="submenu-1-2" role="menu">
		<div class="menu-item">
			<div class="submenu level-3-menu-items" id="submenu-1-2-1" role="menu">
				<a class="level-3-menu-item" href="/solutions/ai/" target="_self">
					<div class="nv-button button nv-button-text nv-button-caret">
						<div class="btn-content btncta">
							<span class="btn-text">Overview</span>
						</div>
					</div>
					<p>NVIDIA technology is power powering solutions for every industry</p>
				</a>
				<a class="level-3-menu-item" href="/solutions/ai/agentic-ai/" target="_self">
					<div class="nv-button button nv-button-text nv-button-caret">
						<div class="btn-content btncta">
							<span class="btn-text">Agentic AI</span>
						</div>
					</div>
					<p>Build and run agentic AI workflows and microservices</p>
				</a>
			</div>
		</div>
	</div>
</div>
<div class="menu-item">
<button aria-controls="submenu-3" aria-expanded="false" class="accordion-btn one-lvl-btn" id="menu-btn-2">
															Industries
															<span aria-hidden="true" class="caret"></span>
</button>
<div aria-labelledby="menu-btn-1-3" class="submenu level-3-menu one-lvl" id="submenu-1-3" role="menu">
<div class="menu-item">
<div class="submenu level-3-menu-items" id="submenu-1-3-1" role="menu">
<a class="level-3-menu-item" href="/industries/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Overview</span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/industries/aec/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Architecture, Engineering, Construction &amp; Operations</span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/industries/automotive/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Automotive</span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/solutions/ai/cybersecurity/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Cybersecurity</span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/industries/energy/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Energy</span>
</div>
</div>
</a>

<a class="level-3-menu-item" href="/industries/healthcare-life-sciences/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Healthcare and Life Sciences</span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/industries/higher-education-research/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Higher Education</span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/industries/game-development/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Game Development</span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/industries/government/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Government</span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/industries/manufacturing/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Manufacturing</span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/industries/media-and-entertainment/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Media and Entertainment</span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/industries/restaurants/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Restaurants </span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/industries/retail/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Retail and CPG</span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/industries/robotics/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Robotics</span>
</div>
</div>
</a>
<a class="level-3-menu-item" href="/industries/smart-cities-and-spaces/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Smart Cities</span>
</div>
</div>
</a>

<a class="level-3-menu-item" href="/industries/telecommunications/" target="_self">
<div class="nv-button button nv-button-text nv-button-caret">
<div class="btn-content btncta">
<span class="btn-text">Telecommunications</span>
</div>
</div>
</a>
</div>
</div>
</div>
</div>
<li>
<div class="menu-right">
<ul aria-label="menu" role="menu">

<li class="menu-level-1" role="none">
<a class="mm-btn-link" href="/drivers/" role="menuitem" target="_self">Drivers</a>
</li>
<li class="menu-level-1" role="none">
<a class="mm-btn-link" href="/support/" role="menuitem" target="_self">Support</a>
</li>
</ul>
</div>
</li>
</nav>
</div>
</div>
</div>
<div class="mega-overlay hide" style="opacity: 0;"></div>
</div>
<!-- Mobile navigation ends -->
<div class="hide-unibrow" id="unibrow-container"></div>
<!-- Common sub nav and brand nav Starts -->
<!-- Common sub nav and brand nav ends -->
<div class="cmp-verticalnavigation__toc-mobile hide">
<div>
<div class="cmp-verticalnavigation__toc-mobile-active-item">
<span class="active-text"></span>
<span class="active-arrow"></span>
</div>
</div>
</div>
<script id="starfleet-script" src="../../../assets/www.nvidia.com/assets/account-wrapper/starfleet.js"></script>
<script>	
	 	if(false){
			var searchPath = document.getElementById("search-path");
			searchPath.value = window.location.pathname;
     	}
	    NVIDIAGDC.funcQueue.addToQueue({ 
	        id : "meganavigation55c1b63f_f63e_4bd0_bb34_3be93688ea7b",
	        method : "navigation-megamenu",
	        params : [{
	            globalSite:true,
	            breadCrumbAdded: false,
	            enableSearchLibrary: true,
	            isSolr:false,
	            searchOptions: {
	                destination: "https://www.nvidia.com/en-us/search/",
	                apiUrl: "https://api-prod.nvidia.com/search/graphql",
	                triggerId: 'nvidia-search-box-link',
	                referenceId: 'nvidia-search-box-link'
	              }
	            }]
	    });
	    
	    NVIDIAGDC.isBrandPage = false;
		NVIDIAGDC.isMegaMenu = true;
		NVIDIAGDC.disableOldBrandNav = false;
		window.setHeaderObservers();
	</script>
</nav>
</div>
</header>
    
    

      <div id="header"><nav class="svelte-lpaw1y"><button id="nav-toggle" class="accessible-megamenu-toggle svelte-lpaw1y" aria-expanded="false" aria-controls="accessible-megamenu-1779533450619-1 accessible-megamenu-1779533450619-8"><span class="sr-only svelte-lpaw1y">Toggle Navigation</span> 
    <span></span> 
    <span></span> 
    <span></span></button> <div class="nav-wrapper svelte-lpaw1y"><div class="nv-container svelte-lpaw1y"><div class="brand svelte-lpaw1y"><a href="https://developer.nvidia.com" title="NVIDIA Developer" class="svelte-lpaw1y"><svg width="286" height="26" viewBox="0 0 286 26" fill="none" xmlns="http://www.w3.org/2000/svg" class="svelte-lpaw1y"><path d="M140.061 20.8363V20.4478H140.312C140.449 20.4478 140.637 20.4579 140.637 20.624C140.637 20.8045 140.541 20.8363 140.378 20.8363H140.061V20.8363ZM140.061 21.1093H140.229L140.619 21.7896H141.047L140.616 21.0819C140.839 21.066 141.022 20.9605 141.022 20.6615C141.022 20.2918 140.765 20.1719 140.33 20.1719H139.7V21.7882H140.062V21.1079L140.061 21.1093ZM141.894 20.9808C141.894 20.0318 141.15 19.48 140.322 19.48C139.495 19.48 138.747 20.0303 138.747 20.9808C138.747 21.9312 139.489 22.483 140.322 22.483C141.156 22.483 141.894 21.9298 141.894 20.9808ZM141.44 20.9808C141.44 21.6726 140.928 22.1363 140.322 22.1363V22.132C139.7 22.1363 139.198 21.6726 139.198 20.9808C139.198 20.2889 139.701 19.8266 140.322 19.8266C140.944 19.8266 141.44 20.2889 141.44 20.9808Z" fill="white"></path><path d="M84.2106 4.92277V21.9614H89.0584V4.92277H84.2106V4.92277ZM46.0831 4.89966V21.9614H50.9731V8.71733L54.7878 8.73033C56.042 8.73033 56.9106 9.02933 57.5144 9.66921C58.2811 10.481 58.5939 11.7882 58.5939 14.1802V21.9614H63.3311V12.535C63.3311 5.80677 59.0115 4.89966 54.7864 4.89966H46.0831ZM92.0148 4.92277V21.96H99.8757C104.064 21.96 105.431 21.2681 106.91 19.7182C107.955 18.6291 108.63 16.24 108.63 13.6284C108.63 11.2335 108.058 9.09721 107.062 7.76688C105.266 5.38788 102.679 4.92277 98.8166 4.92277H92.0148V4.92277ZM96.8219 8.6321H98.9053C101.929 8.6321 103.884 9.97977 103.884 13.4768C103.884 16.9738 101.929 18.3229 98.9053 18.3229H96.8219V8.6321ZM77.2227 4.92277L73.178 18.4254L69.3021 4.92277H64.0702L69.6062 21.96H76.5912L82.1709 4.92277H77.2241H77.2227ZM110.885 21.96H115.733V4.92277H110.884V21.96H110.885ZM124.473 4.92855L117.704 21.9542H122.484L123.555 18.9454H131.564L132.578 21.9542H137.766L130.947 4.9271H124.473V4.92855ZM127.618 8.03555L130.554 16.0118H124.589L127.618 8.03555Z" fill="white"></path><path d="M14.8242 7.76243V5.41809C15.054 5.4022 15.2854 5.3892 15.5211 5.38198C21.9809 5.17976 26.2191 10.8925 26.2191 10.8925C26.2191 10.8925 21.6419 17.2048 16.7345 17.2048C16.0274 17.2048 15.3945 17.0921 14.8242 16.9014V9.79042C17.3397 10.0923 17.8446 11.1944 19.3562 13.6962L22.7185 10.881C22.7185 10.881 20.2641 7.68442 16.1263 7.68442C15.6767 7.68442 15.2461 7.7162 14.8227 7.76098L14.8242 7.76243ZM14.8227 0.0158691V3.51865C15.054 3.49987 15.2868 3.48543 15.5196 3.47676C24.5023 3.17631 30.3554 10.7914 30.3554 10.7914C30.3554 10.7914 23.6337 18.9063 16.6297 18.9063C15.9881 18.9063 15.3872 18.8471 14.8227 18.7489V20.9141C15.3057 20.9748 15.8062 21.0109 16.3271 21.0109C22.8437 21.0109 27.5576 17.7074 32.1217 13.7959C32.8782 14.3968 35.9758 15.86 36.613 16.5013C32.273 20.1081 22.1613 23.0143 16.4275 23.0143C15.8746 23.0143 15.3436 22.9811 14.8227 22.932V25.974H39.5927V0.0173139H14.8242L14.8227 0.0158691ZM14.8227 16.9V18.7489C8.79499 17.6814 7.12183 11.4616 7.12183 11.4616C7.12183 11.4616 10.0157 8.27809 14.8227 7.76243V9.79042C14.8227 9.79042 14.8169 9.79042 14.814 9.79042C12.2912 9.48998 10.3212 11.83 10.3212 11.83C10.3212 11.83 11.4255 15.769 14.8242 16.9029L14.8227 16.9ZM4.11888 11.1944C4.11888 11.1944 7.6907 5.9612 14.8242 5.41954V3.52154C6.92396 4.15131 0.0814819 10.7943 0.0814819 10.7943C0.0814819 10.7943 3.95593 21.9165 14.8242 22.9349V20.917C6.84831 19.9203 4.11888 11.1944 4.11888 11.1944V11.1944Z" fill="#74B71B"></path><path d="M147 22.0616V5.13851H153.75C155.46 5.13851 156.895 5.46891 158.056 6.12972C159.234 6.79053 160.121 7.71726 160.718 8.90994C161.331 10.1026 161.637 11.5048 161.637 13.1165V14.0594C161.637 16.5414 160.96 18.4997 159.605 19.9341C158.25 21.3524 156.298 22.0616 153.75 22.0616H147ZM150.532 19.0154H153.653C155.089 19.0154 156.185 18.6206 156.944 17.8308C157.718 17.025 158.105 15.792 158.105 14.1319V13.044C158.105 11.4484 157.718 10.2396 156.944 9.41763C156.185 8.59565 155.089 8.18466 153.653 8.18466H150.532V19.0154Z" fill="white"></path><path d="M164.909 22.0616V5.13851H176.159V8.13631H168.441V12.0286H174.707L174.296 15.0264H168.441V19.0638H176.304V22.0616H164.909Z" fill="white"></path><path d="M184.082 22.0616L177.792 5.13851H181.615L185.776 17.6132L189.937 5.13851H193.566L187.252 22.0616H184.082Z" fill="white"></path><path d="M195.859 22.0616V5.13851H207.109V8.13631H199.392V12.0286H205.658L205.246 15.0264H199.392V19.0638H207.255V22.0616H195.859Z" fill="white"></path><path d="M210.461 22.0616V5.13851H213.993V19.0154H221.372V22.0616H210.461Z" fill="white"></path><path d="M231.323 22.4C229.678 22.4 228.267 22.0616 227.09 21.3847C225.928 20.7077 225.033 19.7488 224.404 18.5077C223.791 17.2667 223.485 15.792 223.485 14.0836V13.1165C223.485 11.4081 223.791 9.93338 224.404 8.69236C225.033 7.45133 225.928 6.49236 227.09 5.81543C228.267 5.13851 229.678 4.80005 231.323 4.80005H231.565C233.21 4.80005 234.614 5.13851 235.775 5.81543C236.952 6.49236 237.848 7.45133 238.46 8.69236C239.089 9.93338 239.404 11.4081 239.404 13.1165V14.0836C239.404 15.792 239.089 17.2667 238.46 18.5077C237.848 19.7488 236.952 20.7077 235.775 21.3847C234.614 22.0616 233.21 22.4 231.565 22.4H231.323ZM231.348 19.3055H231.541C232.864 19.3055 233.912 18.8784 234.686 18.0242C235.477 17.17 235.872 15.8806 235.872 14.1561V13.044C235.872 11.3195 235.477 10.0301 234.686 9.17587C233.912 8.32166 232.864 7.89455 231.541 7.89455H231.348C230.025 7.89455 228.969 8.32166 228.178 9.17587C227.404 10.0301 227.017 11.3195 227.017 13.044V14.1561C227.017 15.8806 227.404 17.17 228.178 18.0242C228.969 18.8784 230.025 19.3055 231.348 19.3055Z" fill="white"></path><path d="M242.663 22.0616V5.13851H249.075C250.381 5.13851 251.51 5.36415 252.462 5.81543C253.429 6.2506 254.171 6.87917 254.687 7.70115C255.22 8.50701 255.486 9.4821 255.486 10.6264V11.0858C255.486 12.8425 254.905 14.2044 253.744 15.1715C252.583 16.1224 251.026 16.5979 249.075 16.5979H246.196V22.0616H242.663ZM246.196 13.5517H248.978C249.817 13.5517 250.518 13.3663 251.083 12.9957C251.663 12.625 251.954 12.0125 251.954 11.1583V10.5539C251.954 9.73192 251.663 9.13558 251.083 8.76488C250.518 8.37807 249.817 8.18466 248.978 8.18466H246.196V13.5517Z" fill="white"></path><path d="M258.044 22.0616V5.13851H269.294V8.13631H261.576V12.0286H267.842L267.431 15.0264H261.576V19.0638H269.439V22.0616H258.044Z" fill="white"></path><path d="M272.645 22.0616V5.13851H279.056C281.024 5.13851 282.581 5.59785 283.726 6.51653C284.887 7.43521 285.468 8.70847 285.468 10.3363V10.7957C285.468 11.94 285.185 12.907 284.621 13.6968C284.073 14.4865 283.298 15.0828 282.298 15.4858L286 22.0616H282.153L278.815 16.0176H276.177V22.0616H272.645ZM276.177 12.9715H278.96C279.815 12.9715 280.524 12.8103 281.089 12.488C281.653 12.1656 281.936 11.6257 281.936 10.8682V10.2638C281.936 9.53851 281.653 9.0147 281.089 8.69236C280.524 8.3539 279.815 8.18466 278.96 8.18466H276.177V12.9715Z" fill="white"></path></svg></a></div> <div class="nav-links svelte-lpaw1y" role="navigation"><ul class="svelte-lpaw1y nav-menu js-nav-menu" id="accessible-megamenu-1779533450619-1"><li class="nav-item svelte-lpaw1y"><a href="https://developer.nvidia.com/" class="svelte-lpaw1y" id="accessible-megamenu-1779533450619-2">Home</a> </li><li class="nav-item svelte-lpaw1y"><a href="https://developer.nvidia.com/blog/" class="svelte-lpaw1y" id="accessible-megamenu-1779533450619-3">Blog</a> </li><li class="nav-item svelte-lpaw1y"><a href="https://forums.developer.nvidia.com/" class="svelte-lpaw1y" id="accessible-megamenu-1779533450619-4">Forums</a> </li><li class="nav-item svelte-lpaw1y"><a href="https://docs.nvidia.com/" class="svelte-lpaw1y" id="accessible-megamenu-1779533450619-5">Docs</a> </li><li class="nav-item svelte-lpaw1y"><a href="https://developer.nvidia.com/downloads" class="svelte-lpaw1y" id="accessible-megamenu-1779533450619-6">Downloads</a> </li><li class="nav-item svelte-lpaw1y"><a href="/deep-learning-ai/education/" class="svelte-lpaw1y" id="accessible-megamenu-1779533450619-7">Training</a> </li></ul></div> <div class="actions svelte-lpaw1y"><div class="svelte-lpaw1y"><form action="https://developer.nvidia.com/search" class="svelte-lpaw1y"><button id="nv-search-box" class="btn-search svelte-lpaw1y" type="button" aria-label="Search NVIDIA"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi bi-search svelte-lpaw1y" viewBox="0 0 24 24"><path fill="currentColor" d="M9.9,4.05A5.85,5.85,0,1,1,4.05,9.9,5.8566,5.8566,0,0,1,9.9,4.05m0-1.5A7.35,7.35,0,1,0,17.25,9.9,7.35,7.35,0,0,0,9.9,2.55Z"></path><line stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" x1="15" y1="15" x2="19.875" y2="19.875"></line></svg></button> <button id="cancel-nv-search-box" class="cancel-search hide svelte-lpaw1y" type="button" aria-label="Search NVIDIA"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi bi-close svelte-lpaw1y" viewBox="0 0 24 24"><line stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" x1="4.5" y1="4.5" x2="19.5" y2="19.5"></line><line stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" x1="4.5" y1="19.5" x2="19.5" y2="4.5"></line></svg></button></form> <ul class="nav-menu svelte-lpaw1y"><li class="nav-item svelte-lpaw1y"><a class="btn-join nv-join svelte-lpaw1y" href="https://developer.nvidia.com/login">Join</a></li> <li class="nav-item svelte-lpaw1y"><a id="user-icon--mobile" class="nv-login svelte-lpaw1y" href="https://developer.nvidia.com/login" aria-label="Log in">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="n24-user-circle" viewBox="0 0 24 24">
      <defs><style>.n24-user-circle-cls-1 {fill: none; stroke: #CCC; stroke-miterlimit: 10; stroke-width: 1.5px;} .n24-bounds {fill: none;}</style></defs>
      <rect id="m-n24-icon-user-circle-bounds" class="n24-bounds" width="24" height="24"></rect>
      <g id="m-n24-icon-user-circle">
        <circle id="m-user-circle" class="n24-user-circle-cls-1" cx="12" cy="12" r="9.75"></circle>
        <polyline id="m-user-body" class="n24-user-circle-cls-1" points="17.55 20.01 16.34 15.48 7.66 15.48 6.45 20.01"></polyline>
        <circle id="m-user-head" class="n24-user-circle-cls-1" cx="12" cy="9.91" r="3.48"></circle>
      </g>
    </svg>
  </a> <a id="user-icon--desktop" class="nv-login svelte-lpaw1y" href="https://developer.nvidia.com/login" aria-label="Log in">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="n24-user-circle" viewBox="0 0 24 24">
      <defs><style>.n24-user-circle-cls-1 {fill: none; stroke: #CCC; stroke-miterlimit: 10; stroke-width: 1.5px;} .n24-bounds {fill: none;}</style></defs>
      <rect id="m-n24-icon-user-circle-bounds" class="n24-bounds" width="24" height="24"></rect>
      <g id="m-n24-icon-user-circle">
        <circle id="m-user-circle" class="n24-user-circle-cls-1" cx="12" cy="12" r="9.75"></circle>
        <polyline id="m-user-body" class="n24-user-circle-cls-1" points="17.55 20.01 16.34 15.48 7.66 15.48 6.45 20.01"></polyline>
        <circle id="m-user-head" class="n24-user-circle-cls-1" cx="12" cy="9.91" r="3.48"></circle>
      </g>
    </svg>
  </a> </li> </ul></div></div></div></div> <div class="nav-wrapper svelte-lpaw1y"><div class="nv-container svelte-lpaw1y"><div class="nav-links svelte-lpaw1y" role="navigation"><ul class="nav-menu svelte-lpaw1y js-nav-menu" id="accessible-megamenu-1779533450619-8"><li class="nav-item svelte-lpaw1y"><a class="dropdown svelte-lpaw1y" href="javascript:void(0);" id="accessible-megamenu-1779533450619-9" role="button" aria-controls="accessible-megamenu-1779533450619-10" aria-expanded="false" tabindex="0">Topics</a> <div class="sub-nav mega" id="accessible-megamenu-1779533450619-10" role="region" aria-hidden="true" aria-labelledby="accessible-megamenu-1779533450619-9"><ul class="sub-nav-group"><li>Artificial Intelligence</li> <li><a href="https://developer.nvidia.com/topics/ai/">Overview</a> </li><li><a href="https://developer.nvidia.com/topics/ai/ai-inference/">AI Inference</a> </li><li><a href="https://developer.nvidia.com/topics/ai/conversational-ai/">Conversational AI</a> </li><li><a href="https://developer.nvidia.com/topics/ai/cybersecurity-ai/">Cybersecurity</a> </li><li><a href="https://developer.nvidia.com/topics/ai/data-science">Data Science</a> </li><li><a href="https://developer.nvidia.com/generative-ai">Generative AI</a> </li><li><a href="https://developer.nvidia.com/topics/ai/retrieval-augmented-generation">Retrieval-Augmented Generation</a> </li><li><a href="https://developer.nvidia.com/computer-vision">Vision AI</a> </li></ul><ul class="sub-nav-group"><li>Cloud and Data Center</li> <li><a href="https://developer.nvidia.com/cloud-native">Cloud-Native Technologies</a> </li><li><a href="https://developer.nvidia.com/magnum-io">IO Acceleration</a> </li><li><a href="https://developer.nvidia.com/networking">Networking</a> </li></ul><ul class="sub-nav-group"><li>Design and Simulation</li> <li><a href="https://developer.nvidia.com/topics/cae">Computer Aided Engineering</a> </li><li><a href="https://developer.nvidia.com/xr">Extended Reality (XR)</a> </li><li><a href="https://developer.nvidia.com/physx-sdk">Physics and Dynamics Simulation</a> </li><li><a href="https://developer.nvidia.com/isaac/sim">Robotics Simulation</a> </li><li><a href="https://developer.nvidia.com/drive/simulation">Self-Driving Vehicles Simulation</a> </li></ul><ul class="sub-nav-group"><li>Graphics and Rendering</li> <li><a href="https://developer.nvidia.com/rtx/ray-tracing">Ray Tracing</a> </li><li><a href="https://developer.nvidia.com/video-and-audio-solutions">Video, Broadcast, and Display</a> </li><li><a href="https://developer.nvidia.com/game-engines">Game Engines</a> </li><li><a href="https://developer.nvidia.com/image-processing">Image Processing</a> </li></ul><ul class="sub-nav-group"><li>High-Performance Computing</li> <li><a href="https://developer.nvidia.com/hpc">Overview</a> </li><li><a href="https://developer.nvidia.com/hpc-sdk">HPC Compilers and Libraries</a> </li></ul><ul class="sub-nav-group"><li>Robotics and Edge AI</li> <li><a href="https://developer.nvidia.com/embedded-computing">Overview</a> </li><li><a href="/blog/blog/build-robots-with-ai/">Robotics Development</a> </li><li><a href="https://developer.nvidia.com/metropolis">AI-Enabled Video Analytics</a> </li><li><a href="https://developer.nvidia.com/embedded/jetson-developer-kits">Developer Kits</a> </li><li><a href="https://developer.nvidia.com/embedded/jetson-modules">Production Modules</a> </li></ul><ul class="sub-nav-group"><li>Autonomous Vehicles</li> <li><a href="https://developer.nvidia.com/drive">Overview</a> </li><li><a href="https://developer.nvidia.com/drive/drive-hyperion">Development Platform</a> </li><li><a href="https://developer.nvidia.com/drive/driveos">Modular Software Stack</a> </li><li><a href="https://developer.nvidia.com/drive/drive-sim">Simulation Platform</a> </li><li><a href="https://developer.nvidia.com/drive/infrastructure">AV Infastructure</a> </li></ul><ul class="sub-nav-group"><li>Quantum Computing</li> <li><a href="https://developer.nvidia.com/cuda-q">CUDA-Q - Quantum Platform</a> </li><li><a href="https://developer.nvidia.com/cuda-qx">CUDA-QX - Quantum Libraries</a> </li><li><a href="https://developer.nvidia.com/cuquantum-sdk">cuQuantum - Quantum SDK</a> </li><li><a href="https://developer.nvidia.com/cupqc">cuPQC - Accelerated PQC</a> </li></ul><ul class="sub-nav-group"><li>Topics Overview</li> <li><a href="https://developer.nvidia.com/topics">Topics</a> </li></ul></div> </li><li class="nav-item svelte-lpaw1y"><a class="dropdown svelte-lpaw1y" href="javascript:void(0);" id="accessible-megamenu-1779533450619-11" role="button" aria-controls="accessible-megamenu-1779533450619-12" aria-expanded="false" tabindex="0">Platforms and Tools</a> <div class="sub-nav mega" id="accessible-megamenu-1779533450619-12" role="region" aria-hidden="true" aria-labelledby="accessible-megamenu-1779533450619-11"><ul class="sub-nav-group"><li>Accelerated Computing</li> <li><a href="https://developer.nvidia.com/cuda-toolkit">CUDA Toolkit</a> </li><li><a href="https://developer.nvidia.com/gpu-accelerated-libraries">CUDA-X Libraries</a> </li><li><a href="https://developer.nvidia.com/tools-overview">Nsight Developer Tools</a> </li></ul><ul class="sub-nav-group"><li>AI Training and Inference</li> <li><a href="https://developer.nvidia.com/topics/ai/ai-inference">AI Inference</a> </li><li><a href="https://developer.nvidia.com/topics/ai/data-science">Data Science</a> </li><li><a href="https://developer.nvidia.com/ai-apps-for-rtx-pcs">RTX AI Apps</a> </li></ul><ul class="sub-nav-group"><li>Cloud Development</li> <li><a href="https://build.nvidia.com/explore/discover">API Catalog</a> </li><li><a href="https://developer.nvidia.com/brev">Developer Sandbox</a> </li><li><a href="https://developer.nvidia.com/dgx-cloud">NVIDIA DGX Cloud</a> </li><li><a href="https://catalog.ngc.nvidia.com/">NGC Catalog - GPU-Optimized Software</a> </li></ul><ul class="sub-nav-group"><li>Simulation</li> <li><a href="https://developer.nvidia.com/omniverse">Omniverse</a> </li><li><a href="https://developer.nvidia.com/cosmos">Cosmos - World Foundation Models</a> </li><li><a href="https://developer.nvidia.com/ace">ACE - Digital Humans</a> </li><li><a href="https://developer.nvidia.com/usd">Universal Scene Description (OpenUSD)</a> </li></ul><ul class="sub-nav-group"><li>See More</li> <li><a href="https://developer.nvidia.com/developer-tools-catalog">Developer Tools Catalog</a> </li><li><a href="https://developer.nvidia.com/open-source">Open Source Catalog</a> </li><li><a href="https://developer.nvidia.com/platforms-and-tools">Platforms and Tools Overview</a> </li></ul></div> </li><li class="nav-item svelte-lpaw1y"><a class="dropdown svelte-lpaw1y" href="javascript:void(0);" id="accessible-megamenu-1779533450619-13" role="button" aria-controls="accessible-megamenu-1779533450619-14" aria-expanded="false" tabindex="0">Industries</a> <div class="sub-nav" id="accessible-megamenu-1779533450619-14" role="region" aria-hidden="true" aria-labelledby="accessible-megamenu-1779533450619-13"><ul class="sub-nav-group"> <li><a href="https://developer.nvidia.com/industries/aeco">AECO</a> </li><li><a href="https://developer.nvidia.com/drive">Automotive</a> </li><li><a href="https://developer.nvidia.com/industries/consumer-internet">Consumer Internet</a> </li><li><a href="https://developer.nvidia.com/industries/energy">Energy</a> </li><li><a href="https://developer.nvidia.com/industries/financial-services">Financial Services</a> </li><li><a href="https://developer.nvidia.com/industries/game-development">Gaming</a> </li><li><a href="https://developer.nvidia.com/industries/public-sector">Global Public Sector</a> </li><li><a href="https://developer.nvidia.com/industries/overview">See More</a> </li></ul></div> </li><li class="nav-item svelte-lpaw1y"><a class="dropdown svelte-lpaw1y" href="javascript:void(0);" id="accessible-megamenu-1779533450619-15" role="button" aria-controls="accessible-megamenu-1779533450619-16" aria-expanded="false" tabindex="0">Resources</a> <div class="sub-nav" id="accessible-megamenu-1779533450619-16" role="region" aria-hidden="true" aria-labelledby="accessible-megamenu-1779533450619-15"><ul class="sub-nav-group"> <li><a href="https://developer.nvidia.com/developer-program">Developer Program</a> </li><li><a href="https://developer.nvidia.com/developer-community-hub">Developer Community Hub</a> </li><li><a href="https://discord.gg/nvidiadeveloper">Developer Discord</a> </li><li><a href="/startups/">For Startups</a> </li><li><a href="https://developer.nvidia.com/higher-education-and-research">For Higher Education</a> </li><li><a href="/gtc/">NVIDIA GTC</a> </li><li><a href="/on-demand/">NVIDIA On-Demand</a> </li></ul></div> </li></ul></div></div></div></nav></div>

    

    <div id="page-mobile-nav-container"><div class="page-mobile-navigation"><button class="page-quick-links__header">On this page</button><ul class="page-quick-links__items"><li><a class="link-cta page-quick-links__link link-level-1" href="#section-how-it-works">How It Works</a></li><li><a class="link-cta page-quick-links__link link-level-1" href="#section-getting-started">Getting Started</a></li><li><a class="link-cta page-quick-links__link link-level-1" href="#section-starter-kits">Starter Kits</a></li><li><a class="link-cta page-quick-links__link link-level-1" href="#section-learning-library">Learning Library</a></li><li><a class="link-cta page-quick-links__link link-level-1" href="#section-more-resources">More Resources</a></li></ul></div></div>
    <div class="page">
      <div class="getting-started-page">
<div class="container breadcrumb-container"><ol class="breadcrumb">
<li class="breadcrumb-item"><a href="https://developer.nvidia.com/topics/" id="ivemf6">Topics</a></li>
<div id="ixwtf2" class="breadcrumb-item"><a href="https://developer.nvidia.com/topics/ai" id="izij21">AI</a></div>
<div id="ibrfew" class="breadcrumb-item">
<a href="https://developer.nvidia.com/topics/ai/generative-ai/" id="i5eccz">Generative AI</a><br>
</div>
<div id="irsh5h" class="breadcrumb-item active">NVIDIA Riva<br>
</div>
</ol></div>
<div class="container page"><div class="row">
<div class="col-xl-2 col-lg-3 col-md-12 col-sm-12 d-md-none d-lg-block col-sidebar"><aside class="page__sidebar with-sticky-nav"><div class="page-navigation-container"><div data-react-class="PageNavigation" data-react-props="{&quot;draggable&quot;:&quot;true&quot;,&quot;editable&quot;:&quot;true&quot;,&quot;use_numbering&quot;:&quot;true&quot;}" data-react-cache-id="PageNavigation-iv326"><div class="page-quick-links page-navigation"><p class="p--small page-quick-links__header">On this page</p><ul><li class="page-quick-links__list-item" data-idx="0" data-lvl="1" data-parent="0"><a class="page-quick-links__link link-level-1 active" data-sub-menu="false" href="#section-how-it-works"> How It Works</a></li><li class="page-quick-links__list-item" data-idx="1" data-lvl="1" data-parent="1"><a class="page-quick-links__link link-level-1" data-sub-menu="false" href="#section-getting-started"> Getting Started</a></li><li class="page-quick-links__list-item" data-idx="2" data-lvl="1" data-parent="2"><a class="page-quick-links__link link-level-1" data-sub-menu="false" href="#section-starter-kits"> Starter Kits</a></li><li class="page-quick-links__list-item" data-idx="3" data-lvl="1" data-parent="3"><a class="page-quick-links__link link-level-1" data-sub-menu="false" href="#section-learning-library"> Learning Library</a></li><li class="page-quick-links__list-item" data-idx="4" data-lvl="1" data-parent="4"><a class="page-quick-links__link link-level-1" data-sub-menu="false" href="#section-more-resources"> More Resources</a></li></ul></div></div></div></aside></div>
<div class="col-xl-1 col-lg-1 col-separator with-border"></div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-main-content"><main class="page__content"><section class="page__section page__first-section"><h1 title=" class="h--large section__heading">NVIDIA Riva for Developers</h1>
<p class="p--large text-color-gray mb-0"><a href="/ai-data-science/products/riva/" id="ih6qig" target="">NVIDIA® Riva</a>  is a GPU-accelerated library for building fully customizable, real-time multilingual speech and translation pipelines. Combined with <a href="https://developer.nvidia.com/nemotron" id="ig4k2i" target="">NVIDIA Nemotron</a>™ speech models, Riva delivers automatic speech recognition (ASR), text-to-speech (TTS), and neural machine translation (NMT) and is deployable in all clouds, in data centers, at the edge, or in embedded devices. As speech becomes the primary interface for AI agents, Riva enables organizations to integrate intuitive, voice-first AI agents that understand and respond naturally in multiple languages.<br></p>
<div class="separator separator--30"></div>
<p id="ihmj8l"><a href="https://build.nvidia.com/explore/speech" target="_blank" title="Download Now" class="btn btn-cta me-2 mt-2">Try APIs</a><a href="https://docs.nvidia.com/deeplearning/riva/user-guide/docs/index.html" target="_blank" title="Forums link" class="btn btn-cta--light btn-cta me-2 mt-2">Documentation</a><a href="https://forums.developer.nvidia.com/c/ai-data-science/deep-learning/riva/475" target="_blank" title="Go to Documentation" class="btn btn-cta--light btn-cta me-2 mt-2">Forum</a></p></section><hr class="separator">
<section class="page__section page__second-section"><div id="section-how-it-works" class="toc-item-anchor"></div><h2 title="How It Works" class="h--medium section__heading toc-item" data-anchor-id="section-how-it-works">How NVIDIA Riva Works<br>
</h2>
<p id="i42brh">Speech and translation AI microservices convert spoken words into text (speech recognition), written language into spoken words (speech synthesis), and spoken or written words from one language to another (translation). Pretrained AI models are trained on vast datasets and can be fine-tuned on custom datasets to accelerate the development of domain-specific models. Fully containerized, these microservices are optimized for real-time performance and offline high throughput on premises or in the cloud, and can quickly scale to hundreds and thousands of parallel streams.<br></p>
<div class="separator separator--30"></div>
<img src="../../../assets/developer.download.nvidia.com/images/products/riva-how-it-works-2560x940.svg" id="ixvc6d" alt=" A workflow diagram showing speech and translation AI microservices"></section><div class="separator separator--60"></div>
<section class="page__section page__second-section pb-0 pt-0"><div class="row cards__list">
<div class="col-md-12 col-sm-12 col-lg-4 col-xl-3"><div class="card-wrapper"><div class="card"><div class="card__content">
<h3 class="h--smallest txt-clr--blck mb-3">Quick-Start Guide<br>
</h3>
<p id="i0skxc">Get step-by-step instructions for deploying pretrained models and how to interact with them.<br></p>
<a href="https://docs.nvidia.com/deeplearning/riva/user-guide/docs/quick-start-guide.html?_gl=1*mut5vc*_gcl_au*NDk1OTAwNzg1LjE3MTYyMjY5Njc." target="_blank" class="link-cta text-transform-unset fw-bold">Get Started<br><i class="chevron-right"></i></a>
</div></div></div></div>
<div class="col-lg-4 col-md-12 col-sm-12 col-xl-3"><div class="card-wrapper"><div class="card"><div class="card__content">
<h3 class="h--smallest txt-clr--blck mb-3">Learn to Add Voice to Your Apps&nbsp;<br>
</h3>
<p id="inevnz">Learn how to add real-time speech recognition, translation, and natural-sounding text-to-speech to your applications using NVIDIA NIM™ for production-ready voice experiences.<br></p>
<a href="https://developer.nvidia.com/blog/quickly-voice-your-apps-with-nvidia-nim-microservices-for-speech-and-translation/" target=" class="link-cta text-transform-unset fw-bold">Read Blog<i class="chevron-right"></i></a>
</div></div></div></div>
<div class="col-lg-4 col-md-12 col-sm-12 col-xl-3"><div class="card-wrapper"><div class="card"><div class="card__content">
<h3 class="h--smallest txt-clr--blck mb-3">Tutorial<br>
</h3>
<p id="iz3vy4">Read how to build a voice-powered AI agent that combines the NVIDIA Nemotron streaming ASR model with multimodal retrieval-augmented generation (RAG), safety guardrails, and long-context reasoning.<br></p>
<a href="https://developer.nvidia.com/blog/how-to-build-a-voice-agent-with-rag-and-safety-guardrails/" target=" class="link-cta text-transform-unset fw-bold">Read Blog<br></a>
</div></div></div></div>
<div class="col-lg-4 col-md-12 col-sm-12 col-xl-3"><div class="card-wrapper"><div class="card"><div class="card__content">
<h3 class="h--smallest txt-clr--blck mb-3">Video Demo<br>
</h3>
<p id="ix1qc5">Learn how to build a voice-enabled AI agent that integrates an NVIDIA Nemotron ultra-low-latency streaming model for real-time automatic speech recognition.<br></p>
<a href="https://www.youtube.com/watch?v=bCDcziL9OCo" target="_blank" class="link-cta text-transform-unset fw-bold">Watch Video<i class="chevron-right"></i></a>
</div></div></div></div>
</div></section><div class="separator separator--30"></div>
<hr class="separator separator--md">
<section id="icuk3" class="page__section"><div id="section-getting-started" class="toc-item-anchor"></div><h2 title="Getting Started" class="h--medium section__heading toc-item" data-anchor-id="section-getting-started">Ways to Get Started With NVIDIA Riva</h2>
<p id="ihipx5" class="p--large">Use the right tools and technologies to build and deploy fully 
customizable, multilingual speech and translation AI applications.</p>
<section class="page__section page__second-section pb-0 pt-0"><div class="row cards-grid--60">
<div class="separator separator--30"></div>
<div class="col-12 col-md pb-4 pb-md-0">
<img src="../../../assets/developer.download.nvidia.com/icons/m48-nim-256px-blk%201@2x.png" alt="A decorative image of building AI application with NVIDIA NIM APIs " class="mb-3 mw-6-rem"><h3 id="id1kcn" class="h--smaller">Try</h3>
<p id="i9gihq-2">Experience Riva through a UI-based portal for exploring and prototyping with NVIDIA-managed endpoints, available for free through <a href="http://build.nvidia.com" id="i83pt4-2" target="_blank">nvidia.build.com</a>.<br></p>
<a href="https://build.nvidia.com/explore/speech" target="_blank" class="link-cta text-transform-unset">Try Now</a>
</div>
<div class="col-12 col-md pb-4 pb-md-0">
<img src="../../../assets/developer.download.nvidia.com/icons/m48-digital-deep-learning-institute-talks-training.svg" alt="A decorative image of deploying with NVIDIA AI Enterprise" class="mb-3 mw-6-rem"><h3 id="iahjtr" class="h--smaller">Deploy</h3>
<p id="i9gihq">Get a free license to try <a href="/data-center/products/ai-enterprise/" id="i83pt4" target="_blank">NVIDIA AI Enterprise</a>&nbsp;for 90 days using your existing infrastructure.<br></p>
<a href="https://enterpriseproductregistration.nvidia.com/?LicType=EVAL&amp;ProductFamily=NVAIEnterprise" class="link-cta text-transform-unset">Request a 90-Day License</a>
</div>
</div></section></section><hr class="separator separator--md">
<section id="isw22" class="page__section"><section class="page__section page__second-section pb-0 pt-0"><div id="section-starter-kits" class="toc-item-anchor"></div><h2 title="Starter Kits" class="h--medium section__heading toc-item" data-anchor-id="section-starter-kits">Development Starter Kits</h2>
<p id="iqokzb" class="p--large">Start developing your speech and translation AI application with Riva by accessing tutorials, notebooks, <a href="https://forums.developer.nvidia.com/c/ai-data-science/deep-learning/riva/475" target="_blank">forums</a>, <a href="https://docs.nvidia.com/deeplearning/riva/user-guide/docs/release-notes.html" target="_blank">release notes</a>, and comprehensive <a href="https://docs.nvidia.com/deeplearning/riva/user-guide/docs/index.html" target="_blank">documentation</a>.<br></p>
<div class="separator separator--60 tablet-45"></div>
<div class="row cards-grid--60">
<div class="col-lg-4 col-md-12 col-sm-12 grid-col">
<h3 class="h--smaller mb-0">Automatic Speech Recognition<br>
</h3>
<div class="separator separator--30"></div>
<p class="mb-0">Achieve high transcription accuracy for Arabic, English, French, German, Hindi, Italian, Japanese, Korean, Mandarin, Portuguese, Russian, and Spanish with state-of-the-art models pretrained on thousands of hours of audio on NVIDIA supercomputers.<br></p>
<div class="separator separator--30"></div>
<ul class="nv-list">
<li data-icon="file"><div><p class="mb-0"><a href="https://docs.nvidia.com/deeplearning/riva/user-guide/docs/asr/asr-overview.html" target="_blank">Read Speech-Recognition Documentation</a></p></div></li>
<li data-icon="file" id="id8qzc"><div><p class="mb-0"><a href="https://docs.nvidia.com/deeplearning/riva/user-guide/docs/quick-start-guide.html" target="_blank">Read Quick-Start Guide</a></p></div></li>
<li data-icon="file"><div id="i76bgr"><p class="mb-0"><a href="https://docs.nvidia.com/deeplearning/riva/user-guide/docs/tutorials-asr-contents.html" target="_blank">Explore Speech-Recognition Tutorials</a></p></div></li>
</ul>
<div class="separator separator--30"></div>
</div>
<div class="col-lg-4 col-md-12 col-sm-12 grid-col">
<h3 class="h--smaller mb-0">Text-to-Speech<br>
</h3>
<div class="separator separator--30"></div>
<p class="mb-0">Customize across English, German, Italian, Mandarin, and Spanish TTS pipelines for the voice and intonation you want.<br></p>
<div class="separator separator--30"></div>
<ul class="nv-list">
<li data-icon="file"><div><p class="mb-0"><a href="https://docs.nvidia.com/deeplearning/riva/user-guide/docs/tts/tts-overview.html" target="_blank">Read TTS Documentation </a></p></div></li>
<li data-icon="file"><div><p class="mb-0"><a href="https://docs.nvidia.com/deeplearning/riva/user-guide/docs/quick-start-guide.html" target="_blank">Read Quick-Start Guide</a></p></div></li>
<li data-icon="file"><div><p class="mb-0"><a href="https://docs.nvidia.com/deeplearning/riva/user-guide/docs/tutorials-tts-contents.html" target="_blank">Explore TTS Tutorials </a></p></div></li>
</ul>
<div class="separator separator--30"></div>
</div>
<div class="col-lg-4 col-md-12 col-sm-12 grid-col">
<h3 class="h--smaller mb-0">Neural Machine Translation</h3>
<div class="separator separator--30"></div>
<p class="mb-0">Integrate highly accurate text-to-text, speech-to-text, or speech-to-speech translation for up to 32 languages into your conversational application pipelines. <br></p>
<div class="separator separator--30"></div>
<ul class="nv-list">
<li data-icon="file"><div><p class="mb-0"><a href="https://docs.nvidia.com/deeplearning/riva/user-guide/docs/translation/translation-overview.html" target="_blank">Read NMT Documentation</a></p></div></li>
<li data-icon="file"><div><p class="mb-0"><a href="https://docs.nvidia.com/deeplearning/riva/user-guide/docs/quick-start-guide.html" target="_blank">Read Quick-Start Guide</a></p></div></li>
<li data-icon="file"><div><p class="mb-0"><a href="https://docs.nvidia.com/deeplearning/riva/user-guide/docs/tutorials-nmt-contents.html" target="_blank">Explore NMT Tutorials</a></p></div></li>
</ul>
<div class="separator separator--30"></div>
</div>
</div></section></section><hr class="separator separator--md">
<section class="page__section"><section class="page__section pt-0 pb-0"><div id="section-learning-library" class="toc-item-anchor"></div><h2 title="Learning Library" class="h--medium section__heading toc-item" data-anchor-id="section-learning-library">NVIDIA Riva Learning Library</h2>
<div data-react-class="FacetedSearch" data-react-props="{&quot;layout&quot;:&quot;compact&quot;,&quot;id&quot;:&quot;iud1tk&quot;,&quot;collection_id&quot;:&quot;8&quot;,&quot;query_by&quot;:&quot;title,excerpt&quot;,&quot;sort_by&quot;:&quot;featured_in.riva:desc,title:asc&quot;,&quot;filter_by&quot;:&quot;(products:=[`Riva`] &amp;&amp; source:=[`techblog`, `ngc`, `nvod`]) || (source:=[`spreadsheet`] &amp;&amp; topics:=[`riva`])&quot;,&quot;disabled_filters&quot;:&quot;products&quot;,&quot;view_mode&quot;:&quot;card&quot;,&quot;card_options&quot;:&quot;\&quot;hasImagePadding:0;isClickableCard:1;truncatePretitle:1\&quot;&quot;,&quot;items_per_page&quot;:&quot;6&quot;,&quot;compact_mode_cta_text&quot;:&quot;View All Riva Resources&quot;,&quot;compact_mode_cta_url&quot;:&quot;https://developer.nvidia.com/learning-library?refinementList%5Bproducts%5D%5B0%5D=Riva&amp;page=1&quot;,&quot;sort_by_label&quot;:&quot;&quot;,&quot;compact_mode_dropdown_label&quot;:&quot;Explore Resources&quot;}" data-react-cache-id="FacetedSearch-iud1tk"><div class="container faceted-filters"><div class="row"><div class="col-lg-3 col-md-3 col-sm-12"><div class="faceted-filters-form"><svg aria-labelledby="k14yi-aria" role="img" viewBox="0 0 300 150" width="300" height="150"><title id="k14yi-aria">Loading...</title><rect role="presentation" x="0" y="0" width="100%" height="100%" clip-path="url(#k14yi-diff)" style="fill: url(&quot;#k14yi-animated-diff&quot;);"></rect><defs><clipPath id="k14yi-diff"><rect x="0" y="0" width="67" height="11" rx="3"></rect><rect x="76" y="0" width="140" height="11" rx="3"></rect><rect x="127" y="48" width="53" height="11" rx="3"></rect><rect x="187" y="48" width="72" height="11" rx="3"></rect><rect x="18" y="48" width="100" height="11" rx="3"></rect><rect x="0" y="71" width="37" height="11" rx="3"></rect><rect x="18" y="23" width="140" height="11" rx="3"></rect><rect x="166" y="23" width="173" height="11" rx="3"></rect></clipPath><linearGradient id="k14yi-animated-diff"><stop offset="0%" stop-color="#f5f6f7" stop-opacity="1"><animate attributeName="offset" values="-2; -2; 1" keyTimes="0; 0.25; 1" dur="2s" repeatCount="indefinite"></animate></stop><stop offset="50%" stop-color="#eee" stop-opacity="1"><animate attributeName="offset" values="-1; -1; 2" keyTimes="0; 0.25; 1" dur="2s" repeatCount="indefinite"></animate></stop><stop offset="100%" stop-color="#f5f6f7" stop-opacity="1"><animate attributeName="offset" values="0; 0; 3" keyTimes="0; 0.25; 1" dur="2s" repeatCount="indefinite"></animate></stop></linearGradient></defs></svg><svg aria-labelledby="2b8zvh-aria" role="img" viewBox="0 0 300 150" width="300" height="150"><title id="2b8zvh-aria">Loading...</title><rect role="presentation" x="0" y="0" width="100%" height="100%" clip-path="url(#2b8zvh-diff)" style="fill: url(&quot;#2b8zvh-animated-diff&quot;);"></rect><defs><clipPath id="2b8zvh-diff"><rect x="0" y="0" width="67" height="11" rx="3"></rect><rect x="76" y="0" width="140" height="11" rx="3"></rect><rect x="127" y="48" width="53" height="11" rx="3"></rect><rect x="187" y="48" width="72" height="11" rx="3"></rect><rect x="18" y="48" width="100" height="11" rx="3"></rect><rect x="0" y="71" width="37" height="11" rx="3"></rect><rect x="18" y="23" width="140" height="11" rx="3"></rect><rect x="166" y="23" width="173" height="11" rx="3"></rect></clipPath><linearGradient id="2b8zvh-animated-diff"><stop offset="0%" stop-color="#f5f6f7" stop-opacity="1"><animate attributeName="offset" values="-2; -2; 1" keyTimes="0; 0.25; 1" dur="2s" repeatCount="indefinite"></animate></stop><stop offset="50%" stop-color="#eee" stop-opacity="1"><animate attributeName="offset" values="-1; -1; 2" keyTimes="0; 0.25; 1" dur="2s" repeatCount="indefinite"></animate></stop><stop offset="100%" stop-color="#f5f6f7" stop-opacity="1"><animate attributeName="offset" values="0; 0; 3" keyTimes="0; 0.25; 1" dur="2s" repeatCount="indefinite"></animate></stop></linearGradient></defs></svg><svg aria-labelledby="l5ywuis-aria" role="img" viewBox="0 0 300 150" width="300" height="150"><title id="l5ywuis-aria">Loading...</title><rect role="presentation" x="0" y="0" width="100%" height="100%" clip-path="url(#l5ywuis-diff)" style="fill: url(&quot;#l5ywuis-animated-diff&quot;);"></rect><defs><clipPath id="l5ywuis-diff"><rect x="0" y="0" width="67" height="11" rx="3"></rect><rect x="76" y="0" width="140" height="11" rx="3"></rect><rect x="127" y="48" width="53" height="11" rx="3"></rect><rect x="187" y="48" width="72" height="11" rx="3"></rect><rect x="18" y="48" width="100" height="11" rx="3"></rect><rect x="0" y="71" width="37" height="11" rx="3"></rect><rect x="18" y="23" width="140" height="11" rx="3"></rect><rect x="166" y="23" width="173" height="11" rx="3"></rect></clipPath><linearGradient id="l5ywuis-animated-diff"><stop offset="0%" stop-color="#f5f6f7" stop-opacity="1"><animate attributeName="offset" values="-2; -2; 1" keyTimes="0; 0.25; 1" dur="2s" repeatCount="indefinite"></animate></stop><stop offset="50%" stop-color="#eee" stop-opacity="1"><animate attributeName="offset" values="-1; -1; 2" keyTimes="0; 0.25; 1" dur="2s" repeatCount="indefinite"></animate></stop><stop offset="100%" stop-color="#f5f6f7" stop-opacity="1"><animate attributeName="offset" values="0; 0; 3" keyTimes="0; 0.25; 1" dur="2s" repeatCount="indefinite"></animate></stop></linearGradient></defs></svg><svg aria-labelledby="uk4zvjd-aria" role="img" viewBox="0 0 300 150" width="300" height="150"><title id="uk4zvjd-aria">Loading...</title><rect role="presentation" x="0" y="0" width="100%" height="100%" clip-path="url(#uk4zvjd-diff)" style="fill: url(&quot;#uk4zvjd-animated-diff&quot;);"></rect><defs><clipPath id="uk4zvjd-diff"><rect x="0" y="0" width="67" height="11" rx="3"></rect><rect x="76" y="0" width="140" height="11" rx="3"></rect><rect x="127" y="48" width="53" height="11" rx="3"></rect><rect x="187" y="48" width="72" height="11" rx="3"></rect><rect x="18" y="48" width="100" height="11" rx="3"></rect><rect x="0" y="71" width="37" height="11" rx="3"></rect><rect x="18" y="23" width="140" height="11" rx="3"></rect><rect x="166" y="23" width="173" height="11" rx="3"></rect></clipPath><linearGradient id="uk4zvjd-animated-diff"><stop offset="0%" stop-color="#f5f6f7" stop-opacity="1"><animate attributeName="offset" values="-2; -2; 1" keyTimes="0; 0.25; 1" dur="2s" repeatCount="indefinite"></animate></stop><stop offset="50%" stop-color="#eee" stop-opacity="1"><animate attributeName="offset" values="-1; -1; 2" keyTimes="0; 0.25; 1" dur="2s" repeatCount="indefinite"></animate></stop><stop offset="100%" stop-color="#f5f6f7" stop-opacity="1"><animate attributeName="offset" values="0; 0; 3" keyTimes="0; 0.25; 1" dur="2s" repeatCount="indefinite"></animate></stop></linearGradient></defs></svg><svg aria-labelledby="2buxxif-aria" role="img" viewBox="0 0 300 150" width="300" height="150"><title id="2buxxif-aria">Loading...</title><rect role="presentation" x="0" y="0" width="100%" height="100%" clip-path="url(#2buxxif-diff)" style="fill: url(&quot;#2buxxif-animated-diff&quot;);"></rect><defs><clipPath id="2buxxif-diff"><rect x="0" y="0" width="67" height="11" rx="3"></rect><rect x="76" y="0" width="140" height="11" rx="3"></rect><rect x="127" y="48" width="53" height="11" rx="3"></rect><rect x="187" y="48" width="72" height="11" rx="3"></rect><rect x="18" y="48" width="100" height="11" rx="3"></rect><rect x="0" y="71" width="37" height="11" rx="3"></rect><rect x="18" y="23" width="140" height="11" rx="3"></rect><rect x="166" y="23" width="173" height="11" rx="3"></rect></clipPath><linearGradient id="2buxxif-animated-diff"><stop offset="0%" stop-color="#f5f6f7" stop-opacity="1"><animate attributeName="offset" values="-2; -2; 1" keyTimes="0; 0.25; 1" dur="2s" repeatCount="indefinite"></animate></stop><stop offset="50%" stop-color="#eee" stop-opacity="1"><animate attributeName="offset" values="-1; -1; 2" keyTimes="0; 0.25; 1" dur="2s" repeatCount="indefinite"></animate></stop><stop offset="100%" stop-color="#f5f6f7" stop-opacity="1"><animate attributeName="offset" values="0; 0; 3" keyTimes="0; 0.25; 1" dur="2s" repeatCount="indefinite"></animate></stop></linearGradient></defs></svg></div></div><div class="col-lg-9 col-md-9 col-sm-12"><div class="faceted-filters-results"><svg aria-labelledby="wzflx9e-aria" role="img" viewBox="0 0 400 110"><title id="wzflx9e-aria">Loading...</title><rect role="presentation" x="0" y="0" width="100%" height="100%" clip-path="url(#wzflx9e-diff)" style="fill: url(&quot;#wzflx9e-animated-diff&quot;);"></rect><defs><clipPath id="wzflx9e-diff"><rect x="0" y="0" rx="3" ry="3" width="250" height="10"></rect><rect x="20" y="20" rx="3" ry="3" width="220" height="10"></rect><rect x="20" y="40" rx="3" ry="3" width="170" height="10"></rect><rect x="0" y="60" rx="3" ry="3" width="250" height="10"></rect><rect x="20" y="80" rx="3" ry="3" width="200" height="10"></rect><rect x="20" y="100" rx="3" ry="3" width="80" height="10"></rect></clipPath><linearGradient id="wzflx9e-animated-diff"><stop offset="0%" stop-color="#f5f6f7" stop-opacity="1"><animate attributeName="offset" values="-2; -2; 1" keyTimes="0; 0.25; 1" dur="1.2s" repeatCount="indefinite"></animate></stop><stop offset="50%" stop-color="#eee" stop-opacity="1"><animate attributeName="offset" values="-1; -1; 2" keyTimes="0; 0.25; 1" dur="1.2s" repeatCount="indefinite"></animate></stop><stop offset="100%" stop-color="#f5f6f7" stop-opacity="1"><animate attributeName="offset" values="0; 0; 3" keyTimes="0; 0.25; 1" dur="1.2s" repeatCount="indefinite"></animate></stop></linearGradient></defs></svg></div></div></div></div></div></section></section><hr class="separator separator--md">
<section class="page__section pt-0 pb-0"><div id="section-more-resources" class="toc-item-anchor"></div><h2 class="h--medium section__heading toc-item" data-anchor-id="section-more-resources">More Resources</h2>
<div id="iej19c"><div class="row cards__list">
<div class="col-lg-4 col-sm-12 col-md-4"><div class="card-wrapper">
<a href=""></a><div class="card extra-resource">
<div id="ikmkx7"><div class="row justify-content-center"><div class="col-lg-5 col-xl-12 col-4"><img alt="A decorative image representing Developer Community" src="../../../assets/developer.download.nvidia.com/icons/m48-people-group.svg" class="img-fluid mw-6-rem"></div></div></div>
<div><div class="row justify-content-center"><div class="col-xl-12 col-lg-12 col-md-4 col-sm-6 col-xs-8 col-8"><h3 class="h--smallest">Explore the Community<br>
</h3></div></div></div>
<a href="https://forums.developer.nvidia.com/c/ai-data-science/deep-learning/riva/475" target="_blank" id="i00w1h"></a>
</div>
</div></div>
<div class="col-lg-4 col-sm-12 col-md-4"><div class="card-wrapper">
<a href=""></a><div class="card extra-resource">
<div><div class="row justify-content-center"><div class="col-4 col-lg-5 col-xl-12"><img alt="img-alt-text" src="../../../assets/developer.download.nvidia.com/icons/m48-certification-ribbon-2.svg" class="img-fluid mw-6-rem"></div></div></div>
<h3 class="h--smallest">Get Training and Certification<br>
</h3>
<a href="https://resources.nvidia.com/en-us-speech-ai-content/gtc24-dlit61469?lx=h9TPm5" target="_blank" id="i65lwz"></a>
</div>
</div></div>
<div class="col-lg-4 col-sm-12 col-md-4"><div class="card-wrapper">
<a href=""></a><div class="card extra-resource">
<div><div class="row justify-content-center"><div class="col-4 col-lg-5 col-xl-12"><img alt="A decorative image representing Inception for Startups" src="../../../assets/developer.download.nvidia.com/icons/m48-ai-startup.svg" class="img-fluid mw-6-rem"></div></div></div>
<h3 class="h--smallest">Meet the Program for Startups<br>
</h3>
<a href="/startups/" target="_blank" id="iekn8f"></a>
</div>
</div></div>
</div></div></section><hr class="separator separator--md">
<section class="page__section page__last-section pb-0"><h2 class="h--medium section__heading mb-0">Ethical AI <br>
</h2>
<div class="separator separator--30"></div>
<ul class="nv-list"></ul>
<p class="mb-0">NVIDIA’s platforms and application frameworks enable developers to build a wide array of AI applications. Always consider potential algorithmic bias when choosing or creating the models being deployed. Work with the model’s developer to ensure that it meets the requirements for the relevant industry and use case; that the necessary instruction and documentation are provided to understand error rates, confidence intervals, and results; and that the model is being used under the conditions and in the manner intended.<br></p></section><div class="separator separator--90"></div>
<section class="page__section page__lead-section page__last-section mt-0 page__section--light-gray"><div class="separator separator--45"></div>
<p class="p--large lead text-center mb-0 px-2">Stay up to date on the latest speech and translation AI news from NVIDIA.</p>
<div class="separator separator--30"></div>
<p class="text-center mb-0"><a href="/deep-learning-ai/solutions/conversational-ai/speech-ai-news/" target="_blank" class="btn btn-cta">Sign Up</a></p>
<div class="separator separator--45"></div></section></main></div>
</div></div>
<div class="separator separator--60"></div>
</div>
    </div>

          <script type="text/javascript">
  (() => {
    const handleQuotesBlock = (quotesBlock, idx) => {
      const blockquotes = quotesBlock.querySelectorAll('blockquote');
      if (blockquotes.length < 1) {
        return;
      }

      const navContainer = document.createElement('ul');
      navContainer.classList.add('quotes-list-navigation');
      for (let i = 0; i < blockquotes.length; i++) {
        let navItem = document.createElement('li');
        let btn = document.createElement('button');
        btn.type = 'button';
        btn.dataset['group'] = idx.toString();
        btn.dataset['length'] = blockquotes.length.toString();
        btn.value = i.toString();

        btn.addEventListener('click', (e) => {
          const group = e.target.dataset['group'];
          const groupActiveButtons = document.querySelectorAll(`button[data-group="${group}"].active`);
          groupActiveButtons.forEach((activeButton) => {
            activeButton.classList.remove('active');
          });
          e.target.classList.add('active');
          const viewPortWidth = quotesBlock.getBoundingClientRect().width;
          const clickedSlide = parseInt(e.target.value);
          quotesBlock.querySelector('.quotes-list').style.transform = `translate(-${viewPortWidth * clickedSlide}px)`;
        });
        navItem.appendChild(btn);
        navContainer.appendChild(navItem);

        if (i === 0) {
          btn.click();
        }
      }
      quotesBlock.appendChild(navContainer);
    };

    const refreshQuotesBlock = () => {
      document.querySelectorAll('.quotes-list-navigation button.active').forEach((b) => {
        const currentItem = parseInt(b.value);
        const maxItem = parseInt(b.dataset['length']);
        const group = parseInt(b.dataset['group']);
        const next = currentItem + 1;
        if (next < maxItem) {
          document.querySelectorAll(`button[data-group="${group}"]`)[next].click();
        } else {
          document.querySelectorAll(`button[data-group="${group}"]`)[0].click();
        }
      });
    };

    const refreshInterval = 4000;
    const quotesBlocks = document.querySelectorAll('.quotes-list-viewport');

    if (quotesBlocks.length) {
      quotesBlocks.forEach(handleQuotesBlock);
      setInterval(refreshQuotesBlock, refreshInterval);
    }
  })();
</script>

      <script type="text/javascript" charset="utf-8">
  (() => {
    const doInit = (accordionRoot, idx) => {
      const baseID = `page-accordion-${idx}`;
      accordionRoot.id = baseID;
      const headings = accordionRoot.querySelectorAll('.accordion-header');
      if (!headings.length) {
        return;
      }

      const collapseElements = accordionRoot.querySelectorAll('.accordion-collapse');

      headings.forEach((headingElement, idx) => {
        const headingID = `${baseID}-heading-${idx}`;
        const targetID = `${baseID}-target-${idx}`;
        headingElement.id = headingID;
        const headingButton = headingElement.querySelector('.accordion-button');
        if (!headingButton) {
          return;
        }
        headingButton.type = 'button';
        headingButton.dataset['bsToggle'] = 'collapse';
        headingButton.dataset['bsTarget'] = `#${targetID}`;
        headingButton.setAttribute('aria-expanded', true);
        headingButton.setAttribute('aria-controls', targetID);
        headingButton.setAttribute('role', 'button');

        if (!collapseElements[idx].classList.contains('show')) {
          headingButton.classList.add('collapsed');
        }

        collapseElements[idx].id = targetID;
        collapseElements[idx].setAttribute('aria-labelledby', headingID);
      });

      new bootstrap.Collapse(accordionRoot);
    };

    const initAccordions = () => {
      const accordions = document.querySelectorAll('section.page__section div.accordion');
      if (!accordions.length) {
        return;
      }

      let accordionIndex = 0;
      accordions.forEach((accordion) => {
        doInit(accordion, accordionIndex);
        accordionIndex += 1;
      });
    };
    
    document.addEventListener('DOMContentLoaded', initAccordions)
  })();
</script>

      <script src="../../../assets/developer.nvidia.com/assets/grapesjs-tabs-f0b094476ecf56695b765f533e437303138b1e0824d993c50ff672e16dcccd8f.js"></script>
      <script src="../../../assets/developer.nvidia.com/assets/grapesjs-code-container-d9f9220defaa8a53ba3e8b7a6b1d155f6a1e5e5b37b9fa2282a7ace75bc60ae2.js"></script>
      <script src="../../../assets/developer.nvidia.com/assets/legacy-chart/d3.v4.min-41cfecdf7c41476e805de7afacf4aacdd1a4be6947fbecf95217e947ebc2faf5.js"></script>
      <script src="../../../assets/developer.nvidia.com/assets/legacy-chart/visualize-d-6a082dca95b2facd89f05ef138213cffea2419e9195042f6ceed4aa706943cb1.js"></script>
      <script src="../../../assets/developer.nvidia.com/assets/momentjs/moment-b955adb4137f92dd932ff2c3179ce60cb5e1daed5fcc4423f95cf17df02b4d68.js"></script>
      <script src="../../../assets/developer.nvidia.com/assets/momentjs/moment-timezone-with-data-10-year-range-dd05517070a46fa0052f9e706803d57a4fc38c1a223137ab480369e6308ba8d4.js"></script>
      <script src="../../../assets/developer.nvidia.com/assets/calendar-256ba38a1da92b24c057388ff6623eddd4cf1498f51d1a389cc4dfac501ab87c.js"></script>
      <script src="../../../assets/developer.nvidia.com/assets/hoverable-tooltip-06658c1c074450575999f586a2be4df71fb000fa8fbc3eec0955c1484012c593.js"></script>

    <script src="../../../assets/developer.nvidia.com/assets/nv-developer-menu-c88ee4614adbf7a100e9a74ffafb4d2c78601cff8c61752d42de9d8ba1b5d769.js"></script>
  <div class="footer aem-GridColumn aem-GridColumn--default--12">
<div>
<div class="page-footer-wrapper" id="brandFooter">
<div class="page-footer">
<div class="page-footer__links">
<div class="page-footer-link-set set-3">
<div class="page-footer-link-set__title">Company Information</div>
<ul class="page-footer-link-set__links">
<li>
<a href="/about-nvidia/" target="_self">About Us</a>
</li>

<li>
<a href="/research/" target="_self">Research</a>
</li>

<li>
<a href="/technologies/" target="_self">Technologies</a>
</li>

</ul>
</div>
<div class="page-footer-link-set set-3">
<div class="page-footer-link-set__title">News and Events</div>
<ul class="page-footer-link-set__links">

<li>
<a href="/" target="_blank">Company Blog</a>
</li>

<li>
<a href="/preferences/email-signup/" target="_self">Stay Informed</a>
</li>
<li>
<a href="/events/" target="_self">Events Calendar</a>
</li>

<li>
<a href="/on-demand/" target="_self">NVIDIA On-Demand</a>
</li>
</ul>
</div>
<div class="page-footer-link-set set-3">
<div class="page-footer-link-set__title">Popular Links</div>
<ul class="page-footer-link-set__links">

<li>
<a href="/startups/" target="_self">Startups and VCs</a>
</li>

<li>
<a href="/learn/organizations/" target="_self">Technical Training</a>
</li>
<li>
<a href="/support/enterprise/advisory-services/" target="_self">Professional Services for Data Science</a>
</li>
</ul>
</div>
</div>
<div class="page-footer__subscribe">
<div class="cq-dd-paragraph"><div class="nv_rawhtml nv-rawhtml">
<div class="general-container-text" id="nv-rawhtml-51422112d4">
<div> <style>
.subscribe-container {
	width: 100%;
	margin: 0 auto;
}
.subscribe-container .center-content {
	display: flex;
	flex-direction: row;
	align-items: center;
	justify-content: flex-start;
	margin: 0;
	gap: 25px;
}
.subscribe-logo {
	display: flex;
	align-items: center;
}
.subscribe-logo svg {
	display: block;
}
.subscribe-text {
	font-size: 18px;
	color: white;
	font-weight: 500;
	display: flex;
	align-items: center;
	margin-left: 0;
}
.subscribe-container .button {
	display: flex;
	align-items: center;
	margin-left: 0;
	margin-top: 0;
}
.subscribe-container .btncta::after {
	display: none !important;
}
.subscribe-container .nv-button {
	background-color: #76b900;
	padding: 8px 24px !important;
	border-radius: 0;
	display: inline-flex;
	align-items: center;
	justify-content: center;
	height: 38px;
	box-sizing: border-box;
}
.subscribe-container .nv-button a.btncta {
	color: #000 !important;
	text-decoration: none;
	font-weight: 700;
	font-size: 14px;
	display: inline-flex;
	align-items: center;
	justify-content: center;
	width: 100%;
	height: 100%;
	pointer-events: none;
	cursor: default;
}

/* Social container styling overrides */
.page-footer__social {
	display: flex !important;
	align-items: center !important;
	justify-content: flex-end !important;
	gap: 15px !important;
	width: auto !important;
	float: none !important;
	margin: 0 !important;
	padding: 0 !important;
}
.page-footer__social__label {
	color: #999 !important;
	font-size: 16px !important;
	margin-right: 20px !important;
	margin-bottom: 0 !important;
	display: inline-block !important;
	font-weight: 500;
}
.page-footer__social__link {
	display: inline-flex !important;
	align-items: center !important;
	justify-content: center !important;
	text-decoration: none !important;
	width: 24px !important;
	height: 24px !important;
}
.page-footer__social__link svg {
	fill: #999;
	transition: fill 0.3s ease-in-out;
}
.page-footer__social__link:hover svg {
	fill: #fff;
}

/* Grid layout for the footer bottom bar on desktop */
@media screen and (min-width: 1024px) {
.page-footer {
	display: grid !important;
	grid-template-columns: 1fr 1fr !important;
	align-items: center !important;
	padding-bottom: 40px !important;
}
.page-footer__links {
	grid-column: 1 / span 2 !important;
	width: 100% !important;
}
.page-footer__subscribe {
	grid-column: 1 !important;
	width: 100% !important;
	display: flex !important;
	align-items: center !important;
	justify-content: flex-start !important;
	height: auto !important;
	margin: 0 !important;
}
.page-footer__social {
	grid-column: 2 !important;
	width: 100% !important;
	display: flex !important;
	align-items: center !important;
	justify-content: flex-end !important;
	height: auto !important;
	margin: 0 !important;
}
}

@media screen and (max-width: 1023px) {
.page-footer__subscribe {
	width: 100% !important;
	margin-bottom: 30px !important;
}
.page-footer__social {
	width: 100% !important;
	justify-content: center !important;
}
.subscribe-container .center-content {
	justify-content: center;
}
}

@media screen and (max-width: 639px) {
.subscribe-container .center-content {
	flex-direction: column;
	gap: 15px;
	text-align: center;
}
.page-footer__social {
	flex-wrap: wrap !important;
	justify-content: center !important;
}
}
</style><div class="subscribe-container">
<div class="center-content">
<div class="subscribe-logo">
<svg height="36" viewBox="0 0 48 36" width="48" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<image data-name="icon mail copy" height="36" id="icon_mail_copy" width="48" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAkCAMAAAD4m0k4AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABnlBMVEWHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgCHwgAAAADqIFB3AAAAiHRSTlMAPqKqqKucL9zD8v383e77xqnO2fBFYfRSbfUDDgIPDF6QUA0SWJMIQI4qAQQznT8XHW7k6DEKadYFCUq3z1kGMqPt6XokK4fz55glwVQLX828VR6L4PeUNT2h/td9FUmv+tIWdtukcdCsTmU0md9/iY8HWr60TYLl2kOt+DoaE0djybDCPJ8umjQepgAAAAFiS0dEiRxhJswAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAAHdElNRQfgChgTJSW4Gs96AAABYklEQVQ4y2NgZGJmIRqwsrEzcHSQBDgZuDo6uHmIBNwdHbwMfB38AoKsRAEWIZ4OYaAGEVEGIoGYOFgDlwSxGiSlKNAgLYNXqaycLKoGeQVFJWXc6lVU1STUUTRodHTwaGppY1euo6vX0SGii6JBXwQYKcJiBtjUGxoZAyVNTFE0mJlbgOJRUN8SXbmVtQ1IxtbOHi2UHBydgOLOLq6o6t3cPYDCnl7eWIJVTABklI+vH5Jn/QOAQvyBQdjjITgkFCgdFh4BUx8ZFQ0UiImNwxlx8QmJQBVJ5slg/SmpQI5UWiS+mFZJzwC5KxOYvLLAnhXItiKQNHJyQb7Myy9wBoVBoRbhtFRUXALLLaVlqFGJK/F5l1eAlFemBONJfKigqpq/hqkWQxhP8q5T9a1nIEUDdjCqYVBpEGkgVkMjRAN/E2szUYA5A1QYg4t7bqIATzSouE8lrUJpYWhtI6XKym0HAEPUyge2kF93AAAAAElFTkSuQmCC"></image>
</svg>
</div>
<div class="subscribe-text">
<span>Sign Up for NVIDIA News</span>
</div>
<div class="button">
<div class="nv-button btn-content" style="padding: 0px;">
<a class="btn-content btncta" href="javascript:void(0)" style="pointer-events: none; cursor: default;">
<div class="btn-text">
      Subscribe
     </div> </a>
</div>
</div>
</div>
</div></div>
</div>
</div>
</div>
</div>
<div class="page-footer__social"><div class="page-footer__social__label">Follow NVIDIA  </div>
<a class="page-footer__social__link facebook" href="https://www.facebook.com/" target="_blank" title="Follow Facebook"><svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path></svg></a>
<a class="page-footer__social__link instagram" href="https://www.instagram.com/" target="_blank" title="Follow Instagram"><svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"></path></svg></a>
<a class="page-footer__social__link linkedin" href="https://www.linkedin.com/" target="_blank" title="Follow LinkedIn"><svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M22.23 0H1.77C.8 0 0 .77 0 1.72v20.56C0 23.23.8 24 1.77 24h20.46c.98 0 1.77-.77 1.77-1.72V1.72C24 .77 23.2 0 22.23 0zM7.12 20.45H3.56V9H7.12v11.45zM5.34 7.43c-1.14 0-2.06-.92-2.06-2.06 0-1.14.92-2.06 2.06-2.06 1.14 0 2.06.92 2.06 2.06 0 1.14-.92 2.06-2.06 2.06zm15.11 13.02h-3.56v-5.6c0-1.34-.03-3.05-1.86-3.05-1.86 0-2.14 1.45-2.14 2.95v5.7h-3.56V9h3.42v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.45v6.29z"></path></svg></a>
<a class="page-footer__social__link twitter" href="https://twitter.com/" target="_blank" title="Follow Twitter"><svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path></svg></a>
<a class="page-footer__social__link youtube" href="https://www.youtube.com/" target="_blank" title="Follow YouTube"><svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor"><path d="M23.498 6.163a3.003 3.003 0 00-2.11-2.11C19.53 3.545 12 3.545 12 3.545s-7.53 0-9.388.508a3.003 3.003 0 00-2.11 2.11C0 8.017 0 12 0 12s0 3.983.502 5.837a3.003 3.003 0 002.11 2.11c1.858.508 9.388.508 9.388.508s7.53 0 9.388-.508a3.002 3.002 0 002.11-2.11C24 15.983 24 12 24 12s0-3.983-.502-5.837zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"></path></svg></a>
</div>
</div>
</div>
</div>
<div>
<div class="global-footer-container">
<div class="global-footer" id="globalFooter">
<svg class="global-footer__logo" enable-background="new 0 407.8 1000 184.4" viewBox="0 407.8 1000 184.4" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
<title>NVIDIA</title>
<g id="nvidia-logo">
<path d="M987.1 555.7v-2.8h1.7c0.9 0 2.3 0.1 2.3 1.2 0 1.2-0.7 1.5-1.8 1.5H987.1M987.1 557.6h1.2l2.8 4.8h3l-3.1-5c1.5-0.1 2.9-0.8 2.9-3 0-2.7-1.8-3.5-4.9-3.5h-4.4v11.5h2.6L987.1 557.6M1000 556.7c0-6.8-5.2-10.7-11.1-10.7 -5.8 0-11.1 3.9-11.1 10.7 0 6.8 5.2 10.7 11.1 10.7S1000 563.5 1000 556.7M996.8 556.7c0 4.9-3.6 8.2-7.9 8.2l0 0c-4.4 0-7.9-3.3-7.9-8.2 0-4.9 3.6-8.2 7.9-8.2C993.2 548.6 996.8 551.9 996.8 556.7z"></path>
<path d="M593.2 442.7v121.1h34.2V442.7H593.2zM324.4 442.5v121.2h34.5v-94.1l26.9 0.1c8.8 0 15 2.2 19.2 6.7 5.4 5.7 7.6 15.1 7.6 32v55.3H446v-66.9c0-47.8-30.5-54.3-60.2-54.3C385.8 442.5 324.4 442.5 324.4 442.5zM648.3 442.7v121.1h55.4c29.5 0 39.2-4.9 49.6-15.9 7.4-7.7 12.1-24.7 12.1-43.3 0-17-4-32.2-11.1-41.7 -12.5-16.9-30.8-20.2-58.1-20.2H648.3zM682.2 469h14.7c21.3 0 35.1 9.5 35.1 34.4 0 24.8-13.7 34.4-35.1 34.4h-14.7V469zM544 442.7l-28.5 95.9 -27.3-95.9h-36.9l39 121.1h49.2l39.3-121.1H544zM781.4 563.7h34.2v-121h-34.2V563.7zM877.2 442.7l-47.7 121h33.7l7.6-21.3h56.5l7.2 21.3h36.6l-48.2-121H877.2zM899.4 464.8l20.7 56.6H878L899.4 464.8z"></path>
<path d="M103.9 462.8v-16.6c1.6-0.1 3.3-0.2 4.9-0.2 45.6-1.4 75.4 39.1 75.4 39.1s-32.2 44.8-66.8 44.8c-5 0-9.4-0.8-13.4-2.2v-50.5c17.7 2.2 21.3 10 32 27.7l23.7-20c0 0-17.3-22.7-46.5-22.7C110 462.3 106.9 462.5 103.9 462.8M103.9 407.8v24.8c1.6-0.1 3.3-0.2 4.9-0.3 63.3-2.2 104.6 51.9 104.6 51.9s-47.4 57.7-96.7 57.7c-4.5 0-8.7-0.4-12.7-1.1v15.4c3.4 0.4 7 0.7 10.6 0.7 46 0 79.2-23.5 111.4-51.2 5.3 4.3 27.2 14.7 31.7 19.2 -30.6 25.6-101.9 46.3-142.3 46.3 -3.9 0-7.6-0.2-11.3-0.6v21.6h174.7V407.8H103.9zM103.9 527.8v13.1c-42.5-7.6-54.3-51.8-54.3-51.8s20.4-22.6 54.3-26.3v14.4c0 0 0 0-0.1 0 -17.7-2.2-31.7 14.5-31.7 14.5S80 519.6 103.9 527.8M28.4 487.2c0 0 25.2-37.1 75.5-41v-13.5C48.2 437.2 0 484.4 0 484.4s27.3 79 103.9 86.3v-14.4C47.7 549.2 28.4 487.2 28.4 487.2z"></path>
</g>
</svg>
<div class="global-footer__region hide">
<a href="/location-selector/" target="_self">
<span class="global-footer__region__label">
	           United States
	        </span>
</a>
</div>
<ul class="global-footer__links">

</ul>
<div class="global-footer__copyright">Copyright © 2026 NVIDIA Corporation</div>
<script> $(function() {    if (window.location.href.indexOf("/industries/finance") > -1) {
 if(!$('#main-header').find(".sub-brand-nav").length){ $( "#unibrow-container" ).after('<div class="sub-brand-nav"><div class="sub-brand-nav-container"><div class="brand-nav-left" style="width: auto;"><div id="sub-brand"><a class="sub-brand-name " href="/industries/"><span class="sub-brand-label size-small">Industries</span></a></div></div><div class="brand-nav-right financectadiv"><a href="#finance-subscribe" data-analytics="btn-manual:" data-title="Subscribe" data-href="#finance-subscribe" target="overlay" class="financecta breadcrumb-page-link model-popup cta link-btn btn-manual lb_iframe brand-green regular-btn " onclick="NVIDIAGDC.button.click(this, $(this).data(&quot;href&quot;),true, function() { ;return NVIDIAGDC.button.callbacks(this); }); return false;"><div class="btn"><span><strong>Subscribe Now</strong></span></div></a> </div></div></div>') ; } 
 $("body").removeClass("nv-megamenu");
}else{
if (window.location.href.indexOf("/industries/") > -1) {
if(!$('#main-header').find(".sub-brand-nav").length){ $( "#unibrow-container" ).after('<div class="sub-brand-nav"><div class="sub-brand-nav-container"><div class="brand-nav-left"><div id="sub-brand"><a class="sub-brand-name " href="/industries/"><span class="sub-brand-label size-small">Industries</span></a></div></div></div></div>') ; } 
 $("body").removeClass("nv-megamenu");
}
}
 }); </script>
<style>
.navigation .global-nav .desktop-nav .nav-header-container #tab4-nv-level2-tab8:checked~.menu3-container .nv-level3-tab8 {
  background-color:#eee;
  opacity:1;
  -webkit-transform:rotateX(0);
  transform:rotateX(0);
  transition:.2s ease-out;
  -webkit-transition:.2s ease-out;
  -o-transition:.2s ease-out;
  visibility:visible;
  width:100%
}
.navigation .global-nav .desktop-nav .nav-header-container #tab4-nv-level2-tab8:checked ~ .nv-level2-list-container .nv-menu-level2-list .slider-menu {
  opacity: 1;
}
</style>
</div>
</div>
</div>
<style>
    .image-container{
        position:relative;
    }
.image-credit {
    color: #ccc;
    font-size: 11px;
    line-height: 1.4em;
    position:absolute;
}
.image-credit.credit--dark{
    color: #333;
}
    .image-credit.position--top-left{
        top:12px;
        left:15px;
    } 
    .image-credit.position--top-right{
        top:12px;
        right:15px;
    } 
    .image-credit.position--bottom-left{
        bottom:27px;
        left:15px;
    } 
    .image-credit.position--bottom-right{
        bottom:27px;
        right:15px;
    } 
</style>
<script>
$(document).ready(function(){
    $('.image-credit').each(function(){
        var imageOuter = $(this).parent().parent().prev().children('.image-container').append(this);
    })
})
</script>
<style>
.navigation .global-nav .desktop-nav .nav-header-container #tab4-nv-level2-tab8:checked~.menu3-container .nv-level3-tab8 {
  background-color:#eee;
  opacity:1;
  -webkit-transform:rotateX(0);
  transform:rotateX(0);
  transition:.2s ease-out;
  -webkit-transition:.2s ease-out;
  -o-transition:.2s ease-out;
  visibility:visible;
  width:100%
}
.navigation .global-nav .desktop-nav .nav-header-container #tab4-nv-level2-tab8:checked ~ .nv-level2-list-container .nv-menu-level2-list .slider-menu {
  opacity: 1;
}

.navigation .global-nav .desktop-nav .nav-header-container #tab4-nv-level2-tab9:checked~.menu3-container .nv-level3-tab9 {
  background-color:#eee;
  opacity:1;
  -webkit-transform:rotateX(0);
  transform:rotateX(0);
  transition:.2s ease-out;
  -webkit-transition:.2s ease-out;
  -o-transition:.2s ease-out;
  visibility:visible;
  width:100%
}
.navigation .global-nav .desktop-nav .nav-header-container #tab4-nv-level2-tab9:checked ~ .nv-level2-list-container .nv-menu-level2-list .slider-menu {
  opacity: 1;
}

.navigation .global-nav .desktop-nav .nav-header-container #tab4-nv-level2-tab10:checked~.menu3-container .nv-level3-tab10 {
  background-color:#eee;
  opacity:1;
  -webkit-transform:rotateX(0);
  transform:rotateX(0);
  transition:.2s ease-out;
  -webkit-transition:.2s ease-out;
  -o-transition:.2s ease-out;
  visibility:visible;
  width:100%
}
.navigation .global-nav .desktop-nav .nav-header-container #tab4-nv-level2-tab10:checked ~ .nv-level2-list-container .nv-menu-level2-list .slider-menu {
  opacity: 1;
}
</style>
<script defer=" src="../../../assets/www.nvidia.com/content/dam/en-zz/Solutions/librarian/bundle-search-prod-pub-v3.1.js"></script>
<div id="librarian-search"><div></div></div>
<script defer="">
window.addEventListener('load', () => {
    LIBRARIAN.Home.mount({
                elementId: 'librarian-search',
                searchPage: false,
                placeholder:'',
                site : 'https://www.nvidia.com',
                generateSummary: false,
                page:"",  
                searchRedirectPath: '',
                preSelectedFilters: '',
                retainFilters: false,
                suggestedSearchPills: []
	})
});
</script>
</div>
  <link rel="stylesheet" href="../../../assets/www.nvidia.com/etc.clientlibs/nvidiaweb/clientlibs/clientlib-site.min.11e659eda2e0ece9e3e5d839254850f4.css" type="text/css">
  <link rel="stylesheet" href="../../../assets/www.nvidia.com/etc.clientlibs/nvidiaweb/clientlibs/clientlib-base.min.c608907002671c17214e79ac5a429d70.css" type="text/css">
  <script src="../../../assets/www.nvidia.com/content/dam/en-zz/Solutions/librarian/bundle-search-prod-pub-v3.1.js"></script>
  <div id="librarian-overlay"><div></div></div>
  <script defer="">
    setTimeout(() => {
      LIBRARIAN.Home.mount({
        elementId: 'librarian-overlay',
        searchPage: false,
        placeholder: '',
        site: 'https://developer.nvidia.com',
        retainFilters: true,
        overlay: true,
        pillsOpen: true,
        suggestedSearchPills: []
      })
    }, 1000)
  </script>
<script>
  let menuLocale = 'en';

  if (menuLocale == 'en') {
    menuLocale = 'en-US';
  }

  function mountHeader(data = false) {
    const headerTarget = document.getElementById('header');
    if (!headerTarget) {
      return;
    }
    let options = {
      baseURL: window.location.origin,
      signedIn: false,
      locale: menuLocale
    };

    if (data) {
      options.secondaryMenu = data;
    }

    options.showMembershipCardLink = true;

    new NVDeveloperHeader({
      target: headerTarget,
      props: options
    });
  }

  function mountFooter(data = false) {
    const footerTarget = document.getElementById('footer');
    if (!footerTarget) {
      return;
    }
    let options = {
      menu: data,
      locale: menuLocale
    };

    new NVDeveloperFooter({
      target: document.getElementById('footer'),
      props: options
    });
  }

  let url = 'd29g4g2dyqv443.cloudfront.net';
  let headerMenuURL = "https://d29g4g2dyqv443.cloudfront.net/menu/en-US/header-secondary.json";

  if (headerMenuURL) {
    fetch(headerMenuURL)
      .then(response => response.json())
      .then(data => {
        mountHeader(data);
      })
      .catch((error) => {
        mountHeader();
        window.nv.tracing.addError('menu', error);
      });
  } else {
    mountHeader();
  }

  fetch(`https://${url}/menu/${menuLocale}/footer.json`)
    .then(response => response.json())
    .then(data => {
      mountFooter(data);
    })
    .catch((error) => {
      mountFooter();
      window.nv.tracing.addError('menu', error);
    });
</script>

      <script src="/assets/www.datadoghq-browser-agent.com/us1/v5/datadog-rum.js"></script>

    
    
      <script>
  let silentAuthHost = 'www.nvidia.com';
  let crossOriginPageUrl = `https://${silentAuthHost}/auth/hints/`;

  function readHint() {
    return new Promise((resolve) => {
      const { origin: targetOrigin } = new URL(crossOriginPageUrl);

      const iframe = document.createElement('iframe');
      iframe.hidden = true;
      iframe.src = crossOriginPageUrl;

      function responseHandler(event) {
        if (event.origin === targetOrigin) {
          iframe.parentNode.removeChild(iframe);
          return resolve(event.data);
        }
      }

      window.addEventListener('message', responseHandler, { once: true });

      iframe.onload = () => {
        iframe.contentWindow.postMessage({ type: 'read' }, targetOrigin);
      }

      document.body.appendChild(iframe);
    });
  }

  function writeHint(login_hint, idp_id, timestamp, sub) {
    const { origin: targetOrigin } = new URL(crossOriginPageUrl);

    const iframe = document.createElement('iframe');
    iframe.hidden = true;
    iframe.src = crossOriginPageUrl;

    iframe.onload = () => {
      const message = { type: 'write', login_hint, idp_id, timestamp, sub };
      iframe.contentWindow.postMessage(message, targetOrigin);
    }

    document.body.appendChild(iframe);
  }

  function deleteHint() {
    const { origin: targetOrigin } = new URL(crossOriginPageUrl);

    const iframe = document.createElement('iframe');
    iframe.hidden = true;
    iframe.src = crossOriginPageUrl;

    iframe.onload = () => {
      iframe.contentWindow.postMessage({ type: 'delete' }, targetOrigin);
    }

    document.body.appendChild(iframe);
  }

</script>

    <script>
!function(){var e,t,n;e="540df7f83845146",t=function(){Reo.init({clientID:"540df7f83845146"})},(n=document.createElement("script")).src="https://static.reo.dev/"+e+"/reo.js",n.defer=!0,n.onload=t,document.head.appendChild(n)}();

</script><script>
// Defensive helper
function track(el, evt, key, val) {
    try {
        if (typeof ClickOmniTracki === 'function') {
            ClickOmniTracki(el, evt, key, val);
        }
    } catch (e) {}
}

// Primary CTA
document.addEventListener('click', function(e) {
    var cta = e.target.closest('#home-hero-cta-primary');
    if (!cta) return;
    var getVal = cta.textContent.trim();
    if (getVal) track(cta, 'event10', 'link:hero:', getVal);
});

// Tiles
document.addEventListener('click', function(e) {
    var tile = e.target.closest('#home-hero-tile-1, #home-hero-tile-2, #home-hero-tile-3');
    if (tile) {
        var badge = tile.querySelector('[data-testid="nv-badge"]');
        var title = tile.querySelector('h3[data-testid="nv-text"]');
        var cta = tile.querySelector('.home-hero__tile-cta');
        var badgeVal = badge ? badge.textContent.trim() : '';
        var titleVal = title ? title.textContent.trim() : '';
        var ctaVal = cta ? cta.textContent.trim() : '';
        var getVal = [badgeVal, titleVal, ctaVal].filter(Boolean).join(':'); 
        if (getVal) track(tile, 'event10', 'link:hero:tile:', getVal);  
    }
});

var root = document.getElementById('home-hero-root');
if (root) {
    var observer = new MutationObserver(function() {
        var copyBtn = document.getElementById('home-hero-terminal-copy');
        var tabMac  = document.getElementById('home-hero-terminal-tab-macos');
        var tabLin  = document.getElementById('home-hero-terminal-tab-linux');
        var tabWin  = document.getElementById('home-hero-terminal-tab-windows');

        if (copyBtn && tabMac && tabLin && tabWin) {
            var idMap = {
                'home-hero-terminal-tab-macos'  : 'macOS',
                'home-hero-terminal-tab-linux'  : 'Linux',
                'home-hero-terminal-tab-windows': 'Windows'
            };

            copyBtn.addEventListener('click', function() {
                track(this, 'event10', 'link:hero:terminal:', 'install copy button');
            });

            [tabMac, tabLin, tabWin].forEach(function(tab) {
                tab.addEventListener('click', function() {
                    var getVal = idMap[tab.id] || '';
                    if (getVal) track(tab, 'event10', 'link:hero:tab:', getVal);
                });
            });

            observer.disconnect();
        }
    });
    observer.observe(root, { childList: true, subtree: true });
}

// Terminal Window
document.addEventListener('click', function(e) {
    if (e.target.closest('#home-hero-terminal')) {
        track(e.target, 'event10', 'link:hero:terminal:', 'install copy window');
    }
});
</script>
    <script src="../../../assets/api-prod.nvidia.com/search/nvidia-search-library.js"></script>

    <script src="../../../assets/developer.nvidia.com/assets/nv-gallery-widget-d1571cad15d961fd3ba013f57119be04a2adf32aa31b16be44a0f10f4671c37b.js"></script>
    <script src="../../../assets/developer.nvidia.com/packs/js/runtime-69f8104525d1541ca92d.js" defer="defer"></script>
<script src="../../../assets/developer.nvidia.com/packs/js/4692-a478c93816dbe985b4fa.js" defer="defer"></script>
<script src="../../../assets/developer.nvidia.com/packs/js/6772-af55f33929ab7fc7fa0c.js" defer="defer"></script>
<script src="../../../assets/developer.nvidia.com/packs/js/9878-ace6038de3dd10e07189.js" defer="defer"></script>
<script src="../../../assets/developer.nvidia.com/packs/js/8465-34d1ba762d9cdeef15fb.js" defer="defer"></script>
<script src="../../../assets/developer.nvidia.com/packs/js/4622-0f5e83f2067789287ec7.js" defer="defer"></script>
<script src="../../../assets/developer.nvidia.com/packs/js/7053-3ae29c3142fd9b1b1abb.js" defer="defer"></script>
<script src="../../../assets/developer.nvidia.com/packs/js/486-4ee95e78721864401fdd.js" defer="defer"></script>
<script src="../../../assets/developer.nvidia.com/packs/js/8311-bc04e55c282e625862a2.js" defer="defer"></script>
<script src="../../../assets/developer.nvidia.com/packs/js/1252-e6af78d36c708e01c2a6.js" defer="defer"></script>
<script src="../../../assets/developer.nvidia.com/packs/js/8823-1bca151f7e292c3ba6e8.js" defer="defer"></script>
<script src="../../../assets/developer.nvidia.com/packs/js/2104-422759a9ac3c8ce5e556.js" defer="defer"></script>
<script src="../../../assets/developer.nvidia.com/packs/js/6900-63a582c4651b48934668.js" defer="defer"></script>
<script src="../../../assets/developer.nvidia.com/packs/js/application-e3ef63a0e4f6245fabdd.js" defer="defer"></script>
<script src="../../../assets/developer.nvidia.com/packs/js/ls_track-b3d3055e95f0b20901db.js" defer="defer"></script>
  

</body></html>