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




function add_course(course_year,college_code,course_code) {



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
      "./insert/add_course.php",
      {
        
        college_code,
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