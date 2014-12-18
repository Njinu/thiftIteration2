  <body style="background: url('<?php echo base_url()."assets/ThriftshopTheme/img/hd-wallpaper-6.jpg"?>') no-repeat  ;">
  	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
   <nav style="background-color: rgba(0, 0, 0, 0.9);" class="navbar navbar-default navbar-fixed-top">
    <div class="container">

      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a style="font-family: 'Kristi', cursive;font-weight: 300;color:white; " class="navbar-brand page-scroll" href='<?php echo base_url()."index.php"?>'>LE Vibe</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul  class="nav navbar-nav navbar-right">
          <li class="hidden">
            <a href="#page-top"></a>
          </li>

          <li class="page-scroll">
            <a  href='<?php echo base_url()."index.php/". "news"?>'>Info Bytes</a>
          </li>

          <li class="page-scroll">
            <a  href='<?php echo base_url()."index.php/". "store"?>'>Le Store</a>
          </li>                      

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Create<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href='<?php echo base_url()."index.php/". "news/create"; ?>' >Info bytes</a></li>
              <li><a   href='<?php echo base_url()."index.php/". "store/create"; ?>'>Products</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">View<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href='<?php echo base_url()."index.php/". "admin/vieworders"; ?>' >Orders</a></li>
              
            </ul>
          </li>
        </ul>
      </div>
   </ul>
  </div>
</div>
</nav>

<div class="container" style="margin-top:10%;">
<div class="col-md-6 col-md-offset-3" style="background-color:rgba(1000, 1000, 1000, 0.6); border-radius:20px; ">
<h2 class="articlehead" style="margin-bottom:2%;">Create an Infobyte</h2>

<?php echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>
<div class="container">
  <div class="col-md-4">
<input class="btn btn-info" type="file" name="userfile" size="20" />
</div>
<div class="col-md-2">
<input  class="btn btn-info" type="submit" value="upload" />
</div>
</div>
</form>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create') ?>

<input  type="input" class="form-control" placeholder="Enter title" name="title" /><br />

<input type="input" name="catchphrase" class="form-control" placeholder="Enter Catchphrase" /><br />

<textarea class="form-control" rows="15" placeholder="Enter Info Byte"  name="text"></textarea><br />

<input type="date" name="date" class="form-control" placeholder="Today's Date" /><br />

<center><input class="btn btn-info" type="submit" name="submit" value="Create" /></center>

</form>
</div>
</div>