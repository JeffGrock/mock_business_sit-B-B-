<table border='0' id = 'calender'>
<?php 

$date = getdate();


$current_day = $date['mday'];
$mon = $date['mon'];
$week_day = $date['wday'];
$month = $date['month'];
$year = $date['year'];


$dayCount = $week_day;
$day = $current_day;

while($day > 0) {
	$days[$day--] = $dayCount--;
	if($dayCount < 0)
		$dayCount = 6;
}

$dayCount = $week_day;
$day = $current_day;

if(checkdate($mon,31,$year))
	$lastDay = 31;
elseif(checkdate($mon,30,$year))
	$lastDay = 30;
elseif(checkdate($mon,29,$year))
	$lastDay = 29;
elseif(checkdate($mon,28,$year))
	$lastDay = 28;

while($day <= $lastDay) {
	$days[$day++] = $dayCount++;
	if($dayCount > 6)
		$dayCount = 0;
}	



echo("<tr>");
echo("<th colspan='7' align='center'>$month $year</th>");
echo("</tr>");
echo("<tr>");
	echo("<td >Sun</td>");
	echo("<td class='bg-yellow'>Mon</td>");
	echo("<td class='bg-yellow'>Tue</td>");
	echo("<td class='bg-yellow'>Wed</td>");
	echo("<td class='bg-yellow'>Thu</td>");
	echo("<td class='bg-yellow'>Fri</td>");
	echo("<td class='bg-yellow'>Sat</td>");
echo("</tr>");

$startDay = 0;
$d = $days[1];

echo("<tr>");
while($startDay < $d) {
	echo("<td></td>");
	$startDay++;
}

for ($d=1;$d<=$lastDay;$d++) {

	if($d == $current_day)
		echo("<td class='bg-blue'><a href='#' title='Detail of day'>$d</a></td>");
	else 
		echo("<td class='bg-white'><a href='#' title='Detail of day'>$d</a></td>");


	$startDay++;
	if($startDay > 6 && $d < $lastDay){
		$startDay = 0;
		echo("</tr>");
		echo("<tr>");
	}
}
echo("</tr>");
?>
</table>