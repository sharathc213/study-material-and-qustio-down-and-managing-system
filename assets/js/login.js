function login(e, which) {
  e.preventDefault();
  switch (which) {
    case "teacher":
      var teacher_username = $("#teacher_username").val();
      var teacher_password = $("#teacher_password").val();
      var status = validate(which,teacher_username, teacher_password);
      if (status) check(which, teacher_username, teacher_password);

      break;
    case "college":
      var college_username = $("#college_username").val();
      var college_password = $("#college_password").val();
      var status = validate(which,college_username, college_password);
      if (status) check(which, college_username, college_password);

      break;
    case "admin":
      var admin_username = $("#admin_username").val();
      var admin_password = $("#admin_password").val();
      var status = validate(which,admin_username, admin_password);
      if (status) check(which, admin_username, admin_password);

      break;
  }
}

function validate(which,username, password) {
  if (username != "" && password != "") {
    $(".error_"+which).html('');
    return true;
  }
  else $(".error_"+which).html('User Name or Password cannot bo empty');
}
function check(which, username, password) {
  console.log(which);
}
