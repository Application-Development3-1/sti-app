<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/_studentsRegistration.css">
    <link rel="stylesheet" type="text/css" href="assets/css/_general.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <title>Sign Up</title>
</head>
<body>
    

    <div class="bg-color"></div>

    <img id="logo_pic" src="images/stilogo.png" alt="logo">

    <div class="container">
        <h1>Student account Registration</h1>

        <img id="logo_pic2" src="images/stilogo.png" alt="logo">

        <div class="fillup">
            <form action="#" id="formReg" method="post">
            @csrf
            
                
                <div class="user-details">
                    <div class="input-group">
                        <input name ="studentNum" type="text" required>
                        <label class="labellineStudNum">Student No.</label>
                    </div>
                    
                    <select name="Course" id="Course" required>
                        <option value="Default">Course</option>
                        <option value="BSIT" id="Bsit">BSIT (Bachelor of Science in Information Technology)</option>
                        <option value="BSHM" id="Bshm">BSHM (Bachelor of Science in Hospitality Management)</option>
                        <option value="BSBA" id="Bsba">BSBA (Bachelor of Science in Business Administration)</option>
                        <option value="BMMA" id="Bmma">BMMA (Bachelor of Multimedia Arts)</option>
                        <option value="BSTM" id="Bstm">BSTM (Bachelor of Science in Tourism Management)</option>
                        <option value="BSCS" id="Bscs">BSCS (Bachelor of Science in Computer Science)</option>
                        <option value="BACOMM" id="Bacomm">BACOMM (Bachelor of Arts in Communication)</option>
                        <option value="BSAIS" id="Bsais">BSAIS (Bachelor of Science in Accounting Information System)</option>
                    </select>
                    <div class="input-group">
                        <input name="firstName" type="text" required>
                        <label  class="labellineFname">First Name</label>
                       
                    </div>

                    <div class="input-group">
                        <input name="lastName" type="text" required>
                        <label class="labellineLname">Last Name</label>
                    </div>

                    <div class="input-group">
                        <input name="middleName" type="text" required>
                        <label class="labellineMname">Middle Name</label>
                    </div>

                    <div class="input-group">
                        <input name="email" type="text" required>
                        <label class="labellineEmail">Email</label>
                    </div>

                    <div class="input-group">
                        <input name="password" type="password" id="createPassword" class="StudPasswordInput" required>
                        <label class="labellinePassWord">Create Password</label> 
                    </div>

                    <div class="input-group">
                        <input name="confirmPassword" type="password" id="re-enterStudentPassword" class="StudRePasswordInput" required> 
                        <label class="labellineRePassWord">Re-Enter Password</label> 
                    </div>
                </div>

                <p id = "message"></p> 

                
                <h1 class="note-red">*Fill in required Information</h1>

                <button class="signupStud" id="TeacherSubmitButton" disabled> Sign Up</button>
            </form>
        </div>
    </div>

    <!--Back button-->
    <div class="back-button">
        <button id="Back">
            <a href="/loginStudent">
                <i class="fa fa-solid fa-arrow-left"></i>
            </a>
        </button>

    </div>

    <script src="{{asset('assets/js/_studentsRegistration.js') }}"></script>
    <script src="/assets/js/storeData.js"></script>
   

</body>
</html>