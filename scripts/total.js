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