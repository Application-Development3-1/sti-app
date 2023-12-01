const btn = document.getElementById('Posting');

btn.addEventListener("click", postingFunction)


function postingFunction(){

    let imagefile = document.getElementById('file');
    var uploaded_image = "";

    imagefile.addEventListener("change", function(){
    const reader = new FileReader();
    reader.addEventListener("load", () =>{
        uploaded_image = reader.result;
        document.getElementById("NewJeans-Hanni.png").style.backgroundImage = `url(${uploaded_image})`
    });
    reader.readerAsDataURL(imagefile.files[0]);
});
}