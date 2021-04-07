function edditteacher(college_code,teacher_code) {
  // Add User ID to the hidden field for furture usage

  $.post(
    "eddit/edditteacher.php",
    {
      teacher_code,
      college_code
    },
    function (data, status) {
      // PARSE json data
    
      $(".panel-heading").html("Eddit teacher");
      $(".panel-body").html(data);
    }
  );
  // Open modal popup
}



function updateteacher(college_code,teacher_code) {
  // get values
  var teacher_name = $("#update_teacher_name").val();
 



  if (teacher_name == "") {
    $("#update_teacher_name_error").html(
      "Please enter a teacher name"
    );
  } else {
    $("#update_teacher_name_error").html("");
  }

  if (
    teacher_name != ""

  ) {
    Swal.fire({
      title: "Are you sure Want to update?",

      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "red",
      confirmButtonText: "Yes, Update it!",
    }).then((result) => {
      if (result.value) {
        // Add record
        $.post(
          "eddit/update_teacher.php",
          {
            teacher_name ,
            teacher_code
          },
          function (data, status) {
            console.log(data);
            // close the popup

            // read records again
            //   readRecords();
            //   readdata();
            //     readstati();

            // clear fields from the popup

            if (data == 111) {
              $("#update_teacher_name").val("");
       
              $("#update_teacher_email").val("");
        

              viewteacher(college_code);
             

              Swal.fire({
                position: "center",
                icon: "success",
                title: "UPDATED THIS SELLER",
                showConfirmButton: true,
                timer: 3000,
              });
            } else if (data == 110) {
              Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Duplicate data is Present!",
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
    });
  }

  //  else{
  //     alert("Please Fill All the Fields");

  //  }
}








function edditadmin(sl_no) {
  // Add User ID to the hidden field for furture usage

  $.post(
    "eddit/edditadmin.php",
    {
      sl_no: sl_no,
    },
    function (data, status) {
      // PARSE json data
    
      $(".panel-heading").html("Eddit admin");
      $(".panel-body").html(data);
    }
  );
  // Open modal popup
}



function updateadmin(sl_no) {
  // get values
  var admin_name = $("#update_admin_name").val();




  if (admin_name == "") {
    $("#update_admin_name_error").html(
      "Please enter a admin name"
    );
  } else {
    $("#update_admin_name_error").html("");
  }

  if (
    admin_name != "" 

  ) {
    Swal.fire({
      title: "Are you sure Want to update?",

      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "red",
      confirmButtonText: "Yes, Update it!",
    }).then((result) => {
      if (result.value) {
        // Add record
        $.post(
          "eddit/update_admin.php",
          {
            admin_name ,
         
            sl_no 
          },
          function (data, status) {
            console.log(data);
            // close the popup

            // read records again
            //   readRecords();
            //   readdata();
            //     readstati();

            // clear fields from the popup

            if (data == 111) {
              $("#update_admin_name").val("");
              $("#update_admin_code").val("");
           
        

              viewadmin();

              Swal.fire({
                position: "center",
                icon: "success",
                title: "UPDATED THIS SELLER",
                showConfirmButton: true,
                timer: 3000,
              });
            } else if (data == 110) {
              Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Duplicate data is Present!",
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
    });
  }

  //  else{
  //     alert("Please Fill All the Fields");

  //  }
}

