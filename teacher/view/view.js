function viewteacher(college_code) {
  $.post("view/viewtableteacher.php", {
     college_code

  }, function (data, status) {
    // close the popup

    $(".panel-heading").html("view  teacher");
    $(".panel-body").html(data);
  
  });
}



function viewcourse(college_code) {
  $.post("view/viewtablecourse.php", {

    college_code
  }, function (data, status) {
   

    $(".panel-heading").html("view  course");
    $(".panel-body").html(data);
  
  });
}

function viewteachersub(teacher_code,college_code) {
  $.post("view/viewtableteachersub.php", {
    teacher_code,
    college_code
  }, function (data, status) {
   

   
    $(".table_sec").html(data);
  
  });
}
