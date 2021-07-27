<script src="sweetalert.min.js"></script>




<script> 
        swal({
title: "Good job!",
text: "You Successfully Logged In`",
icon: "success",
buttons: true ,
})
.then((willDelete) => {
    window.location = "index.html";
    
})
else {
    swal("Your imaginary file is safe!");
  }
});

</script>