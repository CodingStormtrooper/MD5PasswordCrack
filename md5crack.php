<Title> MD5 cracker </Title> 
<h1> MD5 cracker </h1>
<?php
function checkmd5($md5) {
//print out the first 15 digits 
  for($i=0; $i<=15; $i++){
    echo(hash('md5', $i)."&nbsp;".str_pad($i, 4, '0', STR_PAD_LEFT)."<br>");
  }

//where we will check against the pin s
  for($j=0; $j<=10000; $j++){
    $increment = strval($j);
    $check = hash('md5', $increment);

    if ($check == $md5) {
      echo("HIT ON"."&nbsp;".str_pad($j, 4, '0', STR_PAD_LEFT)."<br>");
      break;
    }
    
    elseif ($check != $md5 AND $j>=10000) {
      echo("PIN: Not Found");
    }
  }  
}

If (isset($_GET["md5"])){
  $md5 = strval($_GET["md5"]); 
  checkmd5($md5);
}
else {
  echo("PIN: Not Found");
}
?> 

<form action="/Assignment/md5crack.php">
  <label for="input">Input: </label>
  <input type="text" name="md5" size="40"><br><br>
  <input type="submit" value="Submit">
</form>




<!--
    <input type="text" name="md5" size="40">

    
For loop around all pins 0000-9999
pop out PIN: XXXX
if non pop out -   PIN: Not found
-->