<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 * 
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_theme_data(STYLESHEETPATH . '/style.css');
	$themename = $themename['Name'];
	$themename = preg_replace("/\W/", "", strtolower($themename) );
	
	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);
	
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *  
 */

function optionsframework_options() {
	
	// Test data
	$test_array = array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five");
	
	// Multicheck Array
	$multicheck_array = array("one" => "French Toast", "two" => "Pancake", "three" => "Omelette", "four" => "Crepe", "five" => "Waffle");
	
	// Multicheck Defaults
	$multicheck_defaults = array("one" => "1","five" => "1");
	
	// Background Defaults
	
	$background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat','position' => 'top center','attachment'=>'scroll');
	
	
	// Pull all the categories into an array
	$options_categories = array();  
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
    	$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all the pages into an array
	$options_pages = array();  
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
    	$options_pages[$page->ID] = $page->post_title;
	}
		
	// If using image radio buttons, define a directory path
	$imagepath =  get_bloginfo('stylesheet_directory') . '/images/';
	
// PRICING ARRAY
	$test_array = array("not_featured" => "not featured","featured" => "featured");

	$options = array();
	
	$options[] = array( "name" => "Header",
						"type" => "heading");
//HEADER LOGO
	$options[] = array( "name" => "Logo",
						"desc" => "upload your logo",
						"id" => "logo",
						"type" => "upload");

	$options[] = array( "name" => "Home Page",
						"type" => "heading");

//HOME PAGE SLIDER
	$options[] = array( "name" => "Home Page Slider Link 1",
						"desc" => "Enter a URL for the first slide.",
						"id" => "home_sliderlink1",
						"std" => "http://",
						"type" => "text");
						
	$options[] = array( "name" => "Home Page Slider Image 1",
						"desc" => "Home Page Slider Image for the first slide.",
						"id" => "homeslideimg1",
						"type" => "upload");

	$options[] = array( "name" => "Home Page Slider Link 2",
						"desc" => "Enter a URL for the second slide.",
						"id" => "home_sliderlink2",
						"std" => "http://",
						"type" => "text");
						
	$options[] = array( "name" => "Home Page Slider Image 2",
						"desc" => "Home Page Slider Image for the second slide.",
						"id" => "homeslideimg2",
						"type" => "upload");

	$options[] = array( "name" => "Home Page Slider Link 3",
						"desc" => "Enter a URL for the third slide.",
						"id" => "home_sliderlink3",
						"std" => "http://",
						"type" => "text");
						
	$options[] = array( "name" => "Home Page Slider Image 3",
						"desc" => "Home Page Slider Image for the third slide.",
						"id" => "homeslideimg3",
						"type" => "upload");

	//HOME PAGE FEATURED CONTENT
	$options[] = array( "name" => "Home Page Feature Image 1",
						"desc" => "IMAGE MUST BE 60PX by 60PX. This is the left most home page feature area image.",
						"id" => "home_featureimage1",
						"type" => "upload");

	$options[] = array( "name" => "Home Page Feature 1 Title",
						"desc" => "This is the left most home page feature area title.",
						"id" => "home_featuretitle",
						"type" => "text");

	$options[] = array( "name" => "Home Page Feature 1 Content",
						"desc" => "This is the left most home page feature area content.",
						"id" => "home_featurecontent",
						"type" => "textarea");

	$options[] = array( "name" => "Home Page Feature Image 2",
						"desc" => "IMAGE MUST BE 60PX by 60PX. This is the middle home page feature area image.",
						"id" => "home_featureimage2",
						"type" => "upload");

	$options[] = array( "name" => "Home Page Feature 2 Title",
						"desc" => "This is the middle home page feature area title.",
						"id" => "home_featuretitle2",
						"type" => "text");

	$options[] = array( "name" => "Home Page Feature 2 Content",
						"desc" => "This is the left most home page feature area content.",
						"id" => "home_featurecontent2",
						"type" => "textarea");

	$options[] = array( "name" => "Home Page Feature Image 3",
						"desc" => "IMAGE MUST BE 60PX by 60PX. This is the left most home page feature area image.",
						"id" => "home_featureimage3",
						"type" => "upload");

	$options[] = array( "name" => "Home Page Feature 3 Title",
						"desc" => "This is the right most home page feature area title.",
						"id" => "home_featuretitle3",
						"type" => "text");

	$options[] = array( "name" => "Home Page Feature 3 Content",
						"desc" => "This is the right most home page feature area content.",
						"id" => "home_featurecontent3",
						"type" => "textarea");
	
