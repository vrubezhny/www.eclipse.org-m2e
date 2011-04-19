<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "m2eclipse - Support";

	$html = <<<EOHTML
<div id="midcolumn">
	<h3>m2eclipse - Support</h3>
<ul>
	<li>User's list <a href="https://dev.eclipse.org/mailman/listinfo/m2e-users">m2e-users@eclipse.org</a></li>
	<li><a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=m2e">Bugzilla</a></li>
</ul>
</div>
EOHTML;
	
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
