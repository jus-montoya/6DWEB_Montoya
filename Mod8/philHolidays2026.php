<?php
    include 'includes/header.php';

    $national_holidays = [
    ["holidays" => "New Year's Day", "date" => "2026-01-01", "image" => "img/hny.jpg"],
    ["holidays" => "Maundy Thursday", "date" => "2026-04-02", "image" => "img/maundythurs.jpg"],
    ["holidays" => "Good Friday", "date" => "2026-04-03", "image" => "img/goodfri.jpg"],
    ["holidays" => "Araw ng Kagitingan", "date" => "2026-04-09", "image" => "img/ank.jpg"],
    ["holidays" => "Labor Day", "date" => "2026-05-01", "image" => "img/labor.png"],
    ["holidays" => "Independence Day", "date" => "2026-06-12", "image" => "img/ind.jpg"],
    ["holidays" => "National Heroes Day", "date" => "2026-08-31", "image" => "img/heroes.jpg"],
    ["holidays" => "Bonifacio Day", "date" => "2026-11-30", "image" => "img/boni.png"]
    ];

    $local_holidays = [
    ["holidays" => "Pinatubo Day", "date" => "2026-06-15", "image" => "img/pinatubo.jpg"],
    ["holidays" => "Feast of La Naval de Angeles", "date" => "2026-10-11", "image" => "img/lanaval.jpg"],
    ["holidays" => "Feast of Apung Mamacalulu", "date" => "2026-10-31", "image" => "img/apu.jpg"],   
    ["holidays" => "Pampanga Day", "date" => "2026-12-11", "image" => "img/pamp.png"]
    ];

    $timezones = [
        ["city" => "Tokyo", "zone" => "Asia/Tokyo"],
        ["city" => "London", "zone" => "Europe/London"],
        ["city" => "New York", "zone" => "America/New_York"]
    ];

    $now = new DateTime('now', new DateTimeZone('UTC'));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta holidays="viewport" content="width=device-width, initial-scale=1.0">
        <title>Philippine Holidays 2026</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
<body>

    <h1>National Holidays</h1>
    <div class="cards">
            <?php foreach ($national_holidays as $holiday): ?>
                <a class="card">
                    <div class="card-hero">
                        <img src="<?php echo $holiday["image"]; ?>" alt="<?php echo $holiday["holidays"]; ?>" />
                    </div>
                    <div class="card-header">
                        <h3><?php echo $holiday["holidays"]; ?></h3>
                    </div>
                    <div class="card-body">
                        <p><?php echo date('F j', strtotime($holiday["date"])); ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
    </div>

    <br> <br> <br>

    <h1>Local Holidays</h1>
    <div class="cards local-grid">
            <?php foreach ($local_holidays as $holiday): ?>
                <a class="card">
                    <div class="card-hero">
                        <img src="<?php echo $holiday["image"]; ?>" alt="<?php echo $holiday["holidays"]; ?>" />
                    </div>
                    <div class="card-header">
                        <h3><?php echo $holiday["holidays"]; ?></h3>
                    </div>
                    <div class="card-body">
                        <p><?php echo date('F j', strtotime($holiday["date"])); ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
    </div>

    <br> <br> <br>

    <h1>Timezones</h1>
    <div class="timezone-grid">
        <?php foreach ($timezones as $tz): ?>
            <?php 
                $localTime = clone $now;
                $localTime->setTimezone(new DateTimeZone($tz['zone']));
            ?>
            <div class="time-box">
                <span class="city-label"><?php echo $tz['city']; ?></span>
                <span class="time-display"><?php echo $localTime->format('h:i A'); ?></span>
            </div>
        <?php endforeach; ?>
    </div>

    <br> <br> <br>

    <?php
        include 'includes/footer.php';
    ?>
</body>
</html>