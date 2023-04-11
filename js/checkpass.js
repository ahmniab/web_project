const alerm = document.getElementById("alert");
alerm.style.display = "none";

function msg(worning) {
  const alerm = document.getElementById("alert");
  alerm.style.display = "block";
  alerm.innerHTML = " " ;
  alerm.insertAdjacentHTML('beforeend', '<i class="fa-solid fa-circle-exclamation fa-beat"></i> ' + worning);
}
function checkPasswords() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("cnfrmpassword").value;
    if ( password == "") {
      msg("password is empty") ;

    }
    else if (confirmPassword == "" )
    {
      msg("Please confirm your password");
    }
    else{

      if (password.length < 6) {
        msg("password is less than 6");
      }
      else if (password.length > 15)
      {
        msg("Password is greater than 15");
      }
      else{
        if (confirmPassword != password) {
          msg("Confirm password doesn't equal password");
        }
        
        else{
          document.sign_up.submit();
        }
      }
    }
    
  }
  