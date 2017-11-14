function check(form)
{
 if(form.username.value == "dhgevandha@gmail.com" && form.password.value == "123456")
    {
        window.open('home.html')
    }

 else if(form.username.value == "" || form.password.value == "")
    {
        if (form.username.value == "" && form.password.value == "") {
            document.getElementById("pesanUsername").innerHTML="The text box cann't be empty";
            document.getElementById("pesanUsername").className += " show";
            document.getElementById("pesanPassword").innerHTML="The text box cann't be empty";
            document.getElementById("pesanPassword").className += " show";
            return false;
        } 
        else if(form.username.value == "" && form.password.value != "") {
            document.getElementById("pesanUsername").innerHTML="The text box cann't be empty";
            document.getElementById("pesanUsername").className += " show";
            return false; 
        }
        else if(form.username.value != "" && form.password.value == ""){
            document.getElementById("pesanPassword").innerHTML="The text box cann't be empty";
            document.getElementById("pesanPassword").className += " show";
            return false;
        }
    }

 else
    {
        if (form.password.value != "123456" && form.username.value == "dhgevandha@gmail.com"){
            document.getElementById("pesanPassword").innerHTML="The password is incorrect";
            document.getElementById("pesanPassword").className += " show";
            return false;  
        }
        else if (form.username.value != "dhgevandha@gmail.com" && form.password.value == "123456") {
            document.getElementById("pesanUsername").innerHTML="The username or email is incorrect";
            document.getElementById("pesanUsername").className += " show";
            return false; 
        } else {
            document.getElementById("pesanUsername").innerHTML="The username or email is incorrect";
            document.getElementById("pesanUsername").className += " show";
            document.getElementById("pesanPassword").innerHTML="The password is incorrect";
            document.getElementById("pesanPassword").className += " show";
            return false; 
        }
    }
}

/*
function check(form){
    var message;
    message = document.getElementById(message);
    message.innerHTML="";
    i = get
try {
    if(form.username.value == "gevandha" && form.password.value == "123456") throw window.open('home.html');
    if(form.username.value == "" && form.password.value == "") throw alert("Fill Password or Username");
} catch (err) {
    message.innerHTML="input " + err;
    function test(message){

    }
}
}  */