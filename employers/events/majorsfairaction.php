<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Career Center Event - Auburn University</title>
<link rel="stylesheet" href="http://www.auburn.edu/template/styles/stretch.css" media="screen" type="text/css" />
<!--#include virtual="/template/includes/head.html" --><script language="javascript1.2" type="text/javascript">

var howOften = 5; //number often in seconds to rotate
var current = 0; //start the counter at 0
var ns6 = document.getElementById&&!document.all; //detect netscape 6

// place your images, text, etc in the array elements here
var items = new Array();
    items[0]="<a href='link.htm' ><img alt='image0 (9K)' src=' /Images/image0.jpg' height='300' width='300' border='0' /></a>"; //a linked image
    items[1]="<a href='link.htm'><img alt='image1 (9K)' src='/Images/image1.jpg' height='300' width='300' border='0' /></a>"; //a linked image
    items[2]="<a href='link.htm'><img alt='image2 (9K)' src='/Images/image2.jpg' height='300' width='300' border='0' /></a>"; //a linked image
   items[3]="<a href='link.htm'><img alt='image3 (9K)' src='/Images/image3.jpg' height='300' width='300' border='0' /></a>"; //a linked image
    items[4]="<a href='link.htm'><img alt='image4 (9K)' src='/Images/image4.jpg' height='300' width='300' border='0' /></a>"; //a linked image
    items[5]="<a href='link.htm'><img alt='image5 (18K)' src='/Images/image5.jpg' height='300' width='300' border='0' /></a>"; //a linked image
function rotater() {
    document.getElementById("placeholder").innerHTML = items[current];
    current = (current==items.length-1) ? 0 : current + 1;
    setTimeout("rotater()",howOften*1000);
}

function rotater() {
    if(document.layers) {
        document.placeholderlayer.document.write(items[current]);
        document.placeholderlayer.document.close();
    }
    if(ns6)document.getElementById("placeholderdiv").innerHTML=items[current]
        if(document.all)
            placeholderdiv.innerHTML=items[current];

    current = (current==items.length-1) ? 0 : current + 1; //increment or reset
    setTimeout("rotater()",howOften*1000);
}
window.onload=rotater;
//-->
</script>
</head>
<body>
<div id="pageWrap"> 
  <div id="headerWrap">
    <div id="header">
      <div id="logo">
      	<a href="http://www.auburn.edu"><img src="/template/styles/images/headerLogo.png" alt="Auburn University Homepage" /></a>
      </div>
      <div id="headerTitle">
        <div class="topLinks">
          <a href="http://www.auburn.edu/main/sitemap.php">A-Z Index</a> | 
          <a href="http://www.auburn.edu/map">Map</a> | 
          <a href="http://www.auburn.edu/main/auweb_campus_directory.html" class="lastTopLink">People Finder</a>
        </div>
        <form action="http://search.auburn.edu" id="searchForm" method="get">
          <div class="searchBox">
            <input type="text" name="q" id="q" accesskey="q" size="28" tabindex="1" class="searchField" onfocus="if(this.value=='Search AU...'){this.value='';this.style.color='black'}" onblur="if(this.value=='')this.value='Search AU...';this.style.color='grey'" value="Search AU..." />
            <input type="image" src="/template/styles/images/searchButton2.png" name="sa" accesskey="z" tabindex="2" alt="Search" value="Submit" class="searchButton" />
          </div>
          <input type="hidden" name="cx" value="006456623919840955604:pinevfah6qm" />
          <input type="hidden" name="ie" value="utf-8" />
          <label for="q" style=" position:absolute; left:-9999px; visibility:hidden;">Enter your search terms</label>
        </form>
        <div class="titleArea">
        	<span class="mainHeading"><h3>Career Center</h3>
        	</span>
        </div>
      </div>
    </div>
		<table class="nav">
      <tr>
        <td><a href="http://www.auburn.edu/career/students">STUDENTS</a></td>
        <td><a href="http://hire.auburn.edu/">EMPLOYERS</a></td>
        <td><a href="http://www.auburn.edu/career/alumni">ALUMNI</a></td>
        <td><a href="http://www.auburn.edu/career/faculty">FACULTY/STAFF</a></td>
        <td><a href="http://www.auburn.edu/career/parents">PARENTS</a></td>
        <td><a href="http://www.auburn.edu/career/aboutus">ABOUT US</a></td>
      </tr>
    </table>
  </div>
  <div id="contentArea">
    <div class="contentDivision"> 
      <p class="breadcrumb"> <a href="http://auburn.edu/career/index.html">AU Career Center</a> &gt; Layout 3  </p>

      <?php 


