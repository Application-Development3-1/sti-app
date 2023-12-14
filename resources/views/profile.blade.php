<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" type="text/css" href="assets/css/profile.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/ProfileUpdatePopUp.css">
    <link rel="shortcut icon" type="x-icon" href="images/tablogo.png">
   
</head>
<body>

    <header>
        <nav class="nav_yellow">
            <div class="nav_logo">
            <img id="logo_pic" src="images/stilogo.png" alt="logo"></img>
            <div id ="your_profile_style">YOUR PROFILE</div>
            <a href="/studentHomePage"><i class="fa fa-home" aria-hidden="true"></i></a>
            </div>
        </nav>
    </header>

    <!-- logo in nav-->

    <div class ="rectangle">
      @php($x=Auth::user()->id)
      <div class="image-cropper">
        <img  src="{{$profiles->ProfilePicture ??'storage/public/profiles/default.png'}}" class="profile-pic"></img>
        </div>

            <div id = "id_text_style">{{Auth::user()->first_name}} {{Auth::user()->last_name}} </div>
            <div id = "id_text_style_2" >{{Auth::user()->course}}</div>
    </div>

  
    <i class="bi bi-camera-fill" id="prof_pic_update" onclick="openForm()"></i>
    

    <!--POPUP profile update-->
    <div class="form-popup" id="myForm" method="post">
        <form action="profile" class="form-container" method="POST" enctype="multipart/form-data">
          @csrf
          <h1>Change Profile Picture</h1>

          <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
          <input type="file" name="image" class="imageSelector" id="file" accept="image/jpeg, image/png, image/jpg">

          
          <button type="submit" class="btn" id="Posting" value="Upload" >Post</button>
          <button type="button" class="btn cancel" id="Close" value="reset" onclick="closeForm()">Close</button>

        </form>
      </div>
    
    <!--END-->

    <div class = "line"></div>
    <div id = "id_text_style_3"> About </div>
    <div class = "line2"></div>
    <div id = "id_text_style_4"> Hello~! This is Hanni Pham~ You guys did not see anything, you only saw my beautiful face~. </div>
   
    <div class = "change_pass_rectangle">
        <button type = "button"  id = "change_password_style">
            <a href="/userSettings">Edit Information</a>
        </button>
    </div>

    <div id = "posts_style">POSTS</div>
    <div class = "row-col-auto" id = "post_area">
    @foreach($timeline as $timeline)
    
      <div class = "col" id = "member_post">

        <div class="image-cropper-2">
          <img src="{{$profiles->ProfilePicture  ?? 'storage/public/profiles/default.png'}}" class="profile_pic_for_post_style"></img>    
        </div> 

        <div id = "post_text">
          {{Auth::user()->first_name}} {{Auth::user()->last_name}} 
        </div>
        <div id = "course_post">
           {{$timeline->created_at}}
        </div>

        <div>
          <p id = "caption" name="caption">
            {{$timeline->caption}}
          </p>
        </div>
      
          <div id = "post_content">
            <div id = "image_container" >
              <img class = "object-fit-cover" src="{{$timeline->image}}" id = "img_post_style" alt="">
            </div>

            <!-- Ito yung sa like at comment button sa baba ng post. hindi pa tapos-->

            <!--<div class="interaction">
              <div class="like">
                  <button type="button">Like</button>
              </div>

              <div class="Comment">
                  <button type="button">Comment</button>
              </div>
            </div>-->
          </div>
      </div>
 
    </div>
    @endforeach   

    <script src="/assets/js/Profile.js"></script>
    <script src="/assets/js/ProfileUpdatePopUp.js"></script>

</body>
</html> 