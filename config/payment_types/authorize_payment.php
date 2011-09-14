<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['authorize_payment'] = array(
			'ip_address'		=>	'',	//IP address of purchaser
			'cc_type'			=>	'',	//Visa, MasterCard, Discover, Amex
			'cc_number'			=>	'', //Credit card number
			'cc_exp'			=>	'', //Must be formatted MMYYYY
			'cc_code'			=>	'', //3 or 4 digit cvv code
			'email'				=>	'', //email associated with account being billed
			'first_name'		=>	'', //first name of the purchaser
			'last_name'			=>	'', //last name of the purchaser
			'business_name'		=>	'', //name of business
			'street'			=>	'', //street address of the purchaser
			'street2'			=>	'', //street address 2 of purchaser
			'city'				=>	'', //city of the purchaser
			'state'				=>	'', //state of the purchaser
			'country'		=>	'', // country of the purchaser
			'postal_code'				=>	'', //zip code of the purchaser
			'amt'				=>	'', //purchase amount
			'phone'	=>	'', //phone num of customer shipped to
			'fax'				=>	'',
			'identifier' => '', //Merchant provided identifier for the transaction
			'currency_code'		=>	'', //currency code to use for the transaction.
			'item_amt'			=>	'', //Amount for just the item being purchased.
			'insurance_amt'		=>	'', //Amount for just insurance.
			'shipping_disc_amt'	=>	'', //Amount for just shipping.
			'handling_amt'		=>	'', //Amount for just handling.
			'tax_amt'			=>	'', //Amount for just tax.
			'desc'				=>	'', //Description for the transaction
			'custom'			=>	'', //Free form text field
			'inv_num'			=>	'', //Invoice number
			'notify_url'		=>	'',	//Your URL for receiving Instant Payment Notification (IPN) about this transaction. If you do not specify this value in the request, the notification URL from your Merchant Profile is used, if one exists.
			'run_as_test'		=>	'', //Run the transaction in test mode
			'duplicate_window'	=>	'', //Duration of time for which duplicate transactions will be rejected
			'ship_to_first_name'=>	'',
			'ship_to_last_name'	=>	'',
			'ship_to_street'	=>	'',			
			'ship_to_city'		=>	'',
			'ship_to_state'		=>	'',
			'ship_to_postal_code'=>	'',
			'ship_to_country'	=>	'',	
			'ship_to_company'	=>	'',
			'shipping_amt'		=>	'',
			'duty_amt'			=>	'',
			'tax_exempt'		=>	'',
			'po_num'			=>	'',
);

return $config;