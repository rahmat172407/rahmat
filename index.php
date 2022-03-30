<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	 <div class="container m-5">
      <div class="col-12">
        <form action="contact.php" method="POST" class="row g-3 needs-validation" novalidate style="margin: 20px auto;
			box-shadow: 0 0 10px #000;padding: 10px;background-color: #c5cfd6;" >
          <div class="col-md-12">
            <label for="01" class="form-label">User Name</label>
            <input class="form-control" type="text" id="01" name="userName" placeholder="User name" required="">
            <div class="valid-feedback">
                 Looks good!
              </div>
          </div>
          <div class="col-md-12">
            <label for="02" class="form-label">Email</label>
            <input class="form-control" type="email" id="02" name="email" placeholder="Your email" required="">
            <div class="valid-feedback">
                 Looks good!
              </div>
          </div>
          <div class="col-md-12">
            <label for="03" class="form-label">Password</label>
            <input class="form-control" type="password" id="03" name="password" placeholder="Insert your password" required="">
            <div class="valid-feedback">
                 Looks good!
              </div>
          </div>

          <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                  Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                  You must agree before submitting.
                </div>
              </div>
            </div>
            <button  class="form-control btn btn-secondary" type="submit" name="btn" value="Login">Login</button>
        </form>
      </div>
    </div>
<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>

</body>
</html>