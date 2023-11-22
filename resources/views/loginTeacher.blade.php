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
        <a href="/"><img id="logo_pic" src="images/stilogo.png" alt="logo"></a>
        <a href="/"><i class="fa fa-home" aria-hidden="true" ></i></a>
    </div>
    <!-- logo na malaki-->
    <div class="big_logo"><img id="logo_pic" src="images/stilogo.png" alt="logo"></div>

    
    
    

    <!--Form input of student-->
    <div class="row justify-content-center mt-5" style="margin-left:505px;">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Teacher Login</h1>
                </div>
                <div class="card-body">
                    @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <form action="{{ route('login2') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email2" class="form-label">Email</label>
                            <input type="email" name="email2" class="form-control" id="email2" required>
                        </div>
                        <div class="mb-3">
                            <label for="password2" class="form-label">Password</label>
                            <input type="password" name="password2" class="form-control" id="password2" required>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary">Login</button>
                            </div>
                            <div class="d-grid" style="margin-top: 10px;">
                                <button class="btn btn-primary"><a href="/registrationTeacher" style="color:white;">Register</a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>