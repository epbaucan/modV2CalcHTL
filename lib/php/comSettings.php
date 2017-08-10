<?php
	
	$processtype = 3; // 1 - phpmail, 2 - comhubspot and 3 - comMautic
	
	//Hubspot 
	$pageUrl            = 'http://scv5.webhost.htlonline.net/cloud-solutions/hosted-desktop';
	$formName           = 'Calculator Lead 3';
	$portalId           = 644508;
	$formGuid           = '86dfd19f-02f1-46af-bd42-8537139cc527'; //'d9ed8af2-2d3b-4712-8166-f8e2f2e6c5e8';               
	                       //'fda508f4-88e0-4e47-8f2c-2d587ecef596';

	//PhpMail
	$To                 = "sales@servicedcloud.com";
	
	//EMail Variables
	$eMailSwitch        = 0;                                                    // Switch if App will use other lead send mechanism or not
	$eMailType          = 1;                                                    // Mail Type: 0 - PHPMailer OR 1 - SMTP
	$eMailHost          = "smtp.gmail.com";                                     // Mail Hooked Server
	$eMailPort          = 587;                                                  // Port of Mail Server
	$eMailSMTPSecure    = "tls";                                                // Security Protocol of Mail
	$eMailUserName      = "mauticservicedcloud@gmail.com";                      // UserName Intended Mail
	$eMailPassword      = "mauticHTL40";                                        // Password of Intended Mail
	$eMailSMTPDebug     = 2;                                                    // Debug Option: 0 - OFF, 1 - client message, 2 - client and server messages
	$eMailFrom          = array("noreply@gmail.com", "Sys Ad");
	$eMailSubj          = "Your Serviced Cloud Package";	
	
	//Mautic	
	$mVersion           = 'OAuth1a';
	$mDomainPath        = 'http://mauticmerge.dev.htlonline.net';                    //Mautic URL Path
	$mEmailContent      = 'http://mauticmerge.dev.htlonline.net/email/preview/2';    //Email Body
	$mSearchFilter      = '';
	$mStart             = 0;
	$mLimit             = 200; 
	$mOrderBy           = '';
	$mOrderByDir	    = 'asc';
	$mEmailID           = 2;   //Email :: AutoResponse - Calculator
	$mRecListID         = 28;  //Segment :: Calculator Aid (calc-aid-points) 
	$mRecCamID          = 1;   //Campaign :: Calculator Campaign
	$mRecCamEmailID     = 4;
	
	//Points Integer
	$mIntExistingPts    = 15; 
	$mIntNewPts         = 30; 
	
	$mDefaultFields     = array("title"=>array("id"=>"1","label"=>"Title","alias"=>"title","type"=>"lookup","group"=>"core","value"=>NULL),"firstname"=> array("id"=>"2","label"=>"First Name","alias"=>"firstname","type"=>"text","group"=>"core","value"=>NULL),"lastname"=>array("id"=>"3","label"=> "Last Name","alias"=>"lastname","type"=>"text","group"=>"core","value"=>NULL),"company"=>array("id"=>"4","label"=>"Company","alias"=>"company","type"=>"lookup","group"=>"core","value"=>NULL),"position"=>array("id"=>"5","label"=>"Position","alias"=>"position","type"=>"text","group"=>"core","value"=>NULL),"email"=>array("id"=>"6","label"=>"Email","alias"=>"email","type"=>"email","group"=>"core","value"=>NULL),"phone"=>array("id"=>"7","label"=>"Phone","alias"=>"phone","type"=>"tel","group"=>"core","value"=>NULL),"mobile"=>array("id"=>"8","label"=>"Mobile","alias"=>"mobile","type"=>"tel","group"=>"core","value"=>NULL),"fax"=>array("id"=>"9","label"=>"Fax","alias"=>"fax","type"=>"text","group"=>"core","value"=>NULL),"address1"=>array("id"=>"10","label"=>"Address Line 1","alias"=>"address1","type"=>"text","group"=>"core","value"=>NULL),"address2"=>array("id"=>"11","label"=>"Address Line 2","alias"=> "address2","type"=>"text","group"=>"core","value"=>NULL),"city"=>array("id"=>"12","label"=>"City","alias"=>"city","type"=>"lookup","group"=>"core","value"=>NULL),"state"=>array("id"=>"13","label"=>"State","alias"=>"state","type"=>"region","group"=>"core","value"=>NULL),"zipcode"=>array("id"=>"14","label"=>"Zipcode","alias"=>"zipcode","type"=>"lookup","group"=>"core","value"=>NULL),"country"=>array("id"=>"15","label"=>"Country","alias"=>"country","type"=>"country","group"=>"core","value"=>NULL),"website"=>array("id"=>"16","label"=>"Website","alias"=>"website","type"=>"text","group"=>"core","value"=>NULL),"message"=>array("id"=>"23","label"=>"Message","alias"=>"message","type"=>"textarea","group"=>"core","value"=>NULL),"calc_already_added"=>array("id"=>"32","label"=>"Added Points","alias"=>"calc_already_added","type"=>"text","group"=>"core","value"=>NULL),"cloud_features"=>array("id"=>"33","label"=>"Cloud Features","alias"=>"cloud_features","type"=>"text","group"=>"core","value"=>NULL),"calc_response"=>array("id"=>"34","label"=>"From Calculator Form","alias"=>"calc_response","type"=>"text","group"=>"core","value"=>NULL),"hosted_desktop"=>array("id"=>"35","label"=>"Hosted Desktop","alias"=>"hosted_desktop","type"=>"text","group"=>"core","value"=>NULL),"office_version"=>array("id"=>"37","label"=>"Office Version","alias"=>"office_version","type"=>"text","group"=>"core","value"=>NULL),"offline_features"=>array("id"=>"38","label"=>"Offline Features","alias"=>"offline_features","type"=>"text","group"=>"core","value"=>NULL),"phone_system"=>array("id"=>"39","label"=>"Phone System","alias"=>"phone_system","type"=>"text","group"=>"core","value"=>NULL),"total_per_month"=>array("id"=>"40","label"=>"Total Per Month","alias"=>"total_per_month","type"=>"text","group"=>"core","value"=>NULL),"total_terabytes"=>array("id"=>"41","label"=>"Total Terabytes","alias"=>"total_terabytes","type"=>"text","group"=>"core","value"=>NULL),"total_users"=>array("id"=>"42","label"=>"Total Users","alias"=>"total_users","type"=>"text","group"=>"core","value"=>NULL),"user_per_month"=>array("id"=>"43","label"=>"User Per Month","alias"=>"user_per_month","type"=>"text","group"=>"core","value"=>NULL),"computers"=>array("id"=>"53","label"=>"Computers","alias"=>"computers","type"=>"number","group"=>"core","value"=>NULL),"laptops"=>array("id"=>"54","label"=>"Laptops","alias"=>"laptops","type"=>"number","group"=>"core","value"=>NULL),"deskphones"=>array("id"=>"55","label"=>"Desk Phones","alias"=>"deskphones","type"=>"number","group"=>"core","value"=>NULL),"iphoneblackberry"=>array("id"=>"56","label"=>"Iphone/Blackberry","alias"=>"iphoneblackberry","type"=>"number","group"=>"core","value"=>NULL),"networkprinter"=>array("id"=>"57","label"=>"Network Printer","alias"=>"networkprinter","type"=>"number","group"=>"core","value"=>NULL),"routerfirewall"=>array("id"=>"58","label"=>"Router/Firewall","alias"=>"routerfirewall","type"=>"number","group"=>"core","value"=>NULL),"server"=>array("id"=>"59","label"=>"Server","alias"=>"server","type"=>"number","group"=>"core","value"=>NULL),"totalmonthlycost"=>array("id"=>"60","label"=>"Total Monthly Cost","alias"=>"totalmonthlycost","type"=>"number","group"=>"core","value"=>NULL));
 
			
	if(trim($_SERVER['HTTP_HOST']) == 'localhost'){                              //Local
		                    
		$mCallBack      = 'http://localhost/calculator/fromlive/htl/mod_v2calc/lib/php/comEmail.php'; 
		$mClientKey     = 'c4fqv464kpsgog8cwscwkoskks00gck0s0sk08ok808cgc84k';     
		$mClientSecret  = '5f3edhue9e884ck84co0wsc8o08c0osgock88440c4ggc0ss40';     	 
		
		$mAccessToken   = '575dtjy92zok4kso08wk0c0ggk8ggo4c484gkggs8w8s4wk80o';    
		$mTokenSecret   = '3b83d7hirkmcg04wk48kk40k08gwcwggs4kcsoocg4w8osgkss';	 
		$mDirectory     = dirname(__FILE__) . '/'; 
		$mAccessDir     = '';	 
		
	} else if(trim($_SERVER['HTTP_HOST']) == 'htlv2.dev.htlonline.net'){	  //Beta 
		 
		$mCallBack      = 'http://htlv2.dev.htlonline.net/modules/mod_v2calc/lib/php/comEmail.php';          
		$mClientKey     = '2wg86x4vqdyc0skkgk8ow80w4c0w4k8sk8o888gkoo8c4cgoc0';      
		$mClientSecret  = 'xeanfcb6cis4k0oco40gk0so8o40cs0g80swcgokswkg4gwk0';      
		 		
		$mAccessToken   = 't0nwh4e9lzk8g08go4kc4ow8s44wokg4g8goksggkcwkcggg8';   
		$mTokenSecret   = '2vtdrm623okkk0gwwcc4kgsksggcsco0wkwcgosskkw4oso0sk';   
		
		$mDirectory     = dirname(__FILE__) . '/';
		$mAccessDir     = $mDirectory;
		
	} else {           																//Production
		
		$mCallBack      = 'https://www.htl.london/modules/mod_v2calc_htl/lib/php/comEmail.php';
		$mClientKey     = '';   
		$mClientSecret  = '';   
		
		$mAccessToken   = '';   
		$mTokenSecret   = '';   
		
		$mDirectory     = dirname(__FILE__) . '/';
		$mAccessDir     = $mDirectory;
	
	}
	
	/*
		$mCallBack  - The variable that holds which file is calling the access to Mautic end
		$mClientKey - The variable that holds the client key that is registered within Mautic API Credentials
		$mClientSecret - The variable that coincides with the $mClientKey that is part of the Mautic API Credentials
		
		$mAccessToken & $mTokenSecret - Variables that are produced whenever a successful connection of the call back and Mautic has been established. This also, checked by the Mautic whenever the call back tries to connect again and values of this part from time to time this could be changed by Mautic.
		
		//Test URL :: https://www.htl.london/modules/mod_v2calc/lib/php/comEmail.php?client_email=paul@pc-ready.net&client_firstname=Sample client&client_lastname=test&client_phone=09995211567&company_name=The Testing Company&fetchvalues=computers~37|networkprinter~8|laptops~63|routerfirewall~3|deskphones~24|server~4|iphoneblackberry~53|totalmonthlycost~£ 3573
		
	*/
	

?>