<!-- -->

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body class="container my-5">
    <!-- <nav>
        <a href="<?= BASE_URL; ?>">Root</a>
    </nav> -->

    <h1>Hello, world!</h1>

    <form method="POST" action="form_validiation.php">
    <div class="mb-3">
            <label for="htuEmail" class="form-label">User Name</label>
            <input name="username" type="text" class="form-control" id="htutext" aria-describedby="textHelp">
            <div id="textHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>


        <div class="mb-3">
            <label for="htuEmail" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="htuEmail" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="htuPassword" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="htuPassword">
        </div>

        <div class="custom-control custom-radio">
    <input name="radio" type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
    <label class="custom-control-label" for="customControlValidation2">Male</label>
  </div>
  <div class="custom-control custom-radio mb-3">
    <input name="radio" type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
    <label class="custom-control-label" for="customControlValidation3">Female</label>
    <div class="invalid-feedback">More example invalid feedback text</div>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea name="textarea" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>