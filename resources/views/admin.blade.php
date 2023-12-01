<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/admin.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Adminpopup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="assets/js/AdminPopUp.js"></script>
    <title>Admin</title>
  </head>

  <body class="Adminbody">

    <div class="row row-cols-auto">
        <div class = "col">
          <div class="col" id = "admin_text">Admin</div>
        </div>
    </div>
    
    
    <div class="row" id= "admin_text_2"> 
            <div id="admin_text_acc">Account</div>
    </div>

    <div class = "overlay">
        <button class="btn__student" onclick="openStudent()"><h4>Student</h4></button>
        <button class="btn__teacher" onclick="openTeacher()"><h4>Teacher</h4></button>

        <div class="tbl__overall">
            <!--student folder-->
            <div id="table-container">
                <table id="dynamic_id_list">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Course</th>
                        <th id="remove_row_color"></th>
                        <th id="disable_row_color"> </th>
                        
                    </tr>
                        @foreach($users as $users)
                    <tr >
                        <td placeholder="ID" id="id_container">{{$users->studentID}}</td>
                        <td placeholder="FirstName" id="firstnamecontainer">{{$users->first_name}}</td>
                        <td placeholder="LastName" id="lastnamecontainer">{{$users->last_name}} </td>
                        <td placeholder="Course" id="coursecontainer"> {{$users->course}}</td>
                        <td id="buttons_admin">  <a href="/click_delete/{{ $users->id }}" id="delete_button">Delete</a></td>
                        <td id="buttons_admin2"> <a  id="disable_button">Disable</a></td>
                    </tr>
                        @endforeach
                        
                        <div id="add_button_container">
                            <button type="button" id="add_button_style" onclick="openForm()">Add <i class="bi bi-plus-circle-fill" id = "icon_plus_circle_fill_style"></i></button>
                        </div>
                </table>
            </div>

            <!--teacher folder-->
            <div id="table-container2">
                <table id="dynamic_id_list">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Course</th>
                        <th id="remove_row_color"></th>
                        <th id="disable_row_color"> </th>
                    </tr>
                        
                    <tr >
                        <td placeholder="ID" id="id_container"></td>
                        <td placeholder="FirstName" id="firstnamecontainer"></td>
                        <td placeholder="LastName" id="lastnamecontainer"> </td>
                        <td placeholder="Course" id="coursecontainer"> </td>
                        <td id="buttons_admin">  <a href="/click_delete/{{ $users->id }}" id="delete_button">Delete</a></td>
                        <td id="buttons_admin2"> <a  id="disable_button">Disable</a></td>
                    </tr>
                    <!--button add sa teacher-->
                    <div id="add_button_container">
                        <button type="button" id="add_button_style" onclick="openForm()">Add <i class="bi bi-plus-circle-fill" id ="icon_plus_circle_fill_style"></i></button>
                    </div>
                </table>
            </div>
        </div>

        <!--Eto yung pop up sa add button-->
        <div class="form-popup" id="adminForm">
            <form action="{{url('/click_create/{id}')}}" class="form-container"  method="post">
            @csrf
            <h1>Admin</h1>

                <div class = "Admin">
                    <label for="adminId"><b>Student ID</b></label>
                    <input  type="text" name="studentID" class ="adminId" id="adminId">
                </div>

                <div class = "Admin">
                    <label for="adminFirstName"><b>First Name</b></label>
                    <input type="text" name="FirstName"class="adminFirstName" id="adminFirstName">
                </div>
                
                <div class = "Admin">
                    <label for="adminLastName"><b>Last Name</b></label>
                    <input type="text" name="LastName"class="adminLastName" id="adminLastName">
                </div>

                <div class = "Admin">
                    <label for="adminMiddleName"><b>Middle Name</b></label>
                    <input type="text" name="MiddleName"class="adminMiddleName" id="adminMiddleName">
                </div>

                <div class = "Admin">
                    <label for="adminCourse"><b>Course</b></label>
                    <input type="text" name="Course"class="adminCourse" id="adminCourse">
                </div>

                <div class = "Admin">
                    <label for="adminEmail"><b>Email</b></label>
                    <input type="text" name="Email"class="adminEmail" id="adminEmail">
                </div>

                <div class = "Admin">
                    <label for="adminPassword"><b>Password</b></label>
                    <input type="text" name="Password"class="adminPassword" id="adminPassword">
                    
                    <div class="generate">
                        <button onclick="createPassword()" type="button" class="btn btn-primary generate-password" id="generatePassword">Generate</button>
                    </div>
                </div>
                <div></div>

                <div class="bottom__btn">
                    <button href="/click_delete/{{ $users->id }}" type="submit" class="btn" id="Posting" >Post</button>
                    <button type="button" class="btn cancel" value="reset" onclick="closeForm()" id="cancel">Close</button>
                </div>

                </div>
            </form>
        </div>

        <div class="alert">
          <!-- eto yung data deleted-->
                <div>
                        @if(\Session::has('success'))
                        <div class="alert alert-danger">
                            <h4>{{ \Session::get('success') }}</h4>
                        </div>
                        @endif
                </div>
            </div>

    <script src="/assets/js/passwordGenerators.js"></script>
  </body>
</html>