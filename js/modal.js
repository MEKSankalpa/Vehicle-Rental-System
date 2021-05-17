$(document).ready(function(){
   
  $("#jump_signup").click(function(){
      $("#login_modal").modal('hide');
      $("#signup_navi").click();
  })

  $("#jump_login").click(function(){
    $("#signup_modal").modal('hide');
    $("#login_navi").click();
})

  });