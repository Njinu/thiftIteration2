<p>Hello</p> 
        <link href="<?php echo base_url(); ?>resources/css/dropzone.css" type="text/css" rel="stylesheet" />
<script src="<?php echo base_url(); ?>resources/dropzone.js"></script>

          
              <script>
              $(".sender").click(function(){
 $(".dropzone").show();
});
              </script>

<h4>r Upload</h4>

<form action="<?php echo site_url('/dropzone/upload/').'/'.$product_id; ?>" class="dropzone"  >
   <input type="hidden" id ="product_id" value="<?php  echo $product_id; ?>">
    <button  type="submit" id="sender"  class="btn btn-default">Submit</button>
</br>