<script src="sweetalert.txt"></script>
<script> 
        swal({
title: "Good job!",
text: "You entered wrong username or passsword`",
icon: "error",
buttons: true ,
})
.then((willDelete) => {
    window.location = "index.html";
    
})
else {
    window.location = "websitehomepage.html";
  }
});

</script>