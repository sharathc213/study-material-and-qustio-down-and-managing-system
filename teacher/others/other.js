

  function viewtype(sub_code,teacher_code) {
  

    $.post("others/showtype.php", {
       sub_code,
       teacher_code
  
    }, function (data, status) {
      // close the popup
  

      $(".type_section").html(data);
    
    });
  }
  

  

  function viewfile(teacher_code,sub_code) {

    var type_code = $("#file_type").val();
  
    $.post("others/showfile.php", {
       sub_code,
       teacher_code,
       type_code
  
    }, function (data, status) {
      // close the popup
  

      $(".file_section").html(data);
    
    });
  }
  


  function viewtypev(sub_code,teacher_code) {
  

    $.post("others/showtypev.php", {
       sub_code,
       teacher_code
  
    }, function (data, status) {
      // close the popup
  

      $(".type_section").html(data);
    
    });
  }
  


  
  function viewfilev(teacher_code,sub_code) {

    var type_code = $("#file_type").val();
  
    $.post("others/showfilev.php", {
       sub_code,
       teacher_code,
       type_code
  
    }, function (data, status) {
      // close the popup
  

      $(".file_section").html(data);
    
    });
  }
  
