const perficereOrdinem=document.getElementById('perficereOrdinem');
const completeOrder=document.getElementById('completeOrder');
const completeButtons=document.querySelectorAll('.perficereOrdinem');
const cancellare=document.getElementById('cancellare');

completeButtons.forEach(btn=>{
    btn.addEventListener('click',()=>{
        const orderId=btn.getAttribute('data-id');
        completeOrder.value=orderId;
        perficereOrdinem.style.display='flex';
    });
});

if(cancellare){
    cancellare.addEventListener('click',()=>{
        perficereOrdinem.style.display='none';
        completeOrder.value='';
    });
}