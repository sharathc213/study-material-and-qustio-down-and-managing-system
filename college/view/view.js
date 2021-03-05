function viewteacher(college_code) {
  $.post("view/viewtableteacher.php", {
     college_code

  }, function (data, status) {
    // close the popup

    $(".panel-heading").html("view  teacher");
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
