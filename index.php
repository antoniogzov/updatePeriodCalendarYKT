<?php

include_once 'php/views/head.php';
include_once 'php/views/navbar.php';

if (isset($_GET['module'])) {
    switch ($_GET['module']) {
        case 'updatePeriodCalendar':
            include_once 'php/views/updatePeriodCalendar.php';
            break;

        default:
            include_once 'php/views/updatePeriodCalendar.php';
            break;
    }
} else {
    include_once 'php/views/updatePeriodCalendar.php';
}


include_once 'php/views/endpage.php';
include_once 'php/views/footer.php';
