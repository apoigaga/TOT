<?php

use yiihelpersHtml;
use yii\helpers\BaseHtml;
use yii\widgets\ActiveForm;

use backend\assets\AppAsset;
use yii\db\ActiveRecord;

?>


<?php
session_start();
$db = mysql_connect("localhost","root","apoigaga123");
mysql_select_db("tot",$db);

if(isset($_GET['question']))
{
	$question = preg_replace('/[^0-9]', "", $_GET['question1']);
	$next = $question + 1;
	$prev = $question -1;
	if(!isset($_SESSION['qid_array']) && $question != 1)
	{
		$msg = "Sorry no cheating.";
		header("location: index.php?msg=$msg"); 
		exit();
	}

	if(isset($_SESSION['qid_array']) && in_array($question, $_SESSION['qid_array']))
	{
		$msg = "sorry, cheating not allowed you are required to startover"; //balik semula dari soalan pertama
		unset($_SESSION['answer_array']);
		unset($_SESSION['qid_array']);
		session_destroy();
		header("location: index.php?msg=$msg");
		exit();

	}

	if(isset($_SESSION['lastQuestion']) && $_SESSION['lastQuestion'] != $prev)
	{
		$msg = "sorry, cheating not allowed you are required to start over";
		unset ($_SESSION['answer_array']);
		unset($_SESSION['qid_array']);
		session_destroy();
		header("location: index.php?msg=$msg");
		exit();
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quiz page</title>
	<script type="text/javascript">

	function countDown(secs, elem)
	{
		var element = document.getElementById(elem);
		element.innerHTML = "you have "+secs+" seconds remaining";
		if(secs < 1)
		{
			var xhr = new XMLHttpRequest();
			var url = "userAnswer.php";
			var vars = "radio=0"+"&qid="+<?php echo $question; ?>;
			xhr.open("POST", url, true);
			xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhr.onreadystatechange = function()
			{
				if (xhr.readyState == 4 && xhr.status == 200) 
				{
					alert("xjawab soalan dalam masa yg diberikan");
					clearTimeout(timer);

				}
			}

			xhr.send(vars);
			document.getElementById('counter_status').innerHTML = "";
			document.getElementById('btnSpan').innerHTML = '<h2>Times up!</h2>';
			document.getElementById('btnSpan').innerHTML += '<a href="quiz.php?question=<?php echo $next; ?>">Click here now</a>';

		}

		secs--;
		var timer = setTimeout('countDown('+secs+', "'+elem+'")',1000);
	}
	</script>

	<script>

	function getQuestion()
	{
		var hr = newXMLHttpRequest();
		hr.onreadystatechange = function()
		{
			if (hr.readyState == 4 && hr.status == 200)
			{
				var response = hr.responseText.split("|");
				if (response[0] == "finished") 
				{
					document.getElementById('status').innerHTML = response[1];
				}

				var nums = hr.responseText.split(",");
				document.getElementById('question').innerHTML = nums[0];
				document.getElementById('answers').innerHTML = [1];
				document.getElementById('answers').innerHTML += [2];

			}
		}

		hr.open("GET", "question1.php?question=" +<?php echo $question; ?>, true);
		hr.send();
	}

	function x()
	{
		var rads = document.getElementByName("rads");
		for (var i = 0; i < rads.lenght; i++)
		{
			if(rads[i].checked)
			{
				var val = rads[i].value;
				return val;
			}
		}
	}

	function post_answer()
	{
		var p = new XMLHttpRequest();
		var id = document.getElementById('qid').value;
		var url = "userAnswer.php";
		var vars = "qid="+id+"&radio="+x();
		p.open("POST", url, true);
		p.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		p.onreadystatechange = function()
		{
			if(p.readyState == 4 && p.status == 200)
			{
				document.getElementById("status").innerHTML = '';
				alert("Thanks, your answer was submitted"+ p.responseText);
				var url = 'quiz.php?question=<?php echo $next; ?>';
				window.location = url;

			}
		}

		p.send(vars);
		document.getElementById("status").innerHTML = "processing...";
	}


	</script>
	<script>
	window.oncontextmenu = function() //to disable right click
	{
		return false;
	}
	</script>

	</head>
	<body onload="getQuestion()">
	<div id="status">
		<div id="counter_status"></div>
		<div id="question"></div>
		<div id="answers"></div>
	</div>
	<script type="text/javascript">countDown(20,"counter_status");</script>

	</body>
</html>