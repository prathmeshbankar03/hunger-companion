document.getElementById("exampleInputSubmit").disabled = true;

function allCheck(){
    if(document.getElementById("exampleInputUsername").value != "" && 
    document.getElementById("exampleInputEmail1").value != "" && 
    document.getElementById("exampleInputPhonenumber").value != "" && 
    document.getElementById("exampleInputPassword").value != "" && 
    document.getElementById("exampleInputConfirmpassword").value != ""
    ){
        document.getElementById("exampleInputSubmit").disabled = false;
    }
}


function passwordCheck(){
    const password = document.getElementById("exampleInputPassword").value;
    const confirm_password = document.getElementById("exampleInputConfirmpassword").value;

    if(password == "" || password.length < 6 || password.length > 20){
        document.getElementsByClassName("password-error")[0].innerHTML = "Password must be between 6 and 20 characters";
    } else {
        document.getElementsByClassName("password-error")[0].innerHTML = "";
    }
    if(password != confirm_password){
        document.getElementsByClassName("confirm-password-error")[0].innerHTML = "Password does not match";
    } else {
        document.getElementsByClassName("confirm-password-error")[0].innerHTML = "";
    }
    allCheck();
}

// passwordCheck()