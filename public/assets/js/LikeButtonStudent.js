var likeButton = document.getElementById("btn");

function like(){
    var liked = document.getElementById("Like");
    liked.innerHTML = 'Liked';
    liked.style.color = "red";
    if(likeButton.classList.contains("far")){
        likeButton.classList.remove("far");
        likeButton.classList.add("fas");


    }
    else{
        likeButton.classList.remove("fas");
        likeButton.classList.add("far");
    }
}