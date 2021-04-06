function viewsem(course_code,college_code) {
    $.post("others/showsem.php", {
       course_code,
       college_code
  
    }, function (data, status) {
      // close the popup
  

      $(".sem-section").html(data);
    
    });
  }
  function viewcom(college_code) {
    var com=$("#course_compination").val();

    $.post("others/showcom.php", {
       com,
       college_code
  
    }, function (data, status) {
      // close the popup
  

      $(".sem-section2").html(data);
    
    });
  }
  


  function viewsub(cou_code,college_code) {
  

    $.post("others/showsub.php", {
       cou_code,
       college_code
  
    }, function (data, status) {
      // close the popup
  

      $(".sub_sec").html(data);
    
    });
  }
  