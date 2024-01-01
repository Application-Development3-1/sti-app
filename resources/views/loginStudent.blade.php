<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Registration</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/studentLogin.css">
    <link rel="stylesheet" type="text/css" href="assets/css/general.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="shortcut icon" type="x-icon" href="images/tablogo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   
    
</head>
<body>

    <!--Yellow bar on the top-->
    <header>
        <nav class="nav_yellow"></nav>
    </header>

    <!-- logo in nav-->
    <div class="nav_logo">
        <a href="/"><img id="logo_pic" src="images/stilogo.png" alt="logo"> </a>
        <a href="/"><i class="fa fa-home" aria-hidden="true"></i></a>
    </div>
    <!-- logo na malaki-->
    <div class="big_logo"><img id="logo_pic" src="images/stilogo.png" alt="logo"></div>

    
    
     
    <!--Form input of student-->
    <div class="StudRegFrom"> 

    <div class="row justify-content-center mt-5" >
            <div class="card" id="card">
                <div class="card-header" >
                    <h1 class="card-title">Student Login</h1>
                </div>
                <div class="card-body">
                    
                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        <input type="hidden" name="ProfilePicture" id="ProfilePicture" value="/storage/public/profiles//1701528688NewJeans-Hanni.png.png">
                       

                        <div class="mb-3">
                            <input type="text" class="form__field" name="email" id="email" onkeypress="return numberOnly(event)" maxlength="11" required />
                            <label for="email" class="form__label">StudentID</label>
                        </div>
                       
                        <div class="mb-3">
                            <input type="password" name="password" class="form__field__Pass" id="password" required>
                            <label for="password" class="form__label__Pass">Password</label>
                        </div>
                        <div class="mb-3">
                        @if(Session::has('error'))
                            <div id="msg" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                            <div class="d-grid">
                                <button class="btn btn-primary" id="btn__login">Login</button>
                            </div>
                            <div class="d-grid" style="margin-top: 10px;">
                                <button class="btn btn-primary" id="btn__Register"><a href="/registrationStudent" class="letter">Register</a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        
    </div>

</div>


<script src="/assets/js/inputValidation.js"></script>

</body>

</html>