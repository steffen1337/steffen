<!DOCTYPE html>
<html lang="en">
<head>
    <title>Steffen L&uuml;bben Portfolio</title>
    <meta charset="UTF-8" />
    <meta name="author" content="L&uuml;bben" />
    <meta name="description" content="Ich gestalte Ihnen Ihre Website nach Ihren Wünschen. Modern✓ Kreativ✓ Professionell✓">
    <meta name="keywords" content="HTML Less Webdesigner Shopware Shops Portfolio Steffen L&uuml;bben Mediengestalter" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="src/less/all.css" />
    <link rel="icon" type="image/png" sizes="32x32" href="src/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="32x32" href="src/img/favicon/favicon-16x16.png">
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
</head>
<body>
<div id="particle-container"></div>
<div class="cursor-dot-outline"></div>
<div class="cursor-dot"></div>
<div id="site-wrapper" class="content-night">
    <?php include "index/header.php"; ?>
    <div id="site-canvas">
        <?php include "index/header-main-navigation.php"; ?>
        <div class="welcome-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">
                        <div class="greeting">
                            <h1>Hey there,<br>I'm Steffen.</h1>
                            <div class="row">
                                <div class="sl-column col-xs-4 col-sm-2 pt10 mb-4">
                                    <div class="sl-sep">
                                        <span class="sl-inner-line"></span>
                                    </div>
                                </div>
                                <div class="sl-column col-sm-10 col-xs-12">
                                    <p class="sl-info-text">Graphic designer, front-end developer &amp; <br>lover of all things ☺️️.<br>Welcome to my portfolio.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="hello-me">
                            <img class="img-responsive" src="src/img/SteffenLuebben.jpg" alt="Steffen Lübben"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="help-emotion-container container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="help-info-wrapper">
                        <h1>Ultimate experiences with story, emotion and purpose</h1>
                        <div class="row">
                            <div class="sl-column col-xs-4 col-sm-2 pt10 mb-4">
                                <div class="sl-sep">
                                    <span class="sl-inner-line"></span>
                                </div>
                            </div>
                            <div class="sl-column col-sm-10 col-xs-12">
                                <p class="sl-info-text">I help clients succeed by creating brand identities, digital experiences, and print materials that communicate clearly, achieve marketing goals, and look fantastic.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="iconbox-icon-wrapper">
                        <div class="iconbox-icon-wrap iconbox-shadow iconbox-icon-blue">
                            <ion-icon class="iconbox-icon" name="basket"></ion-icon>
                            <span class="iconbox">E-Commerce</span>
                        </div>
                        <div class="iconbox-icon-wrap iconbox-shadow iconbox-icon-green">
                            <ion-icon class="iconbox-icon" name="desktop"></ion-icon>
                            <span class="iconbox">Branding</span>
                        </div>
                        <div class="iconbox-icon-wrap iconbox-shadow iconbox-icon-red">
                            <ion-icon class="iconbox-icon" name="brush"></ion-icon>
                            <span class="iconbox">UI / UX</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="toggle-wrapper">
            <div class="toggle"></div>
        </div>
    </div>
</div>
<?php include "index/footer.php";?>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.toggle').click(function(){
            $('.toggle').toggleClass('active')
            $('body').toggleClass('night')
        })
    })
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="src/js/all.js"></script>
<script src="src/js/particles.js"></script>
<script src="https://unpkg.com/ionicons@4.4.2/dist/ionicons.js"></script>
</body>
</html>