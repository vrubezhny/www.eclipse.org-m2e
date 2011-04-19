<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	# m2eclipse home page
	#****************************************************************************
	
	#
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	$html = <<<EOHTML
<div id="bigbuttons">
	<h3>Primary Links</h3>
	<ul>
		<li><a id="buttonDownload" href="/m2e/download/" title="Download">Eclipse Distribution, Update Site</a></li>
		<li><a id="buttonDocumentation" href="/m2e/documentation/" title="Documentation">Tutorials, Examples, Reference Documentation</a></li>
		<li><a id="buttonSupport" href="/m2e/support/" title="Support">Bug Tracker, Newsgroup, Support</a></li>
		<li><a id="buttonInvolved" href="/m2e/developers/" title="Getting Involved">VCS, Workspace Setup, Wiki, Committers</a></li>
	</ul>
</div>

<div id="midcolumn">
	<h3>Maven Integration (m2e)</h3>
	<p>The goal of the m2eclipse project is to provide a first-class <a href="http://maven.apache.org">Apache Maven</a> support in the Eclipse IDE, making it easier to edit Maven's pom.xml, run a build from the IDE and much more. For Java developers, the very tight integration with  JDT greatly simplifies the consumption of  Java artifacts either being hosted on open source repositories such as <a href="http://mavencentral.sonatype.com">Maven Central</a>, or in your in-house Maven repository.<p/>
	<p>m2eclipse is also a platform that let others provide better integration with additional Maven plugins (e.g. Android, web development, etc.), and facilitates the distribution of those extensions through the m2e marketplace.<p/>
	<div style="font-size:small;">Apache and Apache Maven are trademarks of the Apache Software Foundation. Maven Central is a service mark of Sonatype, Inc. Nexus, Maven IDE, Maven Shell, and Polyglot Maven are trademarks of Sonatype, Inc. Maven Central, Maven IDE, Maven Shell, and Polyglot Maven are intended to complement Apache Maven and should not be confused with Apache Maven.</div>
</div>

<div id="rightcolumn">
	<h3>Committers</h3>
	<ul>
		<li><a href='/projects/lists.php?list=projectsforcommitter&param=bbentmann'>Benjamin Bentmann</a></li>
		<li><a href='/projects/lists.php?list=projectsforcommitter&param=ifedorenk'>Igor Fedorenko</a></li>
		<li><a href='/projects/lists.php?list=projectsforcommitter&param=jvanzyl'>Jason Van Zyl</a></li>
		<li><a href='/projects/lists.php?list=projectsforcommitter&param=mkleint'>Milos Kleint</a></li>
		<li><a href='/projects/lists.php?list=projectsforcommitter&param=mpiggott'>Matthew Piggott</a></li>
		<li><a href='/projects/lists.php?list=projectsforcommitter&param=prapicau'>Pascal Rapicault</a></li>
		<li><a href='/projects/lists.php?list=projectsforcommitter&param=ptatavu'>Paul Tatavu</a></li>
		<li><a href='/projects/lists.php?list=projectsforcommitter&param=dplatonof'>Dmitry Platonoff</a></li>
		<li><a href='/projects/lists.php?list=projectsforcommitter&param=rgould'>Richard Gould</a></li>
	</ul>
</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