mysql_connect("acadmysql","cdsserv","career") or die("Unable to connect to server");
	mysql_select_db("gisignup") or die("Unable to select database");
    
    
   
	$query="INSERT INTO exploremajors (ID, contact, title, email, phone, college, department, website, reps) VALUES (
         '$ID',
         '$contact',
         '$title',
         '$email',
		 '$phone',
		 '$college',
		 '$department',
		 '$website',
		 '$reps')";
$success=mysql_query($query); 
    
    
    
    
    
    ?>        
            
      <p class="lastUpdated">Last Updated:  Aug. 22, 2010  </p>
    </div>
  </div>
  <div id="contentArea_bottom"></div>
  <div id="footerWrap">
    <div id="footer">
    <div id="footSectionWrap">
      <div class="footSection">
         <ul>
          <li><a href="http://www.auburn.edu/academicsupport" target="_blank">Academic Support Services</a></li>
          <li>            <a href="http://www.auburn.edu/fye" target="_blank">First Year Experience </a></li>
          <li><a href="http://business.auburn.edu/student-services/office-of-professional-career-development/" target="_blank">College of Business  OPCD</a></li>
        </ul>
      </div>
      <div class="footSection"> 
        <ul>
          <li><a href="http://www.facebook.com/AUCareer" target="_blank"><br />
            <img src="http://www.auburn.edu/academic/provost/undergrad_studies/career/images/fb_template.png" alt="Facebook" width="32" height="32" border="0" /></a> &nbsp;<a href="http://twitter.com/AUCareer"><img src="http://www.auburn.edu/academic/provost/undergrad_studies/career/images/twitter_template.png" alt="Twitter" width="32" height="32" border="0" /></a> &nbsp;<a href="http://www.linkedin.com/groups?about=&amp;gid=1878262" target="_blank"><img src="http://www.auburn.edu/academic/provost/undergrad_studies/career/images/li_template.png" alt="LinkedIn" width="32" height="32" border="0" /></a>&nbsp;<a href="http://www.youtube.com/user/AUCDS/featured" target="_blank"><img src="http://www.auburn.edu/academic/provost/undergrad_studies/career/images/yt_template.png" width="32" height="32" alt="You Tube" /></a><a href="http://tigersprepare.blogspot.com/" target="_blank">&nbsp;<img src="http://www.auburn.edu/academic/provost/undergrad_studies/career/images/blog_template.png" alt="Blog" width="32" height="32" border="0" /></a></li>
        </ul>
      </div>
      <div class="footSection noBorder">
        <ul>
          <li><a href="http://www.auburn.edu/academic/provost/undergrad_studies/" target="_blank">Office of Undergraduate Studies</a></li>
          <li><a href="http://www.auburn.edu/academic/provost/undergrad_studies/academicadvising.html" target="_blank">Academic Advisors</a></li>
          <li><a href="http://www.auburn.edu/academic/provost/undergrad_studies/majors/" target="_blank">Majors/Academic Departments</a></li>
        </ul>
      </div>
    </div>
    </div>  
    <div id="subfooter">
      Career Center | Auburn University | Auburn, Alabama 36849 | (334) 844-4744  | 
        <script type="text/javascript">emailE='auburn.edu'; emailE=('aucc' + '@' + emailE); document.write("<a href='mailto:" + emailE + "'>" + emailE + "</a>");</script>
      <br />
      <a href="https://fp.auburn.edu/ocm/auweb_survey">Website Feedback</a> | <a href="http://www.auburn.edu/privacy">Privacy</a> | <a href="http://www.auburn.edu/oit/it_policies/copyright_regulations.php">Copyright &copy; 
      <script type="text/javascript">date = new Date(); document.write(date.getFullYear());</script></a>
    </div>
    </div>
  </div>
  <!--#include virtual="/template/includes/gatc.html" --> 
</div>
</body>
</html>