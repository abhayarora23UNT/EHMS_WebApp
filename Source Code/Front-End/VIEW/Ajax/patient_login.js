function _(x) {
  return document.getElementById(x);
}


function submit() {
  	_("login__btn").style.display = "none";


    var email       = _("Email").value;
    var password    = _("password").value;


    xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if(this.responseText != 'login success'){
      _("errors").innerHTML = this.responseText;
    _("login__btn").style.display = "block";

    }else {
      window.location.href = "dashboard.php";
      _("success").innerHTML = this.responseText;
      _("submit__btn").style.display = "block";
    }
  }
  };

    xmlhttp.open("POST", "../../../CONTROL/PATIENT/login_contr.php", true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("e="+email + "&p="+password);
}
