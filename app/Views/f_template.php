<!DOCTYPE html>
<html>

<head>
  <title>Test Shorturl</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link href="/css/bootstrap.min.css " rel="stylesheet">
  <link href="/css/bootstrap-responsive.min.css" rel="stylesheet">

  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
  <link href="/css/font-awesome.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
  <link href="/css/pages/dashboard.css" rel="stylesheet">
  <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
  
</head>

<body>

  <?php echo $this->include('navbar') ?>
  <?php //$this->renderSection('listshorturl'); 
  ?>

  <div class="">
    <div class="main-inner">
      <div class="container">
        <div class="row">
          <?php echo $this->include($page); ?>
        </div>
      </div>
    </div>
  </div>

  <!-- /footer -->
  <!-- Le javascript
================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="/js/jquery-1.7.2.min.js"></script>
  <script src="/js/bootstrap.js"></script>
  <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="/js/base.js"></script>
  <script src="/js/dashboard.js"></script>

  <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
</body>

</html>