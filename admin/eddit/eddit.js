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



function edditbook(sl_no) {

  $.post(
    "eddit/edditbook.php",
    {
      sl_no
    },
    function (data, status) {
     
      $(".panel-heading").html("Eddit Book");
      $(".panel-body").html(data);
    }
  );
}






function updatebook(sl_no) {
 
  // get values
  var name = $("#update_book").val();
  var book = $("#update_book").prop("files")[0];
  var book_name = $("#update_book_name").val().toUpperCase();
  var sub_code = $("#update_sub_code").val();
  var fil=$("#fil").html();
  var form_data = new FormData();
  form_data.append("file", book);
  form_data.append("sl_no", sl_no);

  var ext= name.split('.').pop().toLowerCase();
  let validate;
 
  if (sub_code == "" || sub_code == null) {
    $("#update_sub_code_error").html("please select a subject");
    validate=1;

  } else {
    $("#update_sub_code_error").html("");
    validate=0;
    form_data.append("sub_code", sub_code);
  }



  if (book_name == "") {
    $("#update_book_name_error").html("Please enter the book name");
    validate=1;
  } else {
    $("#update_book_name_error").html("");
    validate=0;
    form_data.append("book_name", book_name);
  }

  if (fil == "") {
    $("#update_book_error").html("Please Select a book ");
     validate =1;
    
 }else{
  $("#update_book_error").html("");
  validate =0;
 }
 if(name!=""){ 
   if ($.inArray(ext, ["pdf"]) == -1) {
    $("#update_book_error").html("Only pdf file is allowed");
    validate =1;
  } else if(($("#update_book")[0].files[0].size)>2000000){
    validate =1;
    $("#update_book_error").html("file must lessthan 2MB");
  } else{
    $("#update_book_error").html("");
  validate=0;
  }
}


  if ( validate==0){

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
        $.ajax({
          url: './eddit/update_book.php', 
          type: 'post',
          data: form_data,
          dataType: 'text',
          contentType: false,
          processData: false,
          success: function (data) {
            console.log(data);
            // close the popup
      //   readdata();
            //     readstati();

            // clear fields from the popup

            if (data == 111) {
              $("#update_book_name").val("");
              $("#fil").html("");

              viewbooks();

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
        }
        );
      }
    });
  }
}






function edditqustion(sl_no) {

  $.post(
    "eddit/edditqustion.php",
    {
      sl_no
    },
    function (data, status) {
     
      $(".panel-heading").html("Eddit Qustion");
      $(".panel-body").html(data);
    }
  );
}






function updatequestion(sl_no) {
 
  var q = $("#question").val();
  var a = $("#answer").val();
  var fila = $("#fila").html();
  var filq = $("#filq").html();


  var question = $("#question").prop("files")[0];
  var answer = $("#answer").prop("files")[0];
  var form_data = new FormData();
  // form_data.append("file", book);
  form_data.append("sl_no", sl_no);
  var extq= q.split('.').pop().toLowerCase();
  var exta= a.split('.').pop().toLowerCase();
  let validate;


// console.log(jQuery.type(date));



  if (filq == "") {
    $("#question_error").html("Please Select a question");
     validate =1;
  } else {
    $("#question_error").html("");
    validate =0;
  }
  if(q!=""){
  if ($.inArray(extq, ["pdf"]) == -1) {
    $("#question_error").html("Only pdf file is allowed");
    validate =1;
  } else if(($("#question")[0].files[0].size)>2000000){
    $("#question_error").html("file must lessthan 2MB");
    validate =1;
  } else{
    $("#question_error").html("");
    form_data.append("question", question);
  validate=0;
  }}
if(fila==""){


  $("#answer_error").html("Please Select a answer");
  validate =1;
} else{
  $("#answer_error").html("");
  validate =0;
}




  if (a != "") {
 if ($.inArray(exta, ["pdf"]) == -1) {
    $("#answer_error").html("Only pdf file is allowed");
    validate =1;
  } else if(($("#answer")[0].files[0].size)>2000000){
    $("#answer_error").html("file must lessthan 2MB");
    validate =1;
  } else{
    $("#answer_error").html("");
    form_data.append("answer", answer);
  validate=0;
  }}
  console.log(Array.from(form_data));
  if ( validate==0 ){

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
        $.ajax({
          url: './eddit/update_question.php', 
          type: 'post',
          data: form_data,
          dataType: 'text',
          contentType: false,
          processData: false,
          success: function (data) {
            console.log(data);
            // close the popup
      //   readdata();
            //     readstati();

            // clear fields from the popup

            if (data == 111) {
       

              viewqustions();

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
        }
        );
      }
    });
  }
}

