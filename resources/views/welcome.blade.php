<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Toko Online</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link rel="icon" type="image/jpeg" href="{{ asset('backend/img/logo.jpg') }}">
  <!-- Css -->
  <link rel="stylesheet" href="{{asset('backend\css_login\style.css')}}">
</head>

<body>

  <!-- Nav -->
  <nav class="navbar navbar-expand-lg shadow-lg">
    <div class="container">
      <a class="navbar-brand" href="#">Ataraxia</a>
      <div class="collapse navbar-collapse ms-auto" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <!-- <a class="nav-link active" aria-current="page" href="#">Home</a>
              <a class="nav-link" href="#">Product</a>
              <a class="nav-link" href="#">About</a> -->
          <a class="btn tombol text-light" href="{{route('backend.login')}}">Login</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- End Nav -->

  <!-- Main -->
  <div class="container">
    <div class="row workingspace justify-content-center">

      <div class="col-lg-5 txt">
        <h3>Welcome To <span>Ataraxia</span></h3>
        <p>Let's Experiment and Found Your <span id="type"></span></p>
        <a href="{{route('backend.login')}}" class="btn btn-primary tombol">Explore Now</a>
      </div>

      <div class="col-lg-5 img">
        <img src="{{asset('backend/img/logo.jpg')}}" alt="workingspace" class="img-fluid img shadow-lg">
      </div>

    </div>
  </div>
  <!-- End Main -->



  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script>
    var typed = new Typed('#type', {
      strings: ["T-shirt.", "Jeans.", "Style."],
      typeSpeed: 100,
      loop: true,
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>