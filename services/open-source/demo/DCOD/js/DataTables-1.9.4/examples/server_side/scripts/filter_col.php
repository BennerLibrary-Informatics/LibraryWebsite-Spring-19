<?php
  /* MySQL connection */
	include( $_SERVER['DOCUMENT_ROOT']."/datatables/mysql.php" ); /* ;-) */
	
	/* 
	 * Local functions
	 */
	function fatal_error ( $sErrorMessage = '' )
	{
		header( $_SERVER['SERVER_PROTOCOL'] .' 500 Internal Server Error' );
		die( $sErrorMessage );
	}

	
	/* 
	 * MySQL connection
	 */
	if ( ! $gaSql['link'] = mysqli_connect( "p:".$gaSql['server'], $gaSql['user'], $gaSql['password']  ) )
	{
		fatal_error( 'Could not open connection to server' );
	}

	if ( ! $gaSql['link']->select_db( $gaSql['db'] ) )
	{
		fatal_error( 'Could not select database ' );
	}


	
	/* Paging */
	$sLimit = "";
	if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' )
	{
		$sLimit = "LIMIT ".intval( $_GET['iDisplayStart'] ).", ".
			intval( $_GET['iDisplayLength'] );
	}
	
	/* Ordering */
	if ( isset( $_GET['iSortCol_0'] ) )
	{
		$sOrder = "ORDER BY  ";
		for ( $i=0 ; $i<$gaSql['link']->real_escape_string( $_GET['iSortingCols'] ) ; $i++ )
		{
			$sOrder .= fnColumnToField($gaSql['link']->real_escape_string( $_GET['iSortCol_'.$i] ))."
			 	".$gaSql['link']->real_escape_string( $_GET['sSortDir_'.$i] ) .", ";
		}
		$sOrder = substr_replace( $sOrder, "", -2 );
	}
	
	/* Filtering - NOTE this does not match the built-in DataTables filtering which does it
	 * word by word on any field. It's possible to do here, but concerned about efficiency
	 * on very large tables, and MySQL's regex functionality is very limited
	 */
	$sWhere = "";
	if ( $_GET['sSearch'] != "" )
	{
		$sWhere = "WHERE ( engine LIKE '%".$gaSql['link']->real_escape_string( $_GET['sSearch'] )."%' OR ".
				"browser LIKE '%".$gaSql['link']->real_escape_string( $_GET['sSearch'] )."%' OR ".
				"platform LIKE '%".$gaSql['link']->real_escape_string( $_GET['sSearch'] )."%' OR ".
				"version LIKE '%".$gaSql['link']->real_escape_string( $_GET['sSearch'] )."%' OR ".
				"grade LIKE '%".$gaSql['link']->real_escape_string( $_GET['sSearch'] )."%' )";
	}
	
	for ( $i=0 ; $i<$_GET['iColumns'] ; $i++ )
	{
		if ( $_GET['sSearch_'.$i] != '' )
		{
			if ( $sWhere != "" )
			{
				$sWhere .= " AND ";
			}
			else
			{
				$sWhere .= "WHERE ";
			}
			$sWhere .= fnColumnToField($i) ." LIKE '%".$gaSql['link']->real_escape_string( $_GET['sSearch_'.$i] )."%'";
		}
	}
	
	$sQuery = "
		SELECT SQL_CALC_FOUND_ROWS id, engine, browser, platform, version, grade
		FROM   ajax
		$sWhere
		$sOrder
		$sLimit
	";
		$rResult = $gaSql['link']->query( $sQuery ) or fatal_error( 'MySQL Error: ' . $gaSql['link']->error );
	
	$sQuery = "
		SELECT FOUND_ROWS()
	";
	$rResultFilterTotal = $gaSql['link']->query( $sQuery ) or fatal_error( 'MySQL Error: ' . $gaSql['link']->error );
	$aResultFilterTotal = $rResultFilterTotal->fetch_array();
	$iFilteredTotal = $aResultFilterTotal[0];
	
	$sQuery = "
		SELECT COUNT(id)
		FROM   ajax
	";
	$rResultTotal = $gaSql['link']->query( $sQuery ) or fatal_error( 'MySQL Error: ' . $gaSql['link']->error );
	$aResultTotal = $rResultTotal->fetch_array();
	$iTotal = $aResultTotal[0];
	
	$sOutput = '{';
	$sOutput .= '"sEcho": '.intval($_GET['sEcho']).', ';
	$sOutput .= '"iTotalRecords": '.$iTotal.', ';
	$sOutput .= '"iTotalDisplayRecords": '.$iFilteredTotal.', ';
	$sOutput .= '"aaData": [ ';
	while ( $aRow = $rResult->fetch_array() )
	{
		$sOutput .= "[";
		$sOutput .= '"'.str_replace('"', '\"', $aRow['engine']).'",';
		$sOutput .= '"'.str_replace('"', '\"', $aRow['browser']).'",';
		$sOutput .= '"'.str_replace('"', '\"', $aRow['platform']).'",';
		if ( $aRow['version'] == "0" )
			$sOutput .= '"-",';
		else
			$sOutput .= '"'.str_replace('"', '\"', $aRow['version']).'",';
		$sOutput .= '"'.str_replace('"', '\"', $aRow['grade']).'"';
		$sOutput .= "],";
	}
	$sOutput = substr_replace( $sOutput, "", -1 );
	$sOutput .= '] }';
	
	echo $sOutput;
	
	
	function fnColumnToField( $i )
	{
		if ( $i == 0 )
			return "engine";
		else if ( $i == 1 )
			return "browser";
		else if ( $i == 2 )
			return "platform";
		else if ( $i == 3 )
			return "version";
		else if ( $i == 4 )
			return "grade";
	}
?>