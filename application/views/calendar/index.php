

<style type="text/css">
.calendar {
	font-family: Arial, Verdana, Sans-serif;
	width: 100%;
	border-collapse: collapse;
}

.calendar tbody tr:first-child th {
	color: #505050;
	margin: 0 0 10px 0;
}

.day_header {
	font-weight: normal;
	text-align: center;
	color: #757575;
	font-size: 16px;
}

.calendar td {
	width: 14%; /* Force all cells to be about the same width regardless of content */
	border:1px solid #CCC;
	height: 100px;
	vertical-align: top;
	font-size: 13px;
	padding: 0;
}

.calendar td:hover {
	background: #F3F3F3;
}

.day_listing {
	display: block;
	text-align: right;
	font-size: 13px;
	color: #2C2C2C;
	padding: 5px 5px 0 0;
}

div.today {
	background: #E9EFF7;
	height: 100%;
} 

</style>

<?php $selectedyear = null; ?>

<div class="container" style="margin-top:3%;">

	<div class="col-md-2" style="margin-top:4%;">
		
		<div class="dropdown dropdownyear">
			<button class="btn btn-default dropdown-toggle" type="button" name="yeardrop" id="yeardrop" data-toggle="dropdown" aria-expanded="true">
				Select Year
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">

				<?php foreach ($years as $cal_year): $date = date('m');?>

				<li role="presentation"><a id="year" role="menuitem" tabindex="-1" href='<?php echo base_url()."index.php/". "calendar/showcal/"."$cal_year"."/$date"?>'><?php echo $cal_year ?></a></li>
				<input type="hidden" id="year" name="year" class="form-control" placeholder="Enter Catchphrase" />
				
			<?php endforeach ?>
		</ul>
	</div>
	<input style="visibility: hidden;" class="btn btn-info" type="submit" id="yearsubmit" name="submit" value="Create" />

	<div class="dropdown dropdownmonth">
		<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
			Select Month
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">

			<?php foreach ($months as $cal_month): $selectedyear =$this->session->userdata('item'); $calmonth = sprintf("%02s", $cal_month); ?>

			<?php  
			if($cal_month != "There are no events scheduled yet"){
				$monthNum = $cal_month;
				$monthName = date("F", mktime(0, 0, 0, $monthNum, 10));
			}  else{
				$monthName = $cal_month;
			}
			

			?>
			<?php if($cal_month != "There are no events scheduled yet"){ ?>
			<li role="presentation"><a id="month" role="menuitem" tabindex="-1" href='<?php echo base_url()."index.php/". "calendar/showcal/"."$selectedyear"."/$calmonth"?>'><?php echo $monthName ?></a></li>
			<?php } else {?>
			<li role="presentation"><a id="month" role="menuitem" tabindex="-1" ><?php echo $monthName ?></a></li>
			<?php }?>
			<input type="hidden" id="month" name="month" class="form-control" placeholder="Enter Catchphrase" />

		<?php endforeach ?>
	</ul>
</div>
<input style="visibility: hidden;" class="btn btn-info" type="submit" id="monthsubmit" name="submit" value="Create" />


</div>

<div class="col-md-10"><?php echo $calendar;?></div>

</div>


<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>
<script type="text/javascript">

$(document).ready(function(){
	$(".dropdownyear li").click(function (){

		
		$('input[name=year]').val($(this).text());
		$("#yearsubmit").click()

	});
});

$(document).ready(function(){
	$(".dropdownmonth li").click(function (){

		$('input[name=month]').val($(this).text());
		$("#monthsubmit").click()

	});
});

</script>	