<div class="modal fade " id="login_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content modal-content-login p-3">

            <div class="log-icon mx-auto d-flex justify-content-center align-items-center mb-2">
              <i class="fa fa-user" aria-hidden="true"></i>
            </div>

            <div class="form-content">
                 <h3 class="text-center">LOGIN</h3>
            </div>

            <form id="login_form" action="../backend/login.php" novalidate method="post">
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email" required data-pristine-required-message="This field is required">
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" minlength="5" name="password" class="form-control" id="password" placeholder="Enter Your Password" required data-pristine-required-message="This field is required">
              </div>


              <?php if (isset($_GET['login'])) {if ($_GET['login'] == 'failed') {?>

                 <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   Please check your email and password!
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>

                 <?php }}?>

              <div class="text-center mt-4">

                    <button id="login_submit" class="btn btn-primary login-button">SIGN IN</button>
                    <p>Do not have an account?</p>
                    <a type="button" style="color:blue; cursor:pointer"  class="" id="jump_signup">Signup</a>

              </div>

            </form>



          </div>
        </div>
      </div>