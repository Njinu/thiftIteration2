
<?php foreach ($list as $calendar_item): $newitemdate = $calendar_item['date_created']; $findsummary =  $calendar_item['description'];  ?>

<?php 

		$slug = $calendar_item['slug'];	      
            $dateString=date($newitemdate);
            $t = explode('-',$dateString);
            $newitemdateYEAR = $t[0]; //month
            $newitemdateMON= $t[1]; //day
            $newitemdateDAY = $t[2]; //year
             $monthNum = $newitemdateMON;
 $monthName = date("F", mktime(0, 0, 0, $monthNum, 10));
 $thenewitemdateMON = $monthName; // Output: May
 $result = substr($thenewitemdateMON, 0, 3);
        ?> 
        
        <style>
  img {display: block; margin: 0 auto;}
</style>

  <div class="jumbotron">
<!-- <picture>
  <source 
    media="(max-width: 650px)"
    srcset='<?php echo base_url();?>uploads/<?php echo $newitemLoc ?>'>
  <source 
    media="(max-width: 465px)"
    srcset="images/kitten-sitting.png">
  <img 
    src='<?php echo base_url();?>uploads/<?php echo $newitemLoc ?>' 
    alt="a cute kitten">
</picture> -->
<br>
  <h3><?php echo $calendar_item['name'] ?> | <?php echo $newitemdateDAY ; ?> <?php echo $monthName; ?></h3>
  <p><?php echo $calendar_item['description'] ?> </p>
  <a href=''></a>
  <p> <!-- <a <?php if(!$slug ){echo "";}else{echo "href='news/$slug'";}?>><?php if(!$slug ){ echo "coming soon";}else{echo "Read more...";} ?></a> -->
</p>
</div>

        <?php endforeach ?>
        


