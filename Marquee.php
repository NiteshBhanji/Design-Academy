<style>
:root {
    --marquee-width: 100vw;
    --marquee-height: 100%;
    /* --marquee-elements: 12; */ /* defined with JavaScript */
    --marquee-elements-displayed: 5;
    --marquee-element-width: calc(var(--marquee-width) / var(--marquee-elements-displayed));
    --marquee-animation-duration: calc(var(--marquee-elements) * 3s);
  }

  .marquee {
    width: var(--marquee-width);
    /* height: var(--marquee-height); */
    /* background-color: #111; */
    color: #eee;
    overflow: hidden;
    position: relative;
    padding: 1rem 0;
    border-top: 1px solid #193a69;
    border-bottom: 1px solid #193a69;
  }
  .marquee:before,
  .marquee:after {
    position: absolute;
    top: 0;
    width: 10rem;
    height: 100%;
    content: '';
    z-index: 1;
  }
  /* .marquee:before {
    left: 0;
    background: linear-gradient(to right, #111 0%, transparent 100%);
  }
  .marquee:after {
    right: 0;
    background: linear-gradient(to left, #111 0%, transparent 100%);
  } */
  .marquee-content {
    list-style: none;
    height: 100%;
    display: flex;
    margin-bottom: 0;
    animation: scrolling var(--marquee-animation-duration) linear infinite;
  }
  /* .marquee-content:hover {
    animation-play-state: paused;
  } */
  @keyframes scrolling {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(calc(-1 * var(--marquee-element-width) * var(--marquee-elements)));
    }
  }
  .marquee-content li {
    display: flex;
    justify-content: center;
    align-items: center;
    /* text-align: center; */
    flex-shrink: 0;
    margin-bottom: 0;
    width: var(--marquee-element-width);
    max-height: 100%;
    font-size: calc(var(--marquee-height) * 3 / 4); /* 5rem; */
    white-space: nowrap;
  }

  .marquee-content li img {
    width: 75%;
    /* height: 100%; */
    /* border: 2px solid #eee; */
  }

  @media (max-width: 600px) {
    :root {
      --marquee-width: 100vw;
      --marquee-height: 16vh;
      --marquee-elements-displayed: 3;
    }
  }
</style>

<div class="marquee">
  <ul class="marquee-content">
  <img src="assets/images/logo/company-logos/uplers.png" alt="Company Logo 5" class="company-logo">
  <img src="assets/images/logo/company-logos/uplers.png" alt="Company Logo 5" class="company-logo">
  <img src="assets/images/logo/company-logos/uplers.png" alt="Company Logo 5" class="company-logo">
  <img src="assets/images/logo/company-logos/uplers.png" alt="Company Logo 5" class="company-logo">
  <img src="assets/images/logo/company-logos/uplers.png" alt="Company Logo 5" class="company-logo">
  <img src="assets/images/logo/company-logos/uplers.png" alt="Company Logo 5" class="company-logo">
  </ul>
</div>

<script>
  const root = document.documentElement;
  const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue('--marquee-elements-displayed');
  const marqueeContent = document.querySelector('ul.marquee-content');

  root.style.setProperty('--marquee-elements', marqueeContent.children.length);

  for (let i = 0; i < marqueeElementsDisplayed; i++) {
    marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
  }
</script>