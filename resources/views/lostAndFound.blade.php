<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/lostFoundstyle.css">
    <link rel="stylesheet" type="text/css" href="assets/css/addlostitemPopUp.css">
    <link rel="stylesheet" type="text/css" href="assets/css/pop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <title>Lost And Found</title>

  </head>

  <body class = "bodycolor">
    <div class="row row-cols-auto"  id = "top_bar_container" style="background-color: #FFD21D; box-shadow: 0 4px 5px 0 #656565; position: sticky; top:0; z-index: 1;">

      <div class = "col">
      <a href="studentHomePage">
        <div class="STIlogo">
          <img id="logo_pic" src="images/stilogo.png" alt="logo"></img>
        </div>
      </a>
      </div>

      <div class="col" id = "lost_and_found_container">LOST AND FOUND</div>
      <div class ="col" id = "icon_home_container">
      <a href="/studentHomePage"><i class="fa-solid fa-house" id = "icon_home_style"></i></a>
      </div> 
      <i class="bi bi-plus-circle-fill" id = "icon_plus_circle_fill_style1" style="text-shadow: 0 4px 5px 0 #656565;" onclick="addlostitem()"></i>
  </div>

  <!--POPUP ADD LOST ITEM-->
  

<div class="form-popup" id="myForm" method="post">
          <form action="/lostAndFound" class="form-container" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="row justify-content-center">
                  <div id="addlost"> Add lost item </div>
                </div>
                    
                <div class="row justify-content-center">
                  <input type="text" id="textcontainer_what" name="what" placeholder="What?"> 
                  <br> <br>
                </div>
                    
                        
                <div class="row justify-content-center">
                  <input type="text" id="textcontainer_where" name="where" placeholder="Where?"> 
                  <br> <br>
                </div>
                    
                        
                <div class="row justify-content-center">
                  <input type="text" id="textcontainer_when" name="when" placeholder="When did you find it?"> 
                  <br> <br> <!--small text-->
                </div>
                    
                        
                <div class="row justify-content-center">
                  <textarea id="textcontainer_additional" name="additional" placeholder="Additional information" rows="3" cols="30"></textarea>
                </div>

                <div class="picHere">
                  <img src="" alt="imageLost&Found" id="pictureInput">
                </div>

                <div class="row justify-content-center">
                  <div class="kaka">
                    <label class="AddPicbutton" for="kuha-picture" id="AddPicButton"><i class="fa-regular fa-image" style="color: white; padding-right: 15px;"></i>Add image here</label>
                    <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                    <input class="addimage" type="file" accept="image/jpeg, image/png, image/jpg" name="image" id="kuha-picture"> 
                  </div>
                </div>
                    
                <div class="row justify-content-center"> 
                  <div class="col"><button type="submit" id="butpost" name="post"> Post </button>
                  </div>

                  <div class="col">
                    <button type="button" id="butcancel" name="cancel" onclick="closeForm()"> Cancel</button>
                  </div>
                </div>
          </form>
        </div>
           

        <!--END-->
    <div id="add_item">
      
    </div>

        @foreach($lost as $lost )

        <div class="logout-popup" id="logoutForm" >
          <form action="/lost_delete/{{ $lost->id }}" class="logout-container" method="get">
            <h1>Are you sure you want to delete this post?</h1>
            <button type="submit" class="btn_yes" id="Posting_yes" >Yes<a href="/lost_delete/{{ $lost->id }}"></a></button>
            <button type="button" class="btn cancel" id="Close_cancel" value="reset" onclick="cancelDelete()">Close</button>
          </form>
        </div>


        <div class = "col" id = "post_container">
          <div class = "image-cropper">
            <img src=" {{$profiles->ProfilePicture}}" class="prof-pic">
          </div>

          <a class="fa-solid fa-ellipsis" id="delete" onclick="yesDelete()"></a>         

          <div class="LostAndFoundPost">
            <p id="User-Name">  {{$lost->user->first_name}} {{$lost->user->last_name}}</p>
            <p class="Post-Caption" id="time">{{date('D', strtotime($lost->created_at))}}</p>
            <p class="Post-Caption" id="what">What: {{$lost->what}}</p>
            <p class="Post-Caption" id="when">When: {{$lost->when}}</p>
            <p class="Post-Caption" id="where">Where: {{$lost->where}}</p>
            <p class="Post-Caption" id="addinfo">Description: {{$lost->additional}}</p>
          </div>


          
          <div id = "post_content_container">
            <div id = "post_pic">
              <img src="{{$lost->image}}" alt="" id="post-pic">
            </div>
          </div>
      </div>
      

        @endforeach

    <!--<script src="/assets/js/addlostitem.js"></script>-->
    <script src="/assets/js/addlostitemPopUp.js" type="text/javascript"></script>
  </body>
</html>