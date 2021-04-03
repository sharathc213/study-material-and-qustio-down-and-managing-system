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




function viewsubject() {
  $.post("view/viewtablesubject.php", {


  }, function (data, status) {
    // close the popup

    $(".panel-heading").html("view  subject");
    $(".panel-body").html(data);
  
  });
}




function viewfile() {
  $.post("view/viewtablefile.php", {


  }, function (data, status) {
    // close the popup

    $(".panel-heading").html("view File Format");
    $(".panel-body").html(data);
  
  });
}


function viewbooks() {
  $.post("view/viewtablebook.php", {


  }, function (data, status) {
    // close the popup

    $(".panel-heading").html("view File Format");
    $(".panel-body").html(data);
  
  });
}




function viewsubc() {
  $.post("view/viewtablesubc.php", {

    
  }, function (data, status) {
   

    $(".panel-heading").html("view  course");
    $(".panel-body").html(data);
  
  });
}


function viewqustions() {
  $.post("view/viewtableque.php", {

    
  }, function (data, status) {
   

    $(".panel-heading").html("view  Questions");
    $(".panel-body").html(data);
  
  });
}
