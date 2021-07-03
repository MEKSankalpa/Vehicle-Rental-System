$(document).ready(function(){

  $(document).on('click', '#delete_category', function(e){
   e.preventDefault();

   var id = $(this).data('id');
   
   bootbox.confirm({
    title: "<strong><h4 style='color:red'>Are You Sure?</h4></strong>",
    message: "<p><strong>This category will be deleted permanently!</strong></p><p>All products also will be deleted under this category...</p>",
    buttons: {
        confirm: {
            label: 'Yes',
            className: 'btn-outline-success'
        },
        cancel: {
            label: 'No',
            className: 'btn-outline-danger'
        }
    },
    callback: function (result) {
       if(result == true){
        
        $.ajax({
            url:"../backend/category_delete.php",
            type:"POST",
            data:"delete="+id,
            dataType:"json",
        })
        .done(function(res){
           if(res == "success"){
               window.open("../Category/index.php?delete=success","_self")
           }
        })
       }
    }
});
 

  })


})