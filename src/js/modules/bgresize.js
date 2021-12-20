const resize = () => {
    const bg = document.querySelector('.main__back'),
          bluer = document.querySelector('.main__blur');

    const calculate=(onElement, bluer)=>{
        const width = +window.getComputedStyle(bluer).width.replace(/[^+\d]/g, '')
        onElement.style.width = (width+bluer.getBoundingClientRect().left) + 'px';
        if(window.screen.availWidth < 430){
            onElement.style.width = "100%";
        }
    }

    calculate(bg, bluer);
    
    window.addEventListener('resize',()=>calculate(bg, bluer));

};

export default resize;