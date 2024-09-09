<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Three Column Portfolio Template for Bootstrap 3</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS for the '3 Col Portfolio' Template -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://startbootstrap.com">Start Bootstrap</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/services">Services</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

      @yield('content')

    <div class="container">

      <hr>
    
      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; Company <span id="getCurrentDate"></span></p>
          </div>
        </div>
      </footer>
      
    </div><!-- /.container -->
    
    </body>
    
    </html>

