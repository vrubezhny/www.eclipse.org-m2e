<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "m2eclipse - Downloads";

	$html = <<<EOHTML
<div id="midcolumn">
	<h3>Installing m2eclipse</h3>
	<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>
	<p>m2e is tested against Eclipse 3.6 (Helios) and 3.7 (Indigo).</p>
	<p>
	See <a href="http://wiki.eclipse.org/M2E_updatesite_and_gittags">http://wiki.eclipse.org/M2E_updatesite_and_gittags</a> for detailed information about
	available builds and m2e build repository layout.
	</p>
	<h3>Update Sites</h3>
	<h4>m2e release build repository</h4>
	<a href="http://download.eclipse.org/technology/m2e/releases">http://download.eclipse.org/technology/m2e/releases</a>
</div>
EOHTML;
	
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
