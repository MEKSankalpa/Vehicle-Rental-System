<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51JATXtKOzdbpo96WMPw98PDvZGHOCFhvL4JKr3qqPgJdlU6ayyMLArTf8BJLRx3XNXBqFq3fBmZggJ939Jal0JyB00PKePLb9f";

$secretKey="sk_test_51JATXtKOzdbpo96WoFctzIPmyMDCriWFIvut5DObUzvESTl94B6tzFPbOfLHK4FCKiiIT9dA5jfEjVPO8jhAdBbn00aWG13zny";

\Stripe\Stripe::setApiKey($secretKey);
?>