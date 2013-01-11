<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>Ted Or Onion</title>

		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="shortcut icon" href="favicon.ico" />
		<script type="text/javascript" src="file/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
		
		
		<?PHP
			mysql_connect("localhost", "root", "password") or die("could not connect" . mysql_error());
			mysql_select_db("tedoronion");
		?>
	
		<script type="text/javascript">
		var questionnumber=0;
		var questions;
		var totalnum=0
			function init() {
				TrueHeight = $(window).height();
				TrueWidth = $(window).width();
				$("#Main_Submit").css("height", TrueHeight - 50);
				$("#Main_Submit").css("width", TrueWidth);
				$("#Bottom_Nav").css("width", TrueWidth);
				
				$("#Result_Background").css("height", TrueHeight);

				$("#tedlogo").css("margin-top", (TrueHeight - 50) / 2 - 75);
				$("#onionlogo").css("margin-top", (TrueHeight - 50) / 2 - 100);

				$("#tedlogo").css("margin-left", (TrueWidth / 2 - 400) / 2);
				$("#onionlogo").css("margin-left", (TrueWidth / 2 - 190) / 2);

				quotewidth = $("#Quote").width();
				$("#Quote").css("margin-left", (TrueWidth -(quotewidth + 80)) / 2);	
			}


			$(window).resize(function() {//on window resize...
				TrueHeight = $(window).height();
				TrueWidth = $(window).width();
				$("#Main_Submit").css("height", TrueHeight - 50);
				$("#Main_Submit").css("width", TrueWidth);
				$("#Bottom_Nav").css("width", TrueWidth);
				
				$("#Result_Background").css("height", TrueHeight);

				$("#tedlogo").css("margin-top", (TrueHeight - 50) / 2 - 75);
				$("#onionlogo").css("margin-top", (TrueHeight - 50) / 2 - 100);

				$("#tedlogo").css("margin-left", (TrueWidth / 2 - 400) / 2);
				$("#onionlogo").css("margin-left", (TrueWidth / 2 - 190) / 2);

				quotewidth = $("#Quote").width();
				$("#Quote").css("margin-left", (TrueWidth -(quotewidth + 80)) / 2);
				
			})
			
			//hovering and unhovering
			function hovertedlogo() {
				$("#tedlogo").css("background-position", "bottom");
			}

			function unhovertedlogo() {
				$("#tedlogo").css("background-position", "top");
			}

			function hoveronionlogo() {
				$("#onionlogo").css("background-position", "bottom");
			}

			function unhoveronionlogo() {
				$("#onionlogo").css("background-position", "top");
			}
			
			function linksubmit(){
				var quote= $("#quote").val();
				var source=$("#source").val();
				var time=$("#time").val();
				var tedoronion=$("input:radio[name=tedoronion]:checked").val();
				$.ajax({
					type:"POST",
					url: "checksubmission.php",
					data: {quote: quote, source: source, time: time, tedoronion:tedoronion}
				}).done(function(correctanswer){
					$("#Submit_Confirmation").show('drop',1000).delay(10000);
					$("#Submit_Confirmation").hide('drop',1000);
					TrueHeight = $(window).height();	
					$("#Main_Submit").css("min-height", 750);
					$("#Main_Submit").css("height", TrueHeight+100);
				})
				
			}
		</script>


	
	</head>

	
	
	<body onload="init()">
		<div id="Main_Submit">
			<div id="Submit_Confirmation">
				<h4>Thank you for your submission, it will be reviewed and added to the site shortly.</h4>
				<br/>
				<h4> <a id="link-submit" href="index.php">Back</a> to TED or Onion?</h4>
			</div>
			<h2>Submit A Quote for TED or Onion</h2>
			<form name="quotesubmit" id="quotesubmit" action ="">
					<label for="quote" id="quote_label" class="quotelabels">Quote</label>
					<br/>
					<textarea rows="4" cols="40" name="quote" id="quote" value="" class="text-input"></textarea><br/>
					<br/>
					<label for="source" id="source_label" class="quotelabels">Source</label><br/>
					<input type="textarea" size="40" name="source" id="source" value="" class="text-input" /><br/>
					<br/>
					<label for="source" id="time_label" class="quotelabels">Approximate Time of Quote (eg. 2 minutes)</label><br/>
					<input type="textarea" size="40" name="time" id="time" value="" class="text-input" /><br/>
					<br/>
					<label for="tedoronion" id="tedoronion_label" class="quotelabels" >TED Or Onion?</label>
					<h6><input type="radio" name="tedoronion" id="tedoronion" value="TED" class="radiolabels">TED</input></h6>
					<h6><input type="radio" name="tedoronion" id="tedoronion" value="Onion" class="radiolabels">Onion</input></h6>
					<br/>
					<a id="link-submit" onclick="linksubmit()" style="text-align: center">Submit</a>
			</form>
		</div>
		
		<div id="Bottom_Nav">
			<h4><a id="link-submit" href="index.php">Back</a> To TED or Onion </h4>
		</div>

	</body>
</html>