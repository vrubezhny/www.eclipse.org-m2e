<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	# Maven Integration home page
	#****************************************************************************
	
	#
	$pageTitle 		= "M2E";
	$pageKeywords	= "maven, m2e, m2eclipse, build";
	$pageAuthor		= "Eugene Kuleshov";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
    <p>The goal of Maven Integration (M2E) project is to provide support for 
    <a href="http://maven.apache.org/">Maven</a> software project management and 
    comprehension tool in the IDE and keep project build consistent between 
    the IDE and the command line build.</p> 
    
    <p>Project is based on the Codehaus <a href="http://m2eclipse.codehaus.org/">m2eclipse</a> 
    code. The following list gives an example of features available in the IDE:</p>

    <ul>
    <li>Launching Maven builds from within IDE</li>
    <li>Wizards for creating new Maven projects, pom.xml and to enable Maven support on existing projects</li>
    <li>Integration with JDT, WTP, AJDT, Mylyn and other Eclipse tools</li> 
    <li>Dependency management for Java build path based on Maven's pom.xml</li>
    <li>Quick fixes in the Java editor for looking up required dependencies/jars by the class or package name</li>
    <li>Resolving Maven dependencies from the Eclipse Workspace without installing to the local Maven repository</li>
    <li>Automatic downloading of the required dependencies from remote Maven repositories</li>
    <li>Quick search for dependencies in Maven remote repositories</li>
    </ul>

    <p>More info is coming soon.</p> 
	</div>

  <div id="rightcolumn">
        $sidebar
  </div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
