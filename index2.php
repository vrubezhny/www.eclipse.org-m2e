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
		
	$html = <<<EOHTML

	<div id="midcolumn">
    <p>The goal of Maven Integration (M2E) is to provide support for 
    Apache <a href="http://maven.apache.org/">Maven</a> software project management and 
    comprehension tool in the IDE and keep project build consistent the command line build.</p>
    
    <p>The project is based on the Codehaus <a href="http://m2eclipse.codehaus.org/">m2eclipse</a> 
    code. The following list gives few examples of the features available in the IDE:</p>

    <ul>
    <li>Launching Maven builds from within IDE</li>
    <li>Wizards for creating new Maven projects, pom.xml and to enable Maven support on existing projects</li>
    <li>Afavanced form-based and XML editors for authoring Maven pom.xml</li>
    <li>Integration with JDT, WTP, AJDT, Mylyn and other Eclipse tools</li> 
    <li>Dependency management for Java build path based on Maven's pom.xml</li>
    <li>Quick fixes in the Java editor for looking up required dependencies/jars by the class or package name</li>
    <li>Resolving Maven dependencies from the Eclipse Workspace without installing to the local Maven repository</li>
    <li>Automatic downloading of the required dependencies from remote Maven repositories</li>
    <li>Quick search for dependencies in Maven remote repositories</li>
    </ul>

    <p>More is coming soon.</p> 
    
    <p>In a mean time you can subscribe to the news group and project mailing lists.</p>
     
    <div class="homeitem">
      <h3>News Group</h3>
      <ul>
      <li><a href="news://news.eclipse.org:119/eclipse.technology.m2e">eclipse.technology.m2e</a><br>
        Main forum for user questions and support. Got questions? Need advice? Miss a feature? Please don't hesitate to ask.<br> 
        [<a href="http://dev.eclipse.org/newslists/news.eclipse.technology.m2e/maillist.html">archive</a>] 
        [<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.m2e">web interface</a>]
        [<a href="http://wiki.eclipse.org/index.php/Webmaster_FAQ#How_do_I_access_the_Eclipse_newsgroups.3F">FAQ</a>]
        </li>
      </ul>
    </div>
  		
    <div class="homeitem">
      <h3>Mailing Lists</h3>
      <ul>
      <li><a href="https://dev.eclipse.org/mailman/listinfo/m2e-users">m2e-users@eclipse.org</a><br> 
        General users Discussion [<a href="http://dev.eclipse.org/mhonarc/lists/m2e-users/maillist.html">archive</a>]</li>
      <li><a href="https://dev.eclipse.org/mailman/listinfo/m2e-users">m2e-dev@eclipse.org</a><br>
        Developers Discussion [<a href="http://dev.eclipse.org/mhonarc/lists/m2e-dev/maillist.html">archive</a>]</li>
      </ul>
    </div>
    
    <hr class="clearer" />
    
	</div>

  <div id="rightcolumn">
        $sidebar
  </div>
	
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
