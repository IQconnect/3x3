const Flickity = require('flickity-bg-lazyload');

// deklarowanie obiektu
const slider = {
  init() {
    this.slider = new Flickity('.news-carousel', {
      prevNextButtons: false,
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
