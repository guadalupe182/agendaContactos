$(document).ready(function(){
    //updating table
    $('#loadTableCategoy').load('views/categories/tableCategory.php'); 

});

function deleteCategory(){
    swal({
        title: "Are you sure you want to delete this category?",
        text: "Once deleted, you will not be able to recover this  file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("Poof! Your  file has been deleted!", {
            icon: "success",
          });
        } else{
            swal("Your file is safe!");
        }
      });
}