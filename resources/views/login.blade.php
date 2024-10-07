<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Monitoring Jembatan</title>

  <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/templates/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/templates/modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('assets/templates/modules/bootstrap-social/bootstrap-social.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/templates/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/templates/css/components.css') }}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  @include('sweetalert::alert')
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="{{ asset('assets/images/logo.png') }}" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="{{ route('post.login') }}" class="needs-validation" novalidate="">
                  @csrf
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" placeholder="Email anda" required autofocus>
                    <div class="invalid-feedback">
                      Masukkan email anda
                    </div>
                  </div>

                  <div class="form-group">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password anda" tabindex="2" required>
                    <div class="invalid-feedback">
                      Masukkan password anda
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Masuk
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
                Copyright &copy;
                <script>
                  var CurrentYear = new Date().getFullYear()
                  document.write(CurrentYear)
                </script> 
                , designed & developed by <a href="#" class="text-muted">Politeknik Negeri Bengkalis</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('assets/templates/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/templates/modules/popper.js') }}"></script>
  <script src="{{ asset('assets/templates/modules/tooltip.js') }}"></script>
  <script src="{{ asset('assets/templates/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/templates/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('assets/templates/modules/moment.min.js') }}"></script>
  <script src="{{ asset('assets/templates/js/stisla.js') }}"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{ asset('assets/templates/js/scripts.js') }}"></script>
  <script src="{{ asset('assets/templates/js/custom.js') }}"></script>
</body>
</html>