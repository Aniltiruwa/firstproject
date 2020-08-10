<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Anil Tiruwa</title>
  </head>
  <body>
    <h1>Anil Tiruwa</h1>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="About.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Contact.php">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="card">
  <div class="card-body">
    If you have any query and have any suggestion for my website or you want to contact me please fill the form given below.
  </div>
  <form action="userinfo.php" method="POST">
  <div class="form-row">
  <div class="col-md-6 mb-4">
    <label for="validationServer01">Name</label>
      <input type="text" class="form-control is-valid"  name="name" id="validationServer01"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
      </div>
      <div class="col-md-6 mb-4">
      <label for="validationServer02">Email</label>
      <input type="text" class="form-control is-valid" name="email" id="validationServer02"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-4">
      <label for="validationServer03">Mobile</label>
      <input type="text" class="form-control is-invalid"  name="mobile" id="validationServer03" required>
      <label for="validationServer03" >Comment</label>
      <input type="text" class="form-control is-invalid"  name="comment" id="validationServer03" required>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
      <label class="form-check-label" for="invalidCheck3">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
</form>
<div class="card">
  <div class="card-body">
  <footer >
          <p>Copyright &copy;Anil Tiruwa,2020</p>
      </footer>
  </div>
 
   
  </div>

  </body>
 
</html>