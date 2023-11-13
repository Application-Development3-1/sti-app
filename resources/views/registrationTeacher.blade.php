<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/_teachersRegistration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <title>Sign Up</title>
</head>
<body>
    <div class="bg-color"></div>

    <img id="logo_pic" src="images/stilogo.png" alt="logo">

    <div class="container">
        <h1>Account Registration</h1>

        <img id="logo_pic2" src="images/stilogo.png" alt="logo">

        <div class="fillup" >
            <form action="#" id="signUpTeacher">
            @csrf
                <div class="user-details">
                    <div class="input-group">
                        <input name="employeeID" type="number" required>
                        <label class="labellineEmployeeID">Employee ID</label>
                    </div>
                    
                    <select name="department" id="Course" required>
                        <option value="Default">Department</option>
                        <option value="ITD" id="itdep">Information Technology Department</option>
                        <option value="BMD" id="bmdep">Business Management Department</option>
                        <option value="CED" id="comendep">Computer Engineering Department</option>
                        <option value="MAD" id="mulartdep">Multimedia Arts Department</option>
                        <option value="TD" id="tourdep">Tourism Department</option>
                        <option value="ICTD" id="ictdep">ICT/CS Department</option>
                        <option value="AD" id="accdep">Accountant Department</option>
                        <option value="ARD" id="assregdep">Associated Registrar Department</option>
                    </select>

                    <div class="input-group">
                        <input name="first_name" type="text" required>
                        <label class="labellineFname">First Name</label>
                    </div>

                    <div class="input-group">
                        <input name="last_name" type="text" required>
                        <label class="labellineLname">Last Name</label>
                    </div>

                    <div class="input-group">
                        <input name="middle_name" type="text" required>
                        <label class="labellineMname">Middle Name</label>
                    </div>

                    <div class="input-group">
                        <input name="contact" type="text" required>
                        <label class="labellineContact">Contact No.</label>
                    </div>

                    <div class="input-group">
                        <input name="password" type="password" id ="teacher_createPassword" class="TeacherPasswordInput" required> 
                        <label class="labellinePassWord">Create Password</label> 
                    </div>

                    <div class="input-group">
                      <input type="password" id="teacher_re-enterPassword" class="TeacherPasswordInput" required>
                      <label class="labellineRePassWord">Re-Enter Password</label>
                  </div> 

                        
                   
                </div>

                <p id = "teacher_message"></p> 

                <!--Note for fill up-->
                <h1 class="note-red">*Fill in required Information</h1>

                <!--sign up button-->
                <button class="signupAd" id= "TeacherSubmitButton" disabled>Sign Up</button>
            </form>
        </div>
    </div>

    <!--Back button-->
    <div class="back-button">
        <button id="Back">
            <a href="/loginTeacher">
                <i class="fa fa-solid fa-arrow-left"></i>
            </a>
        </button>

    </div>

    <script src="/assets/js/_teacherRegistration.js"></script>
    <script src="/assets/js/storeDataTeachers.js"></script>
</body>
</html>