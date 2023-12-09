function addlostitem(){
    document.getElementById("myForm").style.display = "block";

   }

function closeForm(){
    document.getElementById("myForm").style.display = "none";
}

function yesDelete() {
    document.getElementById("logoutForm").style.display = "block";
  }
  
  function cancelDelete() {
    document.getElementById("logoutForm").style.display = "none";
  }

const btn = document.getElementById('butpost');

btn.addEventListener("click", postingFunction)

const what = document.getElementById('what');
const when = document.getElementById('when');
const where = document.getElementById('where');
const addinfo = document.getElementById('addinfo');

const inputwhat = document.getElementById('textcontainer_what');
const inputwhen = document.getElementById('textcontainer_when');
const inputwhere = document.getElementById('textcontainer_where');
const inputaddinfo = document.getElementById('textcontainer_additional');

function postingFunction(){

    what.innerHTML= inputwhat.value;
    when.innerHTML= inputwhen.value;
    where.innerHTML= inputwhere.value;
    addinfo.innerHTML= inputaddinfo.value;

    let imagefile = document.getElementById('kuha-picture');
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