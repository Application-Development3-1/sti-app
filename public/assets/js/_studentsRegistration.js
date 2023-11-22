let password = document.querySelector('#createPassword');
let rePassword = document.querySelector('#re-enterStudentPassword');
let message = document.querySelector('p');

let btn = document.getElementById("TeacherSubmitButton");


function checkPassword(){
 
  
  message.innerText = password.value == rePassword.value ? 'Password Match!' : 'Password not match!';

  if(password.value == rePassword.value){
    message.style.color = "Green";
    btn.disabled = false;
    
  }
  else{
    message.style.color = "Red";
    btn.disabled = true;
  }
}

password.addEventListener('keyup', () =>{
  if(rePassword.value.length != 0) checkPassword();
})

rePassword.addEventListener('keyup', checkPassword);