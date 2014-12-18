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
<h2 class="articlehead" style="margin-bottom:2%;">Create Calendar Event</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('calendar/create') ?>

<input  type="date" class="form-control" id="date" placeholder="Enter title" name="date" /><br />

<textarea class="form-control" rows="5" placeholder="Enter Event Name"  name="event"></textarea><br />

<center><input class="btn btn-info" type="submit" name="submit" value="Create" /></center>

</form>
</div>
</div>