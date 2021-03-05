function add_teacher(college_code) {

  var teacher_name = $("#teacher_name").val().toUpperCase();
  var teacher_email = $("#teacher_email").val();

  
  if (teacher_name == "") {
    $("#teacher_name_error").html("Please enter a teacher name");
  } else {
    $("#teacher_name_error").html("");
  }

  if(teacher_email ==""){
    $("#teacher_email_error").html("**** !Please enter the E-mail  ****");
}
    else{
        
         var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(regex.test(teacher_email)) {
      var check = "ok"
    $("#teacher_email_error").html("");
  }else{
     $("#teacher_email_error").html("**** !Please Enter A Valid  E-mail  ****");
  }
        
       
    }




  if (
    
    teacher_name != "" &&
    teacher_email != "" &&
    check =="ok"
  ) {
    $.post(
      "./insert/add_teacher.php",
      {
     
        teacher_name,
        teacher_email,
        college_code
      },
      function (data, status) {
        if (data == 111) {
          $("#teacher_code").val("");
          $("#teacher_name").val("");
          $("#teacher_email").val("");


          Swal.fire({
            position: "center",
            icon: "success",
            title: "NEW TEACHER IS ADDED",
            showConfirmButton: true,
          });
        } else if (data == 110) {
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Duplicate Data Is Fount!",
          });
        } else {
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Something went wrong!",
          });
        }
      }
    );
  }
}








function add_admin() {

  var admin_name = $("#admin_name").val().toUpperCase();
  var admin_email = $("#admin_email").val();


  if (admin_name == "") {
    $("#admin_name_error").html("Please enter a admin name");
  } else {
    $("#admin_name_error").html("");
  }

  if(admin_email ==""){
    $("#admin_email_error").html("**** !Please enter the E-mail  ****");
}
    else{
        
         var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(regex.test(admin_email)) {
      var check = "ok"
    $("#admin_email_error").html("");
  }else{
     $("#admin_email_error").html("**** !Please Enter A Valid  E-mail  ****");
  }
        
       
    }




  if (
    
    admin_name != "" &&
    admin_email != "" &&
    check =="ok"
  ) {
    $.post(
      "./insert/add_admin.php",
      {
        
        admin_name,
        admin_email,
      },
      function (data, status) {
        console.log(data);
        if (data == 111) {
      
          $("#admin_name").val("");
          $("#admin_email").val("");


          Swal.fire({
            position: "center",
            icon: "success",
            title: "NEW ADMIN IS ADDED",
            showConfirmButton: true,
          });
        } else if (data == 110) {
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Duplicate Data Is Fount!",
          });
        } else {
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Something went wrong!",
          });
        }
      }
    );
  }
}
