<form action="test.php">
<input type="date" id="datePicker" name="DatePicker1">
<input type="date" id="datePicker" name="DatePicker2">
<input type="submit" value="Hitung DatePicker dan Date Sekarang">
</form>
<?php
if (isset($_GET['DatePicker1'])) {
	$datepilihan1 = $_GET['DatePicker1'];
    echo "Date Picker 1 adalah ".$_GET['DatePicker1']."<br>";
} else {
    // Fallback behaviour goes here
}
if (isset($_GET['DatePicker2'])) {
	$datepilihan2 = $_GET['DatePicker2'];
    echo "Date Picker 2 adalah ".$_GET['DatePicker2']."<br>";
} else {
    // Fallback behaviour goes here
}
$date1=date_create($datepilihan1);
$date2=date_create($datepilihan2);
$diff=date_diff($date1,$date2);
echo $diff->format("%a")."<br>";
?>

2 Buah
Alpukat
Anggur

Push , pull , commit , checkout , branch , status , remote , add

