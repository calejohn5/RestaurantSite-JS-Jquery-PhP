/* 
Validates a users password entry in register.php
Needs to be under 6 characters
*/
function validForm() {
  var x = document.forms["form1"]["pass1"].value;
  if (x.length < 6) {
    alert("Password must be atleast 6 characters");
    return false;
  }
  else {return true}
}