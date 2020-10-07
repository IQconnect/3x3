const Flickity = require('flickity-bg-lazyload');

// deklarowanie obiektu
const heroslider = {
  init() {
    this.heroslider = new Flickity('.hero-carousel', {
      prevNextButtons: true,
      pageDots: false,
      wrapAround: true,
      autoPlay: false,
      draggable: false,
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

export default heroslider;
