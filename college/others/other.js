function viewsem(course_code,college_code) {
    $.post("others/showsem.php", {
       course_code,
       college_code
  
    }, function (data, status) {
      // close the popup
  

      $(".sem-section").html(data);
    
    });
  }
  