<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "m2eclipse - Downloads";

	$html = <<<EOHTML
<div id="midcolumn">
	<h3>Installing m2eclipse</h3>

	<a href='http://marketplace.eclipse.org/marketplace-client-intro?mpc_install=252' title='Drag and drop into a running Eclipse Indigo workspace to install Maven Integration for Eclipse'> 
	<img src='http://marketplace.eclipse.org/misc/installbutton.png'/>
    </a>

	<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>
	<p>m2e is tested against Eclipse 4.4 (Luna).</p>
	<p>
	See <a href="http://wiki.eclipse.org/M2E_updatesite_and_gittags">http://wiki.eclipse.org/M2E_updatesite_and_gittags</a> for detailed information about
	available builds and m2e build repository layout.
	</p>
	<p>
	<strong>m2e 1.3 and earlier version have been removed from the main m2e update site.</strong> 
	These old releases are still available and can be installed from repositories documented in 
	<a href="http://wiki.eclipse.org/M2E_updatesite_and_gittags">http://wiki.eclipse.org/M2E_updatesite_and_gittags</a> 
	</p>
	<p>
	Please note that links below point at Eclipse <b>p2 repositories</b>; 
	you must access them from Eclipse (<a href="http://help.eclipse.org/topic//org.eclipse.platform.doc.user/tasks/tasks-127.htm">see how</a>). 
	</p>
	<h3>Update Sites</h3>

	<h4>Latest m2e release (recommended)</h4>
	http://download.eclipse.org/technology/m2e/releases

	<h4>m2e milestone builds towards version 1.6</h4>
	http://download.eclipse.org/technology/m2e/milestones/1.6

	<h4>Latest m2e 1.6 SNAPSHOT build (not tested, not hosted at eclipse.org)</h4>
	https://otto.takari.io/content/sites/m2e.extras/m2e/1.6.0/N/LATEST/
</div>
EOHTML;
	
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
