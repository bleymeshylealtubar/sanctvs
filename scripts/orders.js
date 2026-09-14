document.addEventListener('DOMContentLoaded',function(){
    const ordinareProdvctvm=document.getElementById('ordinareProdvctvm');
    const ordo=document.getElementById('ordo');
    const cancellare=document.getElementById('cancellare');

    if(ordinareProdvctvm&&ordo){
        ordinareProdvctvm.addEventListener('click',function(event){
            event.preventDefault();
            event.stopPropagation();

            ordo.style.display='flex';
        });
    }
    if(cancellare&&ordo){
        cancellare.addEventListener('click',function(event){
            event.preventDefault();
            event.stopPropagation();

            ordo.style.display='none';
        });
    }
    if(ordo){
        ordo.addEventListener('click',function(event){
            if(event.target===ordo){
                ordo.style.display='none';
            }
        });
    }
    document.addEventListener('keydown',function(event){
        if(event.key==='Escape'&&ordo){
            ordo.style.display='none';
        }
    });

    const priceInput=document.getElementById('price');
    const quantityInput=document.getElementById('quantity');
    const shippingInput=document.getElementById('shipping');
    const totalInput=document.getElementById('total');

    function calculateTotal(){
        const price=parseFloat(priceInput.value)||0;
        const quantity=parseInt(quantityInput.value,10)||0;
        const shipping=parseFloat(shippingInput.value)||0;

        totalInput.value=((price*quantity)+shipping).toFixed(2);
    }

    quantityInput.addEventListener('input',calculateTotal);
    calculateTotal();
});