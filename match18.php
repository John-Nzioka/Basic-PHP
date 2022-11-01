<?php

$paymentStatus = '1  -0 lb vv
\';

switch ($paymentStatus) {
    case 1:
        echo 'Paid';
        break;

    case 2:
    case 3:    
        echo 'Payment Declined';
        break;

    case 0:
        echo 'Pending Payment';
        break;
    
    default:
        echo 'Unknown Payment Status';
        break;
}

echo '<br />';

$paymentStatusDisplay = match($paymentStatus) {

   1   => 'Paid',
   2,3 => 'Payment Declined',
   0   => 'Pending Payment' ,
   default=> 'Unknown Payment Status',

}





?>
