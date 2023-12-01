
function openForm() {
    document.getElementById("adminForm").style.display = "block";
  }
  
  function closeForm() {
    document.getElementById("adminForm").style.display = "none";
  }

  //changing table
function openStudent(){
  var x = document.getElementById("table-container");
  if (x.style.display === "none"){
    x.style.display = "block";
  }
  else if (x.style.display === "block"){
    x.style.display = "block";
  }
  else{
    x.style.display = "none";
  }
}

function openTeacher(){
  var x = document.getElementById("table-container2");
  if (x.style.display === "none"){
    x.style.display = "block";
  }
  else{
    x.style.display = "none";
  }
}
