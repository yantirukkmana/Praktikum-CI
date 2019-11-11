<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Halloowwww selamat datangggg !</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	 </style> 
</head>
<body>
	<table border='1' id='tabeltoko' class='table table-striped table-'>
	<?php 
	foreach ($data_kirim as $data){
	?>

	<tr>
		<td><?= $data->kode?></td>
		<td><?= $data->nama_toko?></td>
	</tr>

	<?php
	} ?>
	</table>

<div id="container">
	<h1>Welcomeeeeeeeeee</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div> 

</body>
</html> -->

<style>
/* @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300); */

body {
	background: #eee;
	margin:0;
	font-family: 'Open Sans', sans-serif;
}

hr {
	border:0;
	background:#dedede;
	height:1px;
}		

header{
	text-align: center;
	color: #232323;
}

header .judul{
	font-size: 17pt;
}

header .deskripsi{
	font-size: 11pt;
}

.gambar {
	position: absolute;
    left: 430px;
    top: 0px;
    z-index: -1;
}

.wrap {
	width: 950px;
	margin:25px auto;
}

nav.menu ul {
	color:#fff;
	list-style: none;
	float:left;
	padding:0;
	width: 650px;
	margin:0 0 0;
	background:	#FFCBA4;
	-webkit-box-shadow: 1px 1px 1px 0px rgba(204,204,204,0.55);
	-moz-box-shadow: 1px 1px 1px 0px rgba(204,204,204,0.55);
	box-shadow: 1px 1px 1px 0px rgba(204,204,204,0.55);
}

nav.menu ul li {
	margin:0;
	float:left;
}

nav.menu ul a {
	padding:25px;
	display:block;
	font-weight:600;
	font-size: 16px;
	color:#fff;
	text-transform: uppercase;
	transition: all 0.5s ease;
	text-decoration: none;
}

nav.menu ul a:hover {
	text-decoration: underline;
	background:#EE9A4D;
}

.dropbtn {
  background-color: #FFCBA4;
  color: #fff;
  padding: 25px;
  display:block;
  font-weight:600;
  font-size: 16px;
  text-transform: uppercase;
  border: none;
  transition: all 0.5s ease;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #FFCBA4;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0);
}

.dropdown-content a {
  padding: 12px 16px;
  display: block;
}

.dropdown-content a:hover {
  background-color: #FFCBA4;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;

}

.dropdown:hover .dropbtn {
  background-color: #EE9A4D;
  text-decoration: underline;
}

.sidebar {
	float:right;
	width:275px;
}

.sidebar .widget {
	padding:25px;
	margin:0 0 25px;
	background:#fff;
	border-bottom: 2px solid #fff;
	transition: all 0.5s ease;
}

.sidebar .widget:hover {
	border-bottom: 2px solid #F88158;
}

.sidebar .widget h2 {
	padding:0;
	margin:0 0 15px;
	color:#F88158;
	font-size: 18px;
	font-weight:800;
	text-transform: uppercase;
}

.sidebar .widget p {
	font-size: 14px;
}

.sidebar .widget p:last-child {
	margin:0;
}

.blog {
	float:left;
}

.conteudo {
	width:600px;
	padding:25px;
	margin:25px auto;
	background: #fff;
	border:1px solid #dedede;
	-webkit-box-shadow: 1px 1px 1px 0px rgba(204,204,204,0.35);
	-moz-box-shadow: 1px 1px 1px 0px rgba(204,204,204,0.35);
	box-shadow: 1px 1px 1px 0px rgba(204,204,204,0.35);
}


.conteudo img {
	min-width: 650px;
	margin:0 0 25px -25px;
	max-width: 650px;
}
.conteudo video {

	min-width: 650px;
	margin:0 0 25px -25px;
	max-width: 650px;
}

.conteudo h1 {
	padding:0;
	margin:0 0 15px;
	font-weight: normal;
	color: #666;
	font-family: Georgia;
}

.conteudo p:last-child {
	margin: 0;
	text-align: justify;
}

.conteudo .continue-lendo {
	color:#000;
	transition: all 0.5s ease;
	text-decoration: none;
	font-weight: 700; 
}