//PRICING

	$options[] = array( "name" => "Pricing",
						"type" => "heading");
//PRICING TABLE 1

	$options[] = array( "name" => "Featured Pricing Table",
						"desc" => "Please Select Featured or No ",
						"id" => "featured_pricing",
						"std" => "two",
						"type" => "select",
						"class" => "mini",
						"options" => $test_array);


	$options[] = array( "name" => "Pricing Table 1 Name",
						"desc" => "The name of your 1st pricing table. Example: Basic Hosting",
						"id" => "pricing1_name",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 1 Payment Structure",
						"desc" => "The Payment Structure your 1st pricing table. Example: Pay Yearly, Per Month, One Time. ",
						"id" => "pricing1_structure",
						"std" => "Default Text",
						"type" => "text"); 

	$options[] = array( "name" => "Pricing Table 1 Option 1",
						"desc" => "The 1st for your 1st pricing table. Example: 1TB Bandwith. ",
						"id" => "pricing1_option1",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 1 Option 2",
						"desc" => "The 2nd option for your 1st pricing table. Example: 1 Gig of Space. ",
						"id" => "pricing1_option2",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 1 Option 3",
						"desc" => "The 3rd option for your 1st pricing table. Example: Email Support. ",
						"id" => "pricing1_option3",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 1 Price",
						"desc" => "The price for your 1st pricing table. Example: $19.95. ",
						"id" => "pricing1_price",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 1 Button Link",
						"desc" => "The link for your 1st pricing table. Example: A sign up page, Paypal Link or Google Checkout. You can redirect them to any URL you want.",
						"id" => "pricing1_link",
						"std" => "Default Text",
						"type" => "text");






//PRICING TABLE 2

	$options[] = array( "name" => "Featured Pricing Table",
						"desc" => "Please Select Featured or No ",
						"id" => "featured_pricing2",
						"std" => "two",
						"type" => "select",
						"class" => "mini",
						"options" => $test_array);

	$options[] = array( "name" => "Pricing Table 2 Name",
						"desc" => "The name of your 2nd pricing table. Example: Basic Hosting",
						"id" => "pricing2_name",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 2 Payment Structure",
						"desc" => "The Payment Structure your 2nd pricing table. Example: Pay Yearly, Per Month, One Time. ",
						"id" => "pricing2_structure",
						"std" => "Default Text",
						"type" => "text"); 

	$options[] = array( "name" => "Pricing Table 2 Option 1",
						"desc" => "The 1st option for your 2nd pricing table. Example: 1TB Bandwith. ",
						"id" => "pricing2_option1",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 2 Option 2",
						"desc" => "The 2nd option for your 2nd pricing table. Example: 1 Gig of Space. ",
						"id" => "pricing2_option2",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 2 Option 3",
						"desc" => "The 3rd option for your 2nd pricing table. Example: Email Support. ",
						"id" => "pricing2_option3",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 2 Price",
						"desc" => "The price for your 2nd pricing table. Example: $19.95. ",
						"id" => "pricing2_price",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 2 Button Link",
						"desc" => "The link for your 2nd pricing table. Example: A sign up page, Paypal Link or Google Checkout. You can redirect them to any URL you want.",
						"id" => "pricing2_link",
						"std" => "Default Text",
						"type" => "text");



//PRICING TABLE 3
	$options[] = array( "name" => "Featured Pricing Table",
						"desc" => "Please Select Featured or No ",
						"id" => "featured_pricing3",
						"std" => "two",
						"type" => "select",
						"class" => "mini",
						"options" => $test_array);

	$options[] = array( "name" => "Pricing Table 3 Name",
						"desc" => "The name of your 3rd pricing table. Example: Basic Hosting",
						"id" => "pricing3_name",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 3 Payment Structure",
						"desc" => "The Payment Structure your 3rd pricing table. Example: Pay Yearly, Per Month, One Time. ",
						"id" => "pricing3_structure",
						"std" => "Default Text",
						"type" => "text"); 

	$options[] = array( "name" => "Pricing Table 3 Option 1",
						"desc" => "The 1st option for your 3rd pricing table. Example: 1TB Bandwith. ",
						"id" => "pricing3_option1",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 3 Option 2",
						"desc" => "The 2nd option for your 3rd pricing table. Example: 1 Gig of Space. ",
						"id" => "pricing3_option2",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 3 Option 3",
						"desc" => "The 3rd for your 3rd pricing table. Example: Email Support. ",
						"id" => "pricing3_option3",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 3 Price",
						"desc" => "The price for your 3rd pricing table. Example: $19.95. ",
						"id" => "pricing3_price",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 3 Button Link",
						"desc" => "The link for your 3rd pricing table. Example: A sign up page, Paypal Link or Google Checkout. You can redirect them to any URL you want.",
						"id" => "pricing3_link",
						"std" => "Default Text",
						"type" => "text");



