const modal = ({modalSelector,triggerSelector}) => {
    const modal = document.querySelector(modalSelector),
          trigger = document.querySelector(triggerSelector);


    trigger.addEventListener('click', (e) =>{
        modal.style = 'display:block ';

        modal.classList.add('animate__animated');
        modal.classList.add('animate__fadeIn');
        document.body.style = 'overflow: hidden; height:100%;';
    });

    modal.addEventListener('click', (e) =>{
        if(e.target === modal){

            modal.classList.remove('animate__animated');
            modal.classList.remove('animate__fadeIn');

            modal.style = 'display:none';

            document.body.style = '';
        }
    });

};

export default modal;