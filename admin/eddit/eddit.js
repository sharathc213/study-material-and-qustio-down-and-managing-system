function edditcollege(sl_no) {
  // Add User ID to the hidden field for furture usage

  $.post(
    "eddit/edditcollege.php",
    {
      sl_no: sl_no,
    },
    function (data, status) {
      // PARSE json data
    
      $(".panel-heading").html("Eddit college");
      $(".panel-body").html(data);
    }
  );
  // Open modal popup
}



function updatecollege(sl_no) {
  // get values
  var college_name = $("#update_college_name").val().toUpperCase();
  var college_code = $("#update_college_code").val().toUpperCase();


  if (college_code == "") {
    $("#update_college_code_error").html(
      "Please enter a College code"
    );
  } else {
    $("#update_college_code_error").html("");
  }
  if (college_name == "") {
    $("#update_college_name_error").html(
      "Please enter a College name"
    );
  } else {
    $("#update_college_name_error").html("");
  }

  if (
    college_name != "" &&
    college_code != ""

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
          "eddit/update_college.php",
          {
            college_name ,
            college_code,
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
              $("#update_college_name").val("");
              $("#update_college_code").val("");
              $("#update_college_email").val("");
        

              viewcollege();

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
  var admin_name = $("#update_admin_name").val().toUpperCase();




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

}




function edditcoursecat(cat_code) {

  $.post(
    "eddit/edditcoursecat.php",
    {
      cat_code
    },
    function (data, status) {
    
      $(".panel-heading").html("Eddit Course Catogory");
      $(".updatecat").html(data);
    }
  );
}



function updatecat(cat_code) {
  // get values
  var cat_name = $("#update_course_cat_name").val().toUpperCase();




  if (cat_name == "") {
    $("#update_course_cat_name").html(
      "Please enter a cattogory name"
    );
  } else {
    $("#update_course_cat_name_error").html("");
  }

  if (
    cat_name != "" 

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
          "eddit/update_cat.php",
          {
            cat_name ,
            cat_code
         
          
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
              $("#update_course_cat_name").val("");
           
           
        

              viewcoursecat();

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


