/*****Dashboard *****/

$(document).ready(function () {
    $('#sidebarCollapse').click(function(e) {
        e.preventDefault();
        $('#sidebar').toggleClass('mini-sidebar')

    });



    
    var form3 = document.getElementById("vehicle_create_form");
    var vehicle_create_button = document.getElementById("vehicle_submit"); 
    // create the pristine instance
    var pristine3 = new Pristine(form3);
    
    vehicle_create_button.onclick =  function (e) {
     
      e.preventDefault();
      
      // check if the form is valid
      var valid = pristine3.validate(); 
      console.log(valid);// returns true or false
          if(valid){
              form3.submit();
          }
    
    };
  
});