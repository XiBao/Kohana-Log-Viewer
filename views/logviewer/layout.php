<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="author" content="syd[at]amoebafactor.com">
    <meta name="copyright" content="北京喜宝动力网络技术有限公司, 2012.">
    <meta name="design" content="Syd Xu, 2012.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if lt IE 9]>
    <script src="/media/js/html5shiv.js"></script>
    <![endif]-->
    <!-- Le styles -->
    <link rel="icon" type="image/png" href="/media/img/favicon.ico" />
    <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="/media/img/favicon.ico" /><![endif]-->
    <title>喜宝系统Logs</title>
    
    <link type="text/css" href="/media/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="/media/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="/media/css/main.css" rel="stylesheet">
    <script type="text/javascript"> BASEURL = "<?php echo URL::base() ?>";</script>
    <script src="/media/js/jquery.min.js"></script>

</head>

<body class='white' style="padding-top:90px">
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a href="<?=Subdomain_URL::site('/logviewer', 'sem')?>" class="brand">喜宝LogViewer<small class="label label-important">beta</small></a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <?php include(Kohana::find_file('views/logviewer', 'monthlist')); ?>
        <div class="row-fluid">
            <div class="span2">
                <?php include(Kohana::find_file('views/logviewer', 'daylist')); ?>
            </div>
            <div class="span10">
                <?php if(isset($content)) echo $content; ?>
            </div>
        </div>
    </div>
    
    <footer class="footer">
        <div class="container">
            <p>&copy; 北京喜宝动力网络技术有限公司</p>
        </div>
    </footer>
</body>
</html>
