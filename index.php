<?
$data = require_once('/assets/data.php');
$aboutData = $data['about'];
$education = $data['education'];
$biografy = $data['shortBiography'];
$experience = $data['experience'];
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Sergey Shakirov resume</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Sergey Shakirov">
    <link rel="shortcut icon" href="addressbooksearch.ico">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles-6.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="wrapper">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile" src="assets/images/profile.png" alt="" />
                <h1 class="name"><?= $aboutData['name']?></h1>
                <h3 class="tagline"><?= $aboutData['post']?></h3>
            </div><!--//profile-container-->

            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fa fa-envelope"></i><a href="mailto: <?= $aboutData['email']?>"><?= $aboutData['email']?></a></li>
                    <li class="phone"><i class="fa fa-phone"></i><a href="tel:<?= $aboutData['phone']?>"><?= $aboutData['phone']?></a></li>
                    <li class="github"><i class="fa fa-github"></i><a href="#" target="_blank"><?= $aboutData['git']?></a></li>
                </ul>
            </div><!--//contact-container-->
            <div class="education-container container-block">
                <h2 class="container-block-title">Education</h2>
                <div class="item">
                    <h4 class="degree"><?= $education['faculty']?></h4>
                    <h5 class="meta"><?= $education['univercity']?></h5>
                    <div class="time"><?= $education['yearStart']?> - <?= $education['yearEnd']?></div>
                </div><!--//item-->
            </div><!--//education-container-->

            <div class="languages-container container-block">
                <h2 class="container-block-title">Languages</h2>
                <ul class="list-unstyled interests-list">
                    <li>Russian <span class="lang-desc">(Native)</span></li>
                    <li>English <span class="lang-desc">(Elementary)</span></li>
                </ul>
            </div><!--//interests-->
        </div><!--//sidebar-wrapper-->

        <div class="main-wrapper">

            <section class="section summary-section">
                <h2 class="section-title"><i class="fa fa-user"></i>Краткая биография</h2>
                <div class="summary">
                    <p><?= $biografy ?></p>
                </div><!--//summary-->
            </section><!--//section-->

            <section class="section experiences-section">
                <h2 class="section-title"><i class="fa fa-briefcase"></i>Опыт работы</h2>

                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title"><?= $experience['post']?></h3>
                            <div class="time"><?= $experience['yearStart']?> - <?= $experience['yearEnd']?></div>
                        </div><!--//upper-row-->
                        <div class="company"><?= $experience['workPlace']?></div>
                    </div><!--//meta-->
                    <div class="details">
                        <p><?= $experience['description']?></p>
                    </div><!--//details-->
                </div><!--//item-->

            <section class="skills-section section">
                <h2 class="section-title"><i class="fa fa-rocket"></i>Навыки</h2>
                <div class="skillset">
                    <div class="item">
                        <h3 class="level-title">Python</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="40%">
                            </div>
                        </div><!--//level-bar-->
                    </div><!--//item-->

                    <div class="item">
                        <h3 class="level-title">Javascript</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="23%">
                            </div>
                        </div><!--//level-bar-->
                    </div><!--//item-->

                    <div class="item">
                        <h3 class="level-title">HTML5 &amp; CSS</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="55%">
                            </div>
                        </div><!--//level-bar-->
                    </div><!--//item-->

                    <div class="item">
                        <h3 class="level-title">PHP</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="40%">
                            </div>
                        </div><!--//level-bar-->
                    </div><!--//item-->

                    <div class="item">
                        <h3 class="level-title">Photoshop</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="50%">
                            </div>
                        </div><!--//level-bar-->
                    </div><!--//item-->

                </div>
            </section><!--//skills-section-->

        </div><!--//main-body-->
    </div>

    <!-- Javascript-->
    <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- custom js-->
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>
