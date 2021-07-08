<div class="card  p-0" >
  <div class="card-header ">
   <h5 id="header-name">Category Create</h5>
  </div>
  <div class="card-body pb-5">
    
        <form id="category_create_form" action="../backend/category_create.php" novalidate  method="POST" >
            <div class="form-group row">
                <label for="category_name" class="col-sm-3 col-form-label" >Category Name</label>
                <div class="col-sm-9 form-group">
                    <input type="text" class="form-control" id="category_name"  name="category_name" required data-pristine-required-message="This field is required" placeholder="Enter Category Name">
                </div>
               
            </div>

            <?php  if(isset($_GET['cname'])) { if($_GET['cname'] == 'unique'){ ?>  
                 
                 <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Category name has already been taken!
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
   
            <?php } } ?>


            <?php  if(isset($_GET['create'])) { if($_GET['create'] == 'done'){ ?>  
            
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               Category created!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>

            <?php } } ?>


           
            <button  class="btn btn-outline-warning submit-btn">SUBMIT</button>
        </form>

  </div>
</div>