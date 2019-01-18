<?php
function build_crumbs(){
	//word replace arrays.
	$crumbs_words = array( //word to be replaced goes here
			"_", //1
			"-", //2
			"chicago turabian", //3
			"journals articles", //4
			"eresources", //5
			"a z", //6
			"dcod", //7
			"sgcs", //8
			"gpl", //9
			"apa", //10
			"ask a librarian", //11
			"directions", //12
			"accounting finance", //13
			"forms", //14
			"education professional", //15
			"business marketing", //16
			"art digital media", //17
			"exercise sports science", //18
			"family consumer sciences", //19
			"images multimedia", //20
			"eresource news", //21
			"books media", //22
			"books periodicals", //23
			"manipulatives kits", //24
			"k12", //25
			"guides tutorials", //26
			"SGCS email do", //27
			"email do", //28
			"ill request do", //29
			"ipad", //30
			"app links tutorials", //31
			"pasw", //32
			"art 282 283", //33
			"bin", //34
			"request do", //35
			"reservation request form", //36
			"reservation request", //37
			"college writing ii", //38
			"ebsco", //39
			"nrsg", //40
			"bba435", //41
			"bba480", //42
			"mol600", //43
			"mol618", //44
			"mol620", //45
			"mol618", //46
			"mol616", //47
			"mol612", //48
			"mol608", //49
			"chem385", //50
			"biol352", //51
			"biol370", //52
			"chem495", //53
			"cmin116", //54
			"comm346", //55
			"comm457", //56
			"cjus273", //57
			"educ150", //58
			"educ210", //59
			"educ376", //60
			"educ776", //61
			"educ908", //62
			"engl108 109", //63
			"eng150", //64
			"exss129", //65
			"exss 110 147", //66
			"exss450", //67
			"exss495", //68
			"phed190", //69
			"phed242", //70
			"phed360", //71
			"phed370", //72
			"phed472", //73
			"facs455", //74
			"facs480", //75
			"hist090", //76
			"biol126", //77
			"comm141", //78
			"lit318", //79
			"psyc331", //80
			"psyc603", //81
			"sowk200", //82
			"sowk213", //83
			"sowk310", //84
			"sowk420", //85
			"socy489", //86
			"span322", //87
			"geography travel", //88
			"bdw do", //89
			"onu", //90
			"grad and adult", //91
			"ms3", //92
			"oboc", //93
			"bsns450", //94
			"art375", //95
			"comm150", //96
			"comm342", //97
			"pdf", //98
			"scan to email", //99
			"sped301", //100
			"comm325", //101
			"educ776w", //102
			"bsns606", //103
			"crim316", //104
			"apa", //105
			"cms", //106
			"mla", //107
			"cth", //108
			"nrsg628", //109
			"engr312", //110
			"facs101", //111
			"educ774", //112
			"educ779", //113
			"3d", //114
			"bulletins", //116
			"issues controversies", //117
			"theo421 621", //118
			"irs template", //119
			"hist psci379", //120
			"read", //121
			"acl reciprocal borrowing", //122
			"educ773", //123
			"bsns644", //124
			"bsns440", //125
			"cse", //126
			"hist379", //127
			"selected ejournals", //128
			"ssci302", //129



	);
	$crumbs_replace = array( //word that replaces it goes here
			" ", //1
			" ", //2
			"Chicago/Turabian", //3
			"Journals & Articles", //4
			"&#65279eResources", //5
			"A-Z", //6
			"DCOD", //7
			"SGCS", //8
			"GPL", //9
			"APA", //10
			"Ask a Librarian", //11
			"Directions & Parking", //12
			"Accounting & Finance", //13
			"", //14
			"Education: Professional", //15
			"Business & Marketing", //16
			"Art & Digital Media", //17
			"Exercise & Sports Science", //18
			"Family & Consumer Sciences", //19
			"Images & Multimedia", //20
			"eResource News", //21
			"Books & Media", //22
			"Books & Periodicals", //23
			"Manipulatives & Kits", //24
			"K-12", //25
			"Guides & Tutorials", //26
			"", //27
			"", //28
			"", //29
			"&#65279iPad", //30
			"App Links & Tutorials", //31
			"PASW", //32
			"ART 282 & 283", //33
			"", //34
			"",  //35
			"Reservation Request", //36
			"", //37
			"College Writing II", //38
			"EBSCO", //39
			"NRSG", //40
			"BBA435", //41
			"BBA480", //42
			"MOL600", //43
			"MOL618", //44
			"MOL620", //45
			"MOL618", //46
			"MOL616", //47
			"MOL612", //48
			"MOL608", //49
			"CHEM385", //50
			"BIOL352", //51
			"BIOL370", //52
			"CHEM495", //53
			"CMIN116", //54
			"COMM346", //55
			"COMM457", //56
			"CJUS273", //57
			"EDUC150", //58
			"EDUC210", //59
			"EDUC376", //60
			"EDUC776", //61
			"EDUC908", //62
			"ENGL108 & 109", //63
			"ENG150", //64
			"EXSS129", //65
			"EXSS 110 & 147", //66
			"EXSS450", //67
			"EXSS495", //68
			"PHED190", //69
			"PHED242", //70
			"PHED360", //71
			"PHED370", //72
			"PHED472", //73
			"FACS455", //74
			"FACS480", //75
			"HIST090", //76
			"BIOL126", //77
			"COMM141", //78
			"LIT318", //79
			"PSYC331", //80
			"PSYC603", //81
			"SOWK200", //82
			"SOWK213", //83
			"SOWK310", //84
			"SOWK420", //85
			"SOCY489", //86
			"SPAN322", //87
			"Geography/Travel", //88
			"", // 89
			"ONU", //90
			"Grad & Adult", // 91
			"MS3", // 92
			"OBOC", // 93
			"BSNS 450", // 94
			"ART 375", // 95
			"COMM 150", // 96
			"COMM 342", // 97
			"PDF", //98
			"Scan to Email", //99
			"SPED 301", //100
			"COMM 325", //101
			"EDUC 776W", //102
			"BSNS 606", //103
			"CRIM 316", //104
			"APA", //105
			"CMS", //106
			"MLA", //107
			"CTH", //108
			"NRSG 628", //109
			"ENGR 312", //110
			"FACS 101", //111
			"EDUC 774", //112
			"EDUC 779", //113
			"3D", //114
			"", //116
			"Issues & Controversies", //117
			"THEO 421 & 621", //118
			"IRS Template", //119
			"HIST/PSCI 379", //120
			"READ Program", //121
			"ACL Reciprocal Borrowing", //122
			"EDUC 773", //123
			"BSNS 644", //124
			"BSNS 440", //125
			"CSE", //126
			"HIST 379", //127
			"Selected eJournals", //128
			"SSCI 302", //129


	);


	//find The uri
	$crumbs_uri = $_SERVER['REQUEST_URI'];

	//strip out any variables in the uri
	if (strpos($crumbs_uri, "?") !== false){
		$crumbs_uri = substr($crumbs_uri, 0, strpos($crumbs_uri, "?"));
	}

	//split the uri into an array of its parts
	$crumbs = explode("/", $crumbs_uri);

	//store the last string in array then delete the first and last string
	$crumbsLast = end($crumbs);
	array_pop($crumbs);
	$crumbsSecondToLast = end($crumbs);
	$crumbs = array_filter($crumbs); //the first entry was empty due to the explode

	//files that should not become a breadcrumb link e.g. index.php
	$exclude_last = array("", " ", "index.php", $crumbsSecondToLast.".php");


	//print the home link
	echo "<li><a href='/'>Home</a></li>";

	//print the all but the last link into a list
	$link = "";
	foreach ($crumbs as $value) {
		$link .= "/".$value;
		$link_text = str_replace($crumbs_words, $crumbs_replace, $value); //replaces words defined above
		$link_text = ucwords($link_text);
		if ($link_text) {
			echo "<li><a href='" . $link . "'>" . $link_text . "</a></li>";
		}
	}

	//print the last link
	if ( in_array($crumbsLast, $exclude_last) == false) { //don't print if the file is in exculde
		$link_text_last = str_replace($crumbs_words, $crumbs_replace, $crumbsLast); //replaces words defined above
		$link_text_last = str_replace( array(".php", ".html", ".htm"), "", $link_text_last); // strips out file types
		$link_text_last = ucwords($link_text_last);
		if ($link_text_last) {
			echo "<li><a href='#'>" . $link_text_last . "</a></li>";
		}
	}
}
?>
