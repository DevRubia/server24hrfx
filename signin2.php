<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
 <form onsubmit="return validateForm()" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
 

<select name="countryCode" id="countryCode">
<option value="+27">SA:+91:</option>
  <option value="+1">USA:+1:</option>
  <option value="+44">UK:+44:</option>
  <option value="+86">CH:+86</option>
  <option value="+254">KEN:+254:</option>
  <option value="+91">IND:+91</option>
  <option value="+234">NIG:+234</option>
  <option value="+234">KUW:+965</option>
  <!-- Add more options for other country codes -->
</select>


<input type="text" placeholder="phone number/ choose code first" name="phoneNumber" id="phoneNumber" required>

<!-- Concatenate the selected country code and phone number before submitting the form -->
<input type="hidden" name="fullPhoneNumber" id="fullPhoneNumber">

<button type="submit" name="display" class="btn btn-primary">Display</button type="button">

<input type="checkbox" id="terms">
<label required >I accept and agree to 24hrfx trading policies and guidelines</label>
 </form>



<?php
if(isset($_POST['fullPhoneNumber'])){

    $number=$_POST['fullPhoneNumber'];
    echo"$number";
}
?>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


<script>

function validateForm() {
    var checkbox = document.getElementById("terms");
    if (!checkbox.checked) {
      alert("You must agree to the terms and conditions to continue");
      return false;
    }
    return true;
  }

  document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();
    document.querySelector('#fullPhoneNumber').value = document.querySelector('#countryCode').value + document.querySelector('#phoneNumber').value;
    this.submit();
    
    
  });
</script>

</html>