document.addEventListener('DOMContentLoaded',function(){
    const onvstvs=document.getElementById('onvstvs');

    if(!onvstvs){
        return;
    }

    function showLoading(){
        onvstvs.style.display='flex';
    }
    function hideLoading(){
        onvstvs.style.display='none';
    }

    showLoading();

    window.addEventListener('load',function(){
        hideLoading();
    });
    document.addEventListener('click',function(event){

        const link=event.target.closest('a');

        if(!link){
            return;
        }
        const href=link.getAttribute('href');

        if(!href||href === '#'||href.startsWith('javascript:')||
            link.hasAttribute('download')||link.target==='_blank'||
            event.ctrlKey||event.shiftKey||event.altKey||event.metaKey
        ){
            return;
        }

        showLoading();
    });
    document.addEventListener('submit',function(){
        showLoading();
    });
    window.addEventListener('pageshow',function(){
        hideLoading();
    });
});