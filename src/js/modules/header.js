const header = () => {
    const header = document.querySelector('.header'),
          subheader = document.querySelector('.subheader'),
          burger = document.querySelector('.header__burger'),
          close = document.querySelector('.header__mobile-close');

    window.addEventListener('scroll', ()=>{
        if(document.documentElement.scrollTop > 340){
            
            
            header.classList.add('animate__animated');
            header.classList.add('animate__fadeIn');
            header.style = 'position: fixed; z-index: 100; top: 0; box-shadow: 10px 10px 50px rgba(0, 0, 0, 0.08);';
            if(window.screen.availWidth > 1200){
                document.querySelector('.header__logo').classList.add('mini_logo');
                subheader.style = 'display: none;';
                document.querySelector('.main').style = 'margin-top: 180px';
            } else {
                document.querySelector('.main').style = 'margin-top: 90px';
                document.querySelector('.header__logo').classList.remove('mini_logo');

            }
            
        } else if(document.documentElement.scrollTop < 340){
            document.querySelector('.main').style = 'margin-top: 0px';
            if(window.screen.availWidth > 768){
                subheader.style = 'display: block;';
            }
            
            header.classList.remove('animate__animated');
            header.classList.remove('animate__fadeIn');
            header.style = 'z-index: 100; ';
            document.querySelector('.header__logo').classList.remove('mini_logo');
        }
    });

    // window.addEventListener('resize',()=>{
    //     if(window.screen.availWidth > 1200){
    //         document.querySelector('.header__logo').classList.add('mini_logo');
    //     } else {
    //         document.querySelector('.header__logo').classList.remove('mini_logo');
    //     }
    // });

    burger.addEventListener('click', ()=>{
        document.querySelector('.header__mobile-menu').classList.add('active');
        document.body.style = 'overflow: hidden; height:100%;';
    })
    close.addEventListener('click', ()=>{
        document.querySelector('.header__mobile-menu').classList.remove('active');
        document.body.style = '';

    })
};

export default header;