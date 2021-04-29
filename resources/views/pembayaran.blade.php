<!DOCTYPE html>
<head>
	
	<title>Pembayaran</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">
</head>
<body class="templatemo-bg-image-2" style="background-color: rgb(70, 90, 40);
	background-image: url({{asset('image')}}/pembayaran.jpg);">
	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-contact-form-1" role="form" action="#" method="post">
				<div class="form-group">
					<div class="col-md-12">
						<h1 class="margin-bottom-15">Form Pembayaran</h1>
						<p>Halaman ini digunakan untuk memvalidasi <a href="#">Pembayaran</a> yang anda lakukan</p>
					</div>
				</div>				
		        <div class="form-group">
		          <div class="col-md-12">		          	
		            <label for="name" class="control-label">Name *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-user"></i>
		            	<input type="text" class="form-control" id="name" placeholder="">
		            </div>		            		            		            
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		            <label for="address" class="control-label">Alamat</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-info-circle"></i>
		            	<input type="text" class="form-control" id="text" placeholder="">
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		            <label for="website" class="control-label">Total</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-money"></i>
		            	<input type="text" class="form-control" id="website" placeholder="">
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		            <label for="subject" class="control-label">Bukti Pembayaran</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-info-circle"></i>
		            	<input type="file" class="form-control" name="file_gambar"id="subject">
		            	
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		            <label for="message" class="control-label">Message *</label>
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-pencil-square-o"></i>
		            	<textarea rows="8" cols="50" class="form-control" id="message" placeholder=""></textarea>
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">		            
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		            <input type="submit" value="Send" class="btn btn-success pull-right">
		          </div>
		        </div>		    	
		      </form>		      
		</div>
	</div>
</body>
</html>