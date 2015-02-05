<head >
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59016173-1', 'auto');
  ga('send', 'pageview');

</script>
  <?php
// Turn off error reporting
  error_reporting(0);

// Report runtime errors
  error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
  error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
  ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
  error_reporting(E_ALL & ~E_NOTICE);
  ?> 

  <?php echo script_tag('assets/ThriftshopTheme/js/jquery-1.10.2.js'); ?>

  <?php echo link_tag('assets/ThriftshopTheme/css/jquery.fancybox.css'); ?>
  <script src='<?php echo base_url()."assets/ThriftshopTheme/js/bootstrap.js"?>'></script>    

  <?php echo link_tag('assets/ThriftshopTheme/css/grid/component.css'); ?>
   <?php echo link_tag('assets/ThriftshopTheme/css/grid/demo.css'); ?>
    <?php echo link_tag('assets/ThriftshopTheme/css/grid/normalize.css'); ?>



<script src='<?php echo base_url()."assets/ThriftshopTheme/js/grid/hovers.js"?>'></script>

<script src='<?php echo base_url()."assets/ThriftshopTheme/js/grid/snap.svg-min.js"?>'></script>

  <!-- google login !-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
   <?php echo script_tag('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js'); ?>
  <?php echo script_tag('<?php echo base_url()."assets/ThriftshopTheme/js/bootstrap.js"?>'); ?>
  <?php echo link_tag('assets/ThriftshopTheme/css/sellerDash/plugins/morris.css'); ?>
    <?php echo link_tag('assets/ThriftshopTheme/css/sellerDash/sb-admin.css'); ?>  
 <?php echo script_tag('assets/ThriftshopTheme/js/notify.js'); ?>

 <?php echo script_tag('assets/ThriftshopTheme/js/jquery-1.10.2.js'); ?>

<?php echo link_tag('assets/ThriftshopTheme/css/bootstrap.css'); ?>
<script src='<?php echo base_url()."assets/ThriftshopTheme/gridGalley/masonry.pkgd.min.js"?>'></script>

  <?php echo script_tag('assets/ThriftshopTheme/js/jquery.fancybox.js'); ?>

  <script src='<?php echo base_url()."assets/ThriftshopTheme/js/jquery-1.10.2.js"?>'></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>

</head>
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="myModalLabel">Modal header</h3>
</div>
<div class="modal-body">
<p>One fine body…</p>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button class="btn btn-primary">Save changes</button>
</div>
</div>
  <?php
  if($me['id']){
  $log_id= $me['id'];
  }
  if($user_profile['id']){
    $log_id= $user_profile['id'];
  }
  if($user_me){
    $log_id=$user_me;
  }
  if($this->session->userdata('id'))
  {
    $log_id=$this->session->userdata('id');
  }
  ?>
<input type="hidden" id="sellerId" name="sellerId" value="<?php echo $log_id;?> "/>



<style>
.small_pic{
    padding:5px;
    float:left;
    border: 3px solid whitesmoke ;
    margin-top:4px;
    border-radius:3px;
}
</style>

<div style="padding-right: 0px;"class="col-md-12">
  <div id="wrapper">

    <!-- Navigation -->
    <nav style="background-color:#2f343b;"class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href='<?php echo base_url()."index.php/"?>'>Thriftshop</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $product_comment["nick_name"];?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href='<?php echo base_url()."index.php/". "user/logout"?>'><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <style>
            .myactive {
                color:#a3c756 !important;
            }

            </style>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav" style="height:100%;">
                    <li class="active">
                        <a style="padding-top: 20.5px;"class="myactive" href="<?php echo base_url(); ?>index.php/user/myStore"><i class="fa fa-fw fa-dashboard"></i> Add a post</a>
                    </li>
                    <li>
                        <a style="padding-top: 20.5px;" href="<?php echo base_url(); ?>index.php/user/get_item_view"><i class="fa fa-fw fa-edit"></i> All Posts</a>
                    </li>
                    <li>
                        <a style="padding-top: 20.5px;" href="<?php echo base_url(); ?>index.php/user/sellerdetails"><i class="fa fa-folder-open-o"></i> My Details </a>
                    </li>         
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>