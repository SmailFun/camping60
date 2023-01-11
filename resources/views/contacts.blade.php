<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="style/images/fav.svg">
    <title>Branko</title>
    <!-- Bootstrap core CSS -->
    <link href="style/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/css/plugins.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="style/css/color/green.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href="style/type/icons.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>
<div class="body-wrapper">
    <nav class="navbar navbar-default default solid">
        <div class="container">
            <div class="navbar-header">
                <div class="basic-wrapper"> <a class="btn responsive-menu" data-toggle="collapse" data-target=".navbar-collapse"><i></i></a>
                    <div class="navbar-brand"> <a href="/">
                            <img src="#" srcset="{{asset("style/images/logo.svg ")}}5x" class="logo-light" alt="" />
                            <img src="#" srcset="{{asset("style/images/logo-dark.jpg")}} 18x" class="logo-dark" alt="" />
                        </a>
                    </div>
                    <!-- /.navbar-brand -->
                </div>
                <!-- /.basic-wrapper -->
            </div>
            <!-- /.navbar-header -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="/" class="dropdown-toggle " >О нас <span class="caret"></span></a>
                    </li>
                    <li class="dropdown"><a href="/incubation" class="dropdown-toggle " >Инкубирование <span class="caret"></span></a>
                    </li>
                    <li class="current dropdown"><a href="/contacts" class="dropdown-toggle " >Контакты <span class="caret"></span></a>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->

    <div class="offset"></div>
    <div class="white-wrapper">
        <div class="map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2231.4189151911187!2d50.44660127741652!3d55.994096073174575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415f23a39f86eebb%3A0x3daaab89949747d2!2z0JfQsNCy0L7QtNGB0LrQsNGPINGD0LsuLCAxOSwg0JHQvtCz0LDRgtGL0LUg0KHQsNCx0YssINCg0LXRgdC_LiDQotCw0YLQsNGA0YHRgtCw0L0sIDQyMjA2MA!5e0!3m2!1sru!2sru!4v1671807352519!5m2!1sru!2sru" width="100%" height="460" frameborder="0" style="border:0" ></iframe>
            <!-- /.map-wrapper -->
        </div>

    </div>
    <!-- /.white-wrapper -->

    <div class="light-wrapper">
        <div class="container inner">
            <div class="thin">
                <h2 class="post-title">Get in Touch</h2>
                <p>Nullam quis risus eget urna mollis ornare vel eu leo. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus.</p>
                <div class="divide10"></div>
                <div class="form-container">
                    <form action="contact/vanilla-form.php" method="post" class="vanilla vanilla-form" novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <label>
                                        <input type="text" name="name" placeholder="Your name" required="required">
                                        <i class="icon-user"></i></label>
                                </div>
                                <!--/.form-field -->
                            </div>
                            <!--/column -->
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <label>
                                        <input type="email" name="email" placeholder="Your e-mail" required="required">
                                        <i class="icon-mail-alt"></i></label>
                                </div>
                                <!--/.form-field -->
                            </div>
                            <!--/column -->
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <label>
                                        <input type="tel" name="tel" placeholder="Phone">
                                        <i class="icon-phone"></i></label>
                                </div>
                                <!--/.form-field -->
                            </div>
                            <!--/column -->
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <label class="custom-select">
                                        <select name="department" required="required">
                                            <option value="">Select Department</option>
                                            <option value="Sales">Sales</option>
                                            <option value="Marketing">Marketing</option>
                                            <option value="Support">Customer Support</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <i class="icon-ok"></i><span><!-- fake select handler --></span> </label>
                                </div>
                                <!--/.form-field -->
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                        <textarea name="message" placeholder="Type your message here..."></textarea>
                        <div class="radio-set">
                            <label>Subject:</label>
                            <label>
                                <input type="radio" name="subject" value="General">
                                <span><!-- fake radio --></span> General</label>
                            <label>
                                <input type="radio" name="subject" value="Hi">
                                <span><!-- fake radio --></span> Say Hi</label>
                            <label>
                                <input type="radio" name="subject" value="Other">
                                <span><!-- fake radio --></span> Other</label>
                        </div>
                        <!--/.radio-set -->
                        <input type="submit" class="btn" value="Send" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!">
                        <footer class="notification-box"></footer>
                    </form>
                    <!--/.vanilla-form -->
                </div>
                <!--/.form-container -->
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.light-wrapper -->

    <footer class="inverse-wrapper">
        <div class="container inner">
            <div class="row">
                <div class="col-sm-4">
                    <h3 class="section-title widget-title"><img srcset="style/images/logo.svg 5x"></h3>
                    <p>Более 45 лет занимаемся специальным сектором сельского хозяйства, разведением индейки, распространением инкубационных яиц индейки и суточных индюшат.</p>

                </div>

                <div class="widget">
                    <h3 class="section-title widget-title">Связаться</h3>
                    <p>ООО «Бранко Рус»</p>
                    <div class="contact-info">
                        <i class="icon-location"></i>422060, респ. Татарстан, пгт. Богатые Сабы, ул. Заводская, д. 19
                        <br>
                        <i class="icon-phone"></i>+7 927 039 71 17
                        <br>
                        <i class="icon-mail"></i>
                        <a href="mailto:sales@brankorus.ru">sales@brankorus.ru</a>
                    </div>
                </div>

            </div>
            <!-- /.row -->

            <hr />
            <p class="copyright pull-left">© ООО «Бранко Рус», 2021. Coded by <a href="http://it-pskov.ru/">ItNova</a></p>
            <ul class="footer-menu pull-right">
                <li><a href="#">О нас</a></li>
                <li><a href="#">Инкубирование</a></li>
                <li><a href="#">Контакты</a></li>
                <li><a href="#">Войти</a></li>
            </ul>
        </div>
        <!-- .container -->

    </footer>
    <!-- /footer -->

</div>
<!--/.body-wrapper -->
<script src="style/js/jquery.min.js"></script>
<script src="style/js/bootstrap.min.js"></script>
<script src="style/js/plugins.js"></script>
<script src="style/js/jquery.themepunch.tools.min.js"></script>
<script src="style/js/scripts.js"></script>
</body>
</html>
