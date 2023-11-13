let teacher_password = document.querySelector('#teacher_createPassword');
let teacher_rePassword = document.querySelector('#teacher_re-enterPassword');
let teacher_message = document.querySelector('p');

let teacher_btn = document.getElementById("TeacherSubmitButton");

function checkPassword(){
 
  
  teacher_message.innerText = teacher_password.value == teacher_rePassword.value ? 'Password Match!' : 'Password not match!';

  if(teacher_password.value == teacher_rePassword.value){
    teacher_message.style.color = "Green";
    teacher_btn.disabled = false;
    
  }
  else{
    teacher_message.style.color = "Red";
    teacher_btn.disabled = true;
  }
}

teacher_password.addEventListener('keyup', () =>{
  if(teacher_rePassword.value.length != 0) checkPassword();
})

teacher_rePassword.addEventListener('keyup', checkPassword);