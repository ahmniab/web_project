function checkPasswords() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("cnfrmpassword").value;
    
    if (confirmPassword == "" || password == "") {
      alert("Your password is empty");
    }
    else{

      if (password.length < 6) {
        alert("Password is less than 6");
      }
      else if (password.length > 15)
      {
        alert("Password is greater than 15");
      }
      else{
        if (confirmPassword != password) {
          alert("Confirm password doesn't equal password");
        }
        
        else{
          document.sign-updateThumbnail.submit();
        }
      }
    }
    
  }
  