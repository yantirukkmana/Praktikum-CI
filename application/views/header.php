<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
	<title>Halloowwww selamat datangggg !</title>
</head> -->
<!DOCTYPE html>
<html>
<style>
/*@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300);
*/
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

<head>
	<title>Dapur Bunda's Blog</title>
	<script type="text/javascript">
		alert("Hai, Selamat Datang di DAPUR BUNDA's BLOG");
		// var nama = prompt("Siapa nama kamu?", "");
        // alert ("Hallo " + nama + " Selamat Datang di DAPUR BUNDA's BLOG!");
        // alert ("Semoga Harimu Menyenangkan");
	</script>
	<link rel="stylesheet" type="text/css" href="contohwebb.css">
</head>
<body>
	
	<header>
		<img class="gambar" src="nasi.png" width="100" height="100">
		<h1 class="judul">Dapur Bunda's Blog</h1>
		<p class="deskripsi">Tutorial dan informasi bebagai masakan Nusantara.</p>
	</header>
	
	<div class="wrap">

		<nav class="menu">
			<ul>
				<li>
					<a href=#>Home</a>
				</li>
				<li>
				 <div class="dropdown">
				  <button class="dropbtn">Tutorial</button>
				  <div class="dropdown-content">
				  <a href=#>Masakan Nusantara</a>
				  <a href=#>Aneka Resep</a>
				  </div>
				 </div>
				</li>
				<li>
					<a href=# >Kontak</a>
				</li>
				<li>
					<a href=# >Gallery</a>
				</li>
			</ul>
		</nav>
    
        <aside class="sidebar">
			<div class="widget">
				<h2>Tutorial</h2>
				<p>Selamat datang di www.dapurbunda.com, situs ini menyediakan tutorial memasak.</p>
			</div>
			<div class="widget">
				<h2>Ebook Gratis</h2>
				<p>Teman-teman bisa mendapatkan ebook tutorial gratis di sini <a target="_blank" href="https://id.tastemade.com/">id.Tastemade.com</a>.</p>
			</div>
			<div class="widget">
				<h2>Papan Iklan</h2>
				<video video width="230" height="160" autoplay loop="true"><source src="WhatsApp Video 2019-05-01 at 8.20.01 PM.mp4"></video>
				<img src="[gickr.com]_d53609ca-040b-b6e4-0179-af42741a9d92.gif" width="230" height="160">
			</div>
		</aside>