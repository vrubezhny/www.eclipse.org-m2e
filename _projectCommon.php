<?php
	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/ 
	$theme = "Lazarus";

	$branding = <<<EOBRANDING
<div id="branding">
<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Maven Integration (M2E)</h1>
</div>
EOBRANDING;
	$Menu->setProjectBranding($branding);
	
	include("sidebar.php");
    
    function add2users() {
       global $Nav;
       $Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/Maven_Integration", "_self", 2);
    }
       
    function add2contributors() {
       global $Nav;
#       $Nav->addCustomNav(...);
    }
    
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	#$Nav->addNavSeparator("Project Home", 	"downloads.php");
	#$Nav->addCustomNav("Downloads", 		"downloads.php", 	"_self", 2);
	#$Nav->addCustomNav("Installation", 		"install.php", 		"_self", 2);
	#$Nav->addCustomNav("FAQ", 				"faq.php", 			"_self", 2);

    require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
    $projectInfo = new ProjectInfo("technology.m2e");
    # $projectInfo->generate_common_nav( $Nav, "add2users", NULL, "add2contributors" );   # Define your project-wide Nav bars here.
    $projectInfo->generate_common_nav( $Nav, "add2users", NULL, NULL );   # Define your project-wide Nav bars here.

?>
