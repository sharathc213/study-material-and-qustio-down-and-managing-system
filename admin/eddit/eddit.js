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
    $("#update_college_code_error").html("Please enter a College code");
  } else {
    $("#update_college_code_error").html("");
  }
  if (college_name == "") {
    $("#update_college_name_error").html("Please enter a College name");
  } else {
    $("#update_college_name_error").html("");
  }

  if (college_name != "" && college_code != "") {
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
            college_name,
            college_code,
            sl_no,
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
    $("#update_admin_name_error").html("Please enter a admin name");
  } else {
    $("#update_admin_name_error").html("");
  }

  if (admin_name != "") {
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
            admin_name,

            sl_no,
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
      cat_code,
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
    $("#update_course_cat_name").html("Please enter a cattogory name");
  } else {
    $("#update_course_cat_name_error").html("");
  }

  if (cat_name != "") {
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
            cat_name,
            cat_code,
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

function edditcourse(sl_no) {
  $.post(
    "eddit/edditcourse.php",
    {
      sl_no,
    },
    function (data, status) {
      $(".panel-heading").html("Eddit Course");
      $(".panel-body").html(data);
    }
  );
}

function updatecourse(sl_no) {
  // get values
  var course_name = $("#update_course_name").val().toUpperCase();
  var course_code = $("#update_course_code").val().toUpperCase();
  var course_year = $("#update_course_year").val();
  var course_cat = $("#update_course_cat").val();

  if (course_name == "") {
    $("#update_course_name_error").html("Please enter a course name");
  } else {
    $("#update_course_name_error").html("");
  }
  if (course_code == "") {
    $("#update_course_code_error").html("Please enter a course Code");
  } else {
    $("#update_course_code_error").html("");
  }
  if (course_year == "") {
    $("#update_course_name_error").html("Please enter a course name");
  } else {
    $("#update_course_year_error").html("");
  }


  if 
    (course_name != "" && course_code != "" && course_year != "" && course_cat != "")
   {
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
          "eddit/update_course.php",
          {
            course_name,
            course_code,
            course_year,
            course_cat,

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
              $("#update_course_name").val("");
              $("#update_course_code").val("");

              viewcourse();

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



function edditsubject(sl_no) {
  $.post(
    "eddit/edditsubject.php",
    {
      sl_no,
    },
    function (data, status) {
      $(".panel-heading").html("Eddit Subject");
      $(".panel-body").html(data);
    }
  );
}





function updatesubject(sl_no) {
  // get values
  var subject_name = $("#update_subject_name").val().toUpperCase();
  var subject_code = $("#update_subject_code").val().toUpperCase();

  if (subject_name == "") {
    $("#update_subject_name_error").html("Please enter a subject name");
  } else {
    $("#update_subject_name_error").html("");
  }

  if (subject_code == "") {
    $("#update_subject_code_error").html("Please enter a subject code");
  } else {
    $("#update_subject_code_error").html("");
  }

  if (subject_name != "" && subject_code != "") {
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
          "eddit/update_subject.php",
          {
            subject_name,
            subject_code,

            sl_no,
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
              $("#update_subject_name").val("");
              $("#update_subject_code").val("");

              viewsubject();

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



function edditfile(sl_no) {
  $.post(
    "eddit/edditfile.php",
    {
      sl_no,
    },
    function (data, status) {
      $(".panel-heading").html("Eddit File Format");
      $(".panel-body").html(data);
    }
  );
}


function updatefile(sl_no) {
  // get values
  var file_name = $("#update_file_name").val().toUpperCase();
  var file_size = $("#update_file_size").val();

  if (file_name == "") {
    $("#update_file_name_error").html("Please enter a file name");
  } else {
    $("#update_file_name_error").html("");
  }

  if (file_size == "" || file_size==0) {
    $("#update_file_size_error").html("Please enter a maz file size");
  } else {
    $("#update_file_size_error").html("");
  }

  if (file_name != "" && file_size !=  "" && file_size!=0){
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
          "eddit/update_file.php",
          {
            file_name,
            file_size,

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
              $("#update_file_name").val("");
              $("#update_file_size").val("");

              viewfile();

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