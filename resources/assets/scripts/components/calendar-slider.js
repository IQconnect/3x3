const Flickity = require('flickity-bg-lazyload');

// deklarowanie obiektu
const slider = {
  init() {
    this.slider = new Flickity('.calendar-carousel', {
      prevNextButtons: true,
      pageDots: false,
      wrapAround: false,
      autoPlay: false,
      bgLazyLoad: 1,
      cellAlign: 'right',
      rightToLeft: true,
      contain: true,
      groupCells: true,
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