//PRICING TABLE 4

	$options[] = array( "name" => "Featured Pricing Table",
						"desc" => "Please Select Featured or No ",
						"id" => "featured_pricing4",
						"std" => "two",
						"type" => "select",
						"class" => "mini",
						"options" => $test_array);

	$options[] = array( "name" => "Pricing Table 4 Name",
						"desc" => "The name of your 4th pricing table. Example: Basic Hosting",
						"id" => "pricing4_name",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 4 Payment Structure",
						"desc" => "The Payment Structure your 4th pricing table. Example: Pay Yearly, Per Month, One Time. ",
						"id" => "pricing4_structure",
						"std" => "Default Text",
						"type" => "text"); 

	$options[] = array( "name" => "Pricing Table 4 Option 1",
						"desc" => "The 1st option for your 1st pricing table. Example: 1TB Bandwith. ",
						"id" => "pricing4_option1",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 4 Option 2",
						"desc" => "The 2nd for your 2nd pricing table. Example: 1 Gig of Space. ",
						"id" => "pricing4_option2",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 4 Option 3",
						"desc" => "The 3rd option for your 4th pricing table. Example: Email Support. ",
						"id" => "pricing4_option3",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 4 Price",
						"desc" => "The price for your 4th pricing table. Example: $19.95. ",
						"id" => "pricing4_price",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 4 Button Link",
						"desc" => "The link for your 4th pricing table. Example: A sign up page, Paypal Link or Google Checkout. You can redirect them to any URL you want.",
						"id" => "pricing4_link",
						"std" => "Default Text",
						"type" => "text");

//PRICING TABLE 5
	$options[] = array( "name" => "Featured Pricing Table",
						"desc" => "Please Select Featured or No ",
						"id" => "featured_pricing5",
						"std" => "two",
						"type" => "select",
						"class" => "mini",
						"options" => $test_array);

	$options[] = array( "name" => "Pricing Table 5 Name",
						"desc" => "The name of your 1st pricing table. Example: Basic Hosting",
						"id" => "pricing5_name",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 5 Payment Structure",
						"desc" => "The Payment Structure your 5th pricing table. Example: Pay Yearly, Per Month, One Time. ",
						"id" => "pricing5_structure",
						"std" => "Default Text",
						"type" => "text"); 

	$options[] = array( "name" => "Pricing Table 5 Option 1",
						"desc" => "The first option for your 5th pricing table. Example: 1TB Bandwith. ",
						"id" => "pricing5_option1",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 5 Option 2",
						"desc" => "The first option for your 5th pricing table. Example: 1 Gig of Space. ",
						"id" => "pricing5_option2",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 5 Option 3",
						"desc" => "The first option for your 5th pricing table. Example: Email Support. ",
						"id" => "pricing5_option3",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 5 Price",
						"desc" => "The price for your 5th pricing table. Example: $19.95. ",
						"id" => "pricing5_price",
						"std" => "Default Text",
						"type" => "text");

	$options[] = array( "name" => "Pricing Table 5 Button Link",
						"desc" => "The link for your 2nd pricing table. Example: A sign up page, Paypal Link or Google Checkout. You can redirect them to any URL you want.",
						"id" => "pricing5_link",
						"std" => "Default Text",
						"type" => "text");
	
	//FOOTER

	$options[] = array( "name" => "Footer",
						"type" => "heading");
	
	$options[] = array( "name" => "Google Analytics Code",
						"desc" => "Paste your Google Analytics Code into this text box.",
						"id" => "google_analytics",
						"std" => "Default Text",
						"type" => "textarea"); 

	$options[] = array( "name" => "Twitter User Name",
						"desc" => "Paste your Twitter User Name into this text box.",
						"id" => "twitter_username",
						"std" => "Default Text",
						"type" => "textarea"); 

	return $options;
}