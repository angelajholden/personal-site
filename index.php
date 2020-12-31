<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Angela J. Holden | Frontend Developer</title>
    <meta name="description" content="CSS &amp; JavaScript Lover" />
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600" rel="stylesheet" />
    <link rel="stylesheet" href="dist/css/styles.min.css" />
    <link rel="shortcut icon" href="favicon.png" />
    <script type="text/javascript" src="dist/js/scripts.min.js"></script>
    <?php include_once('partials/base.php'); ?>
</head>

<body class="home">
    <?php include_once('partials/nav.php'); ?>

    <main id="skip-nav" class="wrap">
        <header class="home_header">
            <h1 class="screen-reader-text">Angela J. Holden</h1>
            <?php include_once('svg/initials.svg'); ?>
            <p>Making the world a better place, one user experience at a time.</p>
            <a class="button" href="./contact/">Interested? <span>Contact Me</span></a>
            <?php include_once('svg/circle.svg'); ?>
        </header>

        <section class="content">
            <article class="yellow_box">
                <h2 class="sub_head">Hello World</h2>
                <p>
                    First impressions matter. Engaging, beautiful design gets eyes on
                    an app, but aesthetics are only part of the puzzle. Creating a
                    seamless, responsive interface that sets it apart begins with solid
                    code, strategic integration of new technologies, and measurable
                    performance goals. Experiential, human-driven design, inside and
                    out.
                </p>
                <a class="button" href="./portfolio/">See My Portfolio</a>
            </article>

            <figure class="img_right">
                <img src="images/angelajholden-piano-softlight.jpg" alt="" />
            </figure>
        </section>

        <section class="content">
            <aside class="blue_box">
                <h2 class="sub_head">Engineer</h2>
                <p>
                    Anticipating the needs and actions of users allows me to develop software and apps that feel
                    simple, intuitive and easy.
                </p>
                <a class="skill_cta" href="./Angela_Holden_Resume.pdf" target="_blank">Download my resume</a>
            </aside>
            <aside class="blue_box">
                <h2 class="sub_head">Design</h2>
                <p>
                    I believe development and design should work together to support the user
                    as they navigate an interface.
                </p>
                <a class="skill_cta" href="./skills/">View my skills</a>
            </aside>
            <aside class="blue_box">
                <h2 class="sub_head"><span class="ally">A</span>11y</h2>
                <p>
                    Designing for humans means designing for all humans. Accessibility is
                    a catalyst for innovation, not a barrier.
                </p>
                <a class="skill_cta" href="./playground/">Visit my playground</a>
            </aside>
        </section>

        <?php include_once('partials/footer.php'); ?>

    </main>

    <?php include_once('partials/social.php'); ?>

</body>

</html>
