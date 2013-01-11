<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>TED Or Onion</title>

		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="shortcut icon" href="favicon.ico" />
		<script type="text/javascript" src="file/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
		
		
		<?PHP
			mysql_connect("localhost", "root", "password") or die("could not connect" . mysql_error());
			mysql_select_db("tedoronion");
	
			$sqldata = mysql_query("SELECT * FROM quotes");
	
			$questions = array();
			while ($quote = mysql_fetch_array($sqldata)) {
				array_push($questions, $quote);
			}
		?>
	
		<script type="text/javascript">
		var questionnumber=0;
		var questions;
		var totalnum=0
			function init() {
				TrueHeight = $(window).height();
				TrueWidth = $('body').width();
				$("#Main").css("height", TrueHeight - 50);
				$("#Main").css("width", TrueWidth);
				$("#Bottom_Nav").css("width", TrueWidth);
				
				$("#Result_Background").css("height", TrueHeight);

				$("#tedlogo").css("margin-top", (TrueHeight - 50) / 2 - 75);
				$("#onionlogo").css("margin-top", (TrueHeight - 50) / 2 - 100);

				$("#tedlogo").css("margin-left", (TrueWidth / 2 - 400) / 2);
				$("#onionlogo").css("margin-left", (TrueWidth / 2 - 190) / 2);

				quotewidth = $("#Quote").width();
				$("#Quote").css("margin-left", (TrueWidth -(quotewidth + 80))/2);	
			}


			$(window).resize(function() {//on window resize...
				TrueHeight = $(window).height();
				TrueWidth = $('body').width();
				//alert(TrueWidth)
				$("#Main").css("height", TrueHeight - 50);
				$("#Main").css("width", TrueWidth);
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
		</script>
		
		<script type="text/javascript">
		function getquestions(){			
			questions = <?php echo json_encode($questions)?>;
			totalnum=questions.length-1;
			
			for(var i=0, num=[];i<questions.length;num.push(i),i++){};
			//alert(num);
						
			rand_question = new Array();
			while(num.length>1){
				var randomnumber= Math.floor(Math.random()*(num.length));
				//alert(num[randomnumber])
				rand_question.push(num[randomnumber]);
				num.splice(randomnumber,1);
			}
			rand_question.push(num[0]);
			//alert(rand_question);
			
			$("#Quote").html(questions[rand_question[questionnumber]][1]);
			
			quotewidth = $("#Quote").width();
			//alert(quotewidth);
			TrueWidth = $(window).width();
			//alert((TrueWidth -(quotewidth + 80))/2);
			$("#Quote").css("margin-left", (TrueWidth-(quotewidth + 80))/2);
		}

		function nextquestion(){
			if(questionnumber==totalnum){
				questionnumber=0;
				getquestions();
			}else{
				questionnumber++;
				$("#Quote").html(questions[rand_question[questionnumber]][1]);
				quotewidth = $("#Quote").width();
				
				$("#Quote").css("margin-left", (TrueWidth -(quotewidth + 80)) / 2);
				$("#Result_Background").hide('drop',500);
			}
			
		}
		function get_answer(user_answer){
			$.ajax({
				type: "POST",
				url: "checkanswer.php",
				data : {questionnumber: rand_question[questionnumber], useranswer: user_answer}
			}).done(function(correctanswer){
				dbanswer=JSON.parse(correctanswer);
				
			if (dbanswer[0]==user_answer && dbanswer[0]==1){
				$("#Result_Background").css("background-color", "rgba(255,43,6,1)");
				$("#Result_Pane").html("<h1>CORRECT!</h1> <h3>From The TED Talk: <br/> "+dbanswer[2]+"</h3> <h3><br>"+dbanswer[1]+" <br/><a onclick='nextquestion()' href='#'>NEXT</a></h3>");
			}else if (dbanswer[0]==user_answer && dbanswer[0]==0){
				$("#Result_Background").css("background-color", "rgba(0,141,82,1)");
				$("#Result_Pane").html("<h1>CORRECT!</h1> <h3>From The Onion Talk: <br/>  "+dbanswer[2]+"</h3> <h3><br>"+dbanswer[1]+" <br/><a onclick='nextquestion()' href='#'>NEXT</a></h3>");
			}else if(dbanswer[0]!=user_answer && dbanswer[0]==1){
				$("#Result_Background").css("background-color", "rgba(255,43,6,1)");
				$("#Result_Pane").html("<h1>WRONG!</h1> <h3>From The TED Talk: <br/>  "+dbanswer[2]+"</h3> <h3><br>"+dbanswer[1]+" <br/><a onclick='nextquestion()' href='#'>NEXT</a></h3>");
			}else{
				$("#Result_Background").css("background-color", "rgba(0,141,82,1)");
				$("#Result_Pane").html("<h1>WRONG!</h1> <h3>From The Onion Talk: <br/>  "+dbanswer[2]+"</h3> <h3><br>"+dbanswer[1]+" <br/><a onclick='nextquestion()' href='#'>NEXT</a></h3>");
			}
			
			resultheight = $("body").height();
			$("#Result_Background").css("height", resultheight);
			$("#Result_Background").show('drop',500);
			
			});
		}
	</script>
	
	</head>

	
	
	<body onload="init(), getquestions()">
		<div id="Result_Background">
				<div id ="Result_Pane">					
					
				</div>
		</div>
			
		<div id="Main">
			<div id="Logo"></div>

			<div id="Quote">
				
			</div>

			<div id="Ted" onmouseover="hovertedlogo()" onmouseout="unhovertedlogo()" onclick="get_answer(1)">
				<div id="tedlogo"/>
			</div>
		</div>

		<div id="Onion" onmouseover="hoveronionlogo()" onmouseout="unhoveronionlogo()" onclick="get_answer(0)">
			<div id="onionlogo"/>
		</div>
		</div>
		</div>
		<div id="Bottom_Nav">
			<h4>Help Improve TED Or Onion! <a id="link-submit" href="linksubmit.php">Submit</a> Quotes That You have Found! </h4>
		</div>

	</body>
</html>