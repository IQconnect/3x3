const Flickity = require('flickity-bg-lazyload');

// deklarowanie obiektu
const slider = {
  init() {
    this.slider = new Flickity('.calendar-carousel', {
      prevNextButtons: true,
      pageDots: false,
      wrapAround: true,
      autoPlay: false,
      bgLazyLoad: 1,
    });
    this.resize();
  },

  resize() {
    window.onload = () => {
      this.slider.resize();
    };
  },
};

export default slider;
