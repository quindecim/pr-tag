<?php
  require 'php/startsess.php';
  require 'php/connectdb.php';
  require 'restrict.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>iBugs - PR Request Form 1</title>

  <!-- Custom styles for our template -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="shortcut icon" href="assets/images/gt_favicon.png">
    <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <link rel="shortcut icon" href="assets/images/gt_favicon.png">
  <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
  <link rel="stylesheet" href="assets/css/main.css">

  <link rel="stylesheet" href="assets/css/subbuttons.css">
  <link rel="stylesheet" href="assets/css/labelbuttons.css">
  
  <script type= "text/javascript" src="assets/jspdf/dist/jspdf.debug.js" > </script>
  <script type= "text/javascript" src="assets/canvas/dist/html2canvas.js"></script>
  <script src="https://rawgithub.com/niklasvh/html2canvas/master/dist/html2canvas.min.js"></script>

  <script type="text/javascript">


  function genPDF(){
    html2canvas(document.getElementById("shet"),{
      onrendered: function(canvas){
      var img = canvas.toDataURL("image/png");
        var doc = new jsPDF('p', 'mm', [275, 230]);
        doc.addImage(img,'PNG', 10,10);
        doc.save('Purchase Request.pdf');
      }
    });      
  }

  </script>

</head>
  <body style="tab-interval:21pt;text-justify-trim:punctuation;">
    <!-- Fixed navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top headroom" >
  <div class="navbar-header">

  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
  <a class="navbar-brand" href="user_home.php"><img src="assets/images/logos.png" alt="Progressus HTML5 template"></img></a>
  </div>
    <?php require 'menu.php'; ?> 
  </div>
  </div>  

	<header id="head" class="secondary"></header> 
  <div class="container">      
  <div class="row">
				
    
  <!-- Sidebar -->
  <aside id="activerSide" class="col-md-4 sidebar sidebar-left">
  <div class="row widget">
  <div  class="col-xs-12" style="border-bottom:2px solid black;">
  <h4 class="labelbutton" id="activer"><a href="PR_Form1_Download.php">Purchase Request</a></a></h4>
  </div>
  </div>
  <div class="row widget">
  <div class="col-xs-12">
  <h4 class="labelbutton" id="activer"><a href="PR_Form2_Download.php">Obligation Request</a></h4>
  <p align="center"> <a class="subbutton" href = "javascript: genPDF()">Download as pdf</a>
  <form>
  <p align="center"><input  class="subbutton" type="button" onclick="confirmation()" value="Start Tracking"></p>
  </form>
  </p>
  </div>
  </div>

  </aside>

        <!-- /Sidebar -->

  <p>&nbsp;</p>
  <p><!-- /Sidebar -->
    <article class="col-md-8 maincontent">
    <header class="page-header"></header>
  </p>
        <?php require 'pr1_display.html'; ?>
  </article>
  <!-- /Article -->

  </div>
  <!-- end row -->
  </div>
  <!--Content-->

	 <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="assets/js/headroom.min.js"></script>
  <script src="assets/js/jQuery.headroom.min.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/jspdf/jspdf.js"></script>
  <script src="assets/jspdf/jquery-2.1.3.js"></script>
  <script src="assets/jspdf/pdfFromHTML.js"></script>

   <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootbox.min.js"></script>

</body>
</html>