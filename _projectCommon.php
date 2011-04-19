<?php
	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/ 
	$theme = "Nova";

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->setLinkList(array());
	$Nav->addNavSeparator("m2e", 	"/m2e/");
	$Nav->addCustomNav("Download", "/m2e/download/", "_self", 3);
	$Nav->addCustomNav("Documentation", "/m2e/documentation/", "_self", 3);
	$Nav->addCustomNav("Support", "/m2e/support/", "_self", 3);
	$Nav->addCustomNav("Getting Involved", "/m2e/developers/", "_self", 3);

	$pageTitle 		= "m2eclipse";
	$pageKeywords	= "maven, m2e, m2eclipse, build, eclipse";
	$pageAuthor		= "m2e team";

	$Menu->setMenuItemList(array());
	$Menu->addMenuItem("Home", "/m2e/", "_self");
	$Menu->addMenuItem("Download", "/m2e/download/", "_self");
	$Menu->addMenuItem("Documentation", "/m2e/documentation/", "_self");
	$Menu->addMenuItem("Support", "/m2e/support/", "_self");
	$Menu->addMenuItem("Developers", "/m2e/developers/", "_self");

	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="style.css"/>' . "\n\t");
?>
