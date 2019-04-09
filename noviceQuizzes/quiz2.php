<!-- LEARNIX 
	
Filename:	quiz2.php
Authors: 	Rachael Bogdany
			Jon Healy
			Lowell Pence
			Shoujing Wu 
-->

<?php
	//include the header
	$path = '../';
	$page = 'Novice File Structure and Comands Quiz';
	include $path.'assets/inc/header.php';
?>

<form onsubmit = "return false;" name = "quiz" action="#" method = "get">

	<h1 class="qh1">Novice File Structure and Commands Quiz</h1>
	<!--
		The naming convention for quiz question id's is as follows: Question # Answer #
		For example Question 2 Answer 4's id would be: "q2a4"
		
		The logic behind this is that it matches the value so when java script is validating...
		it can determine which choices were choosen correctly and incorrectly and display this to the user.
		More can be seen on this in the validateQuiz function in the file assets/script/main.js
		
		The text boxes display a message to the user on what they got wrong and how they can lookup the correct answer
	-->	
	<h2 class="qh2" id="q1">Question 1</h2>
	<p class = "qP">What is the correct command syntax to create a file called nodes.txt?</p>
	
	<input type="radio" name ="question1" value = "q1a1" id="q1a1"/> <label for="q1a1">make nodes.txt</label><br>
	<p class="helpText">Please review the "touch" man pages for proper command syntax</p>
	<input type="radio" name ="question1" value = "q1a2" id="q1a2"/> <label for="q1a2">create nodex.txr</label><br>	
	<input type="radio" name ="question1" value = "correct" id="q1a3"/> <label for="q1a3">touch nodes.txt</label><br>
	<input type="radio" name ="question1" value = "q1a4" id="q1a4"/> <label for="q1a4">./nodes.txt</label><br>
	
	<h2 class="qh2" id="q2">Question 2</h2>
	<p class="qP">What is the correct command syntax to create a directory called files?</p>
	
	<input type="radio" name ="question2" value = "correct" id="q2a1"/> <label for="q2a1">mkdir files</label><br>
	<p class="helpText">Please review the "mkdir" man pages for proper command syntax</p>
	<input type="radio" name ="question2" value = "q2a2" id="q2a2"/> <label for="q2a2">make files</label><br>
	<input type="radio" name ="question2" value = "q2a3" id="q2a3"/> <label for="q2a3">mkdir -d files</label><br>
	<input type="radio" name ="question2" value = "q2a4" id="q2a4"/> <label for="q2a4">create -d files</label><br>
	
	<h2 class="qh2" id="q3">Question 3</h2>
	<p class="qP">What is the correct command syntax to rename a file named "file 1" to "file 2"</p>
	
	<input type="radio" name ="question3" value = "q3a1" id="q3a1"/> <label for="q3a1">newname file1 file2</label><br>
	<p class="helpText">Please review the "rename" man pages for proper command syntax</p>
	<input type="radio" name ="question3" value = "q3a2" id="q3a2"/> <label for="q3a2">rn file1 file2</label><br>
	<input type="radio" name ="question3" value = "q3a3" id="q3a3"/> <label for="q3a3"></label>change file1 file2<br>
	<input type="radio" name ="question3" value = "correct" id="q3a4"/> <label for="q3a4">rename file1 file2</label><br>
	
	<h2 class="qh2" id="q4">Question 4</h2>
	<p class="qP">What is the definition of a file?</p>
	
	<input type="radio" name ="question4" value = "q4a1" id="q4a1"/> <label for="q4a1">Where you store your info</label><br>
	<p class="helpText">Please review the definition of a file</p>
	<input type="radio" name ="question4" value = "correct" id="q4a2"/> <label for="q4a2">A collection of data</label><br>
	<input type="radio" name ="question4" value = "q4a3" id="q4a3"/> <label for="q4a3">Something on your desktop</label><br>
	<input type="radio" name ="question4" value = "q4a4" id="q4a4"/> <label for="q4a4">A bunch of 0's and 1's</label><br>
	
	<h2 class="qh2" id="q5">Question 5</h2>
	<p class="qP">Which function allows you to list alphabetically or numerically?</p>
	
	<input type="radio" name ="question5" value = "q5a1" id="q5a1"/> <label for="q5a1">list #</label><br>
	<p class="helpText">Please review the "sort" man pages for proper command syntax</p>
	<input type="radio" name ="question5" value = "q5a2" id="q5a2"/> <label for="q5a2">list A-Z 0-1</label><br>
	<input type="radio" name ="question5" value = "correct" id="q5a3"/> <label for="q5a3">sort</label><br>
	<input type="radio" name ="question5" value = "q5a4" id="q5a4"/> <label for="q5a4">sort A-Z 0-1</label><br>
	
	<input type="submit"  name="Submit" onclick="validateQuiz()"  value="Send"/>
</form>

<?php
	//include the footer
	include $path.'assets/inc/footer.php';
?>