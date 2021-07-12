<?php 


include_once "../helpers/db.php";

$sql = "SELECT * FROM vehicles";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);


 ?>
      
  

<!-- Modal -->
<div class="modal fade " id="res" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered modal-lg">
    <div class="modal-content p-0">
      
        <div class="row p-0">
            <div class="col-sm-6 res-image">
                <div class="cover-res d-flex flex-row justify-content-center align-items-center">
                    
                   <div class="reservation-text">
                    <table>
                            <tr>
                                <td><i class="fa fa-map-marker" aria-hidden="true"></i></td>
                                <td>
                                  <span class="res-text-header ml-3">Address</span> 
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                  <p class="res-text ml-3 mb-0 mt-2">Mada Center 8th floor,</p>
                                  <p class="res-text ml-3 m-0">379 Hudson St,</p>
                                  <p class="res-text ml-3 m-0">New York,</p>
                                  <p class="res-text ml-3 mt-0 mb-3"> NY 10018 US.</p>  
                                </td>
                            </tr>
 
                            <tr>
                                <td><i class="fa fa-phone" aria-hidden="true"></i></td>
                                <td>
                                  <span class="res-text-header ml-3">Call Us</span> 
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                  <p class="res-text ml-3 mb-0 mt-2 mb-3">+94 71 586 7772</p>  
                                </td>
                            </tr>

                            <tr>
                                <td><i class="fa fa-envelope" aria-hidden="true"></i></td>
                                <td>
                                  <span class="res-text-header ml-3">General Support</span> 
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                  <p class="res-text ml-3 mb-0 mt-2">shane.thiwanka@gmail.com </p>  
                                </td>
                            </tr>
                        </table>
                   </div>
 
                </div>
            </div>
            <div class="col-sm-6 p-5">
                <h3 class="mb-3">Reservation</h3>

                <form id="reserve_create_form" method="POST" novalidate >
                    <div class="form-group">
                        <label for="vehicle_name">Select a Vehicle<span style="color:red;">*</span></label>
                        <select  class="form-control" id="exampleFormControlSelect2" name="vehicle_name">
                             
                             <?php  if($count > 0){

                                 while($row = mysqli_fetch_assoc($result)){ 
                        
                                         echo '<option value="'.$row['id'].'">'.$row['vehicle_title'].'</option>';
                                 }
                                }
                             ?>
                        </select>
                      
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="pick_up">Pick Up date<span style="color:red;">*</span></label>
                            <input type="date" class="form-control" id="pick_up" name="pick_up_date" required data-pristine-required-message="This field is required">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="drop_off">Time<span style="color:red;">*</span></label>
                            <input type="time" class="form-control" id="drop_off" name="pick_up_time" required data-pristine-required-message="This field is required">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="pick_up">Drop Off date<span style="color:red;">*</span></label>
                            <input type="date" class="form-control" id="pick_up" name="drop_off_date" required data-pristine-required-message="This field is required">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="drop_off">Time<span style="color:red;">*</span></label>
                            <input type="time" class="form-control" id="drop_off" name="drop_off_time" required data-pristine-required-message="This field is required">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="passangers">No: of Passangers<span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="passangers" name="passangers" required data-pristine-required-message="This field is required">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="driver">Need a Driver<span style="color:red;">*</span></label>
                            <select  class="form-control" id="driver" name="driver">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                             </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pick_up_location">Pick Up Location<span style="color:red;">*</span></label>
                        <select  class="form-control" id="pick_up_location" name="pick_up_location">
                                <option value="Colombo">Colombo</option>
                                <option value="Matara">Matara</option>
                                <option value="Galle">Galle</option>
                                <option value="Hambantota">Hambantota</option>
                         </select>
                       
                    </div>
                    <button id="reserve_submit" class="btn btn-primary login-button" >RESERVE</button>
                </form>

            </div>
        </div>
    
 

    </div>
  </div>
</div>

