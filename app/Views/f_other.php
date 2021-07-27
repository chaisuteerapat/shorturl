<!DOCTYPE html>
<html>

<head>
  <title>Test Shorturl</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link href="/css/bootstrap.min.css " rel="stylesheet">
  <link href="/css/bootstrap-responsive.min.css" rel="stylesheet">

  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
  <link href="/css/pages/dashboard.css" rel="stylesheet">
</head>

<body>

  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="/backend">
          Shorturl
        </a>
      </div>
    </div>
  </div>


  <div class="">
    <div class="main-inner">
      <div class="container">
        <div class="row">
          <?php echo $this->include($page); ?>
        </div>
      </div>
    </div>
  </div>


  <script src="/js/jquery-1.7.2.min.js"></script>
  <script src="/js/bootstrap.js"></script>
  <script src="/js/base.js"></script>
  <script src="/js/homepage.js"></script>

  <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
</body>

</html>