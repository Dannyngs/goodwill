
  <!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?php echo $system[$current_lang.'_site_title']?></title>

    <!-- Bootstrap -->
    <link href="_/css/bootstrap.min.css" rel="stylesheet">

    <link href="_/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="header">
     <div class="container">
       <div class="row mtb50">
         <div class="col-sm-6 wdall"><img src="_/images/logo1.png"></div>
         <div class="col-sm-6 wdall"><img src="_/images/logo2.png"></div>
       </div>

      <nav class="navbar navbar-default">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
         <div class="lan2 visible-xs">
         <a href="index.php?lang=chi">繁</a> | <a href="index.php?lang=eng">ENG</a>
      </div>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand  visible-xs" href="#"><img class="vs" width="180" src="images/logo-p.png"></a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php include_once "nav.php" ;?>
      </ul>
      <div class="lan hidden-xs">
         <a href="index.php?lang=chi">繁</a> | <a href="index.php?lang=eng">ENG</a>
      </div>

    </div><!-- /.navbar-collapse -->

</nav>
</div>
    </div>
