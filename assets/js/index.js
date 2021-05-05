
  function viewmeterial(sub) {

    $(".meterial").html("");
    $(".year").html("");
    $(".change").html("");
    $.post("assets/php/viewmeterial.php", {

sub
    }, function (data, status) {
     
  
     
      $(".meterial").html(data);
    
    });
  }
  
  function viewcourse(ugpg) {
    $(".course").html("");
    $(".sub").html("");
    $(".meterial").html("");
    $(".year").html("");
    $(".change").html("");


    $.post("assets/php/viewcourse.php", {
    
     ugpg
    }, function (data, status) {
     
  
     
      $(".course").html(data);
    
    });
  }
  

  function viewsub(course) {

    $(".sub").html("");
    $(".meterial").html("");
    $(".year").html("");
    $(".change").html("");
    $.post("assets/php/viewsub.php", {
  
     course
    }, function (data, status) {
     

     
      $(".sub").html(data);
    
    });
  }
  

  function viewchange(meterial,sub,year) {

    $(".change").html("");
    if(meterial==1 && year==0){
      viewyear(sub);
    }else{
      if(meterial!=1){
        $(".year").html("");
      }
    
      $(".change").html("");
    $.post("assets/php/viewchange.php", {
    
year,sub,meterial
    }, function (data, status) {
     
  
     
      $(".change").html(data);
    
    });
  }}
  
  function viewyear(sub) {

    $(".year").html("");
    $(".change").html("");
    $.post("assets/php/viewyear.php", {
  
     sub
    }, function (data, status) {
     

     
      $(".year").html(data);
    
    });
  }
  


  function verifypdf(path){

 
    window.open("./admin/files/pdfreader.php?pdf="+path, "_blank");
      // window.location.href = '../admin/cv/'+path;
     };
     function verifybook(path){
  
   
      window.open("./admin/files/pdfreaderbook.php?book="+path, "_blank");
        // window.location.href = '../admin/cv/'+path;
       };
       function verifyq(path){
  
   
        window.open("./admin/files/pdfreaderq.php?q="+path, "_blank");
          // window.location.href = '../admin/cv/'+path;
         };
         function verifya(path){
  
   
          window.open("./admin/files/pdfreadera.php?a="+path, "_blank");
            // window.location.href = '../admin/cv/'+path;
           };


           function verifyimg(path){

            Swal.fire({
              imageUrl: './teacher/file/'+path 
            })
        
              // window.location.href = '../admin/cv/'+path;
             };

             function verifyvedio(path){
console.log("hai");
 
              window.open("./teacher/file/vedio.php?vedio="+path, "_blank");
                // window.location.href = '../admin/cv/'+path;
               };