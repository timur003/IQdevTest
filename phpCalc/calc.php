<?php
$date = $_POST['date'];
$summn = $_POST['summn'];
$month = $_POST['year'] * 12;
$addstatus = $_POST['addstatus'];
$summadd = $_POST['summadd'];
$daysn = 0;

if ($addstatus == 'false' || $summadd == ''){
  $summadd = 0;
}
$summn = $summn - $summadd;

while ($month > 0):
  $daysn = date("t", strtotime($date));
  $date = date("m/d/Y", strtotime("+1 month", strtotime($date)));
  $summn = $summn + $summadd + ($summn + $summadd) * $daysn * (0.1 / 365);
  --$month;
endwhile;

echo round($summn);
?>
