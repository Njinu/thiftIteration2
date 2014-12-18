
    <style type="text/css">
    body {
        padding-top: 40px;
        padding-bottom: 40px;
        background: url('<?php echo base_url()."assets/ThriftShoptheme/img/logincover.jpg"?>') center center no-repeat  ;
    }



    .customwell{
        min-height: 20px;
border-radius: 20px;
padding: 19px;
margin-bottom: 20px;
background-color: rgba(255,255,255,0.3);
border: 1px solid #e3e3e3;
border-radius: 15px;
-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
    }

    .form-signin {
        max-width: 330px;
       padding: 18px;
       padding-bottom: 30px;
        margin: 0 auto;
    }
    .form-signin .form-signin-heading{
        padding-bottom: 10px;
        margin-bottom: 20px;
        border-bottom: 1px #ccc dotted;
        text-align: center;
        font-weight: thin;
    }
    .form-signin .footer{
        padding-top: 10px;
        margin-top: 20px;
        border-top: 1px #ccc dotted;
        font-weight: 600;

    }

    .onhover{
       background-image: -webkit-gradient( linear, left bottom, left top, color-stop(0, #38AD5F), color-stop(1, #2AB558) );
        height: 42px;
width: 150px;
padding: 0;
line-height: 42px; 
font-size: 18px;
border-radius: 5px;
border: 1px solid transparent;
background: #2AB558;
text-align: center;

    }

    .onhover:hover{
        background-color:rgba(42, 181, 88, 0.8) !important;
        border-color: rgba(42, 181, 88, 0.8)!important;
    }
   
    </style>

<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:black;" role="navigation">
    <!-- 19B8FC -->
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="color:white;font-weight:200px;"><Strong>ThriftShop</strong></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li style="padding:5px; margin-right:10%;">
                        <a href="#" class="btn btn-success onhover" style="color:white;padding-top: 10px;"><i  class="fa fa-unlock"></i> Huh?</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container" style="margin-top:7%;">
<center><h1 class="mainheading" style="color:rgba(255,255,255,0.75);margin-bottom:3%;"> Welcome to Thriftshop </h1></center>

        <form class="form-signin customwell" role="form">
            <?php if (@$user_profile):  // call var_dump($user_profile) to view all data ?>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <img class="img-thumbnail" data-src="holder.js/140x140" alt="140x140" src="https://graph.facebook.com/<?=$user_profile['id']?>/picture?type=large" style="width: 50px; height: 50px;">
                        <h2><?=$user_profile['name']?></h2>
                        <a href="<?=$user_profile['link']?>" class="btn btn-lg btn-default btn-block" role="button">View Profile</a>
                        <a href="<?= $logout_url ?>" class="btn btn-lg btn-primary btn-block" role="button">Logout</a>
                    </div>
                </div>
            <?php else: ?>
                <h2 class="form-signin-heading" style="color:rgba(255,255,255,0.6);"><span style="padding:3px;">login with</span> <strong style="background-color:rgba(0, 84, 174, 0.99); padding:6px; border-radius:10px;"> <span style="color:rgba(255, 255, 255, 0.99); ">Facebook</span></strong></h2>
                <a href="<?= $login_url ?>" class="btn btn-lg btn-primary btn-block" role="button">Login</a>
            <?php endif; ?>
             

        </form>

      

    </div> <!-- /container -->
    <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>