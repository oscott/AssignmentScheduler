 
<link href="/css/css.css" rel="stylesheet" type="text/css" />

<script language="javascript"> 
function showMore() {
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("displayText");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = 'Info';
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = 'Hide';
	}
}
</script>

<script language="javascript"> 
function showMore2() {
	var ele1 = document.getElementById("toggleText1");
	var text = document.getElementById("displayText1");
	if(ele1.style.display == "block") {
    		ele1.style.display = "none";
		text.innerHTML = 'Info';
  	}
	else {
		ele1.style.display = "block";
		text.innerHTML = 'Hide';
	}
} 
</script>
<script language="javascript"> 
function showMore3() {
	var ele2 = document.getElementById("toggleText2");
	var text = document.getElementById("displayText2");
	if(ele2.style.display == "block") {
    		ele2.style.display = "none";
		text.innerHTML = 'Info';
  	}
	else {
		ele2.style.display = "block";
		text.innerHTML = 'Hide';
	}
} 
</script>
<script language="javascript"> 
function showMore4() {
	var ele3 = document.getElementById("toggleText3");
	var text = document.getElementById("displayText3");
	if(ele3.style.display == "block") {
    		ele3.style.display = "none";
		text.innerHTML = 'Info';
  	}
	else {
		ele3.style.display = "block";
		text.innerHTML = 'Hide';
	}
} 
</script>

<?php

$enddate = $_POST['enddate'];

require("dateDiff.php");
$today = date("d-m-y");
$result =  dateDiff("-", $enddate, $today);

$s1 = $result * 0.20;
$s1 = floor($s1);
$s2 = $result * 0.30;
$s2 = floor($s2);
$s3 = $result * 0.30;
$s3 = floor($s3);
$s4 = $result * 0.20;
$s4 = floor($s4);

echo "<ul>";
echo "<li>";
$date = strtotime(date("d-m-y", strtotime($today)) . " +$s1 day");
echo "Research will be need to be completed on: ".date('d-m-y', $date). "<br>";
?>
<a id="displayText" href="javascript:showMore();">Info</a>
<div id="toggleText" style="display: none">
        <ul>
        <li>LINK</li>
        <li>LINK</li>
        <li>LINK</li>
        <li>LINK</li>

    </ul> 
<?php
echo "</li>";


$step2 = date('d-m-y', $date);

echo "<li>";
$date2 = strtotime(date("d-m-y", strtotime($step2)) . " +$s2 day");
echo "Literature Review will need to be completed on: ".date('d-m-y', $date2)."<br>";
?>
<a id="displayText1" href="javascript:showMore2();">Info</a>
<div id="toggleText1" style="display: none">
        <ul>
        <li>LINK</li>
        <li>LINK</li>
        <li>LINK</li>
        <li>LINK</li>

    </ul> 
<?php
echo "</li>";

$step3 = date('d-m-y', $date2);

echo "<li>";
$date3 = strtotime(date("d-m-y", strtotime($step3)) . " +$s3 day");
echo "Draft will needed to be completed on: ".date('d-m-y', $date3)."<br>";
?>
<a id="displayText2" href="javascript:showMore3();">Info</a>
<div id="toggleText2" style="display: none">
        <ul>
        <li>LINK</li>
        <li>LINK</li>
        <li>LINK</li>
        <li>LINK</li>

    </ul>
<?php
echo "</li>";

$step4 = date('d-m-y', $date3);

echo "<li>";
$date4 = strtotime(date("d-m-y", strtotime($step4)) . " +$s4  day");
echo "Final report will need to be completed on: ".date('d-m-y', $date4)."<br>";
?>
<a id="displayText3" href="javascript:showMore4();">Info</a>
<div id="toggleText3" style="display: none">
    <ul>
        <li>LINK</li>
        <li>LINK</li>
        <li>LINK</li>
        <li>LINK</li>

    </ul>
<?php
echo "</li>";
echo "</ul>";

?>

        <form action="pdf.php" method="post"  target="_blank">
          <p>
            <label for="message"></label>
            <input type="hidden" value="<?php echo date('d-m-y', $date); ?>" name="date1"/>
            <input type="hidden" value="<?php echo date('d-m-y', $date2);?>" name="date2"/>
            <input type="hidden" value="<?php echo date('d-m-y', $date3); ?>" name="date3"/>
            <input type="hidden" value="<?php echo date('d-m-y', $date4); ?>" name="date4"/>
          </p>
          <p>
            <input type="submit" value="Export to PDF" class="text_button">
          </p>
        </form>