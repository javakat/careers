<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/cds_layout1.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<title>
Career Services - Auburn University
</title>
<link rel="stylesheet" href="http://www.auburn.edu/template/styles/sidebar.css" media="screen" type="text/css" />
<!--#include virtual="/template/includes/head.html" -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12338791-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div id="pageWrap"> 
  <div id="headerWrap">
    <div id="header">
      <div id="logo">
      	<a href="http://www.auburn.edu"><img src="http://www.auburn.edu/template/styles/images/headerLogo.png" alt="Auburn University Homepage" /></a>
      </div>
      <div id="headerTitle">
        <div class="topLinks">
          <a href="http://www.auburn.edu/main/sitemap.php">A-Z Index</a> | 
          <a href="http://www.auburn.edu/map">Map</a> | 
          <a href="http://www.auburn.edu/main/auweb_campus_directory.html" class="lastTopLink">People Finder</a>
        </div>
        <form action="http://search.auburn.edu" id="searchForm" method="get">
          <div class="searchBox">
            <input type="text" name="q" id="q" accesskey="q" size="28" tabindex="1" class="searchField" onFocus="if(this.value=='Search AU...'){this.value='';this.style.color='black'}" onBlur="if(this.value=='')this.value='Search AU...';this.style.color='grey'" value="Search AU..." />
            <input type="image" src="http://www.auburn.edu/template/styles/images/searchButton2.png" name="sa" accesskey="z" tabindex="2" alt="Search" value="Submit" class="searchButton" />
          </div>
          <input type="hidden" name="cx" value="006456623919840955604:pinevfah6qm" />
          <input type="hidden" name="ie" value="utf-8" />
          <label for="q" style=" position:absolute; left:-9999px; visibility:hidden;">Enter your search terms</label>
        </form>
        <div class="titleArea">Career Center</div>
      </div>
    </div>
		<table class="nav">
      <tr>
        <tr>
        <td><a href="../students">Students</a></td>
        <td><a href="http://hire.auburn.edu">Employers</a></td>
        <td><a href="../alumni">Alumni</a></td>
        <td><a href="../faculty">Faculty/Staff</a></td>
        <td><a href="../parents">Parents</a></td>
        <td><a href="../aboutus">About Us</a></td>
      </tr>
      </tr>
    </table>
  </div>
  <div id="contentArea">
    <div class="contentDivision"> 
      <p class="breadcrumb"> <!-- InstanceBeginEditable name="breadcrumb" --> <a href="../">Career Center</a> &gt; Graduating Senior Exit Survey<!-- InstanceEndEditable --> </p>
			<!-- InstanceBeginEditable name="body" -->
      <table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col"><h2 class="style1">Good luck and War Eagle!</h2></th>
  </tr>
</table>
<?php

mysql_connect("web6","thornde","career") or die("Unable to connect to server");
	mysql_select_db("gisignup") or die("Unable to select database");
	
$query="INSERT INTO gradsurvey (ID, graddate, first_name, mi, last_name, address, city, state, zip, country, phone, user_email, college, major, degree, GPA, majorchange, howmany, plans, plansother, jobtitle, employer, jobcity, jobstate, salary, startdate, othercomp, interviews, offers, c1, c2, c3, c4, c5, c6, c6other, trl, special, workshops, counseling, cdsweb, comments) VALUES (
         '$ID',
		 '$graddate',
		 '$first_name',
		 '$mi',
		 '$last_name',
		 '$address',
		 '$city',
		 '$state',
		 '$zip',
		 '$country',
		 '$phone',
		 '$user_email',
		 '$college',
		 '$major',
		 '$degree',
		 '$GPA',
		 '$majorchange',
		 '$howmany',
		 '$plans',
		 '$plansother',
		 '$jobtitle',
		 '$employer',
		 '$jobcity',
		 '$jobstate',
		 '$salary',
		 '$startdate',
		 '$othercomp',
		 '$interviews',
		 '$offers',
		 '$c1',
		 '$c2',
		 '$c3',
		 '$c4',
		 '$c5',
		 '$c6',
		 '$c6other',
		 '$trl',
		 '$special',
		 '$workshops',
		 '$counseling',
		 '$cdsweb',
		 '$comments')";
$success=mysql_query($query);

