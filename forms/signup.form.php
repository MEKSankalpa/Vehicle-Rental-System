<div class="modal fade " id="signup_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content  p-3">
            
            <div class="log-icon mx-auto d-flex justify-content-center align-items-center mb-2">
              <i class="fa fa-user-plus" aria-hidden="true"></i>
            </div>
               
            <div class="form-content mb-4">
                 <h3 class="text-center">SIGNUP</h3>
            </div>

            <form id="signup_form" action="../backend/signup.php" novalidate method="POST">

              <div class="form-row">

                <div class="form-group col-md-6">
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control" name="first_name" id="fname" placeholder="Enter Your First Name" required data-pristine-required-message="This field is required">
                </div>
  
                <div class="form-group col-md-6">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control" name="last_name" id="lname" placeholder="Enter Your Last Name" required data-pristine-required-message="This field is required">
                </div>

              </div>

              <div class="form-group">
                <label for="uname">User Name</label>
                <input type="text" class="form-control" name="user_name" id="uname" placeholder="Enter Your User Name" required data-pristine-required-message="This field is required">
              </div>

             <div class="form-row">

              <div class="form-group col-md-6">
                <label for="Email">Email address</label>
                <input type="email" class="form-control" name="email" id="Email" placeholder="Enter Your Email" required data-pristine-required-message="This field is required">
                
              </div>

              <div class="form-group col-md-6">
                <label for="cnumber">Contact Number</label>
                <input type="tele" class="form-control" name="contact_number" id="cnumber" placeholder="Enter Your Phone Number" required data-pristine-required-message="This field is required" data-pristine-type="number">
              </div>

             </div>

              <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" name="address" id="address" rows="3" placeholder="Enter Your Address" required data-pristine-required-message="This field is required"></textarea>
              </div>
          

             <div class="form-row">

              <div class="form-group col-md-6">
                <label for="Password">Password</label>
                <input type="password" minlength="5" name="password" class="form-control" id="Password" placeholder="Enter Your Password" required data-pristine-required-message="This field is required">
              </div>

              <div class="form-group col-md-6">
                <label for="CPassword">Confirm Password</label>
                <input type="password" minlength="5" name="confirm_password" class="form-control" id="CPassword" placeholder="Enter Your Password" required data-pristine-equals="#Password" data-pristine-required-message="This field is required">
              </div>

             </div>

             <?php  if(isset($_GET['signup'])) { if($_GET['signup'] == 'unique'){ ?>  
                 
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                 Email has already been taken!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <?php } } ?>
             
              <div class="text-center mt-4">
                    <button id="signup_submit" class="btn btn-primary login-button">SIGNUP</button>
                    <p>Already have an account?</p>
                    <a type="button" style="color:blue; cursor:pointer"  class="" id="jump_login">Signup</a> 
              </div>
                
            </form>
                 
             
              
          </div>
        </div>
      </div>

