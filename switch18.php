<?php

$paymentStatus = 'declined';
sleep();

switch ($paymentStatus) {
    case 'paid':
        echo 'Paid';
        break;

    case 'declined':
    case 'rejected':
        echo 'Payment declined';
        break;
            
    case 'pending':
         echo 'Pending Payment';
        break;
    
    default:
       echo 'Unknown Payment Status';
       break;
}