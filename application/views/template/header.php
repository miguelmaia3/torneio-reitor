<?php $this->load->helper('url'); ?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
    	 
		
    	.logo_torneio {
    		float: left ; 
    		margin-left:20px;

    	}
    	.backimagem {
    		float: left ; 
    		width: 200px; 
    		height: 100px; 
    		background: -moz-linear-gradient(red, yellow); /* For Firefox 3.6 to 15 */
    		background: linear-gradient(white, #d9d9d9); /* Standard syntax (must be last) */
		}

    	.header_vermelho {
    		width: auto; 
    		height: 50px; 
    		background-color: #A52A2A;

    	}
    	.header_preto {
    		width: auto; 
    		height: 50px; 
    		background-color: #262626;
    	}

    	.logo_evora {
    		float: left;
    		background-color:#A52A2A;
    		margin-left:70px;
	    	}
	    
	    .logo_associacao {
	    	float: left;
	    	background-color:#A52A2A;
	    	margin-left:70px;
	    }

	    
	    }

	    .logo_insta {
	    	float:right;
	    	width:20px;
	    	height: 20px;
	    	margin-right:30px;
	    	margin-top: 10px;
	    	background-color:#A52A2A ;
	    	

	    }

	    .logo_fb {
	    	float:right;
	    	width:20px;
	    	height:20px;
	    	background-color: #A52A2A;
	    	margin-right:30px;
	    	margin-top: 10px;
	    }

    </style>

    <!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	
</head>
<body style="margin: 0px">

<div>
	<div class="backimagem">
	<div class="logo_torneio">

		<img class="logo_torneio" src="<?php echo base_url();?>assets/images/logo torneio.png">
	</div>
	</div>

	<div class="header_vermelho">
		<div class="logo_evora">
			<img class="logo_evora" src="<?php echo base_url();?>assets/images/uevora-logo.png">
		</div>

		

		<div class="logo_associacao">
			<img class="logo_associacao" src="<?php echo base_url();?>assets/images/aaue-logo.png">
		</div>

		
		<div class="logo_insta">
			<img class="logo_insta" src="<?php echo base_url();?>assets/images/instagram.svg">
		</div>

		<div class="logo_fb">
			<img class="logo_fb" src="<?php echo base_url();?>assets/images/facebook.svg">
		</div>
	</div>


	<div class="header_preto">
  		<div class="dropdown">
  		<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Calendario
    	<span class="caret"></span>
	  </button> 
	  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
	    <li><a href="#">Grupos</a></li>
	    <li><a href="#">Golos</a></li>
	    <li><a href="#">Gajas</a></li>
	  </ul>
	</div>
		</div>


			


	</div>
		
</div>