function check(form)
{
 if(form.username.value == "dhgevandha@gmail.com" && form.password.value == "123456")
    {
        window.open('home.html');
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


var googleUser = {};
var takeGoogle = function ()
{
        gapi.load('auth2', function()
        {
        // Retrieve the singleton for the GoogleAuth library and set up the client.
        auth2 = gapi.auth2.init(
            {
                client_id: '938386259624-qen3kjlhaaktv1pfl18hkrtrr405j18d.apps.googleusercontent.com', //'YOUR_CLIENT_ID.apps.googleusercontent.com',
                cookiepolicy: 'xRPxzStz8DTbrYhaWyYUmXWv',//'single_host_origin',
                // Request scopes in addition to 'profile' and 'email'
                //scope: 'additional_scope'
            });
        attachSignin(document.getElementById('googleSignInFunction'));
        });
}

function attachSignin(element) {
    console.log(element.id);
    auth2.attachClickHandler(element, {},
        function(googleUser) {
            document.getElementById('name').innerText = "Signed in: " +
            googleUser.getBasicProfile().getName();
        }, function(error) {
          alert(JSON.stringify(error, undefined, 2));
        });
}
takeGoogle();
