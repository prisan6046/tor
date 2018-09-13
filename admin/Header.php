<html xmlns="http://www.w3.org/1999/xhtml">
<?php
  session_start();
  if( $_SESSION["Username"] == "")
  {
    header("Location: ../admin/index.php");
    exit();
  }
?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Map</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="../assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="../assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="../assets/js/bootstrap.js"></script>
</head>
     <header>
        <div class="row">
                <div class="col-md-12">
                    <strong> ชื่อผู้ใช้งาน :</strong> <?php echo $_SESSION["Name"] ; ?>  
                    &nbsp;&nbsp;
                    <a href="../php/logout.php"><strong> Logout</strong></a> 
                </div>
	    </div>
     </header>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <div class="col-sm-2">
                    <img class="img-responsive" src="../assets/img/Logo_RMUTI.png"/ width="50"> 
		        </div>
		    	<div class="col-sm-10"><br><br><br>
			<h2>มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน</h2>
	    	        </div></br></br></br>
            </div>
            </div>
            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="Home.php">หน้าหลัก</a></li>
                            <li><a href="comment.php">Comment</a></li>        
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>