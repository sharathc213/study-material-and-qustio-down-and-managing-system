function viewcollege() {
  $.post("view/viewtablecollege.php", {


  }, function (data, status) {
    // close the popup

    $(".panel-heading").html("view  college");
    $(".panel-body").html(data);
  
  });
}


function viewadmin() {
  $.post("view/viewtableadmin.php", {


  }, function (data, status) {
    // close the popup

    $(".panel-heading").html("view  admin");
    $(".panel-body").html(data);
  
  });
}
function viewcoursecat() {
  $.post("view/viewtablecat.php", {


  }, function (data, status) {
    // close the popup


    $(".panel-bodya").html(data);

  
  });
}



function viewcourse() {
  $.post("view/viewtablecourse.php", {


  }, function (data, status) {
    // close the popup

    $(".panel-heading").html("view course");
    $(".panel-body").html(data);
  
  });
}