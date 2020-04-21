<?php
/**
 * mail-config.php
 * This file contains your reCAPTCHA API keys and your recipient's email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param string $mailgunDomain your mailgun private api key.
 * @param string $mailgunApiKey your mailgun domain relay.
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 *
 * This file contains sensitive information and should ALWAYS be gitignored!
 **/

//mailgun API Key authorization

$mailgunApiKey = "b50ddf1a9bc03ec40a911480fe1d8fef-f135b0f1-ed27e48d";
$mailgunDomain = "https://app.mailgun.com/app/sending/domains/sandbox13a7680857cf4ca8b3d140c74d0dc26d.mailgun.org";


// your Google reCAPTCHA keys here
// your Google reCAPTCHA keys here
$siteKey = '6Ld9BOwUAAAAAC_HcYYJ7i6YvpWxUwHeOsx_rYj_';
$secret = '6Ld9BOwUAAAAABuS0wt_Roygy2cHBx-t1h5feG6M';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = [ "mail@email.com" => "Recipient Name"];
$MAIL_RECIPIENT = ["clambakedbenz@gmail.com"];