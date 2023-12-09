const btn = document.getElementById('Posting');

btn.addEventListener("click", postingFunction)

const PostCaption = document.getElementById('caption');
const Caption = document.getElementById('add_post1');

function postingFunction(){

    PostCaption.innerHTML= Caption.value;

    let imagefile = document.getElementById('file');
    var uploaded_image = "";

    imagefile.addEventListener("change", function(){
    const reader = new FileReader();
    reader.addEventListener("load", () =>{
        uploaded_image = reader.result;
        document.getElementById("image_nj").style.backgroundImage = `url(${uploaded_image})`
    });
    reader.readerAsDataURL(imagefile.files[0]);
});
}


function openDelete() {
    document.getElementById("deleteForm").style.display = "block";
  }
  
  function cancelDelete() {
    document.getElementById("deleteForm").style.display = "none";
  }



