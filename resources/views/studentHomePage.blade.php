<!DOCTYPE html>
<html lang = "en">
  <head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/_homepage.css">
    <link rel="stylesheet" type="text/css" href="assets/css/ImageSelectorPopUp.css">
    <link rel="stylesheet" type="text/css" href="assets/css/logout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fontawesome.com/icons/ellipsis?f=classic&s=solid">
    <link rel="stylesheet" href="https://fontawesome.com/icons/right-to-bracket?f=classic&s=solid"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="icon" type="image/x-icon" href="images/stilogo.png">
    
    <title>Home</title>

  </head>
  <body class = "bodycolor">
    <div class="row" style="height: 70px; background-color: #FFD21D; box-shadow: 0 4px 5px 0 #656565; position: sticky; top:0; z-index: 1;">
      
      <div class = "col">
        <div class="STIlogo">
          <img id="logo_pic" src="images/stilogo.png" alt="logo"></img>
        </div>
      </div>

      <div class ="col">
      <i class="bi bi-search" style="color: #014887; font-size: 36px; position: absolute; margin-left: 39%; margin-top: 35px; transform: translate(-50%, -50%);"></i>
      <a href="#"><i class="fa-solid fa-house" style="color: #014887; font-size: 36px; position: absolute; margin-left: 43%; margin-top: 35px; transform: translate(-50%, -50%);"></i></a>
      <i class="fa-solid fa-right-to-bracket" style="color: #014887; font-size: 36px; position: absolute; margin-left: 47%; margin-top: 37px; transform: translate(-50%, -50%);" onclick="yesLogout()"></i>
    </div>
      
  </div>

  <!--LOGOUT-->
        <div class="logout-popup" id="logoutForm">
          <form action="{{route('logout')}}" class="logout-container" method="delete">
            @csrf
            <h1>Are you sure to logout?</h1>
            <button type="submit" class="btn_yes" id="Posting_yes" >Yes</button></a>
            <button type="button" class="btn cancel" id="Close_cancel" value="reset" onclick="cancelLogout()">Close</button>
          </form>
        </div>
 <!--LOGOUT-->

  <div class = "container-fluid justify-content-center">
    <div class = "row row-cols-auto" id="rowlength">


      <div class = "side__nav" id="box">
        <div id = "prof">
        </div>

        <a href="/profile"> 
          <div class="image-cropper">
            <img src="{{ $profiles->ProfilePicture ?? 'storage/public/profiles/default.png' }}" class="profile-image">
          </div>
        </a>

        <i class="bi bi-people-fill" style="color: #014887; font-size: 30px; position: absolute; margin-left: 30px; margin-top: 82px; transform: translate(-50%, -50%);"></i>
        <i class="bi bi-calendar-date-fill" style="color: #014887; font-size: 30px; position: absolute; margin-left: 30px; margin-top: 130px; transform: translate(-50%, -50%);"></i>
        <i class="bi bi-question-circle-fill" style="color: #014887; font-size: 30px; position: absolute; margin-left: 30px; margin-top: 175px; transform: translate(-50%, -50%);"></i>
        <i class="bi bi-bookmark-star-fill" style="color: #014887; font-size: 30px; position: absolute; margin-left: 30px; margin-top: 220px; transform: translate(-50%, -50%);"></i>
          
          <div id="left_text_style" >
            <ul>
              <li style="font-size: large;"><a href="/profile"> {{Auth::user()->first_name}} {{Auth::user()->last_name}} </a><br>
                {{Auth::user()->course}}
              </li>
              <li class="side__nav"><a href="/yourGroup">Your Group</a></li>
              <li class="side__nav"><a href="/">Calendar</a></li>
              <li class="side__nav"><a href="/lostAndFound">Lost and Found</a></li>
              <li class="side__nav"><a href="/bulletin">Bulletin</a></li>
            </ul>
          </div>
      </div>


      <!--CREATING POST-->
      
      <div class = "col-sm-1" id="postbox" >
        
      <a href="/profile"> 
          <div class="image-cropper-2">
            <img src="{{  $profiles->ProfilePicture ?? 'storage/public/profiles/default.png'}}" class="profile-image-2">
          </div>
        </a>
        <input type="text" name="post"id="add_post" placeholder= "Write Something...." onclick="openForm()">

        <button type= "button" class="ImageButton" style="border: transparent; background: transparent; margin-left: 0px; " onclick="openForm()">
          <i class="bi bi-image-fill" id="imagebtn" style="color: #014887; font-size :30px; margin-left: 20px;">
          </i>
        </button>

      <!--POP-UP SELECT IMAGE-->

      <div class="form-popup" id="myForm" method="post">
        <form action="homeStudent" class="form-container" method="POST" enctype="multipart/form-data">
          @csrf
          <h1>Add Post</h1>

          <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
          <input type="text" name="caption"id="add_post1" placeholder= "Write Something....">
          <input type="file" name="image" class="imageSelector" id="file" accept="image/jpeg, image/png, image/jpg">

          <button type="submit" class="btn" id="Posting" >Post</button>
          <button type="button" class="btn cancel" id="Close" value="reset" onclick="closeForm()">Close</button>

        </form>
      </div>

      <!-- END POP-UP SELECT IMAGE-->


      <!--END POP-UP SELECT IMAGE-->
      </div>
      <!--END OF CREATING POST-->

    <!--POST-->
    <div class="col">
        <div class="row">
           
        </div>
      </div>

    </div>

    @foreach($post as $post)
      

   
    <div class = "row row-cols-auto" style="margin-bottom:10px; width: 100%; height:100%; background-color: #F6F6EF;"id="rowlength" >
      <div class = "col" ></div>

      <div class="delete-popup" id="deleteForm">
        <form action="/post_delete/{{$post->id}}" class="delete-container" method="get">
          <h1>Are you sure you want to delete this?</h1>
          <button type="submit" class="btn_delete" id="deleting">Delete <a href="/post_delete/{{$post->id}}"></a> </button>
          <button type="button" class="btn Cancel" id="closing" value="reset" onclick="cancelDelete()">Cancel</button>
        </form>
      </div>


