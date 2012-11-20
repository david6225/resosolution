<?php
	$sep = (stristr ('php_os', 'WIN')) ? "\\" : "/";
	$request = str_replace( "/", "", $_SERVER['REQUEST_URI'] );

	$config = json_decode( file_get_contents( "config.json") );

	$pages = $config->pages;
	$page = $p = $pages[0];

	/*
	On cherche la page correspondant à l'url - Router ultra simple */
	foreach( $pages as $p )
	{
		if( $p->url == $request )
			$page = $p;
	}

	
?>	
