import asd from '../components/fullpage';

const CONFIG = {
    ELEM: '.imp-shape',
    ELEMEXTRA: '.imp-shape-extra',
    CLOSE: 'data-close-popup',
    POPUP: 'data-popup-flat',
}

const { ELEM, ELEMEXTRA, CLOSE, POPUP } = CONFIG;

const imageMap = {
    init() {
        this.elem = document.querySelectorAll(ELEM);
        this.elemExtra = document.querySelectorAll(ELEMEXTRA);
        this.close = document.querySelectorAll(`[${CLOSE}]`);
        this.popups = document.querySelectorAll(`[${POPUP}]`);
        this.class = '-is-active';
        this.darkclass= 'dark-active';
        console.log('Image map init');
        const interval = setInterval(() => {
            console.log('setInterval', this.elem.length);
            this.elem = document.querySelectorAll(ELEM);

            if (this.elem.length) {
                clearInterval(interval);
                this.addEvent();
            }
        }, 100)
    },


    addEvent() {
        this.elem.forEach(element => {
            console.log('elem interval');
            element.addEventListener('mouseenter', (e) => {
                e.preventDefault();

                const $this = e.currentTarget;
                var next = $this.nextElementSibling;

                var prev = $this.previousElementSibling;


                while(prev != null){
                    prev.classList.add(this.darkclass);
                    prev = prev.previousElementSibling;
                }

                while(next != null){
                    next.classList.add(this.darkclass);
                    next = next.nextElementSibling;
                }
            });

            element.addEventListener('mouseout', (e) => {
                e.preventDefault();
                const $this = e.currentTarget;
                var next = $this.nextElementSibling;
                var prev = $this.previousElementSibling;

                while(next != null){
                    next.classList.remove(this.darkclass);
                    next = next.nextElementSibling;
                }

                while(prev != null){
                    prev.classList.remove(this.darkclass);
                    prev = prev.previousElementSibling;
                }

            });


            element.addEventListener('click', (e) => {
                e.preventDefault();

                const $this = e.currentTarget;
                console.log('click', $this.dataset.shapeTitle);
                document.querySelector(`[data-popup-flat="${$this.dataset.shapeTitle}"]`).classList.add(this.class);


                var pagefull = asd.Fullpage;
                pagefull.setAllowScrolling(false);
               document.getElementsByTagName('body')[0]. style. overflow = 'hidden';
            });
        });



        this.elemExtra.forEach(element => {
            console.log('elem interval');
            element.addEventListener('click', (e) => {
                e.preventDefault();

                const $this = e.currentTarget;
                console.log('click', $this.dataset.shapeTitle);

                document.querySelector(`[data-popup-flat="${$this.dataset.shapeTitle}"]`).classList.add(this.class);
                var pagefull = asd.Fullpage;
                pagefull.setAllowScrolling(false);
               document.getElementsByTagName('body')[0]. style. overflow = 'hidden';
            });
        });

        this.close.forEach(element => {
          console.log('close elem');
          element.addEventListener('click', (e) => {
              e.preventDefault();
              console.log('click');
              this.popups.forEach((elem) => { elem.classList.remove(this.class) })

              var pagefull = asd.Fullpage;
               pagefull.setAllowScrolling(true);

               document.getElementsByTagName('body')[0]. style. overflow = 'visible';
          });
      });
    },

}

export default imageMap;
