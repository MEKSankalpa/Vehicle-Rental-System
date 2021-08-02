/*****Dashboard *****/

$(document).ready(function () {
    $('#sidebarCollapse').click(function(e) {
        e.preventDefault();
        $('#sidebar').toggleClass('mini-sidebar')

    });

  if(document.getElementById("reserve_create_form")){

  
  //Reservation start
    var form4 = document.getElementById("reserve_create_form");
    var reserve_create_button = document.getElementById("reserve_submit"); 
    // create the pristine instance
    var pristine4 = new Pristine(form4);
    
    reserve_create_button.onclick =  function (e) {
      
      e.preventDefault();
      
      // check if the form is valid
      var valid = pristine4.validate(); 
      console.log(valid);// returns true or false
          if(valid){
              var vehicle_name  = form4.elements['vehicle_name'].value;
              var pick_up_date  = form4.elements['pick_up_date'] .value;
              var pick_up_time  = form4.elements['pick_up_time'] .value;
              var drop_off_date = form4.elements['drop_off_date'] .value;
              var drop_off_time = form4.elements['drop_off_time'] .value;
              var passangers    = form4.elements['passangers'] .value;
              var driver        = form4.elements['driver'] .value;
              var pick_up_location    = form4.elements['pick_up_location'] .value;

              window.open("layouts/resevation.php?vehicle_name="+vehicle_name+"&pick_up_date="+pick_up_date+"&pick_up_time="+pick_up_time+"&drop_off_date="+drop_off_date+"&drop_off_time="+ drop_off_time+"&passangers="+passangers+"&driver="+driver+"&pick_up_location="+pick_up_location+"","_self");
          }
    
    };

}

if(document.getElementById("select_vehicle_form")){

  
    //Reservation start
      var form6 = document.getElementById("select_vehicle_form");
      var reserve_create_button = document.getElementById("select-vehicle"); 
      // create the pristine instance
      var pristine6 = new Pristine(form6);
      
      reserve_create_button.onclick =  function (e) {
        
        e.preventDefault();
        
        // check if the form is valid
        var valid = pristine6.validate(); 
        console.log(valid);// returns true or false
            if(valid){
                var vehicle_name  = document.getElementById("vehicle_id").value;
                var pick_up_date  = form6.elements['pick_up_date'] .value;
                var pick_up_time  = form6.elements['pick_up_time'] .value;
                var drop_off_date = form6.elements['drop_off_date'] .value;
                var drop_off_time = form6.elements['drop_off_time'] .value;
                var passangers    = form6.elements['passangers'] .value;
                var driver        = form6.elements['driver'] .value;
                var pick_up_location    = form6.elements['pick_up_location'] .value;
  
                window.open("../layouts/resevation.php?vehicle_name="+vehicle_name+"&pick_up_date="+pick_up_date+"&pick_up_time="+pick_up_time+"&drop_off_date="+drop_off_date+"&drop_off_time="+ drop_off_time+"&passangers="+passangers+"&driver="+driver+"&pick_up_location="+pick_up_location+"","_self");
            }
      
      };
  
  }



if(document.getElementById("vehicle_create_form")){


    //Vehicle create form validation
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

}

if(document.getElementById("reserve_contact")){


    //Vehicle create form validation
    var form5 = document.getElementById("reserve_contact");
    var reserve_create_button = document.getElementsByClassName("stripe-button"); 
    // create the pristine instance
    var pristine5 = new Pristine(form5);
    
    reserve_create_button.onclick =  function (e) {
     
      e.preventDefault();
      
      // check if the form is valid
      var valid = pristine5.validate(); 
      console.log(valid);// returns true or false
          if(valid){
              
              form5.submit();
          }
    
    };

}



//Reservation completion  alert
if(document.getElementById("res-alert")){

    window.setTimeout(function() {
        $("#res-alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 2000);


}


if(document.getElementById("category_create_form")){


    var form2 = document.getElementById("category_create_form");
    var category_create_button = document.getElementById("category_submit"); 
    // create the pristine instance
    var pristine2 = new Pristine(form2);

    category_create_button.onclick =  function (e) {
      e.preventDefault();
      
      // check if the form is valid
      var valid = pristine2.validate(); 
      console.log(valid);// returns true or false
          if(valid){
              form2.submit();
          }

    };

  }


  if($("#vehicle-fleet")){
    $("#vehicle-fleet").owlCarousel({

      loop:true,
      autoplay:true,
      autoPlayTimeout:5000,
      autoplayHoverPause:true,
  });


  }
 
  
});

