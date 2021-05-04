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



function add_file() {
  var file_name = $("#file_type").val().toUpperCase();
  var file_size = $("#file_size").val();

  if (file_name == "") {
    $("#file_type_error").html("Please enter a file Format");
  } else {
    $("#file_type_error").html("");
  }

  if (file_size == "" || file_size == 0) {
    $("#file_size_error").html("**** !Please enter the Max File size or >0  ****");
  } else {

      $("#file_size_error").html("");
    }
  

  if (file_name != "" && file_size != "" && file_size !=0) {
    $.post(
      "./insert/add_file.php",
      {
        file_name,
        file_size,
      },
      function (data, status) {
        console.log(data);
        if (data == 111) {
          $("#file_type").val("");
          $("#file_size").val("");

          Swal.fire({
            position: "center",
            icon: "success",
            title: "NEW FILE TYPE IS ADDED",
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





function add_book() {
  var name = $("#book").val();
  var book = $("#book").prop("files")[0];
  var book_name = $("#book_name").val().toUpperCase();
  var sub_code = $("#sub_code").val();
  var form_data = new FormData();
  form_data.append("file", book);

  var ext= name.split('.').pop().toLowerCase();
  let validate;
  if (sub_code == "" || sub_code == null) {
    $("#sub_code_error").html("please select a subject");
    validate=1;
  } else {
    $("#sub_code_error").html("");
    validate=0;
    form_data.append("sub_code", sub_code);
  }

  if (book_name == "") {
    $("#book_name_error").html("Please enter the book name");
    validate=1;
  } else {
    $("#book_name_error").html("");
    validate=0;
    form_data.append("book_name", book_name);
  }

  if (name == "") {
    $("#book_error").html("Please Select a book ");
     validate =1;
     $("#book_error").html("file must lessthan 2MB");
 } else if ($.inArray(ext, ["pdf"]) == -1) {
    $("#book_error").html("Only pdf file is allowed");
    validate =1;
  } else if(($("#book")[0].files[0].size)>2000000){
    validate =1;
  } else{
    $("#book_error").html("");
  validate=0;
  }


  console.log(Array.from(form_data));

  if (validate==0) {

    $.ajax({
      url: './insert/add_book.php', 
      type: 'post',
      data: form_data,
      dataType: 'text',
      contentType: false,
      processData: false,
      success: function (data) {
       console.log(data);
        if (data == 111) {
          $("#book_name").val("");
          $("#sub_code").prop('selectedIndex',0);
          $("#book").val("");

          Swal.fire({
            position: "center",
            icon: "success",
            title: "NEW FILE TYPE IS ADDED",
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
    
  });
}}





function add_subc(course_year,course_code) {



  console.log(course_code); 
  var sem1_1=$("#sem1_1").val();
  var sem1_2=$("#sem1_2").val();
  var sem1_3=$("#sem1_3").val();
  var sem1_4=$("#sem1_4").val();
  var sem1_5=$("#sem1_5").val();
  
  var sem2_1=$("#sem2_1").val();
  var sem2_2=$("#sem2_2").val();
  var sem2_3=$("#sem2_3").val();
  var sem2_4=$("#sem2_4").val();
  var sem2_5=$("#sem2_5").val();
  
  if(course_year>=2){
  var sem3_1=$("#sem3_1").val();
  var sem3_2=$("#sem3_2").val();
  var sem3_3=$("#sem3_3").val();
  var sem3_4=$("#sem3_4").val();
  var sem3_5=$("#sem3_5").val();
  
  var sem4_1=$("#sem4_1").val();
  var sem4_2=$("#sem4_2").val();
  var sem4_3=$("#sem4_3").val();
  var sem4_4=$("#sem4_4").val();
  var sem4_5=$("#sem4_5").val();
  }
  
  if(course_year>=3){
    var sem5_1=$("#sem5_1").val();
    var sem5_2=$("#sem5_2").val();
    var sem5_3=$("#sem5_3").val();
    var sem5_4=$("#sem5_4").val();
    var sem5_5=$("#sem5_5").val();
    
    var sem6_1=$("#sem6_1").val();
    var sem6_2=$("#sem6_2").val();
    var sem6_3=$("#sem6_3").val();
    var sem6_4=$("#sem6_4").val();
    var sem6_5=$("#sem6_5").val();
    }
  
  var i;
  var k;
  var j = course_year * 2;
  
  for (i=1; i <=j; i++) {
   
    for (k=1; k <=5; k++) {
    var check=$("#sem"+i+"_"+k).val();
    if (check == "" || check == null) {
      $("#sem"+i+"_"+k+"_error").html("Please select a subject");
    } else {
      $("#sem"+i+"_"+k+"_error").html("");
    }
    }
  }
  
   j = course_year * 2;
  var validate=1;
  var br=0;
  for (i=1; i <=j; i++) {
    if(br==0){
   
    for (k=1; k <=5; k++) {
     check=$("#sem"+i+"_"+k).val();
    if (check == "" || check == null) {
      validate=1;
      br=1;
      break;
      
    } else {
      validate=0;
    }
    }}else{
      break;
    }
  }
  
    if (
       
    validate!=1
    ) {
      $.post(
        "./insert/add_subc.php",
        {
          
        
          course_code,
          course_year,
  
          sem1_1,
          sem1_2,
          sem1_3,
          sem1_4,
          sem1_5,
          
          sem2_1,
          sem2_2,
          sem2_3,
          sem2_4,
          sem2_5,
  
          sem3_1,
          sem3_2,
          sem3_3,
          sem3_4,
          sem3_5,
  
          sem4_1,
          sem4_2,
          sem4_3,
          sem4_4,
          sem4_5,
  
          sem5_1,
          sem5_2,
          sem5_3,
          sem5_4,
          sem5_5,
  
          sem6_1,
          sem6_2,
          sem6_3,
          sem6_4,
          sem6_5
        },
        function (data, status) {
          console.log(data);
          if (data == 111) {
        
            for (i=1; i <=j; i++) {
   
              for (k=1; k <=5; k++) {
              
                $("#sem"+i+"_"+k).prop('selectedIndex',0);
                $("#sem"+i+"_"+k+"_error").html("");
              
              }
              }
            
  
  
            Swal.fire({
              position: "center",
              icon: "success",
              title: "NEW COURSE IS ADDED",
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


  function addquestion() {
    var q = $("#question").val();
    var a = $("#answer").val();
    var sub_code = $("#sub_code").val();
    var date = $("#year").val();
    var question = $("#question").prop("files")[0];
    var answer = $("#answer").prop("files")[0];
    var form_data = new FormData();
    // form_data.append("file", book);
  
    var extq= q.split('.').pop().toLowerCase();
    var exta= a.split('.').pop().toLowerCase();
    let validate;
    if (sub_code == "" || sub_code == null) {
      $("#sub_code_error").html("please select a subject");
      validate=1;
    } else {
      $("#sub_code_error").html("");
      validate=0;
      form_data.append("sub_code", sub_code);
    }
  
// console.log(jQuery.type(date));
  
    if (date == "") {
      $("#year_error").html("Please select the year");
      validate=1;
    } else {
      $("#year_error").html("");
      validate=0;
     var year=(date.split('-',1)).toString();
      console.log(year);
      form_data.append("year", year);
    }
  
    if (question == "") {
      $("#question_error").html("Please Select a question");
       validate =1;
    } else if ($.inArray(extq, ["pdf"]) == -1) {
      $("#question_error").html("Only pdf file is allowed");
      validate =1;
    } else if(($("#question")[0].files[0].size)>2000000){
      $("#question_error").html("file must lessthan 2MB");
      validate =1;
    } else{
      $("#question_error").html("");
      form_data.append("question", question);
    validate=0;
    }
    if (answer == "") {
      $("#answer_error").html("Please Select a answer");
       validate =1;
    } else if ($.inArray(exta, ["pdf"]) == -1) {
      $("#answer_error").html("Only pdf file is allowed");
      validate =1;
    } else if(($("#answer")[0].files[0].size)>2000000){
      $("#answer_error").html("file must lessthan 2MB");
      validate =1;
    } else{
      $("#answer_error").html("");
      form_data.append("answer", answer);
    validate=0;
    }
  
  
    console.log(Array.from(form_data));
  
    if (validate==0) {
      $.ajax({
        url: './insert/add_question.php', 
        type: 'post',
        data: form_data,
        dataType: 'text',
        contentType: false,
        processData: false,
        success: function (data) {
         console.log(data);
          if (data == 111) {
            $("#year").val("");
            $("#sub_code").prop('selectedIndex',0);
            $("#question").val("");
            $("#answer").val("");
  
            Swal.fire({
              position: "center",
              icon: "success",
              title: "NEW QUESTION  IS ADDED",
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
      
    });
  }}
  
  