.conteudo .continue-lendo:hover {
	margin-left:10px;
}

.post-info {
	float: right;
	font-size: 12px;
	margin: -10px 0 15px;
	text-transform: uppercase;
}

.form input[type="submit"]:hover {
    background: #FFCBA4;
    color:black;
}

.form input[type="reset"]:hover {
    background: #FFCBA4;
    color:black;
}

.footer {
	width:600px;
	padding:25px;
	margin:25px auto;
	background: #FFCBA4;
	border:1px solid #dedede;
	-webkit-box-shadow: 1px 1px 1px 0px rgba(204,204,204,0.35);
	-moz-box-shadow: 1px 1px 1px 0px rgba(204,204,204,0.35);
	box-shadow: 1px 1px 1px 0px rgba(204,204,204,0.35);
}


@media screen and (max-width: 960px) {

	.header {
		position:inherit;
	}

	.wrap {
		width: 90%;
		margin:25px auto;
	}
	.sidebar {
		width:100%;
		margin:25px 0 0;
		float:right;
	}

	.sidebar .widget {
		padding:5%;
	}

	nav.menu ul {
		width: 100%;
	}

	nav.menu ul {
		float:inherit;
	}

	nav.menu ul li {
		float:inherit;
		margin:0;
	}

	nav.menu ul a {
		padding:15px;
		font-size: 16px;
		border-top:1px solid #1abf9f;
		border-bottom:1px solid #16a085;
	}

	.blog {
		width:90%;
	}

	.conteudo {
		float:inherit;
		margin:0 auto 25px;
		width:101%;
		border:1px solid #dedede;
		padding:5%;  
		background: #fff;
	}

	.conteudo img {
		max-width: 110%;
		margin:0 0 25px -5%;
		min-width: 110%;
	}

	.conteudo .continue-lendo:hover {
		margin-left:0;
	}
}

@media screen and (max-width: 460px) {

	nav.menu ul a {
		padding:15px;
		font-size: 14px;
	}

	.sidebar {
		display:none
	}
	.post-info {
		display:none;
	}

	.conteudo {
		margin:25px auto;
	}

	.conteudo img {
		margin:-5% 0 25px -5%;
	}

}
</style> 	
<div class="blog">
			<div class="conteudo">
				<div class="post-info">
					Di Posting Oleh <b>unknown</b>
				</div>
				<img src="soto.png">
				<h1> Soto Lamongan </h1>
				<hr>
				<p>
				<table border='1' id='tabeltoko' class='table table-striped table-'>
	<?php 
	foreach ($data_kirim as $data){
	?>

	<tr>
		<td><?= $data->kode?></td>
		<td><?= $data->nama_toko?></td>
	</tr>

	<?php
	} ?>
	</table>
					<!-- <b>Soto Lamongan</b> adalah sajian makanan soto ayam yang khas dari Lamongan, Jawa Timur. Soto yang satu ini sangat khas dan berbeda dengan soto lainnya, baik dari segi penyajian maupun rasanya. Soto Lamongan merupakan salah satu makanan tradisional dari Lamongan yang sangat terkenal kelezatannya. Tidak hanya di daerahnya sendiri, namun juga merupakan masakan yang sangat terkenal di indonesia. -->
				</p>				
				<a href=# class="continue-lendo1">Selengkapnya →</a>
			</div>
			<div class="conteudo">
				<div class="post-info">
					Di Posting Oleh <b>unknown</b>
				</div>
				<img src="rawon.jpg">
				<h1> Rawon </h1>
				<hr>
				<p>
					<b>Rawon</b> adalah makanan tradisional dari Jawa Timur berupa sup daging dengan kuah yang berwarna hitam. Warna hitam dari kuah Rawon ini terbuat dari kluwak dan dimasak dengan bumbu khusus sehingga menghasilkan aroma dan rasa yang khas sehingga sangat menggugah selera. Rawon ini merupakan salah satu makanan tradisional yang terkenal dan menjadi salah satu icon kuliner di Jawa Timur.
				</p>				
				<a href=# class="continue-lendo">Selengkapnya →</a>
			</div>
</body>


