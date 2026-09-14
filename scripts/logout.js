document.addEventListener('DOMContentLoaded',function(){
    const logOut=document.getElementById('logOut');
    const exire=document.getElementById('exire');
    const confirmare=document.getElementById('confirmare');
    const cancellare=document.getElementById('cancellare');

    logOut.addEventListener('click',function(event){
        event.preventDefault();
        event.stopPropagation();

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

        window.location.href="../auth/logout-admin.php";
    });
    exire.addEventListener('click',function(event){
        if (event.target===exire) {
            exire.style.display="none";
        }
    });
    document.addEventListener('keydown',function (event){
        if (event.key==='Escape') {
            exire.style.display="none";
        }
    });

});