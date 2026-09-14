document.addEventListener('DOMContentLoaded',function(){
    const delehereProdvctvm=document.getElementById('delehereProdvctvm');
    const delehere=document.getElementById('delehere');
    const confirmare=document.getElementById('confirmare');
    const cancellare=document.getElementById('cancellare');

    if(delehereProdvctvm&&delehere){
        delehereProdvctvm.addEventListener('click',function(event){
            event.preventDefault();
            event.stopPropagation();

            delehere.style.display='flex';
        });
    }
    if(cancellare&&delehere){
        cancellare.addEventListener('click',function(event){
            event.preventDefault();
            event.stopPropagation();

            delehere.style.display='none';
        });
    }
    if(confirmare&&delehere){
        confirmare.addEventListener('click',function(event){
            event.preventDefault();
            event.stopPropagation();

            const form=document.createElement('form');
            form.method='POST';
            form.action=window.location.pathname+window.location.search;
            const input=document.createElement('input');
            input.type='hidden';
            input.name='delete_product';
            input.value='1';
            form.appendChild(input);
            document.body.appendChild(form);
            form.submit();
        });
    }
    if(delehere){
        delehere.addEventListener('click',function(event){
            if(event.target===delehere){
                delehere.style.display='none';
            }
        });
    }
    document.addEventListener('keydown',function(event){
        if(event.key==='Escape'&&delehere){
            delehere.style.display='none';
        }
    });
});