function numberOnly(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}



// Add keypress event listener
 function alphabetOnly(event){
    
    // Get the key 
    let key = event.key;
    
    let regex = new RegExp("^[a-zA-Z]+$");
    
    // Check if key is in the reg exp
    if(!regex.test(key)){
        
        // Restrict the special characters
        event.preventDefault();  
        return false;
    }
};