<!DOCTYPE html>
<html>
<head>
  <title>Simple Blog</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
  
  <div class="container">
    <div class="banner-wrapper">
      <div class="banner">
        <center><img src="{{ asset('images/banner5.gif') }}"></center>
      </div>
    </div>
    
    <nav>
      <div class="nav-wrapper">
        <div class="container">
          <ul>
            <li>
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#">Gallery</a>
            </li>
            <li>
              <a href="#">Random</a>
            </li>
            <li>
              <a href="#">About</a>
            </li>
            <li>
              <a href="#">Add Blog</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="main-content">
      <div class="row">
        <div class="col-md-9">
          <div class="posts-container">
            @yield('content')
          </div>
        </div>
        <div class="col-md-3">
          <div class="widgets">
            <h4>The Author</h4>

            <img class="img-profile" src="{{ asset('images/profile.jpg') }}">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</body>
<footer class="container">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        {{-- <h5>Footer Content</h5>
        <p>You can use rows and columns here to organize your footer content.</p> --}}
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      © 2014 Copyright Text
    </div>
  </div>
</footer>
</html>