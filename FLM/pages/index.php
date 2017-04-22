<?php
include('../include/login.php'); 

if(isset($_SESSION['login_user']) )
{
	header("location:../admin");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php include('../include/header.php'); ?>
</head>

<body>

    <div id="wrapper">

        <?php// include('../include/faculty-nav.php'); ?>

        <div class="container">
         <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Faculty Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="username" type="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <?php echo $error; ?>
                                <!-- Change this to a button or input when using this as a form -->
                                <input name="submit_login" type="submit" class="btn btn-lg btn-success btn-block" value="Login">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- /container -->

    </div>
    <!-- /#wrapper -->

    <?php include('../include/javascripts.php'); ?>
</body>

</html>
