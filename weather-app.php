<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
</head>
<body>
    <h1>Weather App</h1>
    <?php
    if ('post' === strtolower($_SERVER['REQUEST_METHOD'])) {
    ?>
        <h2><?php echo file_get_contents('https://api.open-meteo.com/v1/forecast?latitude=52.5125&longitude=6.0944&current=temperature_2m,relative_humidity_2m,surface_pressure,wind_speed_10m,wind_direction_10m&hourly=temperature_2m,relative_humidity_2m,surface_pressure,wind_speed_80m,wind_direction_80m,is_day&timezone=auto&forecast_days=1'); ?></h2>
    <?php
    } else {
    ?>
        <form method="post">
            <input type="submit" value="temperatuur">
        </form>
    <?php
    }
    ?>
</body>
</html>