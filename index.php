<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	# Maven Eclipse home page
	#****************************************************************************
	
	#
	$pageTitle 		= "m2e eclipse";
	$pageKeywords	= "maven, m2e, m2eclipse, build, eclipse";
	$pageAuthor		= "m2e team";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	$html = <<<EOHTML
   
	<div id="midcolumn">
	<h1>m2eclipse</h1>
	<h2>Mission statement</h2>
The goal of the m2eclipse project is to provide a first-class Maven support in the Eclipse IDE, making it easier to edit Maven's pom.xml, run a build from the IDE and much more. For Java developers, the very tight integration with the rest of the JDT greatly simplify the consumption of other Java artifacts either being hosted on <a href="http://mavencentral.sonatype.com">Maven Central</a>, or in your in-house Maven repository.<p/>

m2eclipse is also a platform that let others provide better integration with additional Maven plugins (e.g. Android, web development, etc.), and facilitates the distribution of those extensions through the m2e marketplace.<p/>

	<h2>Getting started</h2>
	m2e works with Eclipse 3.6 (Helios) and 3.7 (Indigo).<p/>
	
	Nightly builds are available at: http://download.eclipse.org/technology/m2e/updates/N <p/>
Milestones builds: http://download.eclipse.org/technology/m2e/updates/M<p/>
	<h2>Some highlights</h2>
	<h2>Getting involved</h2>
	If you are a user and have question, the <a href="https://dev.eclipse.org/mailman/listinfo/m2e-users">m2e-users@eclipse.org</a> should be used.<p/>
	
	If you are interested in contributing to m2e or are building extensions to m2e, the <a href="https://dev.eclipse.org/mailman/listinfo/m2e-dev">m2e-dev@eclipse.org</a> should be used.<p/>
	
	If you have bugs, want to provide feedback, please open tickets at https://bugs.eclipse.org/bugs/enter_bug.cgi?product=m2e<p/>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
