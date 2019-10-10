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
<div id="site-wrapper">
    <?php include "index/header.php"; ?>
    <div class="lines"><div class="line"></div><div class="line"></div><div class="line"></div></div>
    <div id="site-canvas">
        <?php include "index/header-main-navigation.php"; ?>
        <div class="dog-wrapper">
            <?php include "index/dog.php"; ?>
            <div class="info-text">
                <h3>I am steffen, <br> UX designer and web designer.</h3>
                <h1>Nice to meet you!</h1>
            </div>
        </div>
    </div>
</div>
<?php /*include "index/footer.php"; */?>

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