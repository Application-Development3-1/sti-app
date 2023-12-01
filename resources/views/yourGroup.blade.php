<!DOCTYPE html>
<html lang = "en">
  <head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/yourGroupStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>

  </head>

  <body class = "bodycolor">
    <div class="row" style="height: 70px; background-color: #FFD21D;">
      
      <div class = "col">
        <div class="STIlogo"></div>
      </div>
      <div class ="col">
        <a href="/studentHomePage"><i class="fa-solid fa-house" style="color: #008FEF; font-size: 36px; position: absolute; margin-left: 45%; margin-top: 35px; transform: translate(-50%, -50%);"></i></a>
      </div>
  </div>

  <div class = "container ">
    <div class = "row row-cols-auto" >
      <div class = "col" >
        <div class="box">
          <i class="bi bi-people-fill" style="color: #008FEF; font-size: 40px; position: absolute; margin-left: 60px; margin-top: 50px; transform: translate(-50%, -50%);"></i>
          <div id="text_style" style="font-weight: bold; color: #008FEF;">
            Your Group
          </div>
          
        </div>       
      </div>
      <div class = "col-sm-1" id="postbox">
        <img src="pics/hannii.jpg" class="rounded-circle" alt="hanhanhan" style="position: absolute; margin-left: 15px; margin-top: 25px;">
        <input type="text" id="add_post" placeholder="     Write Something....">
        <i class="bi bi-send-fill" style="color: #008FEF; font-size: 35px; margin-left : 45px; margin-top: 53px; position: absolute;transform: translate(-50%, -50%);" id="send"></i>
      </div>
    </div>

    <div class = "row row-cols-auto" >
      <div class = "col" >
        <div id="text_members" style="font-weight:bold; color: #717273;">Members</div>
        <div class="member_box">
        </div>       
      </div>

      <div class = "col" id = "member_post">
        <img src="pics/hyee.jpg" class="rounded-circle" alt="hyein" style="position: absolute; margin-top:  20px; margin-left: 10px;">
        <div id = "post_name">Lee Hyein</div>
        <div id = "date_text">October 16, 2020</div>
        <div id = "post_text">Volleyball with my club mates!
          #sigepo</div>
        <div id = "post_content">


          <div id="image_post">

          </div>
        </div>
      </div>
    </div>
  
  </div>

  
  </body>
</html>