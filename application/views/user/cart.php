<script type="text/javascript">
//Squar'd is a little script written for GoCart to help get the product images squar'd up.

$.fn.squard = function(dim, container){

//dim is the square dimensions you want to match
img	= $(this);

var newImg=document.createElement("img");

newImg.setAttribute('src', img.attr('src'));

if(img.innerHeight() == img.innerWidth())
{
	newImg.style.width	= dim+'px';
	newImg.style.height	= dim+'px';
}
else if(img.innerHeight() > img.innerWidth())
{
	newImg.style.height	= dim+'px';
}
else
{
	newImg.style.width	= dim+'px';
	
	//find top margin
	//newImg.style.marginTop = (dim - newImg.height)/2+'px';
	
}

newImg.setAttribute('src', img.attr('src'));

if(img.innerHeight() == img.innerWidth())
{
	newImg.style.width	= dim+'px';
	newImg.style.height	= dim+'px';
}
else if(img.innerHeight() > img.innerWidth())
{
	newImg.style.height	= dim+'px';
}
else
{
	newImg.style.width	= dim+'px';
	
	//find top margin
	//newImg.style.marginTop = (dim - newImg.height)/2+'px';	
}

container.html(newImg);

newImg.onload = function()
{
	img2	= container.children().eq(0);
	if(img2.innerHeight() < dim)
	{
		margin = (dim-img2.innerHeight())/2;

		img2.css('margin-top', margin+'px');
	}
}

};

$.fn.equalHeights = function(){
	var max_height = 0;
	$(this).each(function(){
		max_height = Math.max($(this).height(), max_height);
	});
	$(this).each(function(){
		$(this).height(max_height);
	});
};
</script>

<style type="text/css">
body {
	margin-top:60px;
}

@media (max-width: 979px) {
	body {
		margin-top:0px;
	}
}


img.responsiveImage
{
	width: 100%;
}

.price-slash {
	text-decoration:line-through;
	font-size:.9em;
	color:#999;
}

.price-sale {
	font-weight:bold;
	color:#ff753f;
}

.price-reg {
	font-weight:bold;
	color:#38586f;
}

.product-price {
	color:#ffa800;
}

/* Footer
-------------------------------------------------- */
.footer {
	margin-top: 45px;
	padding: 35px 0 36px;
	border-top: 1px solid #e5e5e5;
}
.footer p {
	margin-bottom: 0;
	color: #555;
}

/* Hide Related products from the responsive design */
@media (max-width: 767px) {
	.desktop {
		display:none;
	}
}

@media (min-width: 767px) {
	.mobile {
		display:none;
	}

}

.sku-pricing div{
	color:#999;
	text-transform:uppercase;
	font-size:14px;
}

.out-of-stock div{
	background-color:#eee;
	font-family: 'Oswald', sans-serif;
	color:#858585;
	text-transform:uppercase;
	text-align:center;
	padding:12px 15px;
	font-size:22px;
	margin:0px 0px 0px 45px;
}

.product-cart-form
{
	background-color:#eee;
	border:1px solid #ddd;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	padding:20px 0px 10px;
}

/* My Account */
.my-account-box {
	border:1px solid #eee;
	background-color:#f2f2f2;
	padding:5px 20px;
	margin:10px -20px 5px;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}

.hide {
	display:none;
}

.category_container .span3{
	overflow:hidden;
}

.category_container .span3 div{
	padding-bottom:9999px;
	margin-bottom:-9989px;
}

.product-image {
	display:table;
	width:100%;
}

.product .thumbnail {
	height:150px;
	vertical-align:middle;
	text-align:center;
	display: table-cell;
	width:100%;
	vertical-align: middle; 
	text-align: center; 
}

.product .thumbnail img {
	max-height:150px;
	display:inline;
	margin:auto;
}
</style>

<body>


	<div class="container">






		<div class="page-header">
			<h2>Your Cart</h2>
		</div>
		<form action="http://demo.gocartdv.com/cart/update_cart" method="post" accept-charset="utf-8" id="update_cart_form">    
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th style="width:10%;">SKU</th>
						<th style="width:20%;">Name</th>
						<th style="width:10%;">Price</th>
						<th>Description</th>
						<th style="width:10%;">Quantity</th>
						<th style="width:8%;">Totals</th>
					</tr>
				</thead>

				<tfoot>
					<tr>
						<td colspan="5"><strong>Subtotal</strong></td>
						<td id="gc_subtotal_price">$ 999.00</td>
					</tr>




					<tr>
						<td colspan="5"><strong>Grand Total</strong></td>
						<td>$ 999.00</td>
					</tr>
				</tfoot>

				<tbody>
					<tr>
						<td></td>
						<td>Hi-Tech CTR</td>
						<td>$ 600.00</td>
						<td>
							<div><span class="gc_option_name">Material:</span> Steel</div>					</td>

							<td style="white-space:nowrap">

								<div class="control-group">
									<div class="input-group">
										<input  value="1" size="3" type="number" class="form-control">
										<span class="input-group-addon" style="background-color:#d9534f"><a style="color:white;"><i class="glyphicon glyphicon-remove"></i></a></span>
									</div>
								</div>

								

							</td>
							<td>$ 600.00</td>
						</tr>

					
						</tbody>
					</table>    

					<div class="row">
						<div class="span5">
							<label>If you have a coupon, enter the code here:</label>
							<input type="text" name="coupon_code" class="span3" style="margin:0px;">
							<input class="span2 btn" type="submit" value="Apply Coupon"/>

						</div>

						<div class="span7" style="text-align:right;">
							<input id="redirect_path" type="hidden" name="redirect" value=""/>

							<input class="btn" type="submit" onclick="" value="Login"/>
							<input class="btn" type="submit" onclick="" value="Register Now"/>
							<input class="btn" type="submit" value="Update Cart"/>

							<input class="btn btn-large btn-primary" type="submit" onclick="" value="Checkout"/>

						</div>
					</div>

				</form>
				<footer class="footer">



				</footer>
			</div>

		</body>