const Flickity = require('flickity-bg-lazyload');

// deklarowanie obiektu
const sponsor = {
  init() {
    this.slider = new Flickity('.sponsor-carousel', {
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

export default sponsor;
