const fullpage = require('fullpage.js');

const Fullpage = {
  init() {
    this.createfullpage();
  },

  createfullpage() {
    // Initializing it
    this.Fullpage = new fullpage('#full', {
      navigation: true,
      navigationPosition: 'right',
      navigationTooltips: ['1', '2', '3', '4', '5', '6', '7'],
      anchors: ['Start','Oprojekcie', 'Aktualnosci', 'Kalendarz', 'Media', 'Sponsorzy', 'Kontakt'],
      showActiveTooltip: true,
      sectionSelector: '.fullscroll',
      autoScrolling: true,
      css3: false,
      paddingTop: '40px',
      paddingBottom: 0,
      keyboardScrolling: false,
      responsiveWidth: 1100,
    });
  },
};

export default Fullpage;
