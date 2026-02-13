<?php
$apiUrl = "https://github.com/hatim-ayyad/ramadan-countdown-api"; 

$response = @file_get_contents($apiUrl);

$data = null;
$days = 0;
$hours = 0;
$minutes = 0;
$seconds = 0;
$targetDate = "2026-02-18T00:00:00.000Z";
$hijriYear = "1447H";

if ($response !== false) {
    $decoded = json_decode($response, true);
    if (isset($decoded['status']) && $decoded['status'] === "countdown") {
        $data = $decoded;
        $days = $decoded['countdown']['days'] ?? 0;
        $hours = $decoded['countdown']['hours'] ?? 0;
        $minutes = $decoded['countdown']['minutes'] ?? 0;
        $seconds = $decoded['countdown']['seconds'] ?? 0;
        $targetDate = $decoded['targetDate'] ?? $targetDate;
        $hijriYear = $decoded['hijriYear'] ?? $hijriYear;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ramadan Countdown</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="stars"></div>

<div class="container">
    <h1 class="title">Ramadan Countdown</h1>

    <p class="subtitle">
        Ramadan <?php echo $hijriYear; ?> will, inshaAllah, be coming on February 18, 2026
    </p>

    <div class="card">
        <div id="countdown">
            <div class="time"><span id="days"><?php echo $days; ?></span><small>Days</small></div>
            <div class="time"><span id="hours"><?php echo $hours; ?></span><small>Hours</small></div>
            <div class="time"><span id="minutes"><?php echo $minutes; ?></span><small>Minutes</small></div>
            <div class="time"><span id="seconds"><?php echo $seconds; ?></span><small>Seconds</small></div>
        </div>
    </div>
</div>

<script>
var countDownDate = new Date("<?php echo $targetDate; ?>").getTime();

setInterval(function() {

  var now = new Date().getTime();
  var distance = countDownDate - now;

  if(distance < 0){
    document.getElementById("countdown").innerHTML = "Ramadan Mubarak 🌙";
    return;
  }

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("days").innerHTML = days;
  document.getElementById("hours").innerHTML = hours;
  document.getElementById("minutes").innerHTML = minutes;
  document.getElementById("seconds").innerHTML = seconds;

}, 1000);
</script>

</body>
</html>
