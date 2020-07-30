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
      showActiveTooltip: true,
      sectionSelector: '.fullscroll',
      autoScrolling: true,
      css3: false,
      paddingTop: '30px',
      paddingBottom: 0,
    });
  },
};

export default Fullpage;
