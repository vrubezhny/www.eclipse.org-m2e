<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "m2eclipse - Downloads";

	$html = <<<EOHTML
<div id="midcolumn">
	<p>m2e is tested against Eclipse 3.6 (Helios) and 3.7 (Indigo) and is available through the following p2 repositories.</p>
	<ul>
		<li>Milestones: <a href="http://download.eclipse.org/technology/m2e/updates/M">http://download.eclipse.org/technology/m2e/updates/M</a></li>
		<li>Nightly builds: <a href="http://download.eclipse.org/technology/m2e/updates/N">http://download.eclipse.org/technology/m2e/updates/N</a></li>
	</ul>
</div>
EOHTML;
	
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
