<?php
// This is the application configuration file. All values have been set to
// the default, and should be changed as needed.
return array(
	'BaseURI'              => '/~kuja/flux',            // The base URI is the base web root on which your application lies.
	'SiteTitle'            => 'Flux Control Panel',     // This value is only used if the theme decides to use it.
	'ThemeName'            => 'default',                // The theme name of the theme you would like to use.  Themes are in FLUX_ROOT/themes.
	'DateFormat'           => 'Y-m-d',                  // Default DATE format to be displayed in pages.
	'DateTimeFormat'       => 'Y-m-d h:i:s',            // Default DATETIME format to be displayed in pages.
	'MinUsernameLength'    => 4,                        // Minimum username length.
	'MaxUsernameLength'    => 23,                       // Maximum username length.
	'MinPasswordLength'    => 4,                        // Minimum password length.
	'MaxPasswordLength'    => 23,                       // Maximum password length.
	'AllowDuplicateEmails' => false,                    // Whether or not to allow duplicate e-mails to be used in registration.
	'SessionKey'           => 'fluxSessionData',        // Shouldn't be changed, just specifies the session key to be used for session data.
	'DefaultModule'        => 'main',                   // This is the module to execute when none has been specified.
	'DefaultAction'        => 'index',                  // This is the default action for any module, probably should leave this alone. (Deprecated)
	'OutputCleanHTML'      => true,                     // Use this if you have Tidy installed to clean your HTML output when serving pages.
	'ShowCopyright'        => true,                     // Whether or not to show the copyright footer.
	'UseCleanUrls'         => true,                     // Set to true if you're running Apache and it supports mod_rewrite and .htaccess files.
	'DebugMode'            => true,                     // Set to false to minimize technical details from being output by Flux.
	'UseCaptcha'           => true,                     // Use CAPTCHA image for account registration to prevent automated account creations. (Requires GD2)
	'CreditExchangeRate'   => 1.5,                      // The rate at which credits are exchanged for dollars.
	'DonationCurrency'     => 'USD',                    // Preferred donation currency. Only donations made in this currency will be processed for credit deposits.
	'MoneyDecimalPlaces'   => 2,                        // (Visual) Number of decimal places to display in amount.
	'MoneyThousandsSymbol' => ',',                      // (Visual) Thousanths place separator (a period in European currencies).
	'MoneyDecimalSymbol'   => '.',                      // (Visual) Decimal separator (a comma in European currencies).
	'AcceptDonations'      => true,                     // Whether or not to accept donations.
	'PayPalIpnUrl'         => 'www.sandbox.paypal.com', // The URL for PayPal's IPN responses (www.paypal.com for live and www.sandbox.paypal.com for testing)
	'PayPalBusinessEmail'  => 'admin@localhost',        // Enter the e-mail under which you have registered your business account.
	'PayPalReceiverEmails' => array(                    // These are the receiver e-mail addresses who are allowed to receive payment.
		'admin2@localhost',                             // -- This array may be empty if you only use one e-mail
		'admin3@localhost'                              // -- because your Business Email is also checked.
	),
	
	// These are the main menu items that should be displayed by themes.
	// They route to modules and actions.  Whether they are displayed or
	// not at any given time depends on the user's account level and/or
	// their login status.
	'MenuItems' => array(
		'Home'          => array('module' => 'main'),
		'Register'      => array('module' => 'account', 'action' => 'create'),
		'Login'         => array('module' => 'account', 'action' => 'login'),
		'Logout'        => array('module' => 'account', 'action' => 'logout'),
		'My Account'    => array('module' => 'account', 'action' => 'view'),
		'Purchase'      => array('module' => 'purchase'),
		'Donate'        => array('module' => 'donate'),
		'Server Status' => array('module' => 'server', 'action' => 'status'),
		'Server Logs'   => array('module' => 'server', 'action' => 'log'),
		//'IP Ban List'   => array('module' => 'ipban'),
		//'Accounts'      => array('module' => 'account'),
		//'Characters'    => array('module' => 'character'),
		//'Guilds'        => array('module' => 'guild'),
		//'Castles'       => array('module' => 'castle'),
		//'Auction'       => array('module' => 'auction'),
		//'Economy'       => array('module' => 'economy'),
		//'Ranking'       => array('module' => 'ranking'),
		//'Items'         => array('module' => 'item'),
		//'Monsters'      => array('module' => 'monster'),
		'Installation'  => array('module' => 'install'),
	),
	
	// Sub-menu items that are displayed for any action belonging to a
	// particular module. The format it simple.
	'SubMenuItems' => array(
		
	),
	
	// Specifies which modules and actions should be ignored by Tidy
	// (enabled/disabled by the OutputCleanHTML option).
	'TidyIgnore' => array(
		array('module' => 'captcha')
	)
);
?>