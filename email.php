<html>

<head>
<title>Old Email Page - Benner Library</title>
<!-- <meta http-equiv="refresh" content="7; URL=http://library.olivet.edu/subject-guides/nursing/index.php">
<meta name="keywords" content="automatic redirection"> -->
</head>
<body>

<p>Note that the email form location has changed with the new site.<br />
Please change any short cuts or bookmarks you have made accordingly.  This redirect will be removed in January 2015. 
</p>
<p>
<?php
	$url = "";

	if(isset($_GET['id'])){
        $idArray = explode(',', $_GET['id']);

        $id16 = 0;
        for ($i=0; $i<sizeof($idArray); $i++) {
        	if ($idArray[$i] == 16) {
        		$id16 = 1;
        	}
        }

        if ($id16 == 1) {
			$url .= "/forms/sgcs_email/index.php?id=".$_GET['id'];
        } else {
    		$url .= "/forms/email/index.php?id=".$_GET['id'];
        }
    } else {
    	$url .= "/forms/email/index.php?id=105";
	}

	header('Refresh: 5; URL='.$url);
	echo "<p>If your browser doesn`t automatically redirect within a few seconds, please click <a href='".$url."''>here</a> to go there manually.";
?>
</p>

<!--NeedsSomething; Remove at said date.-->
</body>
</html>
