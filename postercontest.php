<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Ganymede Poster Contest";
	$pageKeywords	= "ganymede, poster, contest, movie";
	$pageAuthor		= "Lynn Gayowski";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 1);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 1);

	# End: page-specific settings
	#
	// This file is linked to from lots of different places.
	// Use absolute paths to make sure that we can actually test
	// that the file renders properly (i.e. testing using) "/index.php",
	// and "/home/index.php" both work.

	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		
		<p>
		<table align="top">
			<tr height="250">
				<td valign="top" width="260"><a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=103023" targer="blank"><img src="https://bugs.eclipse.org/bugs/attachment.cgi?id=103023" height="200" width="250" border="0"></a><br>
				<b>Closer than you Might Imagine</b></p></td>
				<td valign="top" width="151"><a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=102944" targer="blank"><img src="https://bugs.eclipse.org/bugs/attachment.cgi?id=102944" height="200" width="141" border="0"></a><br>
				<b>Community created... Ganymede!</b></td>
				<td valign="top" width="145"><a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=103205" targer="blank"><img src="https://bugs.eclipse.org/bugs/attachment.cgi?id=103205" height="200" width="135" border="0"></a><br>
				<b>Enchanted</b></td>
				<td valign="top" width="180"><a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=103024" targer="blank"><img src="https://bugs.eclipse.org/bugs/attachment.cgi?id=103024" height="200" width="170" border="0"></a><br>
				<b>Ganymede Train</b></td>
			</tr>
		</table>
		<table>
			<tr height="250">
				<td valign="top" width="278"><a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=103138" targer="blank"><img src="https://bugs.eclipse.org/bugs/attachment.cgi?id=103138" height="200" width="268" border="0"></a><br>
				<b>Gene Simmons Never Had Ganymede</b></td>	
				<td valign="top" width="167"><a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=102971" targer="blank"><img src="https://bugs.eclipse.org/bugs/attachment.cgi?id=102971" height="200" width="157" border="0"></a><br>
				<b>Lord Of The Rings</b></td>
				<td valign="top" width="140"><a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=103050" targer="blank"><img src="https://bugs.eclipse.org/bugs/attachment.cgi?id=103050" height="200" width="130" border="0"></a><br>
				<b>Lost in Translation</b></td>
				<td valign="top" width="144"><a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=103199" targer="blank"><img src="https://bugs.eclipse.org/bugs/attachment.cgi?id=103199" height="200" width="134" border="0"></a><br>
				<b>Mars Attacks</b></td>
			</tr>
		</table>
		<table>
			<tr height="250">	
				<td valign="top" width="145"><a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=103040" targer="blank"><img src="https://bugs.eclipse.org/bugs/attachment.cgi?id=103040" height="200" width="135" border="0"></a><br>
				<b>Ratatouille</b></td>				
				<td valign="top" width="145"><a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=103043" targer="blank"><img src="https://bugs.eclipse.org/bugs/attachment.cgi?id=103043" height="200" width="135" border="0"></a><br>
				<b>Sunshine</b></td>				
				<td valign="top" width="232"><a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=103022" targer="blank"><img src="https://bugs.eclipse.org/bugs/attachment.cgi?id=103022" height="200" width="222" border="0"></a><br>
				<b>Train about to Leave</b></td>
				<td valign="top" width="210"><a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=103021" targer="blank"><img src="https://bugs.eclipse.org/bugs/attachment.cgi?id=103021" height="200" width="200" border="0"></a><br>
				<b>Train to Catch</b></td>
			</tr>
		<table>
			<tr height="250">
				<td valign="top" width="163"><a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=103391" targer="blank"><img src="https://bugs.eclipse.org/bugs/attachment.cgi?id=103391" height="200" width="153" border="0"></a><br>
				<b>Transformers</b></td>
				<td valign="top" width="151"><a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=102974" targer="blank"><img src="https://bugs.eclipse.org/bugs/attachment.cgi?id=102974" height="200" width="141" border="0"></a><br>
				<b>Uncle Eclipse</b></td>
				<td valign="top" width="161"><a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=103019" targer="blank"><img src="https://bugs.eclipse.org/bugs/attachment.cgi?id=103019" height="200" width="151" border="0"></a><br>
				<b>Wall E</b></td>
				<td valign="top" width="142"><a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=103044" targer="blank"><img src="https://bugs.eclipse.org/bugs/attachment.cgi?id=103044" height="200" width="132" border="0"></a><br>
				<b>300</b></td>
			</tr>
		</table>
		</p>
		
		<br><br>

	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Ganymede Around the World</h6>
			<ul>
				<li><a href="http://www.eclipse.org/ganymede/">Ganymede</a></li>
				<li><a href="map.php">Ganymede Map</a></li>
			</ul>
		</div>
	</div>	
	
	
</div>

	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>