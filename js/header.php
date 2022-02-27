<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title></title>

		<?php
				wp_head();
		?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" ></link>

		<style>
				body{
					/*background-color:#0C1730;*/
					/*background-color:#040978;*/
  					background-image: radial-gradient(circle, #040978, #780466, blue);
					height:2500px;
					font-family:serif;
					color:#040978;
				}
				
				/*MY STYLE*/
				.border-center{
					display:flex;
					justify-content:center;
				}
				
				.my-border-blue{
						border-color:#0C1730!important
				}
				
				.mybtn{
						/*background-color:#4018BC;*/
						background-color:#040978;
						font-weight:bold;
						color:grey;
				}
				
				/*HEADER*/
				.header-container{
					/*background-color:blue;*/
					/*background-color:#040978;*/
					background-color:#4018BC;
					/*max-height:150px;
  					background-image: radial-gradient(circle,#4018BC,#3B00ED,blue);
					height:2500px;
					font-family:serif;
					color:#040978;*/
				}
				
				.header{
					width:90%;
					color:#DFDFDF;
				}
				
				/*MENU*/
				#menu{
					display:none;
				}
				
				#closemenu{
					display:none;
				}
				
				
				.contact-border{
					border:4x #0C1730;
				}
				
				/*MAIN*/
				.main{
					width:80%;
				}
				
				
				.main2-container{
					width:92%;
					background-color:#DFDFDF;
					/*background-color:white;*/
				}
				
				.main2{
					width:80%;
				}
				
				
				/*PRICING*/
				.pricing{
					width:95%;
				}
				
				.pricing-list{
					height:900px;
					background-color:#780466;
				}
				
								/*PROJECT*/
			.network{
				color:red;
				font-family:serif;
			}
			
			.project-pix{
				width:100%;
				height:500px;
			}
		</style>


</head>
<body>

			<!--HEADER-->
			<div class="header-container w3-top w3-center border-center">
			
					<div class="header w3-xxjumbo w3-padding">
							<a href="<?php echo home_url(); ?>" style="text-decoration:none;"><b><i>Sir_James</i></b></a>
							
							<!--MENU-->
							<i class="fa fa-angle-down" id="openmenu" href="javascript:void(0);" onclick="openbtn()"></i>
							<i class="fa fa-angle-up" id="closemenu"href="javascript:void(0);" onclick="closebtn()"></i>
							<div class="menu-list" id="menu">
							
										<a href="#about"><i><b class="w3-xxxlarge">ABOUT</b></i></a>
										<div class="w3-border w3-border-grey w3-margin"> </div>
										
										<a href="#projects"><i><b class="w3-xxxlarge">PROJECTS</b></i></a>
										<div class="w3-border w3-border-grey w3-margin"> </div>
										
										<a href="#pricing"><i><b class="w3-xxxlarge">PRICING</b></i></a>
										<div class="w3-border w3-border-grey w3-margin"> </div>
										
										<a href="#contact"><i><b class="w3-xxxlarge">CONTACT</b></i></a>
										<div class="w3-border w3-border-grey w3-margin"> </div>
										
										<a href="#"><i><b class="w3-xxxlarge">MY THEMES</b></i></a>
										<div class="w3-border w3-border-grey w3-margin"> </div>
										
										<a href="#"><i><b class="w3-xxxlarge">MY PLUGINS</b></i></a>
										
							</div>
							
							<div class="w3-border w3-border-grey w3-margin"> </div>
					</div>
					<!--MENU-->
					<!--<div class="subheader">
								<a href=""><i class="fa fa-bars">menu</i></a>
					</div>-->
					
			</div>
			
			
			
			
			
			

