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



/*const createPost = document.querySelector('studentHomePage');
const DivContainer = document.getElementById("member_post");
console.log(imagefile.value);
const btnPost = document.getElementById('Posting');*/



/*function AddNew(){
    if (posting.clicked == true){
        const newDiv = document.createElement();
        console.log("post created successfully!");
        DivContainer.appendChild(newDiv);
    
    }

}*/
/*
let div = document.createElement('div');
div.classList.add('member_post');
let containerdiv = document.querySelector("#member_post");

containerdiv.appendChild(div);

const btnPost = document.getElementById('Posting');
btnPost.addEventListener("click", AddNew);


let imagefile = document.querySelector("#img_post");
imagefile.addEventListener("change", function(){
    const reader = new FileReader();
    reader.addEventListener("load", () =>{
        uploaded_image = reader.result;
        document.querySelector("#image_content").style.backgroundImage = 'url(${uploaded_image})'
    });
    reader.readerAsDataURL(this.files[0]);
});

function AddNew(){
    let studentcaption = document.getElementById('add_post');
    var uploaded_image = "";

}


/*let htmlString = "";

let posting = document.getElementById('Posting');

function creatingPost(){
if (posting.clicked == true){
        location.href = "http://sti-app.test/studentHomePage";
            for(var i = 1; i <= 1; i++){
        

    }
}
}
*/

