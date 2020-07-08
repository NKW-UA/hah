<!DOCTYPE html>
<html>
	<head>
	<title>Holla Test</title>
	<link rel="shortcut icon" href="icon.png" type="image/png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<link href="https://fonts.googleapis.com/css2?family=Concert+One&family=M+PLUS+1p&display=swap" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/css-font-awesome.min.css">
	<link rel="stylesheet" href="css/css-bootstrap.min.css">
	<link rel="stylesheet" href="css/css-bootstrap-colorpicker.min.css">
	<link rel="stylesheet" href="css/css-style.min.css">
	<link rel="stylesheet" href="css/background.css">
</head>
<body style=" width: auto;">
	<nav style="align-items: center; text-align: center; margin: 20px;"><img src="logo.svg" style="width: 120px;"></nav>	
		<div id="wrap">
			<div class="container-fluid">
				<div class="row">
                    <!-- left column -->
					<div class="col-md-2">
						<div class="leftLayout" id="leftLayoutContainer">
							<div class="btn-toolbar" style="left: 50%;">
								<div class="add_image btn-group" style="width: 90px;">
									<iframe id="ifr_upload" name="ifr_upload" height="0" width="0" frameborder="0"></iframe>
									<form id="frm_upload" action="" method="post" enctype="multipart/form-data" target="ifr_upload">
									<label class="btn btn-default btn-file" style="font-size: 35px">
										<i class="fa fa-picture-o"></i><input type="file" name="image_upload" accept=".gif,.jpg,.jpeg,.png,.ico"></label>
									</form>
								</div>
								<div class="add_text btn-group">
									<button type="button" class="btn btn-default" id="btn_addtext" style="font-size: 35px; width: 90px;"><i class="fa fa-font"></i></button>
								</div>
								<div class="add_album btn-group">
									<button type="button" class="btn btn-default" data-toggle="modal" data-target="#albumModal" style="font-size: 35px; width: 90px;"><i class="fa fa-th"></i></button>
								</div>
								<div class="add_album btn-group" style="margin-top: 0px;" onmouseover="document.getElementById('unsplash').src='images/unsplash-hover.png'" onmouseout="document.getElementById('unsplash').src='images/unsplash.png'">
									<button type="button" class="btn btn-default" data-toggle="modal" data-target="#albumModal1"><img id="unsplash" src="images/unsplash.png" style="margin-left: 10px;"><p>Select photo</p></button>
								</div>
							</div>
							<div class="message">
							</div>
						</div>
					</div>	
                    <!-- center column -->
					<div class="col-md-8">
						<div class="centerLayout" id="centerLayoutContainer">
							<div class="shirt"><img src="" id="img_shirt"></div>
							<div class="cvtoolbox">
								<div class="btn-group">
									<button type="button" class="btn btn-default" id="toolbox_centerh"><i class="fa fa-arrows-h fa-lg"></i></button>
									<button type="button" class="btn btn-default" id="toolbox_up"><i class="fa fa-arrow-up"></i></button>
									<button type="button" class="btn btn-default" id="toolbox_centerv"><i class="fa fa-arrows-v fa-lg"></i></button>
									<button type="button" class="btn btn-default" id="toolbox_flipx"><i class="fa fa-road fa-lg"></i></button>
									<button type="button" class="btn btn-default" id="toolbox_flipy"><i class="fa fa-road fa-lg fa-rotate-90"></i></button>
									<button type="button" class="btn btn-default" id="toolbox_remove"><i class="fa fa-trash-o fa-lg"></i></button>
								</div>
							</div>
							<div class="cvtoolbox cvtoolbox_2nd">
								<div class="btn-group">
									<button type="button" class="btn btn-default" id="toolbox_left"><i class="fa fa-arrow-left"></i></button>
									<button type="button" class="btn btn-default" id="toolbox_center"><i class="fa fa-arrows fa-lg"></i></button>
									<button type="button" class="btn btn-default" id="toolbox_right"><i class="fa fa-arrow-right"></i></button>
									<button type="button" class="btn btn-default nobtn">&nbsp;</button>
									<button type="button" class="btn btn-default nobtn">&nbsp;</button>
									<button type="button" class="btn btn-default nobtn">&nbsp;</button>
								</div>
							</div>
							<div class="cvtoolbox cvtoolbox_3rd">
								<div class="btn-group">
									<button type="button" class="btn btn-default" id="toolbox_totop"><i class="fa fa-step-backward fa-lg fa-rotate-90"></i></button>
									<button type="button" class="btn btn-default" id="toolbox_down"><i class="fa fa-arrow-down"></i></button>
									<button type="button" class="btn btn-default" id="toolbox_tobottom"><i class="fa fa-step-forward fa-lg fa-rotate-90"></i></button>
									<button type="button" class="btn btn-default nobtn">&nbsp;</button>
									<button type="button" class="btn btn-default nobtn">&nbsp;</button>
									<button type="button" class="btn btn-default nobtn">&nbsp;</button>
								</div>
							</div>
							<div class="cvtoolbox_info"><div><span></span></div></div>
							<div id="div_canvas_front" style="margin-top: 20px;">
								<canvas id="mainCanvas_front" width="260" height="350" class="shirt_canvas" style="
								background-image: url('images/Face/none.png'); background-size: 100% 100%"></canvas></div>
							<div id="div_canvas_back" style="margin-top: 155px;">
								<canvas id="mainCanvas_back" width="260" height="350" class="shirt_canvas"></canvas></div>
								<button onclick="exportDwnld()" id="btnExport" style="left: 38%; margin-top: 30px; position: absolute; padding: 10px; width: 200px; background-color: #FF9166;; color: #fff; margin-bottom: 50px;">EXPORT</button>
						</div>
					</div>
					<button id="myBtn" class="myBtn-face" style="height: 60px; padding-top: 10px; width: 200px; background-color: blue; color: #fff; border: none; margin-top: 20px;"><p>Background</p></button>
							<div id="myModal" class="modal-back">

								<!-- Modal content -->
								<div class="modal-content-back">
									<div class="modal-header-back">
										<span></span>
										<p class="pio">Background</p>
										<p class="pio-1">4:3</p>
										<button type="button" id="close" class="close"></button>
									</div>
									<div class="content-back">
										<button type="button" class="good" style="background-image: url(images/Preview/none.png); " onclick="document.getElementById('mainCanvas_front').style.backgroundImage='url(images/Face/none.png)', document.getElementById('mainCanvas_front').style.backgroundSize='100% 100%',document.getElementById('myModal').style.display='none'"></button>
										<button type="button" class="good" style="background-image: url(images/Preview/1.png); " onclick="document.getElementById('mainCanvas_front').style.backgroundImage='url(images/Face/1.png)', document.getElementById('mainCanvas_front').style.backgroundSize='100% 100%',document.getElementById('myModal').style.display='none'"></button>
										<button type="button" class="good" style="background-image: url(images/Preview/3.png); " onclick="document.getElementById('mainCanvas_front').style.backgroundImage='url(images/Face/2.png)', document.getElementById('mainCanvas_front').style.backgroundSize='100% 100%',document.getElementById('myModal').style.display='none'"></button>
										<button type="button" class="good" style="background-image: url(images/Preview/7.png); " onclick="document.getElementById('mainCanvas_front').style.backgroundImage='url(images/Face/3.png)', document.getElementById('mainCanvas_front').style.backgroundSize='100% 100%',document.getElementById('myModal').style.display='none'"></button>
										<button type="button" class="good" style="background-image: url(images/Preview/9.png); " onclick="document.getElementById('mainCanvas_front').style.backgroundImage='url(images/Face/4.png)', document.getElementById('mainCanvas_front').style.backgroundSize='100% 100%',document.getElementById('myModal').style.display='none'"></button>
									</div>
								</div>
							  
							</div>	
                    <!-- right column -->
					<div class="col-md-2">
						<div class="rightLayout" id="rightLayoutContainer">
							<div class="texttoolbox">
							</div>
							<div class="message">
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
		
		<!-- Preview Modal -->
		<div id="reviewModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">&nbsp;</h4>
			  </div>
			  <div class="modal-body">
				<div class="shirt"><img src="images/frame.png"></div>
				<div class="shirtdesign" style="margin-top: 0px;"><img src=""></div>
			  </div>
			</div>
		  </div>
		</div>
        
		<!-- Album Modal -->
		<div id="albumModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Album</h4>
			  </div>
			  <div class="modal-body">
                <a href="#" class="album-item"><div style="background-image: url(images/album/image1.png)"><img bgsrc="images/album/image1.png" src="images/images-blank.png"></div></a>
                <a href="#" class="album-item"><div style="background-image: url(images/album/image2.png)"><img bgsrc="images/album/image2.png" src="images/images-blank.png"></div></a>
                <a href="#" class="album-item"><div style="background-image: url(images/album/image3.png)"><img bgsrc="images/album/image3.png" src="images/images-blank.png"></div></a>
                <a href="#" class="album-item"><div style="background-image: url(images/album/image4.svg)"><img bgsrc="images/album/image4.svg" src="images/images-blank.png"></div></a>
                <a href="#" class="album-item"><div style="background-image: url(images/album/image5.png)"><img bgsrc="images/album/image5.png" src="images/images-blank.png"></div></a>
                <a href="#" class="album-item"><div style="background-image: url(images/album/image6.png)"><img bgsrc="images/album/image6.png" src="images/images-blank.png"></div></a>
                <a href="#" class="album-item"><div style="background-image: url(images/album/image7.png)"><img bgsrc="images/album/image7.png" src="images/images-blank.png"></div></a>
                <a href="#" class="album-item"><div style="background-image: url(images/album/image8.png)"><img bgsrc="images/album/image8.png" src="images/images-blank.png"></div></a>
                <a href="#" class="album-item"><div style="background-image: url(images/album/image9.png)"><img bgsrc="images/album/image9.png" src="images/images-blank.png"></div></a>
			  </div>
			</div>
		  </div>
		</div>
		<!-- Album Modal 1 -->
		<div id="albumModal1" class="modal">
			<div class="modal-dialog">
			  <!-- Modal content 1-->
			  <div class="modal-content">
				<div class="modal-header">
					<span></span>
					<p>Select Photo from Unsplash</p>
					<button type="button" data-dismiss="modal" class="close"></button>
				</div>
				<div class="unsp">
					<div class="searchBar">
						<input type="text" id="search" placeholder="Search Best Photos">
						<button id="searchBtn" onclick="SearchPhotos()">Search</button>
					</div>
					<div class="modal-body" id="result">
						<?php include('unsplash/get_start.php'); ?>
						<?php include('unsplash/downloader.php'); ?>
					</div>
				</div>
			  </div>
			</div>
		  </div>
		
		<script type="text/javascript" src="js/3041-js-jquery.min.js"></script>
		<script>
			function SearchPhotos() {
				let clientId = "T6x5-fhZqktr7FA7Dxkq9Nb6_-ASvPYrIuOSXwvnDrY";
				let query = document.getElementById("search").value;
				let url = "https://api.unsplash.com/search/photos/?client_id="+clientId+"&query="+query+"?&per_page=30";
				
				fetch(url)
				.then(function (data) {
					return data.json();
				})
				.then(function(data){
					//console.log(data);

					for(i in data.results){
						origUrl = data.results[i].urls.regular;
						$.ajax({
							type: "POST",
							url: "unsplash/downloader.php?onlyUrl=1",
							data: "datas=" + origUrl,
							success: function(response) {
								if(response.isOk !== false)
								{	
									curUrlArr = window.location.href.split('/');
									curUrlArr[curUrlArr.length-1] = '';
									curPath = curUrlArr.join('/');

									localeUrl = curPath + 'unsplash/' + response;
									
									//console.log(localeUrl);
									
									result = '<a href="#" class="album-item" id="unsplash-img"><div style="background-image: url('+origUrl+'); background-size: cover; height: 100%" onclick="download(\''+origUrl+'\');"><img bgsrc="'+localeUrl+'" src="images/images-blank.png"></div></a>';
			
									$("#result").append(result);
								}
							},
							async:   false
						});
					}
					

				});
			}
			
			function download(geturl){
				//console.log(geturl);
				
				$.ajax({
					type: "POST",
					url: "unsplash/downloader.php",
					data: "datas="+geturl,
					success: function(response) {
						if(response.isOk !== false)
						{	
							document.getElementById('albumModal1').style.display='none';
							document.getElementById('backclose').style.display='none';
							document.querySelector('body').classList.remove('modal-open');
						}
					},
					async:   false
				});
			}
			

			
			var input = document.getElementById("search");

			input.addEventListener("keyup", function(event) {
			if (event.keyCode === 13) {
			event.preventDefault();
			document.getElementById("searchBtn").click();
			}
			});
			$( "#searchBtn" ).click(function() {
  				$( "#result" ).empty();
			});
		</script>
		<script type="text/javascript" src="js/background.js"></script>
		<script type="text/javascript" src="js/3157-js-bootstrap.min.js"></script><script type="text/javascript" src="js/7915-js-placeholders.min.js"></script><script type="text/javascript" src="js/js-bootstrap-colorpicker.min.js"></script><script type="text/javascript" src="js/6834-js-fabric.min.js"></script><script type="text/javascript" src="js/1746-js-main.min.js"></script><script type="text/javascript" src="js/download.js"></script></body></html>