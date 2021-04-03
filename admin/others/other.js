function viewsem(course_code) {
    $.post("others/showsem.php", {
       course_code,
      
  
    }, function (data, status) {
      // close the popup
  
   
      $(".sem-section").html(data);
    
    });
  }
  