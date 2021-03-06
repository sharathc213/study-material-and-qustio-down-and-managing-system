function deleteteacher(college_code,teacher_code) {
  if (teacher_code != "") {
    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.value) {
        $.post(
          "delete/deleteteacher.php",
          {
            teacher_code,
          },
          function (data, status) {
            // reload Users by using readRecords();

            if (data == 111) {
              Swal.fire("Deleted!", "Your file has been deleted.", "success");
              viewteacher(college_code);
            } else {
              Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
              });
            }
          }
        );
      }
    });
  } else {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Something went wrong!",
    });
  }
}







function deleteadmin(sl_no) {
  if (sl_no != "") {
    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.value) {
        $.post(
          "delete/deleteadmin.php",
          {
            sl_no: sl_no,
          },
          function (data, status) {
            // reload Users by using readRecords();

            if (data == 111) {
              Swal.fire("Deleted!", "Your file has been deleted.", "success");
              viewadmin();
            } else {
              Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
              });
            }
          }
        );
      }
    });
  } else {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Something went wrong!",
    });
  }
}




function deletecour(sl_no,college_code) {
  if (sl_no != "") {
    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.value) {
        $.post(
          "delete/deletecour.php",
          {
            sl_no: sl_no,
          },
          function (data, status) {
            // reload Users by using readRecords();

            if (data == 111) {
              Swal.fire("Deleted!", "Your file has been deleted.", "success");
              viewcourse(college_code);
            } else {
              Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
              });
            }
          }
        );
      }
    });
  } else {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Something went wrong!",
    });
  }
}





function deleteteachersub(sl_no,college_code,teacher_code) {
  if (sl_no != "") {
    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.value) {
        $.post(
          "delete/deleteteachersub.php",
          {
            sl_no: sl_no,
          },
          function (data, status) {
            // reload Users by using readRecords();

            if (data == 111) {
              Swal.fire("Deleted!", "Your file has been deleted.", "success");
              viewteachersub(teacher_code,college_code);
            } else {
              Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
              });
            }
          }
        );
      }
    });
  } else {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Something went wrong!",
    });
  }
}
