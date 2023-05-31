<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!doctype html>
<html>
<head>
<title>Student Information Management System || Home Page</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--bootstrap-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!--coustom css-->
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<!--script-->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- js -->
<script src="js/bootstrap.js"></script>
<!-- /js -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--/fonts-->
<!--hover-girds-->
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom.js"></script>
<!--/hover-grids-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--/script-->
</head>
	<body>
<?php include_once('includes/header.php');?>
<!--<div class="banner">-->
  <div class="container">
    <style>
    .slider,.callbacks_container
    {
      margin:auto;
      height:auto;
      width:1000px;
      padding-top:0px;
      /*background-image: url('images/123.jpg');*/
    }
    body
    {
      overflow-x:hidden;
      overflow-y:hidden;
    }
    .testimonials
    {
      font-family:Impact;
      height:50px;
      width:2000px;
      padding:0px;
      background-image: url('images/notice3.jpg');
    }
    
    </style>
  <script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 500,
        pager: true,
      });
    });
  </script>
<div class="slider">
       <div class="callbacks_container">
        <ul class="rslides" id="slider">

         <li> 
        <h3 style="color:black;text-align:left">Student Information Management System</title>      
           <h1 style="color:black">Registered Students can Login Here</h2>  
           <br>/</br>        
          <div class="readmore">
          <a href="find-result.php">Student Login<i class="glyphicon glyphicon-menu-right"> </i></a>
          </div>
         </li>

 
        </ul>
      </div>
    </div>
</div> 
<!--     
<div class="welcome">
	<div class="container">
		<?php
$sql="SELECT * from tblpage where PageType='aboutus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
		<h2><?php  echo htmlentities($row->PageTitle);?></h2>
		<p><?php  echo ($row->PageDescription);?></p><?php $cnt=$cnt+1;}} ?>
	</div>
</div>
/welcome-->


<!--testmonials-->
<div class="testimonials">
	<div class="container">
			<div class="testimonial-nfo"> 
        
        <h3 style="text-align:center">Public Notices</h3>
         <marquee  style="height:200px;" direction ="up" onmouseover="this.stop();" onmouseout="this.start();" hspace="-60%;" > 
<?php
$sql="SELECT * from tblnotice";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>

 
		<a href="notice-details.php?nid=<?php echo htmlentities ($row->id);?>" target="_blank" style="color:#fff;">
          <?php  echo htmlentities($row->noticeTitle);?>(<?php  echo htmlentities($row->postingDate);?>)</a>
          <hr /><br />
				    
			<?php $cnt=$cnt+1;}} ?>
	</marquee></div>
	</div>
</div>
<!--\testmonials-->
<!--specfication-->

<!--/specfication-->

<!--/copy-rights-->
<div class="copyright">
    <!-- container -->
    <div class="container">
      <div class="copyright-left">
      <p>© <?php echo date('Y');?> Student Information Management System </p>
      </div>
      <div class="copyright-right">
        <ul>
          <li><a href="https://twitter.com/cvrcoenews?lang=en" class="twitter"> </a></li>
          <li><a href="https://www.facebook.com/cvr.coe/" class="twitter facebook"> </a></li>
          <li><a href="https://cvr.ac.in/home4/" class="twitter chrome"> </a></li>
          <li><a href="https://www.linkedin.com/school/cvrcoe/" class="twitter linkedin"> </a></li>
          <li><a href="https://www.instagram.com/cvr_community/?hl=en" class="twitter dribble"> </a></li>
        </ul>
      </div>
      <div class="clearfix"> </div>
      
    </div>
	</body>
</html>
