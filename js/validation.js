window.onload = function () {

    var form = document.getElementById("login_form");
    var login_button =  document.getElementById("login_submit"); 
    // create the pristine instance
    var pristine = new Pristine(form);

    login_button.onclick =  function (e) {
       e.preventDefault();
       
       // check if the form is valid
       var valid = pristine.validate(); // returns true or false
        console.log(valid);
       if(valid){
         form.submit();
       }
           

    };

    var form1 = document.getElementById("signup_form");
    var signup_button = document.getElementById("signup_submit"); 
    // create the pristine instance
    var pristine1 = new Pristine(form1);

    signup_button.onclick =  function (e) {
       e.preventDefault();
       
       // check if the form is valid
       var valid = pristine1.validate(); 
       console.log(valid);// returns true or false
           if(valid){
               form1.submit();
           }

    };

    
    
    if(window.location.href.indexOf('?signup=unique') > 0){
        document.getElementById("signup_navi").click();
    }

    if(window.location.href.indexOf('?login=faild') > 0){
      document.getElementById("login_navi").click();
  }


 

};

