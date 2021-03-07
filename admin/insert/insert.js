function add_college() {
  var college_code = $("#college_code").val().toUpperCase();
  var college_name = $("#college_name").val().toUpperCase();
  var college_email = $("#college_email").val();

  if (college_code == "") {
    $("#college_code_error").html("Please enter a college code");
  } else {
    $("#college_code_error").html("");
  }
  if (college_name == "") {
    $("#college_name_error").html("Please enter a college name");
  } else {
    $("#college_name_error").html("");
  }

  if (college_email == "") {
    $("#college_email_error").html("**** !Please enter the E-mail  ****");
  } else {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (regex.test(college_email)) {
      var check = "ok";
      $("#college_email_error").html("");
    } else {
      $("#college_email_error").html(
        "**** !Please Enter A Valid  E-mail  ****"
      );
    }
  }

  if (
    college_code != "" &&
    college_name != "" &&
    college_email != "" &&
    check == "ok"
  ) {
    $.post(
      "./insert/add_college.php",
      {
        college_code,
        college_name,
        college_email,
      },
      function (data, status) {
        if (data == 111) {
          $("#college_code").val("");
          $("#college_name").val("");
          $("#college_email").val("");

          Swal.fire({
            position: "center",
            icon: "success",
            title: "NEW COLLEGE IS ADDED",
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

  if (admin_email == "") {
    $("#admin_email_error").html("**** !Please enter the E-mail  ****");
  } else {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (regex.test(admin_email)) {
      var check = "ok";
      $("#admin_email_error").html("");
    } else {
      $("#admin_email_error").html("**** !Please Enter A Valid  E-mail  ****");
    }
  }

  if (admin_name != "" && admin_email != "" && check == "ok") {
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

function add_course_cat() {
  var cat_name = $("#cat_name").val().toUpperCase();

  if (cat_name == "") {
    $("#cat_name_error").html("Please enter a Course Cattagory name");
  } else {
    $("#cat_name_error").html("");
  }

  if (cat_name != "") {
    $.post(
      "./insert/add_course_cat.php",
      {
        cat_name
      },
      function (data, status) {
       
        if (data == 111) {
          $("#cat_name").val("");
          viewcoursecat();

          Swal.fire({
            position: "center",
            icon: "success",
            title: "NEW COURSE CATAGORY IS ADDED",
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







function add_course() {
  var course_cat = $("#course_cat").val();
  var course_name = $("#course_name").val().toUpperCase();
  var course_year = $("#course_year").val();
  var course_code = $("#course_code").val().toUpperCase();

  if (course_name == "") {
    $("#course_name_error").html("Please enter a Course name");
  } else {
    $("#course_name_error").html("");
  }

  if (course_cat == "" || course_cat == null) {
    $("#course_cat_error").html("Please Select a Course Catagory name");
  } else {
    $("#course_cat_error").html("");
  }

  if (course_year == "" || course_year == null) {
    $("#course_year_error").html("Please Select  Course Duration name");
  } else {
    $("#course_year_error").html("");
  }

  if (course_code == "" ) {
    $("#course_code_error").html("Please Enter a  Course Code");
  } else {
    $("#course_code_error").html("");
  }


  if (course_name != "" && course_cat != "" && course_year != "" && course_code != "" && course_year != null && course_cat!= null) {
    $.post(
      "./insert/add_course.php",
      {
        course_name,
        course_code,
        course_year,
        course_cat
      },
      function (data, status) {
        console.log(data);
       
        if (data == 111) {
          $("#course_name").val("");
          $("#course_code").val("");
          $("#course_year").prop('selectedIndex',0);
          $("#course_cat").prop('selectedIndex',0);
        

          Swal.fire({
            position: "center",
            icon: "success",
            title: "NEW COURSE  IS ADDED",
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







function add_subject() {
  var subject_name = $("#subject_name").val().toUpperCase();
  var subject_code = $("#subject_code").val().toUpperCase();

  if (subject_name == "") {
    $("#subject_name_error").html("Please enter a subject name");
  } else {
    $("#subject_name_error").html("");
  }

  if (subject_code == "") {
    $("#subject_code_error").html("**** !Please enter the Subject code  ****");
  } else {

      $("#subject_code_error").html("");
    }
  

  if (subject_name != "" && subject_code != "" ) {
    $.post(
      "./insert/add_subject.php",
      {
        subject_name,
        subject_code,
      },
      function (data, status) {
        console.log(data);
        if (data == 111) {
          $("#subject_name").val("");
          $("#subject_code").val("");

          Swal.fire({
            position: "center",
            icon: "success",
            title: "NEW SUBJECT IS ADDED",
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
