<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/themes/pages/assets/images/favicon.png">
    <title>Captain</title>
    <link rel="stylesheet" type="text/css" href="/themes/pages/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="content-wrapper">
  <div class="navbar navbar-default default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <div class="header-left">
          <ul class="social">
            <li> <a href="#"><i class="ion-social-facebook"></i></a> </li>
            <li> <a href="#"><i class="ion-social-twitter"></i></a> </li>
            <li> <a href="#"><i class="ion-social-instagram"></i></a> </li>
            <li> <a href="#"><i class="ion-social-vimeo"></i></a> </li>
          </ul>
        </div>
        <!-- /.header-left -->
        <div class="header-right">
          <div class="search-form">
            <form action="#">
              <fieldset>
                <input id="search" placeholder="Search" />
              </fieldset>
            </form>
          </div>
        </div>
        <!-- /.header-right -->
        <div class="nav-bars-wrapper">
          <div class="nav-bars-inner">
            <div class="nav-bars" data-toggle="collapse" data-target=".navbar-collapse"><span></span></div>
          </div>
          <!-- /.nav-bars-inner --> 
        </div>
        <!-- /.nav-bars-wrapper --> 
      </div>
      <!-- /.navbar-header -->
      
      <div class="nav-wrapper">
        <div class="navbar-collapse collapse">
          <?= menu('main', 'theme::' . $theme->folder . '.partials.menu') ?>
        </div>
        <!--/.nav-collapse --> 
      </div>
      <!--/.nav-wrapper --> 
      
    </div>
    <!--/.container-fluid --> 
  </div>
  <!-- /.navbar -->

  <div class="logo text-center"><a href="{{ url('/') }}">
    <!--img src="#" srcset="/themes/pages/assets/images/logo.png 1x, /themes/pages/assets/images/logo@2x.png 2x" alt="" /-->
    {{ setting('title') }}    
    </a><span>{{ setting('description') }}</span>
  </div>


  @yield('content')

  <div class="dark-wrapper">
    <div class="container inner">
      <h2 class="section-title text-center">Instagram Feed</h2>
      <div class="tiles instagram">
        <div id="instafeed" class="items row row-offset-0"></div>
      </div>
      <!--/.tiles -->
      
      <div class="divide30"></div>
      <div class="text-center"><a href="https://www.instagram.com/urbanshots/" class="btn">Instagram page</a></div>
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.dark-wrapper --> 
  
</div>
<!-- /.content-wrapper -->
<footer class="inverse-wrapper">
  <div class="container inner">
    <div class="row">
      <div class="col-sm-3">
        <div class="widget">
          <h3 class="widget-title section-title">Popular Posts</h3>
          <ul class="post-list">
            <li>
              <figure class="overlay small"> <a href="blog-post.html"><img src="/themes/pages/assets/images/art/a1.jpg" alt="" /> </a> </figure>
              <div class="post-content">
                <h4 class="post-title"> <a href="blog-post.html">Magna Mollis Ultricies Mauris</a> </h4>
                <div class="meta"><span class="date">12 Nov 2014</span><span class="comments"><a href="#"><i class="ion-chatbubbles"></i> 6</a></span></div>
              </div>
            </li>
            <li>
              <figure class="overlay small"> <a href="blog-post.html"><img src="/themes/pages/assets/images/art/a2.jpg" alt="" /> </a> </figure>
              <div class="post-content">
                <h4 class="post-title"> <a href="blog-post.html">Ornare Nullam Risus Cursus</a> </h4>
                <div class="meta"><span class="date">12 Nov 2014</span><span class="comments"><a href="#"><i class="ion-chatbubbles"></i> 5</a></span></div>
              </div>
            </li>
            <li>
              <figure class="overlay small"> <a href="blog-post.html"><img src="/themes/pages/assets/images/art/a3.jpg" alt="" /> </a> </figure>
              <div class="post-content">
                <h4 class="post-title"> <a href="blog-post.html">Euismod Nullam Fusce Dapibus</a> </h4>
                <div class="meta"><span class="date">12 Nov 2014</span><span class="comments"><a href="#"><i class="ion-chatbubbles"></i> 3</a></span></div>
              </div>
            </li>
          </ul>
          <!-- /.post-list --> 
        </div>
        <!-- /.widget --> 
      </div>
      <!-- /column -->
      
      <div class="col-sm-3">
        <div class="widget">
          <h3 class="widget-title section-title">Recent Tags</h3>
          <ul class="tag-list">
            <li> <a href="#" class="btn">Blog</a> </li>
            <li> <a href="#" class="btn">Photography</a> </li>
            <li> <a href="#" class="btn">Illustation</a> </li>
            <li> <a href="#" class="btn">Fun</a> </li>
          </ul>
        </div>
        <!-- /.widget -->
        <div class="widget">
          <h3 class="widget-title section-title">Top Categories</h3>
          <ul class="circled">
            <li> <a href="#">Lifestyle (21)</a> </li>
            <li> <a href="#">Photography (19)</a> </li>
            <li> <a href="#">Journal (16)</a> </li>
            <li> <a href="#">Works (7)</a> </li>
          </ul>
        </div>
        <!-- /.widget --> 
      </div>
      <!-- /column -->
      
      <div class="col-sm-3">
        <div class="widget">
          <h3 class="widget-title section-title">Get in Touch</h3>
          <address>
          <strong>Juno, Inc.</strong><br>
          Moon Street Light Avenue, 14/05 <br>
          Jupiter, JP 80630<br>
          <abbr title="Phone">P:</abbr> (123) 456-7890 <br>
          <abbr title="Email">E:</abbr> <a href="mailto:#">first.last@example.com</a>
          </address>
        </div>
        <!-- /.widget -->
        <div class="widget">
          <h3 class="widget-title section-title">Elsewhere</h3>
          <ul class="social">
            <li> <a href="#"><i class="ion-social-rss"></i></a> </li>
            <li> <a href="#"><i class="ion-social-facebook"></i></a> </li>
            <li> <a href="#"><i class="ion-social-twitter"></i></a> </li>
            <li> <a href="#"><i class="ion-social-instagram"></i></a> </li>
            <li> <a href="#"><i class="ion-social-vimeo"></i></a> </li>
            <li> <a href="#"><i class="ion-social-whatsapp"></i></a> </li>
          </ul>
        </div>
        <!-- /.widget --> 
        
      </div>
      <!-- /column -->
      
      <div class="col-sm-3">
        <div class="widget">
          <h3 class="widget-title section-title">About Me</h3>
          <figure> <img src="/themes/pages/assets/images/art/about.jpg" alt="" /> </figure>
          <div class="divide10"></div>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula lacinia.</p>
        </div>
        <!-- /.widget --> 
      </div>
      <!-- /column --> 
      
    </div>
    <!-- /.row --> 
    
  </div>
  <!-- .container -->
  
  <div class="sub-footer">
    <div class="container inner">
      <p class="text-center">© <?= date('Y'); ?> <?= setting('title')  ?>. All rights reserved. Theme by <a href="http://elemisfreebies.com">elemis</a></p>
    </div>
    <!-- .container --> 
  </div>
  <!-- .sub-footer --> 
  
</footer>
<!-- /footer --> 
<script type="text/javascript" src="/themes/pages/app.js"></script>
</body>
</html>