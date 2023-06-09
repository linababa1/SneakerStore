const form = document.querySelector(".login form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-txt");

form.onsubmit = (e)=>{
    e.preventDefault(); //prevent form from submitting
}

continueBtn.onclick = ()=>{
    // Ajax
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "php/login.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data);
                if(data == "successful!"){
                    location.href ="sneakers.php";
                    location.href = "sneakers.php";
                }else{
                    errorText.textContent = data;
                    errorText.style.display = "block";
                   
                }
            }
        }
    }
    // send the form data through ajax to php
    let formData = new FormData(form); //creating new formData object

    xhr.send(formData); // sending form data to php
}