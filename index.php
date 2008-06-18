<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();	$theme = "Phoenix";   # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 	 	Nathan Gervais
	# Date:			2008-04-21
	#
	# Description: Ganymede Landing Page
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Ganymede Release";
	$pageKeywords	= "eclipse ganymede, ganymede, ganymede release train";
	$pageAuthor		= "Eclipse Foundation, Inc.";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	
	# Place your html content in a file called content/en_pagename.php

	ob_start();
	?>	<link type="text/css" href="style.css" rel="stylesheet"/>
		<body>
			<div id="widecontent">
			<br/>
				<table width="60%" align="center">
					<tr>
						<td colspan="4">
							<p>Eclipse Ganymede is the annual release of Eclipse projects.  This year, the annual release includes 24 projects. By releasing these projects at the same time, the goal is to eliminate uncertainty about version compatibility and make it easier to incorporate multiple projects into your environment.
							<br/><br/><i>While Ganymede is about the simultaneous release of twenty four projects, it is not a unification of the projects - each project remains a separate open source project operating with its own project leadership, its own committers, and its own project plan.</i><br/><br/></p> 
						</td>
					</tr>
					<tr>
						<td align="center">
							<a href="/downloads/packages/"><img src="http://dev.eclipse.org/huge_icons/actions/document-save.png"/></a><br/>
							<a href="/downloads/packages/">Download Ganymede</a>
						</td>					
						<td align="center">
							<a href="learn.php"><img src="http://dev.eclipse.org/huge_icons/actions/system-search.png"/></a><br/>
							<a href="learn.php">Learn more about Ganymede</a>
						</td>
						<td align="center">
							<a href="buzz.php"><img src="http://dev.eclipse.org/huge_icons/devices/network-wireless.png"/></a><br/><a href="buzz.php">Ganymede Buzz</a>
						</td>
						<td align="center">
							<a href="map.php"><img src="http://dev.eclipse.org/huge_icons/categories/applications-internet.png"/></a><br/><a href="map.php">Ganymede Around the World</a>
						</td>								
					</tr>
				</table>
				<br/><br/><br/><br/>
			</div>
		</body>
	<?
	$html = ob_get_clean();
	# Generate the web page
	$App->Promotion = TRUE;
	$App->generatePage($theme, $Menu, NULL, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>