<!--POOOOOOOOSSSSSSSSTTTT-->
  
      

      <div class = "col" id = "member_post">
        <div class="image-cropper-3">
          <img src="{{  $profiles->ProfilePicture ?? 'storage/public/profiles/default.png'}}" class="post-profile" alt="">       
        </div>


      <!--delete button-->  
      <a class = "fa-solid fa-ellipsis" id="del_btn" onclick="openDelete()"></a>

        <div id = "post_text">
          {{$post->user->first_name}} {{$post->user->last_name}} 
        </div>

        <div id = "course_post" style="font-size: 10px;">
          {{date('D', strtotime($post->created_at))}}
        </div>

        <div>
          <p id = "caption" name="caption">{{$post->caption}}</p>
        </div>
      
        <div id = "post_content">
          <div id = "image_container" >
            <img src="{{$post->image}}" style = "width: 100%;border-radius: 20px; height:100%" alt="">
          </div>

          <!-- Ito yung sa like at comment button sa baba ng post. hindi pa tapos-->

          <div class="interaction">
            <div class="like_comment">
                <button type="button">
                  <i id="btn" onclick="like()" class = "far fa-heart" style=" font-size:30px"></i>
                   <label for="btn" id="Like">Like</label>
                  </button>
                <button type="button">
                  <i id="btn" class="far fa-comment" style="font-size:30px"></i>
                  <label for="btn">Comment</label>
                  </button>
            </div>
          </div>
        </div>
      </div>

<!--END POOOOOOOOSSSSSSSSTTTT-->
      <div class="col">
      </div>

    </div>
   
    @endforeach
    
  </div>
  
  <!--<script scr ="/assets/js/storeDataStudentPost.js"></script>-->

  <script src="/assets/js/_studentMainPage.js"></script>
  <script src="/assets/js/ImageSelectPopUp.js"></script>
  <script src="/assets/js/LikeButtonStudent.js"></script>
  <script src="/assets/js/logout.js"></script>
  </body>
</html>