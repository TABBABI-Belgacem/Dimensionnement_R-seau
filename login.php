<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>LOGIN</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/shop-item.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Navigation -->
        <?php // include("nav.php"); ?>
 <header id="header_outer">
            <div class="container">
                <div class="header_section">
                    <div class="logo"><a href="javascript:void(0)"><img src="logott.png" style="width: 100px" alt=""></a></div>

                    <a class="res-nav_click animated wobble wow"  href="javascript:void(0)"><i class="fa-bars"></i></a> </div>
            </div>
        </header>
        <!-- Page Content -->
        <div class="container">
  <h2>Connexion</h2>
            <div class="row">

               
 <?php
                            if (isset($_POST['login'])) {
                                $login = $_POST['login'];
                                $pwd = $_POST['pwd'];

                                if (($login == "admin") && ($pwd == "admin")) {
                                    $_SESSION['user_connect'] = $login;
                                    echo "<script>window.location='index.html'</script>";
                                } else {
                                    echo "<script>alert('login ou mot de passe incorrect');</script>";
                                    echo "<script>window.location='login.php'</script>";
                                }
                            }
                            ?>
                <div class="col-md-12">
                    <img src="pic.png" align=right>
                  <form action="" method="post" role="form" class="contactForm">
                                <div class="col-md-3 mb-3">
                                    <input type="text" name="login" class="form-control is-invalid" id="name" placeholder="Nom d'utilisateur" data-rule="minlen:4" data-msg="Nom d'utilisateur" required/><br>
                                    <div class="validation"></div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <input type="password" class="form-control input-text" name="pwd" id="email" placeholder="Mot de passe" data-rule="email" data-msg="Mot de passe" required/>
                                    <div class="validation"></div>
                                    <br><button type="submit" class="btn btn-success">Connexion</button>
                                </div>
                                
                            </form>






















































                </div>

            </div>

        </div>
        <!-- /.container -->

        <div class="container">

            <hr>

            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script>
                                    function calculer_bandwidth() {
                                        var nbr_abonne = parseInt(document.getElementById('nbr_abonne').value);
                                        var heure_charge = parseFloat(document.getElementById('heure_charge').value);
                                        var appel_moyenne = parseInt(document.getElementById('appel_moyenne').value);
                                        var nbr_message = parseInt(document.getElementById('nbr_message').value);
                                        var taille_message = parseInt(document.getElementById('taille_message').value);

                                       

                                        var total = nbr_abonne * heure_charge / appel_moyenne * nbr_message * taille_message * 8 / 0.7 / 1.6 / 1000;
                                        document.getElementById('total').value = total;
                                    }

        </script>
    </body>

</html>
