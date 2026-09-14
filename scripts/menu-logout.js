document.addEventListener('DOMContentLoaded',function(){ 
    const aperireIndicem=document.getElementById('aperireIndicem'); 
    const index=document.getElementById('index');
    const logOut=document.getElementById('logOut'); 
    const exire=document.getElementById('exire');
    const confirmare=document.getElementById('confirmare'); 
    const cancellare=document.getElementById('cancellare');

    aperireIndicem.addEventListener('click',function(event){
        event.preventDefault(); 
        event.stopPropagation();
        
        index.style.display="flex";
    });
    index.addEventListener('click',function(){
        index.style.display="none";
    }); 
    logOut.addEventListener('click',function(event){
        event.preventDefault(); 
        event.stopPropagation();

        index.style.display="none";
        exire.style.display="flex";
    }); 
    cancellare.addEventListener('click',function(event){ 
        event.preventDefault();
        event.stopPropagation();

        exire.style.display="none";
    }); 
    confirmare.addEventListener('click',function(event){
        event.preventDefault(); 
        event.stopPropagation();

        window.location.href="./logout.php";
    }); 
    exire.addEventListener('click',function(event){
        if(event.target===exire){
            exire.style.display="none";
        }
    });
    document.addEventListener('keydown',function(event){
        if (event.key==='Escape'){
            if(index){
                index.style.display="none";
            }
            if(exire){
                exire.style.display="none";
            }
        } 
    });
});