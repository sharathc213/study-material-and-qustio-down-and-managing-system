function deletecollege(sl_no) {
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
          "delete/deletecollege.php",
          {
            sl_no: sl_no,
          },
          function (data, status) {
            // reload Users by using readRecords();

            if (data == 111) {
              Swal.fire("Deleted!", "Your file has been deleted.", "success");
              viewcollege();
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





function deletecoursecat(cat_code) {
  if (cat_code != "") {
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
          "delete/deletecoursecat.php",
          {
            cat_code
          },
          function (data, status) {
            // reload Users by using readRecords();

            if (data == 111) {
              Swal.fire("Deleted!", "Your file has been deleted.", "success");
              viewcoursecat();
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





function deletecourse(sl_no) {
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
          "delete/deletecourse.php",
          {
            sl_no
          },
          function (data, status) {
            // reload Users by using readRecords();

            if (data == 111) {
              Swal.fire("Deleted!", "Your file has been deleted.", "success");
              viewcourse();
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
