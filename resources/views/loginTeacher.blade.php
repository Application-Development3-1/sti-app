<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link rel="stylesheet" type="text/css" href="assets/css/teacherLogin.css">
    <link rel="stylesheet" type="text/css" href="assets/css/_general.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="shortcut icon" type="x-icon" href="images/tablogo.png">
</head>
<body>
    
    <!--Yellow bar on the top-->
    <header>
        <nav class="nav_yellow"></nav>
    </header>

    <!-- logo in nav-->
    <div class="nav_logo">
        <a href="/"><img id="logo_pic" src="images/stilogo.png" alt="logo"></a>
        <a href="/"><i class="fa fa-home" aria-hidden="true" ></i></a>
    </div>
    <!-- logo na malaki-->
    <div class="big_logo"><img id="logo_pic" src="images/stilogo.png" alt="logo"></div>

    
    
    <h2>Teachers Log In</h2>

    <!--Form input of student-->
    <form class="StudRegFrom" action="">
        <div class="center">
            <div class="input-group">
                <input type="text" required>
                <label class="labelline">Email</label>
            </div>
            
            <br>
     
            <div class="input-group">
                <input type="password" required>
                <label class="labelline">Password</label>
            </div>
            <br>
            
            <div class="buttons"> 
                <button class="login">Log In</button>
                <br><br>
                <hr>
                <br>
                <button class="signup"><a href="/registrationTeacher">Sign Up</a></button>
            </div>
           
        </div>
    </form>
</body>
</html>