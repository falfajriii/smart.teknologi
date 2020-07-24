<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title>Smart Teknologi Komputer Indonesia</title>
	<link href="images/up.jpg" rel="shortcut icon">
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Conceit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/contact.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/aos.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript">
      $ (window).on('load', function(){
        $('.preloader').addClass('complete')
      })
    </script>
</head>

<body>
	<div class="preloader">
    <div class="loading">
      <div class="obj"></div>
      <div class="obj"></div>
      <div class="obj"></div>
      <div class="obj"></div>
      <div class="obj"></div>
      <div class="obj"></div>
      <div class="obj"></div>
      <div class="obj"></div>
    </div>
    </div>
<div class="top_header" id="home">
	<!-- Fixed navbar -->
	<nav class="navbar navbar-default navbar-fixed-top" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="1000">
		<div class="nav_top_fx_w3ls_agileinfo">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
				    aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
				<div class="logo-w3layouts-agileits">
						<h1><a class="navbar-brand" href="index.php">Smart Teknologi<span class="desc">Komputer Indonesia</span></a></h1>
				</div>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<div class="nav_right_top">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a class="request" href="contact.php">Kontak</a></li>
					</ul>
					<ul class="nav navbar-nav">
						<li><a href="index.php">Beranda</a></li>
						<li><a href="about.php">Tentang</a></li>
						<li><a href="portfolio.php">Portofolio</a></li>
					</ul>
				</div>
			</div>
			<!--/.nav-collapse -->
		</div>
	</nav>
	</div>
	<!--/banner_info-->
	<div class="banner_inner_con">
	</div>
	<!--//banner_info-->
	<!-- /inner_content -->
