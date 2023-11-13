<!DOCTYPE html>
<html lang = "en">
  <head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/_homePage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="icon" type="image/x-icon" href="stilogo.png">
    
    <title>Your Group Page</title>

  </head>

  <script>
      const clearInput = () => {
        const input = document.getElementsByTagName("input")[0];
        input.value = "";
      }

      const clearBtn = document.getElementById("clear-btn");
      clearBtn.addEventListener("click", clearInput);
  </script>


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
          <img src="images/hannii.jpg" class="rounded-circle" alt="hannii">
        </div>
        <i class="bi bi-people-fill" style="color: #008FEF; font-size: 30px; position: absolute; margin-left: 20px; margin-top: 80px; transform: translate(-50%, -50%);"></i>
        <i class="bi bi-calendar-date-fill" style="color: #008FEF; font-size: 30px; position: absolute; margin-left: 20px; margin-top: 120px; transform: translate(-50%, -50%);"></i>
        <i class="bi bi-question-circle-fill" style="color: #008FEF; font-size: 30px; position: absolute; margin-left: 20px; margin-top: 160px; transform: translate(-50%, -50%);"></i>
        <i class="bi bi-bookmark-star-fill" style="color: #008FEF; font-size: 30px; position: absolute; margin-left: 20px; margin-top: 205px; transform: translate(-50%, -50%);"></i>
          <div id="left_text_style" >
            <li>
              <ul style="font-size: large;">Hanni Pham
                <ul style="font-size: 10px;">BSIT</ul>
              </ul>
              <ul><a href="yourgrouppage.html">Your Group</a></ul>
              <ul>Calendar</ul>
              <ul><a href="lostfound.html">Lost and Found</a></ul>
              <ul><a href="bulletinboard.html">Bulletin</a></ul>
            </li>
          </div>
      </div>
      
      <div class = "col-sm-1" id="postbox" >
        <img src="images/hannii.jpg" class="rounded-circle" alt="hanhanhan" style="position: absolute; margin-left: 15px; margin-top: 25px;">
        <input type="text" id="add_post" placeholder="Write Something....">
        <i class="bi bi-image-fill" style="color: #008FEF; font-size: 30px; margin-left : 45px; margin-top: 53px; position: absolute;transform: translate(-50%, -50%);" id="send"></i>



      </div>
      <div class="col">
        <div class="row">
           
        </div>
      </div>

    </div>

    <div class = "row row-cols-auto" style="width: 100%; background-color: #F6F6EF;"id="rowlength" >
      <div class = "col" >
      
      </div>

      <div class = "col" id = "member_post">
        <img src="images/hannii.jpg" class="rounded-circle" alt="hanhanhan" style="position: absolute; margin-left: 15px; margin-top: 22px;">
        <div id = "post_text">
          Hanni Pham
        </div>
        <div id = "course_post" style="font-size: 10px;">
          October 16, 2020
        </div>
        <div id = "caption">
          Fly high with 
          #STI
        </div>
        <div id = "post_content">

          <div id = "image_content">
            <img src="images/nj.jpg">
          </div>
        </div>
      </div>
      <div class="col">
      </div>
    </div>
  
  </div>

  
  </body>
</html>