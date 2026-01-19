<?php
    date_default_timezone_set('Asia/Manila');
    
    $currentDate = date('l, F j, Y');
    $currentTime = date('h:i A');
?>

<!DOCTYPE html>
<html>
    <body>
        <header style="padding: 20px;
        text-align: center;
        margin-bottom: 20px;">

        <h1>Philippine Holidays 2026</h1>
        <p>Today is <strong><?php echo $currentDate; ?></strong></p>
        <p>Local Time: <strong><?php echo $currentTime; ?></strong></p>
    </header>
    </body>
</html>
