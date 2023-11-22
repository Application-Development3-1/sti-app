

window.addEventListener('load', function() {
    signupSubmitListener()
})

function signupSubmitListener()
{
    let signupForm = document.querySelector('#formReg');
    document.querySelector('#TeacherSubmitButton').addEventListener('click', async (e) => {
        e.preventDefault()
        /*assign ng variable na maglalaman ng input names sa html */
        let studentID = signupForm.querySelector('input[name=studentNum]').value;
        let first_name = signupForm.querySelector('input[name=firstName]').value;
        let last_name = signupForm.querySelector('input[name=lastName]').value;
        let middle_name = signupForm.querySelector('input[name=middleName]').value;
        let course = signupForm.querySelector('select[name=Course]').value;
        let email = signupForm.querySelector('input[name=email]').value;
        let password = signupForm.querySelector('input[name=password]').value;
        

        if (studentID && password && email) {
             let response = await fetch('/api/v1/users', {
                method: 'post',
                body: JSON.stringify({
                   /*keys*/   /*variable*/  
                    studentID: studentID,
                    first_name: first_name,
                    last_name: last_name,
                    middle_name: middle_name,
                    course: course,
                    email: email,
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