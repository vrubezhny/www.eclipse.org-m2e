<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	# Maven Eclipse home page
	#****************************************************************************
	
	#
	$pageTitle 		= "Maven Eclipse";
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
	<h1>Maven Eclipse</h1>
	<h2>Good news! m2eclipse is moving to eclipse.org!</h2>
    <p>After years at <a href="http://m2eclipse.codehaus.org/">Codehaus</a> (thanks!), 
    we're getting closer to the eclipse.org projects we work with, 
    like PDE, WTP, and AJDT.
    We are staying at 
    <a href="http://m2eclipse.codehaus.org/">http://m2eclipse.codehaus.org/</a>
    for one more release, and will move when we have everything set up so
    everyone can do everything right here.</p>
    <p>We will soon be caught in details like feature lists, so now is a good time    
    to step back and talk about why we think bringing Maven to Eclipse could be very fruitful.  
    If you see more benefits or potential risks, let's talk about it 
    (see <a href="#contacts">below</a>).
    </p>
	
	<h2>Why Maven and Eclipse?</h2>
	<p>Maven helps Eclipse build, and Eclipse helps people use Maven.
	That makes it much easier for the Eclipse IDE to build more kinds of software projects,
	and easier for more Eclipse projects to be built on the command-line or in 
	a process of continuous integration.
	</p>
    <p>The <a href="http://maven.apache.org/">Apache Maven project</a> describes
    Maven as a "software project management and comprehension tool".  Maven is used in 
    thousands of open-source and commercial software projects to simplify building
    and understanding software of all stripes.  Maven is great at doing command-line 
    builds, producing reports and documentation, and sharing code in binary repositories.
    </p>
    
    <p>The Eclipse IDE is great at supporting interactive software development, with 
    incremental compilation and instant UI access to dependencies and definitions in 
    everything from code to metadata.  But command-line builds are hard to configure,
    libraries are often managed manually, and many languages, 
    programming models, and build processes are not supported by Eclipse as they are
    by Maven (because it is a much harder problem to write good UI support).
    </p>
    
    <p>So Eclipse can make working with Maven easier, and Maven can make it supporting
    many kinds of software in Eclipse easier.   Eclipse makes it easier to 
    write Maven metadata and work with Maven dependencies.  Maven makes it easier
    to manage library dependencies, to assemble projects, and to build from the command-line 
    in a process of continuous integration.  All this helps both developers writing software and
    plug-in projects implementing software build or assembly processes.
    </p>
    <p>Hence, we have three offerings, 
    for software developers, Eclipse plug-in developers, and software build engineers:</p>
     <ol>
     <li><em>Maven Eclipse Tools</em>, the UI for developers using Maven to make software</li>
     <li><em>Maven Eclipse Frameworks</em>, the API's for Eclipse plug-in's using Maven to 
       maintain project information and to deploy software build and assembly tools</li>
     <li><em>Tycho</em>, Maven support for building Eclipse and OSGI artifacts on the command-line</li>
     </ol>
<a name="contacts"></a>
<p>Thanks for listening!  If you're interested, there are many ways to participate:</p>
<ul>
<li>To use what we have already, go to 
<a href="http://m2eclipse.codehaus.org/">http://m2eclipse.codehaus.org/</a>.
</li>
<li>
To discuss the goals of the project publicly or otherwise contribute, subscribe to 
<a href="https://dev.eclipse.org/mailman/listinfo/m2e-dev">m2e-dev</a>
and then email 
  <a href="mailto:m2e-dev@eclipse.org?subject=project%20goals">m2e-dev@eclipse.org</a>.
</li>
<li>

    <form method="post" action="http://www.sonatype.com/m2eclipse/announce">If you want us to let you know when we've moved, shoot us your email address:
    <br><input name="email" maxlength="150" size="25" type="text"> 
	<font size="-1">(This is just between us.)</font>
</form>
</li>
</ul>
   <p>
   The m2eclipse team
   </p>
    <hr class="clearer" />
    
	</div>

  <div id="rightcolumn">
    $sidebar
  </div>
	
  <script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
  </script>
  <script type="text/javascript">
    var pageTracker = _gat._getTracker("UA-1693297-7");
    pageTracker._initData();
    pageTracker._trackPageview();
  </script>
  
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
