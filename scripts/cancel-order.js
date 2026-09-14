const rescindereOrdinem=document.getElementById('rescindereOrdinem');
const cancelOrder=document.getElementById('cancelOrder');
const cancelButtons=document.querySelectorAll('.rescindereOrdinem');
const cancellare=document.getElementById('cancellare');

cancelButtons.forEach(btn=>{
    btn.addEventListener('click',()=>{
        const orderId=btn.getAttribute('data-id');
        cancelOrder.value=orderId;
        rescindereOrdinem.style.display='flex';
    });
});

if(cancellare){
    cancellare.addEventListener('click',()=>{
        rescindereOrdinem.style.display='none';
        cancelOrder.value='';
    });
}