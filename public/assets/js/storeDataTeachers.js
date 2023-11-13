window.addEventListener('load', function(){
    signupSubmitListener()
})


function signupSubmitListener()
{
    let teacherSignUp = document.querySelector('#signUpTeacher');
    document.querySelector('#TeacherSubmitButton').addEventListener('click', async (e) =>{
        e.preventDefault();
    
        let employeeID = teacherSignUp.querySelector('input[name=employeeID]').value;
        let department = teacherSignUp.querySelector('select[name=department]').value;
        let first_name = teacherSignUp.querySelector('input[name=first_name]').value;
        let last_name = teacherSignUp.querySelector('input[name=last_name]').value;
        let middle_name = teacherSignUp.querySelector('input[name=middle_name]').value;
        let contact_number = teacherSignUp.querySelector('input[name=contact]').value;
        
        let password = teacherSignUp.querySelector('input[name=password]').value;
    
        if(employeeID && contact_number && password){
            let response = await fetch ('/api/v2/teachers', {
                method: 'post',
                body: JSON.stringify({
                    employeeID: employeeID,
                    department: department,
                    first_name: first_name,
                    last_name: last_name,
                    middle_name: middle_name,
                    contact_number: contact_number,
                    email: 'abc@gmail.com',
                    password: password
    
                }),
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                }
            })
            let data = await response.json();
            alert(JSON.stringify(data));
        }
    
    })
}


