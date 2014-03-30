<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>CICH Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="assets/css/adm.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="assets/css/main.css">


    <script src="assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="packages/ckeditor/ckeditor.js"></script>
</head>
<body>

<div class="navbar navbar-fixed-top">
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <span class="brand">CICH Admin</span>

                <div class="nav-collapse collapse">

                    <ul class="nav">
                        <li class="active"><a href="#"><i class="icon-home icon-black"></i> Dashboard</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class="icon-edit icon-black"></i>
                                Dropdown <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Page One</a></li>
                                <li><a href="#">Page Two</a></li>
                                <li><a href="#">Page Three</a></li>
                            </ul>
                        </li>

                        <li><a href="#"><i class="icon-user icon-black"></i>Sample 1</a></li>
                        <li><a href="#"><i class="icon-pencil icon-black"></i>Sample 2</a></li>
                        <li><a href="#"><i class="icon-file icon-black"></i>Sample 3</a></li>

                    </ul>

                    <ul class="nav pull-right settings">
                        <li class="dropdown">
                            <ul class="dropdown-menu">
                                <li><a href="#">Account Settings</a></li>
                                <li class="divider"></li>
                                <li><a href="#">System Settings</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav pull-right settings">
                        <li><a href="#" class="tip icon logout" data-original-title="Settings"
                               data-placement="bottom"><i class="icon-large icon-cog"></i></a></li>
                        <li class="divider-vertical"></li>
                        <li><a href="#" class="tip icon logout" data-original-title="Logout" data-placement="bottom"><i
                                    class="icon-large icon-off"></i></a></li>
                    </ul>

                    <ul class="nav pull-right settings">
                        <li class="divider-vertical"></li>
                    </ul>

                    <p class="navbar-text pull-right">
                        Welcome <strong>Admin</strong>
                    </p>

                    <ul class="nav pull-right settings">
                        <li class="divider-vertical"></li>
                    </ul>

                    <div class="pull-right">
                        <form class="form-search form-inline" style="margin:5px 0 0 0;" method="post">
                            <div class="input-append">
                                <input type="text" name="keyword" class="span2 search-query" placeholder="Search">
                                <button type="submit" class="btn"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div>

                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span2 pull-left">
        <div class="well sidebar-nav">
            <ul class="nav nav-tabs nav-stacked">
                <li class="nav-header">Navigation</li>
                <li class="active"><a href="#">Page Editor</a></li>
                <li><a href="#">Link Two</a></li>
                <li><a href="#">Link Three</a></li>
                <li><a href="#">Link Four</a></li>
            </ul>
        </div>
    </div>
    <!--/.well -->
    <!--/span3-->

    <div class="span10 pull-left">

        <div class="well">
            <form action="sample_posteddata.php" method="post">
                <p>
                    <label for="editor">
                        Editor:
                    </label>
                    <textarea class="ckeditor" cols="80" id="editor" name="editor1" rows="10"></textarea>
                </p>

                <p>
                    <input type="submit" value="Submit">
                </p>
            </form>

        </div>

    </div>
    <!--/span9-->

</div>
<!--/row-fluid-->

<hr>

<footer align="center">
    <p>Copyright &copy; 2013 <strong>Company Name</strong></p>
</footer>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/jquery-1.8.3.min.js"><\/script>')</script>
<script src="assets/js/bootstrap.min.js"></script>
<script>
    // enable tooltips
    $(".tip").tooltip();
</script>

</body>
</html>
