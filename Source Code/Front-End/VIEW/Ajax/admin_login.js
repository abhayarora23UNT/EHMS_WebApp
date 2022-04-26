function _(x) {
  return document.getElementById(x);
}


function login() {
  	_("login__btn").style.display = "none";


    var username = _("username").value;
    var password = _("password").value;

    xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        if(this.responseText="success"){
        window.location.href = "admin_dashboard.php";

    }else {
      _("errors").innerHTML = this.responseText;
    _("login__btn").style.display = "block";
    window.location.href = "admin_login.php";
      }
    }
    };

    xmlhttp.open("POST", "../../../CONTROL/ADMIN/admin_login.contr.php", true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("u="+username+"&p="+password);
}
