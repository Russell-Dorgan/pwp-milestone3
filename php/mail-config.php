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

$mailgunApiKey = "593c57470ab41ee54689f9c7e3d77b90-0afbfc6c-61dbacca";
$mailgunDomain = "sandbox399729e537204db0b8cba6c14db67406.mailgun.org";


// your Google reCAPTCHA keys here
// your Google reCAPTCHA keys here
$siteKey = '6Ld9BOwUAAAAAC_HcYYJ7i6YvpWxUwHeOsx_rYj_';
$secret = '6Ld9BOwUAAAAABuS0wt_Roygy2cHBx-t1h5feG6M';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = [ "clambakedbenz@gmail.com" => "Russell J Dorgan"];
$MAIL_RECIPIENT = ["clambakedbenz@gmail.com"];