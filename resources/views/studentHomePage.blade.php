<!DOCTYPE html>
<html lang = "en">
  <head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/_homePage.css">
    <link rel="stylesheet" type="text/css" href="assets/css/ImageSelectorPopUp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="icon" type="image/x-icon" href="stilogo.png">
    
    <title>Your Group Page</title>

  </head>
<!--
  <script>
      const clearInput = () => {
        const input = document.getElementsByTagName("input")[0];
        input.value = "";
      }

      const clearBtn = document.getElementById("clear-btn");
      clearBtn.addEventListener("click", clearInput);
  </script>
    -->
  <body class = "bodycolor">
    <div class="row" style="height: 70px; background-color: white;">
      
      <div class = "col">
        <div class="STIlogo"></div>
      </div>

      <div class ="col">
      <i class="fa-solid fa-house" style="color: #008FEF; font-size: 36px; position: absolute; margin-left: 45%; margin-top: 35px; transform: translate(-50%, -50%);"></i>
      <i class="bi bi-search" style="color: #008FEF; font-size: 36px; position: absolute; margin-left: 40%; margin-top: 35px; transform: translate(-50%, -50%);"></i>
      </div>
      
  </div>

  <div class = "container-fluid justify-content-center">
    <div class = "row row-cols-auto" id="rowlength">

      <div class = "col" id="box" >
        <div id = "prof">
        <i class="bi bi-person-circle" style="color: gray; font-size: 50px; position: absolute; margin-left: 20px; margin-top: 20px; transform: translate(-50%, -50%);"></i>
        </div>
        <i class="bi bi-people-fill" style="color: #008FEF; font-size: 30px; position: absolute; margin-left: 20px; margin-top: 80px; transform: translate(-50%, -50%);"></i>
        <i class="bi bi-calendar-date-fill" style="color: #008FEF; font-size: 30px; position: absolute; margin-left: 20px; margin-top: 120px; transform: translate(-50%, -50%);"></i>
        <i class="bi bi-question-circle-fill" style="color: #008FEF; font-size: 30px; position: absolute; margin-left: 20px; margin-top: 160px; transform: translate(-50%, -50%);"></i>
        <i class="bi bi-bookmark-star-fill" style="color: #008FEF; font-size: 30px; position: absolute; margin-left: 20px; margin-top: 205px; transform: translate(-50%, -50%);"></i>
          <div id="left_text_style" >
            <ul>
              <li style="font-size: large;">{{Auth::user()->first_name}} {{Auth::user()->last_name}} 
                <li style="font-size: 10px;">{{Auth::user()->course}}</li>
              </li>
              <li><a href="yourgrouppage.html">Your Group</a></li>
              <li>Calendar</li>
              <li><a href="lostfound.html">Lost and Found</a></li>
              <li><a href="bulletinboard.html">Bulletin</a></li>
            </ul>
          </div>
      </div>


      <!--CREATING POST-->
      
      <div class = "col-sm-1" id="postbox" >
        <i class="bi bi-person-circle" style="color: #f0f0f0; font-size: 50px; position: absolute; margin-left: 40px; margin-top: 50px; transform: translate(-50%, -50%);"></i>
        <input type="text" name="post"id="add_post" form="form-container" placeholder= "Write Something....">

        <button type= "button" class="ImageButton" style="border: transparent; background: transparent; margin-left: 0px; " onclick="openForm()">
          <i class="bi bi-image-fill" id="imagebtn" style="color: #008FEF; font-size :30px; margin-left: 20px;">
          </i>
        </button>

      </div>
      <!--END OF CREATING POST-->


      <!--POP-UP SELECT IMAGE-->

      <div class="form-popup" id="myForm">
        <form action="studentHomePage" class="form-container" method="POST" >
          @csrf
          <h1>Add Post</h1>

          <label for="file"><b>Add Image</b></label>
          <input type="file" name="file" accept="image/jpeg, image/png, image/jpg">
          

          <button type="submit" class="btn" id="Posting" >Post</button>
          <button type="button" class="btn cancel" id="Close" value="reset" onclick="closeForm()">Close</button>


        </form>
      </div>

      <!--END POP-UP SELECT IMAGE-->


    <!--POST-->
    <div class="col">
        <div class="row">
           
        </div>
      </div>

    </div>

    <div class = "row row-cols-auto" style="width: 100%; background-color: #F6F6EF;"id="rowlength" >
      <div class = "col" ></div>

      <div class = "col" id = "member_post">
        <i class="bi bi-person-circle" style="color: #ffff; font-size: 50px; position: absolute; margin-left: 40px; margin-top: 45px; transform: translate(-50%, -50%);"></i>       <div id = "post_text">
          {{Auth::user()->first_name}} {{Auth::user()->last_name}} 
        </div>

        <div id = "course_post" style="font-size: 10px;">
          October 16, 2020
        </div>

        <div>
          <p id = "caption" name="caption"></p>
        </div>
      
        <div id = "post_content">
          <div id = "image_container">
          <img src="images/nj.jpg" id="image_nj">
          </div>
        </div>
      </div>

      <div class="col">
      </div>

    </div>

  </div>
  
  <script scr ="/assets/js/storeDataStudentPost.js"></script>

  <script src="/assets/js/_studentMainPage.js"></script>
  <script src="/assets/js/ImageSelectPopUp.js"></script>
  </body>
</html>