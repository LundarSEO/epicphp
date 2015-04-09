$jul = strtotime("July 14 2015");
$now = time();
$last = $jul - $now;
echo "<br>";
$last2 = $last / (24*60*60);
echo round($last2);

$dec = strtotime("December 31 2015");
$lastdec = $dec - $now;
echo "<br>";
$lastdec2 = $lastdec / (24*60*60);
echo round($lastdec2);
