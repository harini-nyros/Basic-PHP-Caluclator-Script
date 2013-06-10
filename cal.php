<!DOCTYPE html >
<head>
<style>
table
{
	height: 126px;
	width: 300px;
	background:#D1D1CF;
	border: 9px outset #585C5F;
	border-radius: 18px;
}
thead
{
	background:#585C5F;
}
th
{
	border:0px;
}

td
{
	text-align:center;
        font-size: 22px;
        color:white;
	background: #585C5F;
	border-radius: 6px;
        width: 50px;

}
input
{
	border-radius:2px;
	background:#EAFCBE;

}
.special
{
	background:#98BB16;
	border:0px;
	color:white;

}
.submitc
{
	background:#98BB16;

}
.symbols
{
	background:#186DAC;

}
.symbol
{
	background:#71C3B5;

}
.clear
{
	background:#990000;

}
td {
	cursor:pointer
}
h2
{



}
</style>
</head>
<body>
<form name="form" method="post" action="">
<h2>PHP Calculator</h2>
<table border="1" cellspacing="10" cellpadding="5">
<thead>
<tr>
<th colspan="4">
<input type="text" size="25" name="show" id="display"/>
</th>
</tr>
</thead>
<tbody>
<tr>
	<td onClick="passvalue(this.innerHTML)">1</td>
	<td onClick="passvalue(this.innerHTML)">2</td>
	<td onClick="passvalue(this.innerHTML)">3</td>
	<td onClick="operatorvalue(this.innerHTML)" class="symbols"/>+</td>
       
	
</tr>
<tr>
	<td onClick="passvalue(this.innerHTML)">4</td>
	<td onClick="passvalue(this.innerHTML)">5</td>
	<td onClick="passvalue(this.innerHTML)">6</td>
	<td onClick="operatorvalue(this.innerHTML)" class="symbols"s>-</td>

</tr>
<tr>
	<td onClick="passvalue(this.innerHTML)">7</td>
	<td onClick="passvalue(this.innerHTML)">8</td>
	<td onClick="passvalue(this.innerHTML)">9</td>
	<td onClick="operatorvalue(this.innerHTML)" class="symbols">/</td>
</tr>

<tr>
	<td onClick="passvalue(this.innerHTML)">0</td>
	<td onClick="operatorvalue(this.innerHTML)" class="symbols">%</td>
	<td onClick="operatorvalue(this.innerHTML)" class="symbols">*</td>
	<td class="submitc"><input type =submit name=submit value="=" class="special" onClick="pass2value(this.value)"></td>
</tr>
<tr>
	 <td onClick="passvalue(this.innerHTML)">.</td>
	 <td onClick="operatorvalue(this.innerHTML)" class="symbol"/>sqrt</td>
	 <td onClick="operatorvalue(this.innerHTML)" class="symbol"/>pow</td>
	  <td onClick="moretime()"/ class="clear">clear</td>
</tr>
<tr>
	 <td onClick="operatorvalue(this.innerHTML)" class="symbol"/>sin</td>
         <td onClick="operatorvalue(this.innerHTML)" class="symbol"/>cos</td>
	  <td onClick="operatorvalue(this.innerHTML)" class="symbol"/>tan</td>
	   <td onClick="operatorvalue(this.innerHTML)" class="symbol"/>log</td>
</tr>
<input type="hidden" id="hidenum1" name="hidenum1"/>
<input type="hidden" id="hideoper1" name="hideoper1"/>
<input type="hidden" id="hidenum2" name="hidenum2"/>
</tbody>
</table>
</form>
<?php
 if (isset($_POST['submit'])) 
{
	
	 $var1=$_POST['hidenum1'];
	
	 $operator=$_POST['hideoper1'];
	
	$var2=$_POST['hidenum2'];
	
	switch ($operator) 
	{

     		case '+':
		$result=$var1+$var2;

?>
<script>

	document.getElementById('display').value=<?php echo $result; ?>;
</script>
<?php

		break;
		case '-':
		$result= $var1-$var2;
?>
<script>

	document.getElementById('display').value=<?php echo $result; ?>;
</script>
<?php
		break;
		case '*':
		$result=$var1*$var2;
?>
<script>

	document.getElementById('display').value=<?php echo $result; ?>;
</script>
<?php
		break;
		case '/':
		$result=$var1/$var2;
?>
<script>

	document.getElementById('display').value=<?php echo $result; ?>;
</script>
<?php
		break;
		case '%':
		$result= $var1%$var2;
?>
<script>

	document.getElementById('display').value=<?php echo $result; ?>;
</script>
<?php
		break;
		case 'sqrt':
		$result=sqrt($var2);
?>
<script>

	document.getElementById('display').value=<?php echo $result; ?>;
</script>
<?php
		break;
		case 'pow':
		$result=pow($var1,$var2);
?>
<script>

	document.getElementById('display').value=<?php echo $result; ?>;
</script> 		
<?php
		break;
		case 'sin':
		$result=sin($var2);
?>
<script>

	document.getElementById('display').value=<?php echo $result; ?>;
</script> 		
<?php
		break;
                case 'cos':
		$result=cos($var2);
?>
<script>

	document.getElementById('display').value=<?php echo $result; ?>;
</script> 		
<?php
		break;
		case 'tan':
		$result=tan($var2);
?>
<script>

	document.getElementById('display').value=<?php echo $result; ?>;
</script> 		
<?php
		break;
		case 'log':
		$result=log($var2);
?>
<script>

	document.getElementById('display').value=<?php echo $result; ?>;
</script> 		
<?php
		break;
		default:
          	echo '';
                break;
	}
	
}

?>
<script type="text/javascript">

			function passvalue(number)
			{
                                document.form.show.value+=number;
				

			}
			function operatorvalue(a)
			{
				
                                document.getElementById('hidenum1').value=document.form.show.value;
				document.form.show.value='';
				document.form.show.value+=a;
                                document.getElementById('hideoper1').value=document.form.show.value;
				setTimeout("moretime()",500);
				
				
			}
		    	function pass2value(number2)
			{
				var c= document.form.show.value;
                                 document.getElementById('hidenum2').value=c;
				
			}	
			function moretime()
			{
 				document.form.show.value='';
			}

</script>
</body>
</html>
