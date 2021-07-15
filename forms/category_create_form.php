<div class="card  p-0" >
  <div class="card-header ">
   <h5 id="header-name">Category Create</h5>
  </div>
  <div class="card-body pb-5">
    
        <form id="category_create_form" action="../backend/category_create.php" novalidate  method="POST" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="category_name" class="col-sm-3 col-form-label" >Category Name</label>
                <div class="col-sm-9 form-group">
                    <input type="text" class="form-control" id="category_name"  name="category_name" required data-pristine-required-message="This field is required" placeholder="Enter Category Name">
                </div>
               
            </div>

            <div class="form-group row app">
                    <label for="" class="col-sm-3" >Upload Image<span style="color:red">*</span></label>
                    <div class="col-sm-9 form-group">
                        <input type="file" @change ="fileChange" name="category_img" class="mb-4"  required>
                    </div>
                    <div class="" id="image-picker" class="" >
                        <img :src="image" style="margin-bottom: 20px;  object-fit: cover; " height="350" width="" alt="">
                        
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

            <button  class="btn btn-outline-warning submit-btn" id="category_submit">SUBMIT</button>
        </form>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>


var app = new Vue({
            el: '.app',
            data: {
            image: "https://www.gorilla-cannabis-seeds.co.uk/images/product_image_not_found.gif"
                },

            methods: {
                        fileChange(e){
                        const file = e.target.files[0]
                        this.image = URL.createObjectURL(file)
                        }
                    },
                })



                
    </script>   