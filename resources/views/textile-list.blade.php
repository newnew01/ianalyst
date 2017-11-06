<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>ผ้าย้อมทองกวาว</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="/assets/css/main.css" />
		<link href="https://fonts.googleapis.com/css?family=Athiti:500" rel="stylesheet">
		<!--[if lte IE 9]><link rel="stylesheet" href="/assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="/assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="/">งานวิจัยผ้าย้อมทองกวาว</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="/">หน้าหลัก</a></li>
							<li>
								<a href="#">เนื้อหา</a>
								<ul>
									<li><a href="/about-research">งานวิจัยผ้าย้อมทองกวาว</a></li>
									<li><a href="/about-tongkwaw">ต้นทองกวาว</a></li>
									<li><a href="/about-cmu">มหาวิทยาลัยเชียงใหม่</a></li>
								</ul>
							</li>

							<li><a href="/textile">ผ้าย้อมดอกทองกวาว</a></li>
							
						</ul>
					</nav>
				</header>

			<section id="four" class="wrapper style1 special fade-up">
				<header class="major">
					<h2>ผ้าย้อมทองกวาว</h2>
					<p>Iaculis ac volutpat vis non enim gravida nisi faucibus posuere arcu consequat</p>
				</header>
				<div class="box alt">
					<div class="row 50% uniform">
						@foreach($textiles as $textile)
							<div class="4u  6u(xsmall)">{{$textile->name}}<a href="/textile/{{$textile->id}}"><span class="image fit"><img src="images/pic04.jpg" alt=""></span></a></div>
						@endforeach

					</div>
				</div>
				<footer class="major">
					<ul class="actions">
						<li><a href="/textile" class="button"><< ก่อนหน้า</a></li>
						<li><a href="/textile" class="button">ถัดไป >></a></li>
					</ul>
				</footer>
			</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Chiang Mai University. All rights reserved.</li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="/assets/js/jquery.min.js"></script>
			<script src="/assets/js/jquery.scrolly.min.js"></script>
			<script src="/assets/js/jquery.dropotron.min.js"></script>
			<script src="/assets/js/jquery.scrollex.min.js"></script>
			<script src="/assets/js/skel.min.js"></script>
			<script src="/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="/assets/js/main.js"></script>

	</body>
</html>