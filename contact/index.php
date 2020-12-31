<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Angela J. Holden | Frontend Developer</title>
    <meta name="description" content="JavaScript Lover U+2661 Frontend developer">
    <link rel='dns-prefetch' href='//fonts.googleapis.com'>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="../dist/css/styles.min.css">
    <link rel="shortcut icon" href="../favicon.png">
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPF1RV4l66ov2BkOl9OjhFmbdrnIETdhc&callback=initMap&libraries=&v=weekly"
        defer></script>
    <script type="text/javascript" src="../dist/js/scripts.min.js"></script>
    <?php include_once('../partials/base.php'); ?>
</head>

<body class="contact">
    <?php include_once('../partials/nav.php'); ?>

    <main id="skip-nav" class="wrap">
        <header class="header">

            <h1 class="block_header">Contact Me</h1>
            <?php include_once('../svg/initials.svg'); ?>

        </header>

        <section class="content">

            <form action="" class="form">
                <div class="form_wrap">
                    <div class="input">
                        <label class="screen-reader-text" for="full_name">Full Name</label>
                        <input required type="text" id="full_name" placeholder="Full Name*" name="full_name">
                    </div>
                    <div class="input">
                        <label class="screen-reader-text" for="email">Email</label>
                        <input required type="email" id="email" placeholder="Email*" name="email">
                    </div>
                    <div class="input">
                        <label class="screen-reader-text" for="phone">Phone</label>
                        <input type="tel" id="phone" placeholder="Phone" name="phone">
                    </div>
                    <div class="input">
                        <label class="screen-reader-text" for="subject">Subject</label>
                        <input type="text" id="subject" placeholder="Subject" name="subject">
                    </div>
                    <div class="textarea">
                        <label class="screen-reader-text" for="textarea">Textarea</label>
                        <textarea required name="textarea" id="textarea" rows="5" placeholder="Message*"></textarea>
                    </div>
                    <div class="submit">
                        <label class="screen-reader-text" for="submit">Submit</label>
                        <input type="submit" id="submit" value="Submit" name="submit">
                    </div>
                </div>
            </form>

        </section>

        <section id="map"></section>

        <?php include_once('../partials/footer.php'); ?>

    </main>

</body>

</html>
