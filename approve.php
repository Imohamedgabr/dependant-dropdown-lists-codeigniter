<?php

// defined('BASEPATH') OR exit('No direct script access allowed');

	// to get to this http://localhost/public_html/index.php/hello

   class Approve extends CI_Controller{

   	function __construct()

	{

		parent::__construct();


	}

   	function index()
	   {
	   		$temp = $_POST['Imgname'];
			// echo $temp;
     		$CI = & get_instance();
		    $CI->db->query("UPDATE ads SET approved=1 WHERE id= $temp");

		    echo $temp;
	   }

	   function getCities(){


	   	$temp = $_POST['Imgname'];
			// echo $temp;
 		$ci = & get_instance();
 		$data = $ci->db->get_where('cities', array('country_id'=> $temp ) )->result_array();
 		$out = '';
	    foreach($data AS $loc){
	       
	        $out .= '<option value="'.$loc["id"].'">'.$loc["name_ar"].'</option>';
	    }
	    $out .= '';

	    echo $out;

	   }


	   function getRegions(){


	   	$temp = $_POST['Imgname'];
			// echo $temp;
 		$ci = & get_instance();
 		$data = $ci->db->get_where('regions', array('city_id'=> $temp ) )->result_array();
 		$out = '';
	    foreach($data AS $loc){
	       
	        $out .= '<option value="'.$loc["id"].'">'.$loc["name_ar"].'</option>';
	    }
	    $out .= '';

	    echo $out;

	   }

	   // store the ad to the database
	   function post(){

	   	$store['user_id'] = 1;
	    $store['created_at'] = date('Y-m-d h:i:s');
	       $store['title'] = $_POST['title'];
	       $store['country'] = $_POST['country'];
	       $store['city'] = $_POST['city'];
	       $store['region'] = $_POST['region'];
	       $store['category_id'] = $_POST['category'];
	       $store['price'] = $_POST['price'];
	       $store['phone'] = $_POST['phone'];
	       $store['address'] = $_POST['address'];

	       $ad_id = $this->Main_model->insert('ads',$store);
	    //    // insert is the inserted id
		   // echo $insert;

	   	// main image
	   	$store =[];
	   	$store = [
                  'ads_id'     => $ad_id,
                  'created_at' => date('Y-m-d h:i:s'),
	             ];
	             
	            $store['main'] = 1;
	            // strlen(@$_FILES['image']['name']);
	            $image = $this->m_image->do_upload('image');
	            $store['url'] = $image['file_name'];
	            $insert = $this->Main_model->insert('ads_images',$store);

	    // first image
	    $store =[];	

	    $store = [
                  'ads_id'     => $ad_id,
                  'created_at' => date('Y-m-d h:i:s'),
	             ];
	    $store['main'] = 0;
	            // strlen(@$_FILES['image']['name']);
	            $image = $this->m_image->do_upload('image_1');
	            $store['url'] = $image['file_name'];
	            $insert = $this->Main_model->insert('ads_images',$store);


	    $store['main'] = 0;
	    $store = [
                  'ads_id'     => $ad_id,
                  'created_at' => date('Y-m-d h:i:s'),
	             ];
	            // strlen(@$_FILES['image']['name']);
	            $image = $this->m_image->do_upload('image_2');
	            $store['url'] = $image['file_name'];
	            $insert = $this->Main_model->insert('ads_images',$store);

	    $store['main'] = 0;
	    $store = [
                  'ads_id'     => $ad_id,
                  'created_at' => date('Y-m-d h:i:s'),
	             ];
	            // strlen(@$_FILES['image']['name']);
	            $image = $this->m_image->do_upload('image_3');
	            $store['url'] = $image['file_name'];
	            $insert = $this->Main_model->insert('ads_images',$store);



	    $store['main'] = 0;
	    $store = [
                  'ads_id'     => $ad_id,
                  'created_at' => date('Y-m-d h:i:s'),
	             ];
	            // strlen(@$_FILES['image']['name']);
	            $image = $this->m_image->do_upload('image_4');
	            $store['url'] = $image['file_name'];
	            $insert = $this->Main_model->insert('ads_images',$store);


	    $store['main'] = 0;
	    $store = [
                  'ads_id'     => $ad_id,
                  'created_at' => date('Y-m-d h:i:s'),
	             ];
	            // strlen(@$_FILES['image']['name']);
	            $image = $this->m_image->do_upload('image_5');
	            $store['url'] = $image['file_name'];
	            $insert = $this->Main_model->insert('ads_images',$store);


	   	// echo "successfully added";
	   	  
	 
	   	  redirect('http://localhost/public_html/admin_panel/ads/pending', 'refresh');
	   }

	   
	}
?>