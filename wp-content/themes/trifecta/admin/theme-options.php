<?php

if ( !defined('ABSPATH') ){
	die('-1');
}

add_action('init','of_options');

if (!function_exists('of_options')) {
function of_options(){
	
// VARIABLES
$themename = get_theme_data(STYLESHEETPATH . '/style.css');
$themename = $themename['Name'];
$shortname = "lp";

// Populate OptionsFramework option in array for use in theme
global $of_options;
$of_options = get_option('of_options');

$GLOBALS['template_path'] = OF_DIRECTORY;

//Access the WordPress Categories via an Array
$of_categories = array();  
$of_categories_obj = get_categories('hide_empty=0');
foreach ($of_categories_obj as $of_cat) {
    $of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
$categories_tmp = array_unshift($of_categories, "Select a category:");    
       
//Access the WordPress Pages via an Array
$of_pages = array();
$of_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($of_pages_obj as $of_page) {
    $of_pages[$of_page->ID] = $of_page->post_name; }
$of_pages_tmp = array_unshift($of_pages, "Select a page:");       

// Image Alignment radio box
$options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 

// Image Links to Options
$options_image_link_to = array("image" => "The Image","post" => "The Post"); 

//Testing 
$options_select = array("one","two","three","four","five"); 
$options_radio = array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five"); 

//Stylesheets Reader
$alt_stylesheet_path = OF_FILEPATH . '/styles/';
$alt_stylesheets = array();

if ( is_dir($alt_stylesheet_path) ) {
    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) { 
        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) {
            if(stristr($alt_stylesheet_file, ".css") !== false) {
                $alt_stylesheets[] = $alt_stylesheet_file;
            }
        }    
    }
}

//More Options
$uploads_arr = wp_upload_dir();
$all_uploads_path = $uploads_arr['path'];
$all_uploads = get_option('of_uploads');
$other_entries = array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
$body_repeat = array("no-repeat","repeat-x","repeat-y","repeat");
$body_pos = array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");

// Set the Options Array
$options = array();

$options[] = array( "name" => "Logo Upload",
                    "type" => "heading");
					
$options[] = array( "name" => "Header Logo Upload",
					"desc" => "Upload your logo image",
					"id" => "logo_upload",
					"std" => "",
					"type" => "uploadmedia");

$options[] = array( "name" => "Favicon Upload",
					"desc" => "Upload Favicon",
					"id" => "favicon_upload",
					"std" => "",
					"type" => "uploadmedia");

$options[] = array( "name" => "Footer Logo Upload",
					"desc" => "Upload your logo image",
					"id" => "footer_logo_upload",
					"std" => "",
					"type" => "uploadmedia");


// $options[] = array( "name" => "Google Trust Image Upload",
// 					"desc" => "Upload your logo image",
// 					"id" => "logo_upload_google_trust",
// 					"std" => "",
// 					"type" => "uploadmedia");

// $options[] = array( "name" => "Below Banner Image Logos",
//                     "type" => "heading");
					
// $options[] = array( "name" => "Logo 1",
// 					"desc" => "Upload your logo image",
// 					"id" => "logo_upload1",
// 					"std" => "",
// 					"type" => "uploadmedia");
// $options[] = array( "name" => "Logo 2",
// 					"desc" => "Upload your logo image",
// 					"id" => "logo_upload2",
// 					"std" => "",
// 					"type" => "uploadmedia");

// $options[] = array( "name" => "Logo 3",
// 					"desc" => "Upload your logo image",
// 					"id" => "logo_upload3",
// 					"std" => "",
// 					"type" => "uploadmedia");

// $options[] = array( "name" => "Logo 4",
// 					"desc" => "Upload your logo image",
// 					"id" => "logo_upload4",
// 					"std" => "",
// 					"type" => "uploadmedia");

// $options[] = array( "name" => "Logo 5",
// 					"desc" => "Upload your logo image",
// 					"id" => "logo_upload5",
// 					"std" => "",
// 					"type" => "uploadmedia");


/*$options[] = array( "name" => "Email",
					"desc" => "Enter Email",
					"id" => "header_email",
					"std" => "",
					"type" => "text");*/

// $options[] = array( "name" => "Team Member",
// 					"type" => "heading");
					
// $options[] = array( "name" => "First Member Name",
// 					"desc" => "First Member Name  here",
// 					"id" => "wq_member_name",
// 					"std" => "",
// 					"type" => "text"); 	
					
// $options[] = array( "name" => "Member Information",
// 					"desc" => "Member Information here",
// 					"id" => "wq_member_information",
// 					"std" => "",
// 					"type" => "textarea"); 
					
// $options[] = array( "name" => "Member Image",
// 					"desc" => "Upload Member image here",
// 					"id" => "wq_member_img",
// 					"std" => "",
// 					"type" => "uploadmedia"); 	
					
// $options[] = array( "name" => "Second Member Name",
// 					"desc" => "Second Member Name  here",
// 					"id" => "wq_member_name_two",
// 					"std" => "",
// 					"type" => "text"); 	
					
// $options[] = array( "name" => "Member Information",
// 					"desc" => "Member Information here",
// 					"id" => "wq_member_information_two",
// 					"std" => "",
// 					"type" => "textarea"); 
					
// $options[] = array( "name" => "Member Image",
// 					"desc" => "Upload Member image",
// 					"id" => "wq_member_img_two",
// 					"std" => "",
// 					"type" => "uploadmedia"); 	
					
// $options[] = array( "name" => "Third Member Name",
// 					"desc" => "Third Member Name  here",
// 					"id" => "wq_member_name_three",
// 					"std" => "",
// 					"type" => "text"); 	
					
// $options[] = array( "name" => "Member Information",
// 					"desc" => "Member Information here",
// 					"id" => "wq_member_information_three",
// 					"std" => "",
// 					"type" => "textarea"); 
					
// $options[] = array( "name" => "Member Image",
// 					"desc" => "Upload Member image here",
// 					"id" => "wq_member_img_three",
// 					"std" => "",
// 					"type" => "uploadmedia"); 																
					
// $options[] = array( "name" => "Our Investors",
// 					"type" => "heading");	
					
// $options[] = array( "name" => "Logo One",
// 					"desc" => "Upload Logo here",
// 					"id" => "wq_logo_one",
// 					"std" => "",
// 					"type" => "uploadmedia"); 
						
// $options[] = array( "name" => "Logo Two",
// 					"desc" => "Upload Logo here",
// 					"id" => "wq_logo_two",
// 					"std" => "",
// 					"type" => "uploadmedia"); 
						
// $options[] = array( "name" => "Logo Three",
// 					"desc" => "Upload Logo here",
// 					"id" => "wq_logo_three",
// 					"std" => "",
// 					"type" => "uploadmedia"); 	
					
// $options[] = array( "name" => "Logo Four",
// 					"desc" => "Upload Logo here",
// 					"id" => "wq_logo_four",
// 					"std" => "",
// 					"type" => "uploadmedia"); 
						
// $options[] = array( "name" => "Logo Five",
// 					"desc" => "Upload Logo here",
// 					"id" => "wq_logo_fifth",
// 					"std" => "",
// 					"type" => "uploadmedia"); 
						

					
// $options[] = array( "name" => "Map Information",
// 					"type" => "heading");
					
// $options[] = array( "name" => "Api key",
// 					"desc" => "Api key here",
// 					"id" => "wq_api_key",
// 					"std" => "",
// 					"type" => "text"); 	
					
// $options[] = array( "name" => "Map Address",
// 					"desc" => "Map Address here",
// 					"id" => "wq_map_adress",
// 					"std" => "",
// 					"type" => "text"); 
					
					
					
// $options[] = array( "name" => "Contact",
// 					"type" => "heading");
					
// $options[] = array( "name" => "Address",
// 					"desc" => "contact address here",
// 					"id" => "wq_footer_address",
// 					"std" => "",
// 					"type" => "textarea"); 	
					
// $options[] = array( "name" => "Phone No",
// 					"desc" => "Phone  number here",
// 					"id" => "wq_footer_phone",
// 					"std" => "+555 12365 25415 / 54789 54785",
// 					"type" => "text"); 
					
// $options[] = array( "name" => "Mail ID",
// 					"desc" => "Mail ID here",
// 					"id" => "wq_footer_mailid",
// 					"std" => "demo@gmail.com",
// 					"type" => "text");
									
					
				
// $options[] = array( "name" => "Recaptcha API Information",
// 					"type" => "heading");
					
// $options[] = array( "name" => "Api key",
// 					"desc" => "Api key here",
// 					"id" => "wq_recaptcha_api_key",
// 					"std" => "",
// 					"type" => "text");					
																		
										
/*$options[] = array( "name" => "Opening hour",
					"desc" => "Header Opening hour here",
					"id" => "header_opening_hour",
					"std" => "",
					"type" => "text"); 
					
$options[] = array( "name" => "Helpline",
					"desc" => "Header helpline number here",
					"id" => "header_phone",
					"std" => "+91-9991234567",
					"type" => "text"); */
/*					
$options[] = array( "name" => "Header email",
					"desc" => "Header email",
					"id" => "header_email",
					"std" => "info@puritrip.com",
					"type" => "text"); 
*/					
					
// $options[] = array( "name" => "Footer Options",
// 					"type" => "heading");

// $options[] = array( "name" => "Footer Logo Upload",
// 					"desc" => "Upload your logo image",
// 					"id" => "logo_upload_footer",
// 					"std" => "",
// 					"type" => "uploadmedia"); 

/*$options[] = array( "name" => "Footer Content",
					"desc" => "Here you can enter any text you want",
					"id" => "footer_content",
					"std" => "",
					"type" => "textarea"); */

/*$options[] = array( "name" => "Office Address",
					"desc" => "Office address here",
					"id" => "footer_office_address",
					"std" => "",
					"type" => "textarea");
					
$options[] = array( "name" => "Footer phone no.",
					"desc" => "Footer phone no. here",
					"id" => "footer_phone",
					"std" => "+91-9991234567",
					"type" => "text"); 

$options[] = array( "name" => "Footer Fax no.",
					"desc" => "Footer Fax no. here",
					"id" => "footer_office_phone",
					"std" => "+91-9991234567",
					"type" => "text");*/
																				
// $options[] = array( "name" => "Footer Copyright Text",
// 					"desc" => "Here you can enter any text you want",
// 					"id" => "footer_copyright",
// 					"std" => "",
// 					"type" => "textarea");

// $options[] = array( "name" => "Footer Disclaimer",
// 					"desc" => "Here you can enter any text you want",
// 					"id" => "footer_disclaimer",
// 					"std" => "",
// 					"type" => "textarea");

// $options[] = array( "name" => "Footer Contact-1",
// 					"desc" => "Here you can enter any contact text you want",
// 					"id" => "footer_contact1",
// 					"std" => "",
// 					"type" => "textarea");

// $options[] = array( "name" => "Footer Contact-2",
// 					"desc" => "Here you can enter any contact text you want",
// 					"id" => "footer_contact2",
// 					"std" => "",
// 					"type" => "textarea");

// $options[] = array( "name" => "Footer email",
// 					"desc" => "Footer email",
// 					"id" => "footer_email",
// 					"std" => "",
// 					"type" => "text"); 

/*																																																												
$options[] = array( "name" => "EBS Payment Options",
					"type" => "heading");      

$options[] = array( "name" => "Mode",
					"desc" => "Enter payment mode. TEST/LIVE",
					"id" => "_ebs_mode",
					"std" => "LIVE",
					"type" => "text");

$options[] = array( "name" => "Account ID",
					"desc" => "Enter ebs account id.",
					"id" => "_ebs_account_id",
					"std" => "",
					"type" => "text");		

$options[] = array( "name" => "Secret Key",
					"desc" => "Enter ebs secret key.",
					"id" => "_ebs_secret_key",
					"std" => "",
					"type" => "text");		

$options[] = array( "name" => "Page ID",
					"desc" => "Enter ebs page id.",
					"id" => "_ebs_page_id",
					"std" => "",
					"type" => "text");	
					*/
									
$options[] = array( "name" => "Social Media Options",
					"type" => "heading");      

$options[] = array( "name" => "Facebook",
					"desc" => "Enter your Facebook url here.",
					"id" => "_facebook",
					"std" => "",
					"type" => "text");
					
$options[] = array( "name" => "Twitter",
					"desc" => "Enter your Twitter url here.",
					"id" => "_twitter",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Linkedin",
					"desc" => "Enter your Linkedin url here.",
					"id" => "_linkedin",
					"std" => "",
					"type" => "text");
					
$options[] = array( "name" => "Pinterest",
					"desc" => "Enter your Pinterest url here.",
					"id" => "_pinterest",
					"std" => "",
					"type" => "text");
			
/*$options[] = array( "name" => "Ping",
					"desc" => "Enter your Ping url here.",
					"id" => "_ping",
					"std" => "",
					"type" => "text");*/


/*$options[] = array( "name" => "Youtube  url",
					"desc" => "Enter your Youtube  url here.",
					"id" => "_youtubeurl",
					"std" => "",
					"type" => "text");
					
$options[] = array( "name" => "Linked In  url",
					"desc" => "Enter your LinkedIn  url here.",
					"id" => "_linkedinurl",
					"std" => "",
					"type" => "text");*/

/*$options[] = array( "name" => "Footer Business Hour",
					"type" => "heading");      

$options[] = array( "name" => "Footer Business Hour",
					"desc" => "Here you can enter any text you want",
					"id" => "footer_business_hour",
					"std" => "",
					"type" => "textarea");*/

/*$options[] = array( "name" => "Twitter",
					"desc" => "Enter your Twitter url here.",
					"id" => "_twitter",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Linked In",
					"desc" => "Enter your Linked In url here.",
					"id" => "_linkedin",
					"std" => "",
					"type" => "text");
					
$options[] = array( "name" => "Google plus",
					"desc" => "Enter your Google plus url here.",
					"id" => "_googleplus",
					"std" => "",
					"type" => "text");*/
					
// $options[] = array( "name" => "Paypal Options",
// 					"type" => "heading");    
					
// $options[] = array( "name" => "Account ID",
// 					"desc" => "Enter your Account Id",
// 					"id" => "_paypal_account",
// 					"std" => "",
// 					"type" => "text");
					
// $options[] = array( "name" => "Live Mode",
// 					"desc" => "Enter your pament mode",
// 					"id" => "_payment_mode",
// 					"std" => "",
// 					"type" => "checkbox");
					
// $options[] = array( "name" => "Mpesa Options",
// 					"type" => "heading");    
					
// $options[] = array( "name" => "Consumer Key",
// 					"desc" => "Enter your consumer key",
// 					"id" => "_consumer_key",
// 					"std" => "",
// 					"type" => "text");
					
// $options[] = array( "name" => "Consumer Secret",
// 					"desc" => "Enter your consumer secret",
// 					"id" => "_consumer_secret",
// 					"std" => "",
// 					"type" => "text");
					
// $options[] = array( "name" => "Mpesa Passkey",
// 					"desc" => "Enter your passkey",
// 					"id" => "_mpesa_passkey",
// 					"std" => "",
// 					"type" => "text");
					
// $options[] = array( "name" => "Sandbox Mode",
// 					"desc" => "Enter your mpesa pament mode",
// 					"id" => "_mpesa_payment_mode",
// 					"std" => "",
// 					"type" => "checkbox");

// $options[] = array( "name" => "Footer Options",
//                     "type" => "heading");

/*$options[] = array( "name" => "Customer Service",
					"desc" => "Enter your Text",
					"id" => "_customer_service_text",
					"std" => "",
					"type" => "textarea");*/

// $options[] = array( "name" => "Address",
// 					"desc" => "Enter your Address",
// 					"id" => "_site_address",
// 					"std" => "",
// 					"type" => "textarea");

// $options[] = array( "name" => "Contact No.",
// 					"desc" => "Enter your Contact No here.",
// 					"id" => "_site_contact_no",
// 					"std" => "",
// 					"type" => "text");
					
// $options[] = array( "name" => "Email",
// 					"desc" => "Enter your Email here.",
// 					"id" => "_site_email",
// 					"std" => "",
// 					"type" => "text");
					
/*$options[] = array( "name" => "Customer Service Fax",
					"desc" => "Enter your Fax  here.",
					"id" => "_site_fax",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Our Store",
					"desc" => "Enter your Text",
					"id" => "_our_store",
					"std" => "",
					"type" => "textarea");*/

// $options[] = array( "name" => "About Us(en)",
// 					"desc" => "Enter About Us",
// 					"id" => "_about_us_en",
// 					"std" => "",
// 					"type" => "textarea");
					
// $options[] = array( "name" => "About Us(de)",
// 					"desc" => "Enter About Us",
// 					"id" => "_about_us_de",
// 					"std" => "",
// 					"type" => "textarea");
					
/*$options[] = array( "name" => "Read More",
					"desc" => "Enter About Us Link",
					"id" => "_about_us_read_more",
					"std" => "",
					"type" => "text");*/

// $options[] = array( "name" => "Copy rights Text",
// 					"desc" => "Enter Copy Right Text",
// 					"id" => "_copy_rights_text",
// 					"std" => "",
// 					"type" => "textarea");

/*
$options[] = array( "name" => "Google Map",
                    "type" => "heading");

$options[] = array( "name" => "Google Map API",
					"desc" => "Enter google map api.",
					"id" => "_google_map_api",
					"std" => "",
					"type" => "text");
					
$options[] = array( "name" => "Map Address",
					"desc" => "Enter map address.",
					"id" => "_google_map_address",
					"std" => "",
					"type" => "textarea");*/

// $options[] = array( "name" => "Footer Site Links",
//                     "type" => "heading");					

// $options[] = array( "name" => "Home",
// 					"desc" => "Enter Home Link",
// 					"id" => "_home_url",
// 					"std" => "",
// 					"type" => "text");
					
// $options[] = array( "name" => "About Us",
// 					"desc" => "Enter About Us Link",
// 					"id" => "_about_us_url",
// 					"std" => "",
// 					"type" => "text");
					
// $options[] = array( "name" => "Contact Us",
// 					"desc" => "Enter Contact Us Link",
// 					"id" => "_contact_us_url",
// 					"std" => "",
// 					"type" => "text");
					
// $options[] = array( "name" => "Privacy Policy",
// 					"desc" => "Enter Privacy Policy Link",
// 					"id" => "_privacy_policy_url",
// 					"std" => "",
// 					"type" => "text");
					
// $options[] = array( "name" => "Terms & Conditions 1",
// 					"desc" => "Enter Terms & Conditions Link",
// 					"id" => "_terms_condition_url_1",
// 					"std" => "",
// 					"type" => "text");

// $options[] = array( "name" => "Terms & Conditions 2",
// 					"desc" => "Enter Terms & Conditions Link",
// 					"id" => "_terms_condition_url_2",
// 					"std" => "",
// 					"type" => "text");

// $options[] = array( "name" => "Terms & Conditions 3",
// 					"desc" => "Enter Terms & Conditions Link",
// 					"id" => "_terms_condition_url_3",
// 					"std" => "",
// 					"type" => "text");


$options[] = array( "name" => "Footer",
					"type" => "heading");
																				
$options[] = array( "name" => "Footer Copyright Text",
					"desc" => "Here you can enter any text you want",
					"id" => "footer_copyright",
					"std" => "",
					"type" => "textarea");

$options[] = array( "name" => "Footer Disclaimer",
					"desc" => "Here you can enter any text you want",
					"id" => "footer_disclaimer",
					"std" => "",
					"type" => "textarea");					
															
					
																													
update_option('of_template',$options); 					  
update_option('of_themename',$themename);   
update_option('of_shortname',$shortname);

}
}
?>