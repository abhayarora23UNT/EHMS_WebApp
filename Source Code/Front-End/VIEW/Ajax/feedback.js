function _(x) {
  return document.getElementById(x);
}


function submit() {
  	_("submit__btn").style.display = "none";


    var rate        = _("rate").value;
    var services    = _("services").value;
    var complains   = _("complains").value;
    var suggestion  = _("suggestion").value;


    xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if(this.responseText != 'feedback sent'){
      _("errors").innerHTML = this.responseText;
    _("submit__btn").style.display = "block";

    }else {
      window.location.href = "feedback.php";
      _("success").innerHTML = this.responseText;
      _("submit__btn").style.display = "block";
    }
  }
  };

    xmlhttp.open("POST", "../../../CONTROL/PATIENT/feedback.contr.php", true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("r="+rate + "&s="+services + "&c="+complains + "&sg="+suggestion);
}
