document.addEventListener('DOMContentLoaded',function(){
    const aperireImpositionem=document.getElementById('aperireImpositionem');
    const imponere=document.getElementById('imponere'); 
    const cancellare=document.getElementById('cancellare');
    
    if (aperireImpositionem&&imponere){
        aperireImpositionem.addEventListener('click',function(){
            imponere.style.display='flex';
        }); 
    } 
    if(cancellare&&imponere){
        cancellare.addEventListener('click',function(){
            imponere.style.display='none';
        });
    }
    if(imponere){
        imponere.addEventListener('click',function(event){
            if(event.target===imponere){
                imponere.style.display='none';
            } 
        }); 
    }

    const praevisio=document.getElementById('praevisio');
    const imago=document.getElementById('imago');
    const nomenFascicvli=document.getElementById('nomenFascicvli');
    
    if(praevisio&&imago){
        praevisio.addEventListener('click',function(){
            imago.click();
        }); 
    }
    if(imago&&praevisio&&nomenFascicvli){ 
        imago.addEventListener('change',function(){
            const file=this.files[0]; 
            
            if(!file){
                praevisio.src='./assets/others/yellow-background.jpg';
                nomenFascicvli.textContent ='Click the image to choose a file.';

                return;
            }
            if(file.type!=='image/jpeg'&&file.type!=='image/png'){
                praevisio.src ='./assets/others/yellow-background.jpg';
                nomenFascicvli.textContent='Please choose a JPG, JPEG, or PNG image.';
                imago.value='';

                return;
            }

            nomenFascicvli.textContent=file.name;
            const imageURL=URL.createObjectURL(file);
            praevisio.src=imageURL;
            praevisio.onload=function(){
                URL.revokeObjectURL(imageURL);
            };
        }); 
    }
    
    const classis=document.getElementById('classis'); 
    const imagines=document.getElementById('imagines');
    const statvae=document.getElementById('statvae'); 
    const typvs=document.getElementById('typvs'); 
    const persona=document.getElementById('persona');
    
    function updateModalFields(){
        if (!classis||!imagines||!statvae||!typvs||!persona){
            return; 
        } 
        
        const value=classis.value;
        
        if(value==='Portraits'){
            imagines.style.display='inline-block';
            imagines.name='_style_';
            imagines.disabled=false; 
            statvae.style.display='none';
            statvae.disabled=true; 
            typvs.style.display='none';
            typvs.disabled=true;
            persona.disabled=false;
        }else if(value==='Statues'){ 
            imagines.style.display='none'; 
            imagines.disabled=true;
            statvae.style.display='inline-block';
            statvae.name='_style_';
            statvae.disabled=false;
            typvs.style.display='none';
            typvs.disabled=true;
            persona.disabled=false; 
        }else if(value==='Accessories'){
            imagines.style.display='none';
            imagines.disabled=true; 
            statvae.style.display='none';
            statvae.disabled=true;
            typvs.style.display='inline-block';
            typvs.disabled=false; 
            persona.disabled=true;
        } 
    }

    if(classis){
        classis.addEventListener('change',updateModalFields); 
        updateModalFields(); 
    }

    const classisColandorvm=document.getElementById('classisColandorvm'); 
    const stilvs=document.getElementById('stilvs');
    const stilvsStatvarvm=document.getElementById('stilvsStatvarvm');
    const typvsColandi=document.getElementById('typvsColandi'); 
    const selectioPersonarvm=document.getElementById('selectioPersonarvm');

    function updateFilterFields(){ 
        if (!classisColandorvm||!stilvs||!stilvsStatvarvm||!typvsColandi||!selectioPersonarvm){ 
            return; 
        }

        const value=classisColandorvm.value;

        if (value==='All'){
            stilvs.style.display ='none'; 
            stilvs.disabled=true; 
            stilvsStatvarvm.style.display='none'; 
            stilvsStatvarvm.disabled=true; 
            typvsColandi.style.display='none'; 
            typvsColandi.disabled=true; 
            selectioPersonarvm.style.display='none'; 
            selectioPersonarvm.disabled=true;
        }else if(value==='Portraits'){
            stilvs.style.display='inline-block'; 
            stilvs.disabled=false; 
            stilvsStatvarvm.style.display='none'; 
            stilvsStatvarvm.disabled=true;
            typvsColandi.style.display='none'; 
            typvsColandi.disabled=true; 
            selectioPersonarvm.style.display='inline-block';
            selectioPersonarvm.disabled=false; 
        }else if(value==='Statues'){
            stilvs.style.display='none'; 
            stilvs.disabled=true; 
            stilvsStatvarvm.style.display='inline-block'; 
            stilvsStatvarvm.disabled=false;
            typvsColandi.style.display='none'; 
            typvsColandi.disabled=true; 
            selectioPersonarvm.style.display='inline-block';
            selectioPersonarvm.disabled=false; 
        }else if(value==='Accessories'){
            stilvs.style.display='none'; 
            stilvs.disabled=true; 
            stilvsStatvarvm.style.display='none'; 
            stilvsStatvarvm.disabled=true;
            typvsColandi.style.display='inline-block'; 
            typvsColandi.disabled=false; 
            selectioPersonarvm.style.display='none';
            selectioPersonarvm.disabled=true; 
        }
    }

    if(classisColandorvm){
        classisColandorvm.addEventListener('change',updateFilterFields); 
        updateFilterFields();
    }

    document.addEventListener('keydown',function(event){
        if(event.key==='Escape'){
            if(imponere){ 
                imponere.style.display='none'; 
            } 
        } 
    });
});