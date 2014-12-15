<?php

include("config.php");

//include("gallery.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type"
content="text/html; charset=windows-1252" />
<meta name="description" content="" />
<meta name="generator" content="HTML-Kit" />
<title>MY BASKETBALL CLUB</title>
<style type="text/css">
<!--
body {margin: 0; padding: 0; font: normal 82% sans-serif; background-image: url(blocksbg1.jpg); background-attachment: fixed;}
h1 {margin: 0; margin-bottom: 0px; padding: 8px; color: #ffffff; background-image: url(laptop1.jpg); background-color: #CCCCFF;}
.tagline {font-size: 60%; color: #ffffff;}

#search {float: right; width: 280px; padding: 5px; text-align: right;}
.button {border: outset; 2px #000000; background-color: #CC99FF; color: #ffffff; font-weight: bold;}
.text {border: solid 1px #000000; background-color: #eeeeee;}

#bread {margin-top: 0px; margin-bottom: 10px; padding: 5px; border-top: solid 1px #000000; border-bottom: solid 1px #000000; background-color: #CC99FF; text-align: right;}
#bread a {margin-left: 2px; margin-right: 2px; color: #000000; text-decoration: none;}
#bread a:hover {text-decoration: underline;}

#left {float: left; width: 18%; border: solid 1px #cccccc; margin-bottom: 15px; background-color: #ffffff; border-top: 0;}
#left ul {list-style: none; margin: 0; padding: 0;}
#left li {margin: 0px; padding: 0px;}
#left a {display: block; width: 95.5%; margin: 0px; padding: 2px; border: solid 1px #ffffff; color: #CC99FF; text-decoration: none;}
#left a:hover {border: solid 1px #0066cc; background-color: #0066cc; color: #ffffff;}
#left h3 {margin: 0; padding: 2px; font-weight: normal; background-color: #CC99FF; border-top: solid 1px #000000; border-bottom: solid 1px #000000;}

#content {margin-left: 20%; padding: 0; border-left: solid 1px #cccccc; border-top: 0; border-bottom: solid 1px #ffffff;  background-color: #ffffff;}
#content h3 {margin: 0; padding: 2px; font-weight: normal; background-color: #CC99FF; border-top: solid 1px #000000; border-bottom: solid 1px #000000;}
#content p {margin: 5px; color: #000000;}
#content a {color: #0066cc; text-decoration: none;}
#content a:hover {color: #0000ff; text-decoration: underline;}
#content .point {margin: 3%; padding: 0px; border: solid 1px #000000; border-top: 0; background-color: #f9f9f9;}
#content .point h3 {}
#content .code {margin: 3%; padding: 7px; border: solid 1px #cccccc; background-color: #eeeeee; font: normal 100% courier; color: #000000;}

#footer {clear: both; margin-top: 0px; padding: 5px; border: solid 1px #cccccc; background-color: #CCCCFF;}
#footer p {float: left; margin: 0;}
#footer h5 {margin: 0; text-align: right; color: #000000;}
#footer a {margin-left: 2px; margin-right: 2px; color: #000000; text-decoration: none;}
#footer a:hover {text-decoration: underline;}

-->
</style>

</head>

<body>
<h1>MY BASKETBALL <span class="tagline"></span></h1>


<div id="left">
<h3></h3>

<?php

session_start();

	  if ($_GET['id'] != '') {
			$memberid = $_GET['id'];
	   }
       if($_GET['id'] == NULL && $_SESSION['MEMBER_ID'] == '') {
	          $memberid = 1;
       }
       if ($_GET['id'] == '' && $_SESSION['MEMBER_ID'] != '') {
	   $memberid=$_SESSION['MEMBER_ID'];
	   }
	                

	   $_SESSION['MEMBER_ID']  = $memberid;
	   
	   $memberid=$_SESSION['MEMBER_ID'];
	   echo $memberid;
	   echo $_SESSION['MEMBER_ID'];
	   
	   $_SESSION['IMGDIR']='./'.$memberid.'/images/';
	   $_SESSION['WEBIMGDIR']='./'.$memberid.'/images/';
	   //echo $_SESSION['IMGDIR'];
	   
	   //$IMGDIR=$_SESSION['IMGDIR'];
	   //$WEBIMGDIR=$_SESSION['IMGDIR'];
	   
	   
	    //define ('IMGDIR', './'.$memberid.'/images/');
	  // define ('WEBIMGDIR', './'.$memberid.'/images/');
	  
	  $imagedir=$_SESSION['IMGDIR'];
	  
	  echo $imagedir;
	  
	   define ('IMGDIR', $imagedir);
	   define ('WEBIMGDIR', $imagedir);
		include("gallery.php");
       //echo WEBIMGDIR;

        //$result = mysql_query("SELECT * FROM employee WHERE id='1' ",$connect);
        $result = mysql_query("SELECT * FROM matchInfo WHERE id=$memberid",$connect);


        while($row = mysql_fetch_assoc($result))

        {


						$ID = $row['id'];
        				$FirstName = $row['code'];
						$LastName = $row['name'];
						$teamA = $row['teamA'];
						$teamB = $row['teamB'];
						$gameDate = $row['gameDate'];
						$gameTime = $row['gameTime'];
						$teamAScore = $row['teamAScore'];
						$teamBScore = $row['teamBScore'];
						$bestPlayer = $row['bestplayer'];


	?>

<?php

				//$sql="SELECT * FROM employee";
				$sql="SELECT * FROM matchinfo";
		$result=mysql_query($sql);

		// Define $color=1
		$color="1";

		echo '<table  border="0" cellpadding="3" cellspacing="0">
		<tr>

				</tr>';
		while($rows=mysql_fetch_array($result)){
			//$ID = $row['id'];
			//$code = $row['code'];
			//$game = $row['code'];
		//$myFolderP = "/".$code."/"."index.php";
		//echo "<tr bgcolor='#FCFCF6'>
		// <td> <a href=\"../".$rows['id']."/index.php?id=".$rows['id']."\" style=\"text-decoration:none\">".$rows['code']."</a></td>
		//</tr>";

		echo "<tr bgcolor='#FCFCF6'>
				 <td> <a href=\"./index.php?id=".$rows['id']."\" style=\"text-decoration:none\">".$rows['code']."</a></td>
				</tr>";

		// Set $color==2, for switching to other color

		}




echo '</table>';

?>
</div>

<div id="content" border="0">
<h3 align="middle"> Match Details </h3>
<head border="0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Slideshow</title>
    <style type="text/css">
	body{margin: 0;padding: 0;font: 100% Verdana, Arial, Helvetica, sans-serif;font-size: 14px;}
	div#gallery{border: 0px #ccc solid;width: 600px;margin: 40px auto;text-align: center;}
	div#gallery img{margin: 20px;border: 0px #004694 solid;width: 80%; max_width: 100%;
    height: 60%;}
	div#gallery p{color: #004694;}
	div#gallery div.pn{padding: 10px;margin: 0 5px;border-top: 1px #ccc solid;}
	a{color:#333;}
	a:hover{color:#cc0000;}
	a.sp{padding-right: 40px;}
    </style>
</head>
<body>
	<div id="gallery" border="0">
    	<img border="0" src="<?=WEBIMGDIR;?><?=$curr;?>" alt="" />
        <p><?=$caption;?></p>
    	<div class="pn"  border="0">
        	<a href="?img=<?=$first;?>">First</a> | <a href="?img=<?=$prev;?>" class="sp">Previous</a><a href="?img=<?=$next;?>">Next</a> | <a href="?img=<?=$last;?>">Last</a>
        </div>
    </div>


<table width="863" border="0" cellspacing="1" cellpadding="1">
    <tr>

          </tr>

</table >

  <table align="center" width="863" border="0" cellspacing="1" cellpadding="1">
  <TR>
  		<th align="center"> Match Code </th>
  		<th align="center"> Match Time </th>
  		<th align="center"> Match Name </th>
  		<th align="center"> Match </th>
  		<th align="center"> Score </th>
  		<th align="center"> Best Player </th>
  </TR>
    <tr>
      	<td align="center"><?echo $FirstName; ?></td>
		<td align="center"><?echo $gameDate; ?>    <?echo $gameTime; ?></td>
		<td align="center"><?echo $LastName; ?></td>
    	<td align="center"><?echo $teamA; ?> VS <?echo $teamB; ?></td>
    	<td align="center"><?echo $teamAScore; ?> - <?echo $teamBScore; ?></td>
    	<td align="center"><?echo $bestPlayer; ?></td>
	</tr>

<tr> </tr>
<tr> </tr>
<tr> </tr>
    </table>

<!--
</table >
  <table align="center" width="863" border="0" cellspacing="1" cellpadding="1">
    <tr>
      <td><strong>Match Code</strong></td>
      <td align="center"><strong>:</strong></td>
      <td><?echo $FirstName; ?></td>
    </tr>
    <tr>
		  <td><strong>Match Time </strong></td>
		  <td align="center"><strong>:</strong></td>
		  <td><?echo $gameDate; ?>    <?echo $gameTime; ?></td>
	</tr>
	<tr>
      <td><strong>Match Name</strong></td>
      <td align="center"><strong>:</strong></td>
      <td><?echo $LastName; ?></td>
    </tr>
    <tr>
      <td><strong>Match </strong></td>
      <td align="center"><strong>:</strong></td>
      <td><?echo $teamA; ?> VS <?echo $teamB; ?></td>
    </tr>
    <tr>
	      <td><strong>Score </strong></td>
	      <td align="center"><strong>:</strong></td>
	      <td><?echo $teamAScore; ?> - <?echo $teamBScore; ?></td>
    </tr>
	<tr>
		  <td><strong>Best Player </strong></td>
		  <td align="center"><strong>:</strong></td>
		  <td><?echo $bestPlayer; ?></td>
	</tr>

    </table>
-->

<?

              }//end of while loop
?>

<!--
</div>
<p>&nbsp;</p>
-->
</div>

<div id="footer">
<p>Contact  ::&#091;<a href="#">info@mybasketball.org.in</a>&#093;</p>
<h5>&nbsp;</h5>
</div>
</body>
<?
//session_destroy();

?>
</html>
