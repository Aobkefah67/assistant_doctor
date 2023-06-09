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
    <link rel="icon" href="../../img/logo.png">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Medipro CSS -->
    <link rel="stylesheet" href="../../css/style.css">
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

    <!-- login box -->
    <div class="content">
        <div class="d-flex justify-content-start">
            <!-- right side include information about website and logo -->
            <div class="blue-side-login">
                <p><img src="../../img/logo.png" alt="logo"> المساعد الطبي</p>
                <span>منصة طبية عربية تُعنى بتقديم المحتوى الطبي الموثوق، بأقلام آلاف الأطباء
                    المعتمدين، بالإضافة لإمكانية الطبيب بتسجيل الحالات المرضية الخاصة به ومتابعة الحالات.</span>
            </div>
            <!-- left side include login form -->
            <div class="white-side-login">
                <h3 class="title mb-5">تسجيل الدخول</h3>
                <form class="form" style="max-width: 440px; margin: auto;" method="post" action="{{route('login')}}">
                @csrf
                    <div class="form-group">
                        <input type="email" name="email" placeholder="البريد الإلكتروني" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="كلمة المرور" required="required">
                    </div>
                    <p style="text-align: right; font-size: 14px;"><a href="../html/register.html">هل نسيت كلمة المرور؟
                        </a></p>
                    <div class="form-group login-btn">
                        <button class="btn" type="submit">تسجيل الدخول</button>
                    </div>
                </form>
                <p>ليس لديك حساب ؟ <a href="{{route('register')}}">انضم الآن</a></p>
            </div>
        </div>
    </div>
    <!-- End login box -->
    <!-- jquery Min JS -->
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <!-- Main JS -->
    <script src="../../js/main.js"></script>
</body>

</html>