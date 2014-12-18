
<div class="container" style="margin-top:10%">
<div class="col-md-12">
<?php echo form_open('user/createItem') ?>

  <div class="form-group">  
    <input type="text" class="form-control" id="ItemName" name="ItemName" placeholder="Enter Item Name">
  </div>
  
  <div class="form-group"> 
    <input type="text" class="form-control" id="ItemDescription"  name="ItemDescription" placeholder="Enter Item Description">
  </div>
  
  <div class="form-group"> 
    <input type="text" class="form-control" id="ItemCategory"  name="ItemCategory" placeholder="Enter Item Category">
  </div>
  
  <div class="form-group"> 
    <input type="number" class="form-control" id="ItemPrice" name="ItemPrice" placeholder="Enter Item Price">
  </div>
  
  <div class="form-group">
    <label for="ItemPicture">File input</label>
    <input type="file" id="ItemPicture">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>

 <script src='<?php echo base_url()."assets/ThriftshopTheme/js/site.js"?>'></script>
 <script src='<?php echo base_url()."assets/ThriftshopTheme/js/ajaxfileupload.js"?>'></script>