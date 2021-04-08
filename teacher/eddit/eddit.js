function edditfile(sl_no) {
  // Add User ID to the hidden field for furture usage

  $.post(
    "eddit/edditfile.php",
    {
      sl_no,
    },
    function (data, status) {
      // PARSE json data

      $(".panel-heading").html("Eddit file");
      $(".panel-body").html(data);
    }
  );
  // Open modal popup
}

function updatefile(sl_no,type_code) {
  console.log("hai");
  // get values
  var fileudat = $("#fileudata").val();
  var desc = $("#update_disc").val();
  var checkfile = $("#checkfile").html();

  var fileudata = $("#fileudata").prop("files")[0];
  var ext = fileudat.split(".").pop().toLowerCase();

  var form_data = new FormData();

  form_data.append("type_code", type_code);
  form_data.append("sl_no", sl_no);

  if (desc == "") {
    $("#update_disc_error").html("Please Add about the file");
  } else {
    $("#update_disc_error").html("");
    form_data.append("filedesc", desc);
  }

  // form_data.append("file", book);
  if (checkfile == "") {
    if (fileudat == "") {
      $("#filedata_error").html("Please Select a file");
    } else {
      $("#filedata_error").html("");
    }}
    if(fileudat!=""){
      switch (type_code) {
        case 1:
          // pdf
          if ($.inArray(ext, ["pdf"]) == -1) {
            $("#filedata_error").html("Only pdf file is allowed");
          } else if ($("#fileudata")[0].files[0].size > 2000000) {
            $("#filedata_error").html("file must lessthan 2MB");
          } else {
            $("#filedata_error").html("");
            form_data.append("filedata", fileudata);
            var validate = "ok";
          }
          break;
        case 2:
          // image
          if ($.inArray(ext, ["gif", "png", "jpg", "jpeg"]) == -1) {
            $("#filedata_error").html("Only Image file is allowed");
          } else if ($("#fileudata")[0].files[0].size > 2000000) {
            $("#filedata_error").html("file must lessthan 2MB");
          } else {
            $("#filedata_error").html("");
            form_data.append("filedata", fileudata);
            var validate = "ok";
          }
          break;
        case 3:
          // vedio
          if (
            $.inArray(ext, ["flv", "avi", "mov", "mkv", "mp4", "3gp"]) == -1
          ) {
            $("#filedata_error").html("Only Vedio file is allowed");
          } else if ($("#fileudata")[0].files[0].size > 2000000) {
            $("#filedata_error").html("file must lessthan 2MB");
          } else {
            $("#filedata_error").html("");
            form_data.append("filedata", fileudata);
            var validate = "ok";
          }
          break;
        case 4:
          // ppt
          if ($.inArray(ext, ["ppt", "pptx", "pptpng", "pptjpeg"]) == -1) {
            $("#filedata_error").html("Only PowerPoint file is allowed");
          } else if ($("#fileudata")[0].files[0].size > 2000000) {
            $("#filedata_error").html("file must lessthan 2MB");
          } else {
            $("#filedata_error").html("");
            form_data.append("filedata", fileudata);
            var validate = "ok";
          }
          break;
        case 5:
          //word
          if ($.inArray(ext, ["docx", "docm", "dot", "dotx"]) == -1) {
            $("#filedata_error").html("Only ms word file is allowed");
          } else if ($("#fileudata")[0].files[0].size > 2000000) {
            $("#filedata_error").html("file must lessthan 2MB");
          } else {
            $("#filedata_error").html("");
            form_data.append("filedata", fileudata);
            var validate = "ok";
          }
          break;

        // code block
      }
    }
  

  // console.log(jQuery.type(date));

  if (desc != "") {
    Swal.fire({
      title: "Are you sure Want to update?",

      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "red",
      confirmButtonText: "Yes, Update it!",
    }).then((result) => {
      if (result.value) {
        // Add record
        $.ajax({
          url: './eddit/updatefile.php', 
          type: 'post',
          data: form_data,
          dataType: 'text',
          contentType: false,
          processData: false,
          success: function (data) {
            console.log(data);
            // close the popup
      //   readdata();
            //     readstati();

            // clear fields from the popup

            if (data == 111) {
       

              // viewqustions();

              Swal.fire({
                position: "center",
                icon: "success",
                title: "UPDATED THIS SELLER",
                showConfirmButton: true,
                timer: 3000,
              });
            } else if (data == 110) {
              Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Duplicate data is Present!",
              });
            } else {
              Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
              });
            }
          }
        }
        );
      }
    });
  }
}