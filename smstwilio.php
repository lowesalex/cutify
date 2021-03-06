  <?php
// Get the PHP helper library from https://twilio.com/docs/libraries/php
require_once '/path/to/vendor/autoload.php'; // Loads the library
use Twilio\Rest\Client;

$sid = echo "$siddata"; //get Sid from your twilio.com/user/account
$token = echo "$authtoken";  //get Auth Token from twilio.com/user/account
$client = new Client($sid, $token);

// Get an object from its sid. If you do not have a sid,
// check out the list resource examples on this page
$message = $client
    ->messages("")
    ->fetch();

echo $message->body;

/* output json format :
{
   "account_sid": "",
   "api_version": "2010-04-01",
   "body": "Problems in the Holodeck again! Can you help troubleshoot?",
   "error_code": null,
   "error_message": null,
   "num_segments": "1",
   "num_media": "0",
   "date_created": "Mon, 16 Aug 2010 03:45:01 +0000",
   "date_sent": "Mon, 16 Aug 2010 03:45:03 +0000",
   "date_updated": "Mon, 16 Aug 2010 03:45:03 +0000",
   "direction": "outbound-api",
   "from": "",
   "price": "",
   "sid": "",
   "status": "sent",
   "to": "",
   "uri": "" 
}

*/
