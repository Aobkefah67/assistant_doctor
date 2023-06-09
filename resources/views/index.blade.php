<!doctype html>
<html lang="ar">

<head>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Site keywords here">
	<meta name="description" content="">
	<meta name='copyright' content=''>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title -->
	<title>المساعد الطبي</title>
	<!-- Favicon -->
	<link rel="icon" href="./img/logo.png">
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/icofont.css">
	<link rel="stylesheet" href="./css/font-awesome.min.css">
	<!-- Medipro CSS -->
	<link rel="stylesheet" href="./css/style.css">
</head>

<body>
	<!-- Preloader -->
	<div class="preloader">
		<div class="loader">
			<div class="loader-outter"></div>
			<div class="loader-inner"></div>
			<div class="indicator">
				<svg width="16px" height="12px">
					<polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
					<polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
				</svg>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	<!-- Header Area -->
	<header class="header">
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="logo d-flex align-items-center justify-content-start">
				<div class="logo-img">
					<img src="./img/logo.png" alt="">
				</div>
				<p class="mb-0">
					المساعد الطبي
				</p>
			</div>
			<div class="main-menu">
				<ul class="nav menu">
					<li><a href="{{route('login')}}"><i class="icofont-ui-user ml-3"></i> تسجيل دخول</a>
					</li>
				</ul>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!-- End Header Area -->
	<!-- page content -->
	<div class="main-page">
		<div class="header-page">
			<div class="title">
				<p>المساعد الطبي</p>
			</div>
			<div class="img">
			</div>
		</div>
		<div class="articels section">
			<div class="section-header">
				<p>محتوى طبي موثوق من أطباء </p>
				<h3>مقالات طبية</h3>
			</div>
			<div class="articals-cards mt-5">
				<div class="row">
					<div class="col-lg-4">
						<div class="artical-card">
							<div class="img">
								<img src="./img/img1.jpg" alt="">
							</div>
							<div class="artical-body">
								<a href="#">
									<h5>
										أمراض اللثة
									</h5>
								</a>
							</div>
							<div class="artical-footer">
								<div class="time d-flex align-items-center justify-content-start">
									<i class="icofont-calendar"></i>
									<span>
										20 أغسطس 2022
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="artical-card">
							<div class="img">
								<img src="./img/img2.jpg" alt="">
							</div>
							<div class="artical-body">
								<a href="#">
									<h5>
										حبوب الوجه </h5>
								</a>
							</div>
							<div class="artical-footer">
								<div class="time d-flex align-items-center justify-content-start">
									<i class="icofont-calendar"></i>
									<span>
										17 ديسمبر 2022
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="artical-card">
							<div class="img">
								<img src="./img/img3.jpg" alt="">
							</div>
							<div class="artical-body">
								<a href="#">
									<h5>
										فقر الدم
									</h5>
								</a>
							</div>
							<div class="artical-footer">
								<div class="time d-flex align-items-center justify-content-start">
									<i class="icofont-calendar"></i>
									<span>
										08 آب 2022
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="join d-flex align-items-center justify-content-space-between my-5">
			<div class="join-content">
				<h2>هل أنت طبيب؟</h2>
				<h3>إنضم الآن </h3>
				<p>إذا كنت ترغب في الانضمام لمجتمع المساعد الطبي والاستفادة من الخدمات العديدة التي يوفرها الطبي
					للأطباء..
					لا تتردد وابدأ الآن بتسجيل الاشتراك</p>
				<a href="{{route('register')}}"><button class="btn">سجل الآن</button></a>
			</div>
			<div class="img">
				<img src="./img/doctor.webp" alt="">
			</div>
		</div>
	</div>
	<!-- End page content -->
	<!-- jquery Min JS -->
	<script src="./js/jquery.min.js"></script>
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<!-- Main JS -->
	<script src="./js/main.js"></script>
</body>

</html>