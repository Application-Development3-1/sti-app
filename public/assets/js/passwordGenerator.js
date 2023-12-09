const password_container = document.getElementById('studentPassword');
const password_teacher = document.getElementById('adminPassword');
const length = 10;
const upperCase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
const lowerCase = "abcdefghijklmnopqrstuvwxyz";
const number = "0123456789";
const symbols = "@#$%^&*()_+~|}{[]<>/-=";

const allChars = upperCase + lowerCase + number + symbols;

function createPassword(){
    let password = "";
    password += upperCase[Math.floor(Math.random() * upperCase.length)];
    
    password += lowerCase[Math.floor(Math.random() * lowerCase.length)];
    
    password += number[Math.floor(Math.random() * number.length)];
    
    password += symbols[Math.floor(Math.random() * symbols.length)];

    while(length > password.length){
        password += allChars[Math.floor(Math.random() * allChars.length)];
    }
    password_container.value = password;
    password_teacher.value = password;
}