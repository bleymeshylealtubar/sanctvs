document.addEventListener('DOMContentLoaded',function(){
    const password=document.getElementById('password');
    const confirmPassword =document.getElementById('confirm_password');
    const passwordStatus=document.getElementById('passwordStatus');
    const form=document.getElementById('changePasswordForm');

    function checkPasswords(){
        if (!password||!confirmPassword||!passwordStatus){
            return true;
        }
        
        if(confirmPassword.value===''){
            passwordStatus.textContent='';

            return true;
        }else if(password.value!==confirmPassword.value){
            passwordStatus.textContent='Passwords do not match.';
            passwordStatus.classList.add('error');
            passwordStatus.classList.remove('success');

            return false;
        }else{
            passwordStatus.textContent ='Passwords match.';
            passwordStatus.classList.add('success');
            passwordStatus.classList.remove('error');

            return true;
        }
    }
    if(password){
        password.addEventListener('input',checkPasswords);
    }
    if(confirmPassword){
        confirmPassword.addEventListener('input',checkPasswords);
    }
    if(form){
        form.addEventListener('submit',function(event){
            if(!checkPasswords()){
                event.preventDefault();
                return;
            }
            if(password.value.length<8){
                event.preventDefault();

                passwordStatus.textContent='Password must contain at least 8 characters.';
                passwordStatus.classList.add('error');
                passwordStatus.classList.remove('success');
            }
        });
    }
});
