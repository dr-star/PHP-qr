<?php
/*
PHP for loops execute a block of code a specified number of times.
The for loop is used when you know in advance how many times the script should run.
The syntax of a for loop is:

for (expr1; expr2; expr3)
    statement
The first expression (expr1) is executed once at the beginning of the loop.

In the beginning of each iteration, expr2 is evaluated. 
If it evaluates to TRUE, the loop continues and the nested statement(s) are executed. 
If it evaluates to FALSE, the execution of the loop ends. 

Consider the following example. This display the numbers 1 through 10: 
for ($i = 1; $i <= 10; $i++) 
{
    echo $i;
}
*/

for ($x = 1; $x <= 9; $x++) 
{
   /*
   $z = ...variable -->
   Variables are "containers" for storing information.
   In PHP, a variable starts with the $ sign, followed by the name of the variable;
   
    A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).

	*Rules for PHP variables:

    #A variable starts with the $ sign, followed by the name of the variable
    #A variable name must start with a letter or the underscore character
    #A variable name cannot start with a number
    #A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
    #Variable names are case-sensitive ($age and $AGE are two different variables)

   *Output Variables
	The following example will show how to output text and a variable:
	$txt = "Dr.S";
    echo "I love $txt!"; Output--> I love Dr.s!
	The following example will output the sum of two variables:
	 <?php
		$x = 5;
		$y = 4;
		echo $x + $y;
	 ?> 
   
   
	The PHP echo statement is often used to output data to the screen.
   
   *Note: When you assign a text value to a variable, put quotes around the value.

   *Note: Unlike other programming languages, PHP has no command for declaring a variable. It is created the moment you first assign a value to it.
   */
   $z =  "http://www.andornot.it/img/$x.jpg";
   $zz = "https://chart.googleapis.com/chart?chl=http://www.andornot.it/ita/$x.mp3&chs=200x200&cht=qr&chld=H|0&chs=200x200&cht=qr&chld=H|0";
   $heightqr = (getimagesize($z));
	list($width, $height, $type, $attr) = getimagesize($z);
	
	/*
	The PHP echo Statement
	The echo statement can be used with or without parentheses: echo or echo().
	Display Text
	The following example shows how to output text with the echo command (notice that the text can contain HTML markup):
	 <?php
		echo "<h2>PHP is Fun!</h2>";
		echo "Hello world!<br>";
		echo "I'm about to learn PHP!<br>";
		echo "This ", "string ", "was ", "made ", "with multiple parameters.";
	?> 
	
	*/

   echo '<div style="display: flex; justify-content: center; background:#FFFFFF ">';

   echo '<img src='.$z . '  align="middle">'; //QUADRO
   echo '<img src='.$zz.' height="200" width="200" vspace='.($height/2).' hspace=100 >'; //QR CODE  vspace='.$heightqr.' $height

   echo '</div>';
   echo '<br><br>';
} 


/*
  // $zq = "http://it.qr-code-generator.com/phpqrcode/getCode.php?cht=qr&chl=http://www.andornot.it/ita/$x.mp3&chs=180x180&choe=UTF-8&chld=L|0";


<div> Tag:
https://www.w3schools.com/tags/tag_div.asp
https://stackoverflow.com/questions/28336888/html-img-align-middle-not-working
https://stackoverflow.com/questions/40690282/is-div-style-width-height-background-css
String operators:
http://php.net/manual/en/language.operators.string.php
http://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc
echo function:
http://php.net/manual/it/function.echo.php
for loop:
https://www.w3schools.com/php/php_looping_for.asp
qr:
http://www.gregorystrike.com/2011/01/26/how-to-use-google-charts-api-to-generate-your-own-qr-code/

getimagesize:
http://php.net/getimagesize
img tag: 
https://www.w3schools.com/tags/tag_img.asp
*/

?>