?>
      <!-- InstanceEndEditable -->
      <p class="lastUpdated">Last Updated: <!-- InstanceBeginEditable name="lastUpdated" --> Apr. 12, 2011<!-- InstanceEndEditable --> </p>
    </div>
    <div class="sidebar"> 
      <p class="sidebarTitle">I NEED A ...</p>
      <a href="http://www.auburn.edu/career/counselors">Career Counselor</a> <a href="http://www.auburn.edu/academic/provost/undergrad_studies/career/choose.html">Major/Career</a> <a href="http://www.auburn.edu/career/resume">Resume/Cover Letter</a> <a href="http://jobs.auburn.edu">Full-time job</a> <a href="http://jobs.auburn.edu">Part-time job</a> <a href="https://auburn-csm.symplicity.com/students">Internship</a><a href="http://www.auburn.edu/career/mock">Mock Interview</a><a href="http://www.auburn.edu/career/faculty/presentations.php">Presentation</a>
      <div class="orangeDecorBar">&nbsp;</div>
      <p class="sidebarTitle">POPULAR RESOURCES</p>
      <a href="http://www.auburn.edu/career/assessments">Career Assessments</a> <a href="http://www.auburn.edu/career/trl">Tiger Recruiting Link</a><a href="../webresources/index.html">Web Resources</a><a href="http://www.auburn.edu/career/tipsheets">Tip Sheets</a> <a href="http://www.auburn.edu/career/eresume">e Resume Review</a> <a href="http://www.auburn.edu/career/events">Calendar of Events/Seminars</a><a href="http://www.auburn.edu/career/resources/majors">What can I do with a major in?</a> <a href="http://www.careershift.com/?sc=auburn" target="_blank">CareerShift</a> <a href="http://www.auburn.edu/academic/provost/undergrad_studies/career/resources/interviewstream.html" target="_blank">InterviewStream</a> </div>
  </div>
<div id="footerWrap">
    <div id="footer">
    <div id="footSectionWrap">
      <div class="footSection">
        <ul>
          <li><a href="http://www.auburn.edu/ess" target="_blank">Educational Support Services</a></li>
          <li><a href="http://www.auburn.edu/academicsupport" target="_blank">Academic Support Services</a></li>
          <li><a href="http://business.auburn.edu/OPCD/" target="_blank">College of Business  OPCD</a></li>
        </ul>
      </div>
      <div class="footSection"> 
        <ul>
          <br>
            <a href="www.facebook.com/aucareer"><img src="../buttons/icofacebook.png" alt="Facebook" width="25" height="25" border="0"></a> &nbsp;<a href="http://twitter.com/#!/AUCareer"><img src="../buttons/icotwitter.png" alt="Twitter" width="25" height="25" border="0">&nbsp; </a> <a href="http://www.youtube.com/user/AUCDS"><img src="../images/icoyoutube.png" alt="YouTube" width="25" height="25" border="0"></a>&nbsp;<a href="http://www.linkedin.com/groups?about=&gid=1878262" target="_blank"><img src="../buttons/icolinked.png" alt="LinkedIn" width="25" height="25" border="0"></a> <a href="http://tigersprepare.blogspot.com/" target="_blank">&nbsp;<img src="../buttons/icoblog.png" alt="Blog" width="25" height="25" border="0"></a></li>
        </ul>
      </div>
      <div class="footSection noBorder">
        <ul>
          <li><a href="http://www.auburn.edu/studentaffairs" target="_blank">Student Affairs</a></li>
          <li><a href="http://www.auburn.edu/academic/provost/undergrad_studies/academicadvising.html" target="_blank">Academic Advisors</a></li>
          <li><a href="http://www.auburn.edu/academic/provost/undergrad_studies/majors/" target="_blank">Majors/Academic Departments</a></li>
        </ul>
      </div>
    </div>
    </div>  
    <div id="subfooter">
      Career Center | Auburn University | Auburn, Alabama 36849 | (334) 844-4744  | 
        <script type="text/javascript">emailE='auburn.edu'; emailE=('cdsserv' + '@' + emailE); document.write("<a href='mailto:" + emailE + "'>" + emailE + "</a>");</script>
      <br />
      <a href="https://fp.auburn.edu/ocm/auweb_survey">Website Feedback</a> | <a href="http://www.auburn.edu/privacy">Privacy</a> | <a href="http://www.auburn.edu/oit/it_policies/copyright_regulations.php">Copyright &copy; 
      <script type="text/javascript">date = new Date(); document.write(date.getFullYear());</script></a>
    </div>
  </div>
  <!--#include virtual="/template/includes/gatc.html" --> 
</div>
</body>
<!-- InstanceEnd --></html>