<div class="banner_bottom">
		<div class="container">
			
			<div class="mail_form">
				<h3 class="tittle-w3ls">Pilih Layanan</h3>
				<div class="inner_sec_info_wthree_agile">
					<form action="proseskontak.php" method="POST">
						<span class="input input--chisato">
						<input class="input__field input__field--chisato" name="nama" type="text" id="nama" placeholder="Name" required="" />
						<label class="input__label input__label--chisato" for="nama">
							<span class="input__label-content input__label-content--chisato" data-content="Name"></span>
						</label>
						</span>
						<span class="input input--chisato">
						<input class="input__field input__field--chisato" name="email" type="email" id="email" placeholder="Email" required="" />
						<label class="input__label input__label--chisato" for="email">
							<span class="input__label-content input__label-content--chisato" data-content="Email"></span>
						</label>
						</span>
						<span class="input input--chisato">
						<div class="custom-select" id="layanan">
						  <select name="layanan" id="layanan">
						    <option value="Pilih Layanan">Pilih Layanan</option>
						    <option value="Service Hardware">Service Hardware</option>
						    <option value="Desain Gambar">Desain Gambar</option>
						    <option value="Instalasi Jaringan">Instalasi Jaringan</option>
						    <option value="Pasang CCTV">Pasang CCTV</option>
						    <option value="Mesin Absensi">Mesin Absensi</option>
						    <option value="Mesin Doorlock">Mesin Doorlock</option>
						    <option value="Rakit Komputer">Rakit Komputer</option>
						    <option value="Website">Website</option>
						  </select>
						</div>
						</span>
						<textarea name="deskripsi" id="deskripsi" placeholder="Your comment here..." required=""></textarea>
						<input type="submit" value="Submit" name="submit">
					</form>

				</div>
			</div>
			<div class="inner_sec_info_wthree_agile">
           	<div class="col-md-8 map">
           			<iframe data-aos="fade-right" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8319762537135!2d106.86874451412154!3d-6.2858051954505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c1da19e253b5%3A0x27ee7c0610687c1!2sJl.+Raya+Bogor%2C+Kramatjati%2C+Kota+Jakarta+Timur%2C+Daerah+Khusus+Ibukota+Jakarta!5e0!3m2!1sid!2sid!4v1542736931365" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-md-4 contact_grids_info">
					<div class="contact_grid" data-aos="flip-left">
						<div class="contact_grid_right">
							<h4> OFFICE 1</h4>
							<p>Jl. Raya Bogor</p>
							<p>Kramat Jati - Jakarta Timur</p>
						</div>
					</div>
					<div class="contact_grid" data-aos="flip-left" data-aos-duration="5000">
						<div class="contact_grid_right">
							<h4> OFFICE 2</h4>
							<p>Jl. Cilincing Raya </p>
							<p>Bekasi - Prop. Jawa Barat.</p>
						</div>
					</div>
					<div class="contact_grid" data-aos="flip-left" data-aos-duration="4000">
						<div class="contact_grid_right">
							<h4>Meeting Point</h4><br>
							<p>Pertemuan yang dilakukan dapat dimana saja, sesuai kondisi.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<!-- footer -->
	<div class="footer">
		<div class="footer_inner_info_w3ls_agileits">
			<div class="col-md-4 footer-left">
				<h2><a href="index.php"><i class="fa fa-clone" aria-hidden="true"></i> ST-Komputer Indonesia </a></h2>
				<p>Adalah Singkatan dari Smart Teknologi Komputer, didirikan baru-baru ini tahun 2018 sebagai penyedia jasa layanan untuk kebutuhan IT Anda.</p>
				<ul class="social-nav model-3d-0 footer-social social two">
					<li>
						<a href="https://www.facebook.com/mysmart.teknologi?_rdc=2&_rdr" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="twitter">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-8 footer-right">
				<div class="sign-grds">
					<div class="col-md-5 sign-gd flickr-post">
						<h4>Portofolio <span>Kami</span></h4>
						<ul>
							<li><a><img src="images/p1.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a><img src="images/p2.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a><img src="images/p3.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a><img src="images/p4.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a><img src="images/p5.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a><img src="images/p6.jpg" alt=" " class="img-responsive" /></a></li>
						</ul>
					</div>
					<div class="col-md-7 sign-gd-two">
						<h4>Informasi<span> Kontak</span></h4>
						<div class="address">
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Nomor Telepon</h6>
									<p>0856 9260 8060 (Fajar) <br>	0897 9309 222 (Amar) </p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Email </h6>
									<p>Email :<a href="info@jasacomputer.com">info@jasacomputer.com</a></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Lokasi</h6>
									<p>Jl. Raya Bogor , Kramat Jati - Jakarta Timur 
									</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
			<p class="copy-right">&copy 2018 ST-Komputer Indonesia. All rights reserved | Design by <a href="">Alfajri</a></p>
		</div>
	</div>
	</div>
	<!-- //footer -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	
	<!--header-->
		<script>
		  	$(window).scroll(function() {    

		    var scroll = $(window).scrollTop();

		    if (scroll >= 100) {
		        $(".navbar-default").addClass("ubah");
		    } else {
		        $(".navbar-default").removeClass("ubah")    
		    }
			});
		</script>
	<!--Dropdown-->
	<script>
	var x, i, j, selElmnt, a, b, c;
	/*look for any elements with the class "custom-select":*/
	x = document.getElementsByClassName("custom-select");
	for (i = 0; i < x.length; i++) {
	  selElmnt = x[i].getElementsByTagName("select")[0];
	  /*for each element, create a new DIV that will act as the selected item:*/
	  a = document.createElement("DIV");
	  a.setAttribute("class", "select-selected");
	  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
	  x[i].appendChild(a);
	  /*for each element, create a new DIV that will contain the option list:*/
	  b = document.createElement("DIV");
	  b.setAttribute("class", "select-items select-hide");
	  for (j = 0; j < selElmnt.length; j++) {
	    /*for each option in the original select element,
	    create a new DIV that will act as an option item:*/
	    c = document.createElement("DIV");
	    c.innerHTML = selElmnt.options[j].innerHTML;
	    c.addEventListener("click", function(e) {
	        /*when an item is clicked, update the original select box,
	        and the selected item:*/
	        var y, i, k, s, h;
	        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
	        h = this.parentNode.previousSibling;
	        for (i = 0; i < s.length; i++) {
	          if (s.options[i].innerHTML == this.innerHTML) {
	            s.selectedIndex = i;
	            h.innerHTML = this.innerHTML;
	            y = this.parentNode.getElementsByClassName("same-as-selected");
	            for (k = 0; k < y.length; k++) {
	              y[k].removeAttribute("class");
	            }
	            this.setAttribute("class", "same-as-selected");
	            break;
	          }
	        }
	        h.click();
	    });
	    b.appendChild(c);
	  }
	  x[i].appendChild(b);
	  a.addEventListener("click", function(e) {
	      /*when the select box is clicked, close any other select boxes,
	      and open/close the current select box:*/
	      e.stopPropagation();
	      closeAllSelect(this);
	      this.nextSibling.classList.toggle("select-hide");
	      this.classList.toggle("select-arrow-active");
	    });
	}
	function closeAllSelect(elmnt) {
	  /*a function that will close all select boxes in the document,
	  except the current select box:*/
	  var x, y, i, arrNo = [];
	  x = document.getElementsByClassName("select-items");
	  y = document.getElementsByClassName("select-selected");
	  for (i = 0; i < y.length; i++) {
	    if (elmnt == y[i]) {
	      arrNo.push(i)
	    } else {
	      y[i].classList.remove("select-arrow-active");
	    }
	  }
	  for (i = 0; i < x.length; i++) {
	    if (arrNo.indexOf(i)) {
	      x[i].classList.add("select-hide");
	    }
	  }
	}
	/*if the user clicks anywhere outside the select box,
	then close all select boxes:*/
	document.addEventListener("click", closeAllSelect);
	</script>

	<!--Aos Scroll-->
	<script src="js/aos.js"></script>
	<script>
	  AOS.init();
	</script>
</body>

</html>

