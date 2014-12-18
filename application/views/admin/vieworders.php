
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



<div class="container-fluid" style="">
  <table class="table table-bordered table-hover table-responsive"  style="margin-top:10%;" border="0" >

    
      <tr class="info"> 
      <th>Name</th>
      <th>Last Name</th>
      <th>Contact</th>
      <th >Gender</th>
       <th>Email</th>
      <th>Country</th>
      <th>Province</th>
      <th >City</th>
       <th>Suburb</th>
      <th>Street Address</th>
      <th>Post Code</th>
      <!-- <th >Company</th>
       <th>Vat</th> -->
      <th>Product</th>
      <th>Quantity</th>
      <th >Total Cost</th>
    </tr>
 

<tbody>
  <?php foreach ($order as $order_item): ?>

<tr  class="active">
  <td> 
    <?php echo $order_item['firstName'] ?>
  </td>
  <td> 
    <?php echo $order_item['lastName'] ?>
  </td>
  <td> 
    <?php echo $order_item['contact'] ?>
  </td>
  <td> 
    <?php echo $order_item['gender'] ?>
  </td>
  <td> 
    <?php echo $order_item['email'] ?>
  </td>
  <td> 
    <?php echo $order_item['country'] ?>
  </td>
  <td> 
    <?php echo $order_item['province'] ?>
  </td>
  <td> 
    <?php echo $order_item['city'] ?>
  </td>
  <td> 
    <?php echo $order_item['suburb'] ?>
  </td>
  <td> 
    <?php echo $order_item['streetAddress'] ?>
  </td>
  <td> 
    <?php echo $order_item['postCode'] ?>
  </td>
  <!-- <td> 
    <?php echo $order_item['companyName'] ?>
  </td>
  <td> 
    <?php echo $order_item['vatNumber'] ?>
  </td> -->
  <td> 
    <?php echo $order_item['product'] ?>
  </td>
  <td> 
    <?php echo $order_item['quantity'] ?>
  </td>
  <td> 
    <?php echo $order_item['totalCost'] ?>
  </td>
</tr>



<?php endforeach; ?>
</tbody>

</table>

<!-- <div>
  <?php $opts3 = 'class = "btn btn-info btn-lg col-md-2"'; ?>
  <p><?php echo form_submit('', 'Update your Cart',$opts3); ?></p>
  <a style="margin-left:3%;" href='<?php echo base_url()."index.php/order"?>' class="btn btn-lg btn-info col-md-2 ">Place Order</a>
  <div class="col-md-5"></div>
  <a style="margin-left:5%;" href='<?php echo base_url()."index.php/"?>' class="btn btn-lg btn-info col-md-2 col-md-offset-5 ">Back </a>
</div> -->






<br>


</div>