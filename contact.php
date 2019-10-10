<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Steffen L&uuml;bben Portfolio</title>
    <meta name="author" content="L&uuml;bben" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Ich gestalte Ihnen Ihre Website nach Ihren Wünschen. Modern✓ Kreativ✓ Professionell✓">
    <meta name="keywords" content="HTML Less Webdesigner Shopware Shops Portfolio Steffen L&uuml;bben Mediengestalter" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="src/less/all.css" />
    <link rel="icon" type="image/png" sizes="32x32" href="src/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="32x32" href="src/img/favicon/favicon-16x16.png">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
</head>
<body>
<div id="particle-container"></div>
<div class="cursor-dot-outline"></div>
<div class="cursor-dot"></div>
<div id="site-wrapper" class="content-night">
    <?php include "index/header.php"; ?>
    <div class="lines"><div class="line"></div><div class="line"></div><div class="line"></div></div>
    <div id="site-canvas">
        <?php include "index/header-main-navigation.php"; ?>
        <main id="contact">
            <!-- Header -->
            <section id="contact-form">
                <div class="container">
                    <h1 class="contact-headline-first">Let's work <span class="line-transform">together</span></h1>
                    <div class="row contact-form-row">
                        <div class="col-lg-7">
                            <form class="form" action="contact.php" method="post">
                                <div class="group">
                                    <input name="name" type="text" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>What's your name?</label>
                                </div>
                                <div class="group">
                                    <input name="email" type="text" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>What's your email?</label>
                                </div>
                                <div class="group">
                                    <textarea name="message" class="form-control" rows="3" required style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 139px;"></textarea>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>What's Up?</label>
                                </div>
                                <button type="submit" name="submit" class="btn btn-lg"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12" class="svg replaced-svg">
                                        <path fill="#333" fill-rule="evenodd" d="M15.5182059,10.4152302 L0,10.4152302 L0,9.5844929 L15.5182059,9.5844929 L10.4613876,4.58733126 L11.0557305,4 L16.7068917,9.5844929 L16.8130944,9.5844929 L16.8130944,9.68944271 L17,9.8741433 L16.8726708,9.99997034 L17,10.1258567 L16.8130944,10.3105573 L16.8130944,10.4152302 L16.7071719,10.4152302 L11.0557305,16 L10.4613876,15.4123918 L15.5182059,10.4152302 Z" transform="translate(0 -4)"></path>
                                    </svg> Send message
                                </button>
                            </form>
                            <?php
                            if(isset($_POST["submit"])){
                                mail("steffen.luebben@gmail.com", "Kontaktformular", 'Name: '.$_POST["name"]. 'Email: '.$_POST["email"]. 'Nachricht '.$_POST["message"]);
                                ?>
                                <div class="alert--info">
                                    <div class="alert--icon">
                                        <ion-icon name="checkmark"></ion-icon>
                                    </div>
                                    <div class="alert--content">
                                        <p>Ihr Kontaktformular wurde versendet!</p>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="col-lg-4 offset-lg-1">
                            <h1 class="contact-headline">Contact Info</h1>
                            <dl class="row">
                                <dt class="col-4">Email</dt>
                                <dd class="col-8"><a href="mailto:steffen.luebben@gmail.com" class="underlined">steffen.luebben@gmail.com</a></dd>
                                <dt class="col-4">Whatsapp</dt>
                                <dd class="col-8"><a href="tel:++491702482971" target="_blank" class="underlined">+49 170 248 29 71</a></dd>
                                <dt class="col-4">Skype</dt>
                                <dd class="col-8"><a href="skype:" class="underlined">..</a></dd>
                            </dl>

                            <h1 class="contact-headline">Social</h1>
                            <ul class="list-social">
                                <li>
                                    <a class="logo-instagram" href="https://www.instagram.com/steff3n_/ target="_blank" rel="nofollow">
                                        <ion-icon name="logo-instagram"></ion-icon>
                                    </a>
                                </li>
                                <li>
                                    <a class="logo-facebook" href="https://www.facebook.com/steffen.lubben" target="_blank" rel="nofollow">
                                        <ion-icon name="logo-facebook"></ion-icon>
                                    </a>
                                </li>
                                <li>
                                    <a class="logo-xing" href="https://www.xing.com/profile/Steffen_Luebben?sc_o=mxb_p" target="_blank" rel="nofollow">
                                        <ion-icon name="logo-xing"></ion-icon>
                                    </a>
                                </li>
                                <li>
                                    <a class="logo-twitter" href="https://twitter.com/speiky1337" target="_blank" rel="nofollow">
                                        <ion-icon name="logo-twitter"></ion-icon>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <div class="toggle-wrapper">
            <div class="toggle"></div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.toggle').click(function(){
            $('.toggle').toggleClass('active')
            $('body').toggleClass('night')
        })
    })
</script>
<script src="https://unpkg.com/ionicons@4.4.2/dist/ionicons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="src/js/all.js"></script>
<script src="src/js/particles.js"></script>
</body>
</html>