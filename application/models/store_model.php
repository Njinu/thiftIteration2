<?php ob_start();
class Store_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function deletefromwish(){
		$id = $this->input->post('theproductid');
		$this->db->where('product_id', $id);
		$this->db->delete('wishlist'); 
	}

	public function rated($id,$slug){
		$userid = $id;
		$slug1 = $slug;
		$data = array(
			'email' => $userid,
			'product_slug' => $slug1 
			);

		$this->db->insert('rated', $data); 

	}

	public function getratedlist($slug){
		$id = $this->session->userdata('id');
		$query = $this->db->get_where('rated', array('email' => $id,'product_slug' => $slug));
		return $query->row_array();
	}

	public function likeup(){
		$ratedlist = $this->getratedlist($this->input->post('slug1'));

		if(!$ratedlist){
			$this->rated($this->session->userdata('id'),$slug = $this->input->post('slug1'));
			$id = $this->input->post('prodID');
			$clikes =  $this->input->post('clikes');
			$newlikes = $clikes +1;
			$data = array(
				'likes' => $newlikes
				);
			$this->db->where('id', $id);
			$this->db->update('product', $data); 
		}						
	}

	public function dislikedown(){
		$ratedlist = $this->getratedlist($this->input->post('slug2'));
		if(!$ratedlist){
		$this->rated($this->session->userdata('id'),$slug = $this->input->post('slug2'));
		$id = $this->input->post('prodID2');
		$dlikes =  $this->input->post('dlikes');
		$newdislikes = $dlikes  + 1;
		$data = array(

			'dislikes' => $newdislikes
			);
		$this->db->where('id', $id);
		$this->db->update('product', $data); 
	}
	}

	public function toprated(){
		$this->db->order_by('product.likes','desc'); 
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id ','left');
		$query = $this->db->get('',10);
		return $query->result_array();
	}

	public function get_products($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$this->db->order_by("id", "desc");
			$query = $this->db->get('product');			
			return $query->result_array();
		}

		$query = $this->db->get_where('product', array('slug' => $slug));

		return $query->row_array();
	}

	public function seller_details(){
		$id = $this->session->userdata('id');
		$this->db->where('userid',$id);
		$query = $this->db->select()->from('sellers');	
		$query = $this->db->get();
		return $query->row_array();
	}

	public function Add_seller_details(){
		$userid = $this->session->userdata('id');
		$fname = $this->input->post('firstname');
		$lname = $this->input->post('lastname');
		$bio = $this->input->post('bio');
		$nick = $this->input->post('nickname');

		$data = array(
			'nick_name' => $nick ,
			'first_name' => $fname, 
			'last_name' => $lname, 
			'last_name' => $lname, 
			'bio' => $bio,
			'userid' => $userid,
			'date_created' => date("Y-m-d")
			);

		$this->db->insert('sellers', $data); 
	}

	public function get_seller($id)
	{
		$this->db->where('product.id ',$id);
		$query = $this->db->select()->from('sellers');	
		$query = $this->db->join('product', 'product.seller_id = sellers.seller_id','left');
		$this->db->group_by('sellers.seller_id');
		$query = $this->db->get();
		return $query->row_array();
	}

	public function get_categories()
	{
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id ','left');
		$this->db->group_by('product.category');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_catalog()
	{
		$this->db->order_by('product.date_created','desc'); 
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id ','left');
		$query = $this->db->get('',10);
		return $query->result_array();
	}

	public function get_data(){

		$type = $this->input->post('type');


		$this->db->where('seller_id',$this->session->userdata('id'));
		$query = $this->db->select()->from('product')->get();

		return $query->result_array();
	}
public function product_name1(){

$user = $this->session->userdata('id');
			$this->db->where('seller_id',$this->session->userdata('id'));
			$this->db->order_by("id", "desc");
	$query = $this->db->select()->from('product')->get();
	return $query->result_array();

	}
	public function product_name2(){

$user = $this->session->userdata('id');
			$this->db->where('seller_id',$this->session->userdata('id'));
			$this->db->order_by("id", "desc");
		$query = $this->db->select()->from('product')->get();
return $query->result_array();

	}

public function product_name3(){

$user = $this->session->userdata('id');
			$this->db->where('seller_id',$this->session->userdata('id'));
			$this->db->order_by("id", "desc");
		$query = $this->db->select()->from('product')->get();
return $query->result_array();

	}

	public function graph_products1()
	{
		$user = $this->session->userdata('id');
			$this->db->where('seller_id',$this->session->userdata('id'));
			$this->db->order_by("id", "desc");
		$query = $this->db->select()->from('product')->get();

		$result=$query->result_array();
		$product_counter =0;
		$result_string= "";
		$product1_day1=0;
		$product1_day2=0;
		$product1_day3=0;
		$product1_day4=0;
		$product1_day5=0;

		$product2_day1=0;
		$product2_day2=0;
		$product2_day3=0;
		$product2_day4=0;
		$product2_day5=0;

		$product3_day1=0;
		$product3_day2=0;
		$product3_day3=0;
		$product3_day4=0;
		$product3_day5=0;
		
		$date = date('d.m.y');

		foreach ($result as $key) {
			$product_id=$key['id'];
	

			if($product_counter==0){

		$this->db->where('event_id',$product_id);
		$query2 = $this->db->select()->from('viewtest')->get();
		$result2= $query2->result_array();
		foreach ($result2 as $view) {
			$view_date = $view['date'];
			$datetime=date_create($view_date);
			$datetime2=date_create($date);

			$diff=date_diff($datetime,$datetime2);
			$diff=$diff->format("%R%a days");

			if( $diff=='+5 days')
			{
				$product1_day1++;
			}
			if( $diff=='+4 days')
			{
				$product1_day2++;
			}
			if( $diff=='+3 days')
			{
				$product1_day3++;
			}
				if( $diff=='+2 days')
			{
				$product1_day4++;
			}
				if( $diff=='+1 days')
			{
				$product1_day5++;
			}
			# code...
		}
			?>
<script>
console.log(<?php echo $product_id; ?>);
</script>
<?php
		
		$product1_data="$product1_day1,$product1_day2,$product1_day3,$product1_day4,$product1_day5";

			}
	

		if($product_counter==1){



		$this->db->where('event_id',$product_id);
		$query2 = $this->db->select()->from('viewtest')->get();
		$result2= $query2->result_array();
		foreach ($result2 as $view) {
			$view_date = $view['date'];
			$datetime=date_create($view_date);
			$datetime2=date_create($date);

			$diff=date_diff($datetime,$datetime2);
			$diff=$diff->format("%R%a days");

			if( $diff=='+5 days')
			{
				$product2_day1++;
			}
			if( $diff=='+4 days')
			{
				$product2_day2++;
			}
			if( $diff=='+3 days')
			{
				$product2_day3++;
			}
				if( $diff=='+2 days')
			{
				$product2_day4++;
			}
				if( $diff=='+1 days')
			{
				$product2_day5++;
			}
			# code...
		}
		$product2_data="$product2_day1,$product2_day2,$product2_day3,$product2_day4,$product2_day5";

			}
	

	if($product_counter==2){

		$this->db->where('event_id',$product_id);
		$query2 = $this->db->select()->from('viewtest')->get();
		$result2= $query2->result_array();
		foreach ($result2 as $view) {
			$view_date = $view['date'];
			$datetime=date_create($view_date);
			$datetime2=date_create($date);

			$diff=date_diff($datetime,$datetime2);
			$diff=$diff->format("%R%a days");

			if( $diff=='+5 days')
			{
				$product3_day1++;
			}
			if( $diff=='+4 days')
			{
				$product3_day2++;
			}
			if( $diff=='+3 days')
			{
				$product3_day3++;
			}
				if( $diff=='+2 days')
			{
				$product3_day4++;
			}
				if( $diff=='+1 days')
			{
				$product3_day5++;
			}
			# code...
		}
		
		$product3_data="$product3_day1,$product3_day2,$product3_day3,$product3_day4,$product3_day5";

			}


		$product_counter++; 	# code...
		 } 

	$product_return = 	$product1_data+'k'+$product2_data+'k'+$product3_data;

return $product1_data;
	}
		public function graph_products2()
	{
		$user = $this->session->userdata('id');
			$this->db->where('seller_id',$this->session->userdata('id'));
			$this->db->order_by("id", "desc");
		$query = $this->db->select()->from('product')->get();

		$result=$query->result_array();
		$product_counter =0;
		$result_string= "";
		$product1_day1=0;
		$product1_day2=0;
		$product1_day3=0;
		$product1_day4=0;
		$product1_day5=0;

		$product2_day1=0;
		$product2_day2=0;
		$product2_day3=0;
		$product2_day4=0;
		$product2_day5=0;

		$product3_day1=0;
		$product3_day2=0;
		$product3_day3=0;
		$product3_day4=0;
		$product3_day5=0;
		
		$date = date('d.m.y');

		foreach ($result as $key) {
			$product_id=$key['id'];
	

			if($product_counter==0){

		$this->db->where('event_id',$product_id);
		$query2 = $this->db->select()->from('viewtest')->get();
		$result2= $query2->result_array();
		foreach ($result2 as $view) {
			$view_date = $view['date'];
			$datetime=date_create($view_date);
			$datetime2=date_create($date);

			$diff=date_diff($datetime,$datetime2);
			$diff=$diff->format("%R%a days");

			if( $diff=='+5 days')
			{
				$product1_day1++;
			}
			if( $diff=='+4 days')
			{
				$product1_day2++;
			}
			if( $diff=='+3 days')
			{
				$product1_day3++;
			}
				if( $diff=='+2 days')
			{
				$product1_day4++;
			}
				if( $diff=='+1 days')
			{
				$product1_day5++;
			}
			# code...
		}
		
		$product1_data="$product1_day1,$product1_day2,$product1_day3,$product1_day4,$product1_day5";

			}
	

		if($product_counter==1){



		$this->db->where('event_id',$product_id);
		$query2 = $this->db->select()->from('viewtest')->get();
		$result2= $query2->result_array();
		foreach ($result2 as $view) {
			$view_date = $view['date'];
			$datetime=date_create($view_date);
			$datetime2=date_create($date);

			$diff=date_diff($datetime,$datetime2);
			$diff=$diff->format("%R%a days");

			if( $diff=='+5 days')
			{
				$product2_day1++;
			}
			if( $diff=='+4 days')
			{
				$product2_day2++;
			}
			if( $diff=='+3 days')
			{
				$product2_day3++;
			}
				if( $diff=='+2 days')
			{
				$product2_day4++;
			}
				if( $diff=='+1 days')
			{
				$product2_day5++;
			}
			# code...
		}

		$product2_data="$product2_day1,$product2_day2,$product2_day3,$product2_day4,$product2_day5";
			?>
<script>
console.log(<?php echo $product_id; ?>);
</script>
<?php
			}
	

	if($product_counter==2){

		$this->db->where('event_id',$product_id);
		$query2 = $this->db->select()->from('viewtest')->get();
		$result2= $query2->result_array();
		foreach ($result2 as $view) {
			$view_date = $view['date'];
			$datetime=date_create($view_date);
			$datetime2=date_create($date);

			$diff=date_diff($datetime,$datetime2);
			$diff=$diff->format("%R%a days");

			if( $diff=='+5 days')
			{
				$product3_day1++;
			}
			if( $diff=='+4 days')
			{
				$product3_day2++;
			}
			if( $diff=='+3 days')
			{
				$product3_day3++;
			}
				if( $diff=='+2 days')
			{
				$product3_day4++;
			}
				if( $diff=='+1 days')
			{
				$product3_day5++;
			}
			# code...
		}
		
		$product3_data="$product3_day1,$product3_day2,$product3_day3,$product3_day4,$product3_day5";

			}


		$product_counter++; 	# code...
		 } 

	$product_return = 	$product1_data+'k'+$product2_data+'k'+$product3_data;
return $product2_data;
	}

	public function graph_products3()
	{
		$user = $this->session->userdata('id');
			$this->db->where('seller_id',$this->session->userdata('id'));
			$this->db->order_by("id", "desc");
		$query = $this->db->select()->from('product')->get();

		$result=$query->result_array();
		$product_counter =0;
		$result_string= "";
		$product1_day1=0;
		$product1_day2=0;
		$product1_day3=0;
		$product1_day4=0;
		$product1_day5=0;

		$product2_day1=0;
		$product2_day2=0;
		$product2_day3=0;
		$product2_day4=0;
		$product2_day5=0;

		$product3_day1=0;
		$product3_day2=0;
		$product3_day3=0;
		$product3_day4=0;
		$product3_day5=0;
		
		$date = date('d.m.y');

		foreach ($result as $key) {
			$product_id=$key['id'];
	

			if($product_counter==0){

		$this->db->where('event_id',$product_id);
		$query2 = $this->db->select()->from('viewtest')->get();
		$result2= $query2->result_array();
		foreach ($result2 as $view) {
			$view_date = $view['date'];
			$datetime=date_create($view_date);
			$datetime2=date_create($date);

			$diff=date_diff($datetime,$datetime2);
			$diff=$diff->format("%R%a days");

			if( $diff=='+5 days')
			{
				$product1_day1++;
			}
			if( $diff=='+4 days')
			{
				$product1_day2++;
			}
			if( $diff=='+3 days')
			{
				$product1_day3++;
			}
				if( $diff=='+2 days')
			{
				$product1_day4++;
			}
				if( $diff=='+1 days')
			{
				$product1_day5++;
			}
			# code...
		}
		
		$product1_data="$product1_day1,$product1_day2,$product1_day3,$product1_day4,$product1_day5";

			}
	

		if($product_counter==1){



		$this->db->where('event_id',$product_id);
		$query2 = $this->db->select()->from('viewtest')->get();
		$result2= $query2->result_array();
		foreach ($result2 as $view) {
			$view_date = $view['date'];
			$datetime=date_create($view_date);
			$datetime2=date_create($date);

			$diff=date_diff($datetime,$datetime2);
			$diff=$diff->format("%R%a days");

			if( $diff=='+5 days')
			{
				$product2_day1++;
			}
			if( $diff=='+4 days')
			{
				$product2_day2++;
			}
			if( $diff=='+3 days')
			{
				$product2_day3++;
			}
				if( $diff=='+2 days')
			{
				$product2_day4++;
			}
				if( $diff=='+1 days')
			{
				$product2_day5++;
			}
			# code...
		}
		$product2_data="$product2_day1,$product2_day2,$product2_day3,$product2_day4,$product2_day5";

			}
	

	if($product_counter==2){

		$this->db->where('event_id',$product_id);

		$query2 = $this->db->select()->from('viewtest')->get();
		$result2= $query2->result_array();
		foreach ($result2 as $view) {
			$view_date = $view['date'];
			$datetime=date_create($view_date);
			$datetime2=date_create($date);

			$diff=date_diff($datetime,$datetime2);
			$diff=$diff->format("%R%a days");

			if( $diff=='+5 days')
			{
				$product3_day1++;
			}
			if( $diff=='+4 days')
			{
				$product3_day2++;
			}
			if( $diff=='+3 days')
			{
				$product3_day3++;
			}
				if( $diff=='+2 days')
			{
				$product3_day4++;
			}
				if( $diff=='+1 days')
			{
				$product3_day5++;
			}
			# code...
		}
		
		$product3_data="$product3_day1,$product3_day2,$product3_day3,$product3_day4,$product3_day5";
					?>
<script>
console.log(<?php echo $product_id; ?>);
</script>
<?php
	}


		$product_counter++; 	# code...
		 } 

	$product_return = 	$product1_data+'k'+$product2_data+'k'+$product3_data;
return $product3_data;
	}

	public function get_wishlist(){
		$user = $this->session->userdata('id');

		$this->db->select('*');

		$this->db->from('product a'); 
		$this->db->join('wishlist c', 'c.product_id=a.id', 'left');
		$this->db->join('product_images b', 'b.product_id=a.id', 'inner');

		$this->db->where('c.user_id',$user);
		$this->db->order_by('c.wishlist_id','desc');   
		$this->db->group_by('a.id');      
		$query = $this->db->get(); 

		if($query->num_rows() != 0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}


	}

	
	public function addWish(){

		$productid = $this->input->post('productid');
		$userid = $this->session->userdata('id');

		$data = array(
			'user_id' => $userid ,
			'product_id' => $productid 
			);

		$this->db->insert('wishlist', $data); 


	}

	public function get_product($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$this->db->order_by("id", "desc");
			$query = $this->db->get('product');			
			return $query->result_array();
		}

		$this->db->where('product.slug ',$slug);

		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->row_array();
	}

	public function get_filters(){


		$max = $this->input->post('maxVal');
		$min = $this->input->post('minVal');
		$this->db->where('product.price >=',$min);
		$this->db->where('product.price <=',$max);
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	public function get_filters2(){


		$max = $this->input->post('maxValue');
		$min = $this->input->post('minValue');
		$this->db->where('product.price >=',$min);
		$this->db->where('product.price <=',$max);
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}


	public function get_filters3(){


		
		$this->db->order_by("product.price", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}



	public function get_filters4(){


		
		$this->db->order_by("product.price", "asc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	public function get_filters5(){


		
		$this->db->order_by("product.name", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	public function get_filters6(){


		
		$this->db->order_by("product.name", "asc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	public function get_filters7(){
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();
	}

	function get_filtersLatest(){

		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	function get_pricemax(){

		$this->db->order_by("product.price", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get('',1);
		return $query->row_array();

	}

	function get_pricemin(){

		$this->db->order_by("product.price", "asc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get('',1);
		return $query->row_array();

	}


	function get_filterSearchHD(){
		$searchterm = $this->input->post('search-hd');
		$this->db->like('name',$searchterm);
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}


	function get_filterflats(){
		$this->db->where('category','accomodation');
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	function get_filterMiscellaneous(){
		$this->db->where('category','Miscellaneous');
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	function get_filterJobs(){
		$this->db->where('category','jobs');
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	function get_filterBooks(){
		$this->db->where('category','books');
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	function get_filterTutoring(){
		$this->db->where('category','tutoring');
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	function get_filterfurniture(){
		$this->db->where('category','furniture');
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	function get_filterSportingGoods(){
		$this->db->where('category','SportingGoods');
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	function get_filterelectronics(){
		$this->db->where('category','electronics');
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	function get_filtervehicles(){
		$this->db->where('category','vehicles');
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	function get_filtercompetitions(){
		$this->db->where('category','competitions');
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	public function getProductbyId($product_id){
		//$productId=$this->uri->segment(3);
		$this->db->where('id',$product_id);
		$query = $this->db->select()->from('product')->get();
		return $query->result_array();

	}

	public function getProductPics(){

		$this->db->where('seller_id',$this->session->userdata('id'));
		$query = $this->db->select()->from('product_images')->get();

		return $query->result_array();     	

	}
	public function getProductPic($product_id){

		$this->db->where('id',$product_id);
		$query = $this->db->select()->from('product_images')->get();

		return $query->result_array();

	}

	public function get_product_comments(){
		$this->load->helper('array');
		$type = $this->input->post('type');
		$this->db->where('comment.seller_id',$this->session->userdata('id'));
		$query1 = $this->db->select()->from('comment');
		$query1 = $this->db->join('userprofile', 'comment.user_id = userprofile.id','left');
		$query1 = $this->db->join('sellers', 'comment.seller_id=sellers.seller_id', 'inner');
		$query1 = $this->db->get();
		return $query1->result_array();
	}

	public function get_theproduct_comments($id){

		$this->db->where('comment.product_id ',$id);

		$this->db->order_by("comment.comment_id", "desc");		
		$query = $this->db->select()->from('comment');	
		$query = $this->db->join('userprofile', 'comment.user_id = userprofile.id','left');
		$this->db->group_by('comment.comment_id');
		$query = $this->db->get();
		return $query->result_array();



		
	}


	public function get_comment_users()
	{
		$this->load->helper('array');

		$query1 = $this->db->select()->from('userprofile')->get();


		return  $query1->result_array();
	}


	public function get_product_images(){
		$this->load->helper('array');
		$type = $this->input->post('type');


		$this->db->where('product_id',$product_id);
		$query1 = $this->db->select()->from('product_images')->get();
		$prodCount=0;

			// $query = $this->db->select('date,event')->from('calendar')->like('date',"$type")->get();	
			//$query = $this->db->select()->from('product')->get();	
		
			//$this->db->from('comments');
			//$this->db->where('product_id',$this->session->userdata('id'));
			//$this->db->join('products', 'product.product_id = comments.product_id');
						//$query = $this->db->get();
		return $query1->result_array();
	}

	public function get_products_ByCategory($slug = FALSE)
	{

		$category = $this->session->userdata('sort');
		if ($slug === FALSE)
		{
			$this->db->order_by("id", "desc");
			$this->db->where('category', $category); 
			$query = $this->db->get('product');			
			return $query->result_array();
		}

		$query = $this->db->get_where('product', array('slug' => $slug));

		return $query->row_array();
	}
	
	public function set_UserItem(){
		$this->load->helper('url');
		$date = date('d.m.y');
		$Name=$this->input->post('ItemName');
		$slug = url_title($this->input->post('ItemName'), 'dash', TRUE);
		$data = array(
			'name' => $this->input->post('ItemName'),
			'slug' => $slug,
			'price' => $this->input->post('ItemPrice'),
			'category' => $this->input->post('ItemCategory'),
			'description' => $this->input->post('ItemDescription'),
			'picturepath' =>$this->session->userdata('picturepath'),
			'date_created' => $date,
			'likes' => 0, 
			'seller_id' => $this->session->userdata('id'),
			'status' => "Inactive"


			);
		$this->db->trans_start();
		$this->db->insert('product',$data);
		$insert_id = $this->db->insert_id();
		$this->db->trans_complete();
   // echo "Yo". $insert_id;


		$this->session->set_flashdata('fancy', 'Successfully created');

		$notify_message = array(
			'message'  => $data['name'],

			);

		$this->session->set_userdata($newdata);


		$data['notify_message'] =array(
			'message'=>$data['name']
			);



		$this->session->set_userdata($newdata);
		return  $insert_id;
	}


	public function set_ProductPicture($data)
	{

		$this->db->insert('product_images',$data);

		$this->db->where('product_id',$data['product_id']);
		$query1 = $this->db->select()->from('product_images')->get();
		return $query1->result_array();


	}



	public function delete_UserItem(){
		$id = $this->input->post('type');
		$this->db->where('product_id', $id);
		$this->db->delete('product'); 
		
	}


	public function delete_Pic($img_id){
		$this->db->where('id', $img_id);
		$this->db->delete('product_images'); 
		
	}
	public function Update_UserItem(){
		$id = $this->input->post('itemid');

		$data = array(

			'name' => $this->input->post('itemname2'),
			'description' => $this->input->post('itemdescription2'),
			'price' => $this->input->post('itemprice2'),
			'status' => $this->input->post('itemstatus2'),
			'category' => $this->input->post('itemcat2')
			);

		$this->db->where('id', $id);
		$this->db->update('product', $data); 


	}

	public function get_product_views($product_id){
		$one_week = date('Y/m/d H:i:s', strtotime("-7 days"));

//echo $one_week;
		$this->db->where('event_id',$product_id);
		$this->db->where('date >=' ,$one_week);
		$query1 = $this->db->select()->from('viewtest')->get();
		return $query1->result_array();
	}

	public function set_products()
	{
		$this->load->helper('url');

		$slug = url_title($this->input->post('name'), 'dash', TRUE);
		$myVar = $this->session->flashdata('item');
		$data = array(
			'name' => $this->input->post('name'),
			'slug' => $slug,
			'price' => $this->input->post('price'),
			'category' => $this->input->post('category'),
			'description' => $this->input->post('description'),
			'vibe' => $this->input->post('vibe'),
			'picture' =>$this->session->userdata('picturepath'),
			'location' =>  $this->session->userdata('filename')

			);

		return $this->db->insert('product', $data);
	}

	

}
