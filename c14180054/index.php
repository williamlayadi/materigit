c14180054 / William Layadi
Pemrograman Mobile Berbasis Web
Gojek / Grab sederhana

<form action="test.php">
<input type="date" id="datePicker" name="DatePicker">
<input type="submit" value="Hitung DatePicker dan Date Sekarang">
</form>
<?php
if (isset($_GET['DatePicker'])) {
	$datepilihan = $_GET['DatePicker'];
    echo "Date Picker 1 adalah ".$_GET['DatePicker']."<br>";
} else {
    // Fallback behaviour goes here
}
echo "Today is ".date("Y/m/d")."<br>";


$date1=date_create($datepilihan);
$date2=date_create(date("Y/m/d"));
$diff=date_diff($date1,$date2);
echo $diff->format("%a")."<br>";

?>
