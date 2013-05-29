<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" dir="ltr" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="en-US"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	
	<!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="initial-scale=1.6; maximum-scale=1.0; width=device-width; "/>
	
	<title>Ryan Karpeles |   Resume</title>
  
	<!-- Included CSS Files -->
	<link rel="stylesheet" href="http://www.ryankarpeles.com/wp-content/themes/drewsymo-Foundation-5109b0f/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic|PT+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	
	<!-- jQuery library -->
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
	
	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<link rel="alternate" type="application/rss+xml" title="Ryan Karpeles &raquo; Feed" href="http://www.ryankarpeles.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="Ryan Karpeles &raquo; Comments Feed" href="http://www.ryankarpeles.com/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="Ryan Karpeles &raquo; Resume Comments Feed" href="http://www.ryankarpeles.com/resume/feed/" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.ryankarpeles.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.ryankarpeles.com/wp-includes/wlwmanifest.xml" /> 
<link rel='prev' title='About' href='http://www.ryankarpeles.com/about/' />
<link rel='next' title='Services' href='http://www.ryankarpeles.com/services/' />

<link rel='canonical' href='http://www.ryankarpeles.com/resume/' />
	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
	
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28870764-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body class="page page-id-45 page-template page-template-resume-php">

<script>
$(document).ready(function() {
  function filterPath(string) {
  return string
    .replace(/^\//,'')
    .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
    .replace(/\/$/,'');
  }
  var locationPath = filterPath(location.pathname);
  var scrollElem = scrollableElement('html', 'body');

  $('a[href*=#]').each(function() {
    var thisPath = filterPath(this.pathname) || locationPath;
    if (  locationPath == thisPath
    && (location.hostname == this.hostname || !this.hostname)
    && this.hash.replace(/#/,'') ) {
      var $target = $(this.hash), target = this.hash;
      if (target) {
        var targetOffset = $target.offset().top;
        $(this).click(function(event) {
          event.preventDefault();
          $(scrollElem).animate({scrollTop: targetOffset}, 400, function() {
            location.hash = target;
          });
        });
      }
    }
  });

  // use the first element that is "scrollable"
  function scrollableElement(els) {
    for (var i = 0, argLength = arguments.length; i <argLength; i++) {
      var el = arguments[i],
          $scrollElement = $(el);
      if ($scrollElement.scrollTop()> 0) {
        return el;
      } else {
        $scrollElement.scrollTop(1);
        var isScrollable = $scrollElement.scrollTop()> 0;
        $scrollElement.scrollTop(0);
        if (isScrollable) {
          return el;
        }
      }
    }
    return [];
  }

});
</script>

	<!-- Begin Container -->
	<div class="container">
		
		<!-- Header Row -->
		<div class="row">
			
				<!-- Header Column -->
				<div class="twelve columns" id="access" role="navigation">	
									
					
					<!-- Site Description & Title -->					
					<div class="logo-resume"><div class="logo-text">RK</div></div>	
															
				
				</div>
				<!-- Header Column -->
				
		</div>
		<!-- Header Row -->
		
		<!-- Main Row -->
		<div class="row">
		
		
				
<div id="top"></div>
<div class="vert-spacer"></div>

<div class="row">
	<div class="nine columns">
		<h1>Ryan Karpeles</h1>
		<h6>web designer / front end developer</h6>	
	</div>	
</div>

<div class="vert-spacer"></div>
<hr>

<div class="row">
	<div class="six columns">
		<h5>What I Do</h5>
		<p>In short, I make stuff sound good, look pretty and work smoothly. In business lingo, I specialize in web design, UI/UX design and front end development. In technical jargon, I work in CSS3, HTML and basic jQuery/Javascript.</p>
	</div>
	
	<div class="six columns">
		<h5>Who I Am</h5>
		<p>I&rsquo;m a husband, father, designer and writer. Most of my working hours are spent in Notepad++, Photoshop, and combing the web to learn new skills. I love what I do and I&rsquo;m grateful that I get to do it. Designing and coding a site isn't easy, but it&rsquo;s a joy and a gift to make it all come together. </p>
	</div>	
	
</div>


<hr>

<div class="row">	
		<div class="three columns">
			<h5>Experience</h5>
			<br>
		</div>	
</div>

<div class="row">
	<div class="three columns">
		<p><strong>Web Designer</strong>
		<br>
		The John Marshall Law School
		<br>
		<em>July 2011 to Present</em></p>		
	</div>
	
	<div class="three columns">
		<ul>
			<li class="gear">HTML &amp; CSS3 coding</li>
			<li class="page">Responsive design</li>
			<li class="bulb">Mobile design</li>
			<li class="eye">UI/UX design</li>						
		</ul>
	</div>
	
	<div class="six columns">
		<p>I am currently working at The John Marshall Law School in Chicago, Illinois. My role is to design and build a variety of websites, microsites, and other platforms for the school. Almost everything we&rsquo;re now developing is fully responsive and mobile-friendly. We are also working to update the look and feel of the John Marshall brand, and these projects have given us the opportunity to modernize some of the marketing and design materials for the school.</p>
		<p>For an example of recent projects I&rsquo;ve completed for John Marshall, please see the links below:</p>
		<ul>
			<li><a href="http://mobile.jmls.edu/" target="_blank">Mobile Site</a> (design &amp; code for homepage)</li>
			<li><a href="http://jmls.edu/alumni-reunion/" target="_blank">Alumni Reunion Site</a> (responsive design &amp; code)</li>
			<li><a href="http://jmls.edu/imready/" target="_blank">Admission Splash Page</a> (responsive design &amp; code)</li>
			<li><a href="http://deansreport.jmls.edu/" target="_blank">Annual Dean&rsquo;s Report Site</a> (responsive design &amp; code)</li>
		</ul>
	</div>
</div>

<hr>

<div class="row">
	<div class="three columns">
		<p><strong>Web Designer &amp; Copywriter</strong>
		<br>
		Meeting Tomorrow Inc.
		<br>
		<em>September 2011 to May 2012</em></p>		
	</div>
	
	<div class="three columns">
		<ul>
			<li class="eye">Wireframe design</li>
			<li class="gear">CSS3 &amp; HTML5 coding</li>
			<li class="bulb">Brand ID development</li>
			<li class="page">Copywriting</li>						
		</ul>
	</div>
	
	<div class="six columns">
		<p>I recently worked as a designer and copywriter for Meeting Tomorrow, a nationwide audio visual services company. We underwent a comprehensive effort to update the existing site to a more flexible, responsive design (i.e. "mobile first"). My job was to design each page for a variety of users&mdash;those who may be viewing the site on a smartphone, laptop, desktop, tablet or other device.</p>
		<p>In addition to designing the user interface, I also wrote and updated both product and service copy throughout the site. This combination of copywriting and design allowed for a more integrated approach to creating the site, as words, images and icons were packaged together from the outset of the project. At this point the new site has yet to be officially launched.</p>
	</div>
</div>

<hr>

<div class="row">
	<div class="three columns">
		<p><strong>Designer &amp; Developer</strong>
		<br>
		Meeting Tomorrow Inc.
		<br>
		<em>September 2010 to April 2011</em></p>		
	</div>
	
	<div class="three columns">
		<ul>
			<li class="eye">Wireframe design</li>
			<li class="gear">CSS3/HTML/jQuery coding</li>
			<li class="page">Copywriting</li>			
		</ul>		
	</div>
	
	<div class="six columns">
		<p>For this position I worked closely with 2 other members of our staff in order to redesign the entire company website. My job was as designer and front end developer, using CSS, HTML and jQuery to improve the visual layout as well as the overall user experience.</p>

		<p>Our goal in redesigning the site was five-fold: (1) to reposition the company as a provider of audio visual services, rather than simply an AV rental shop, (2) to convert more traffic from browsers to buyers, (3) to upgrade the look, feel and interactivity of the site, (4) to improve the credibility and readability of our copy, and (5) to bring all the web development work in-house.</p>

		<p>After less than four months of intense work, we completed the site and released it into the wild. The finished product was received extraordinarily well by our clients and our employees. The site can now be edited on the fly by the in-house team, and improvements are constantly being made to the copy, design, navigation and overall usability.</p>
	</div>
</div>

<hr>

<div class="row">
	<div class="three columns">
		<p><strong>Web Content Coordinator</strong>
		<br>
		University of Phoenix
		<br>
		<em>November 2009 to August 2010</em></p>		
	</div>
	
	<div class="three columns">
		<ul>
			<li class="blocks">CMS administration</li>
			<li class="page">Copy editing</li>
			<li class="chart">Search engine optimization</li>			
		</ul>		
	</div>
	
	<div class="six columns">
		<p>Collaborated with technical staff and Marketing department to implement and maintain over 2,500 new SEO-optimized web pages, complete with content, video, images and interactive social media components.</p>
		<p>Performed writing and editorial activities, such as quality testing for consistency, spelling, grammar and syntax, which enhanced the value and readability of the site for both prospective students and university employees.</p>
		<p>Reviewed and published site content, ranging from academic articles and community newsletters to course information and detailed program descriptions.</p>
		<p>Managed overall site architecture, URL construction, meta variables, content acceptability and link structure for optimal search engine ranking and increased business development.</p>		
	</div>
</div>

<hr>

<div class="row">
	<div class="three columns">
		<p><strong>Customer Experience Manager</strong>
		<br>
		Meeting Tomorrow Inc.
		<br>
		<em>July 2007 to August 2009</em></p>		
	</div>
	
	<div class="three columns">
		<ul>
			<li class="eye">Collateral design</li>
			<li class="blocks">CMS administration</li>
			<li class="chart">Search engine optimization</li>
			<li class="page">Copywriting</li>								
		</ul>	
	</div>
	
	<div class="six columns">	
		<p>Composed, edited and oversaw content creation for entire company website, including product descriptions, marketing copy, how-to articles, and industry collateral.</p>
		<p>Designed and constructed user-friendly Quick Start Guides for all in-house equipment, which drastically reduced tech support call volume, customer setup time, and user error.</p>
		<p>Wrote and produced detailed promotional materials, used to win large accounts with medical and pharmaceutical clients throughout the United States.</p>
		<p>Developed, revised and implemented targeted SEO strategies, resulting in a 1,470% increase in organic search engine traffic between 6/2007 and 6/2008; and a 98% increase in organic traffic between 6/2008 and 6/2009.</p>
		<p>Worked directly with president of the organization to plan, orchestrate and launch new marketing campaigns, social media efforts, and long-term website modifications.</p>
		Continuously collaborated with sales, warehouse, vendor and accounting departments in order to generate intra-organizational copy and editable forms.</p>	
	</div>
</div>

<hr>

<div class="row">
	<div class="three columns">
		<h5>Education</h5>
		<br>
		<p><strong>University of Iowa</strong>
		<br>
		Bachelor's Degree, Marketing
		<br>
		<em>Fall 2003 to Spring 2007</em>
		</p>

		<ul>
			<li>GPA: 3.89 / 4.00</li>
			<li>Graduated with High Honors</li>
			<li>Accepted to Dean's List each semester</li>
		</ul>

	</div>

	<div class="nine columns">
		<h5>Recommendations</h5>
		<br>	
		<p>"Ryan is one of the most talented marketers I've ever worked with. He has an incredible instinct for clear, concise marketing communications - both written and visual - and is continually on the forefront of identifying new technologies and innovations to improve our marketing programs, and most importantly, our customers' experience. And a terrific guy to boot."</p>
		<p class="quote-author">
		Mark Aistrope - President
		<br>
		<em>Meeting Tomorrow Inc.</em>
		</p>

		<p>"Ryan is one of the most talented individuals that I have ever worked with. From SEO to marketing to graphic design, Ryan's work at Meeting Tomorrow Inc. always raised our company's standards to new levels. On top of being extremely gifted, Ryan was an amazing coworker. His passion and commitment to his work set the bar for the rest of the office, and his interpersonal skills and compassion for his coworkers were always admired by everyone. Ryan is a leader in every sense of the word and will be successful at whatever he chooses to do."
		</p>
		<p class="quote-author">
		Thomas Waldofsky - Business Development Manager
		<br>
		<em>Meeting Tomorrow Inc.</em>
		</p>
	</div>

</div>

<hr>

<div class="row">

	<div class="three columns">
		<div class="resume-footer">
			<a href="#top">BACK TO TOP</a>
		</div>
	</div>

	<div class="nine columns">
		<div class="contact-footer">
			<p>847.951.0877 &nbsp;/&nbsp; rtkarpeles[at]gmail.com</p>
		</div>
	</div>

	

	

</div>


<div class="vert-spacer"></div>