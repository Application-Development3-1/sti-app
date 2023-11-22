window.addEventListener('load', function(){
    postSubmitListener()
})


function postSubmitListener()
{
    let studentPost = document.querySelector('#post_box');
    document.querySelector('#Posting').addEventListener('click', async (e) =>{
        e.preventDefault();
    
        let captionStudent = studentPost.querySelector('input[name=post]');
        let imageStudent = studentPost.querySelector('input[name=file]');

        if (captionStudent || imageStudent){
            let response = await fetch ('/api/v3/post', {
                method: 'post', 
                body: JSON.stringify({
                    caption: captionStudent,
                    image: imageStudent
    
                }),
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                }
            })
            let data = await response.json();
            alert(JSON.stringify(data));
        }
    
    })

}


