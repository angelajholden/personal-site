<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Angela J. Holden | Frontend Developer</title>
    <meta name="description" content="Frontend developer">
    <link rel='dns-prefetch' href='//fonts.googleapis.com'>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="../favicon.png">
    <script type="text/javascript" src="../js/main.js"></script>
    <?php include_once('../partials/base.php'); ?>
</head>

<body class="contact">

    <?php include_once('../partials/nav.php'); ?>

    <main id="skip-nav" class="wrap">

        <header class="header">
            <div class="top_home_links">
                <span class="home_links">Angela J. Holden</span>
                <span class="home_links"><a href="#">Résumé</a></span>
            </div>

            <?php include_once('../svg/initials.svg'); ?>

            <p>Making the world a better place, one user experience at a time.</p>

            <a class="button" href="mailto:info@angelajholden.com">Interested? <span>Let's talk.</span></a>

            <?php include_once('../svg/circle.svg'); ?>
        </header>

        <form class="form">
            <div class="input">
                <label for="first">First Name</label>
                <input id="first" type="text" placeholder="First Name">
            </div>
        </form>

        <?php include_once('partials/footer.php'); ?>

    </main>
</body>

</html>