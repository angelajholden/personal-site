<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Angela J. Holden | Frontend Developer</title>
  <meta name="description" content="Frontend developer" />
  <link rel="dns-prefetch" href="//fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600" rel="stylesheet" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="shortcut icon" href="../favicon.png" />
  <script type="text/javascript" src="../js/main.js"></script>
  <?php include_once('../partials/base.php'); ?>
</head>

<body class="home">
  <?php include_once('../partials/nav.php'); ?>

  <main id="skip-nav" class="wrap">
    <header class="header">
      <div class="top_home_links">
        <span class="home_links">Angela J. Holden</span>
        <span class="home_links"><a href="#">Résumé</a></span>
      </div>

      <?php include_once('../svg/initials.svg'); ?>

      <p>Making the world a better place, one user experience at a time.</p>

      <a class="button" href="./contact/">Interested? <span>Let's talk.</span></a>

      <?php include_once('../svg/circle.svg'); ?>
    </header>

    <section class="content">

      <form action="" class="form">
        <h2 class="block_header">Contact Me</h2>
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

    <section class="content">
      <figure class="img_left">
        <img src="../images/angelajholden-pink-flowers.jpg" alt="" />
      </figure>

      <article class="svg_box">
        <h2 class="sub_head">Get in touch</h2>
        <nav class="social_profiles">
          <a href="mailto:info@angelajholden.com">
            <span class="svg_bubble"><svg aria-label="hidden" xmlns="http://www.w3.org/2000/svg" width="512"
                height="512" viewBox="0 0 512 512">
                <path
                  d="M424,80H88a56.06,56.06,0,0,0-56,56V376a56.06,56.06,0,0,0,56,56H424a56.06,56.06,0,0,0,56-56V136A56.06,56.06,0,0,0,424,80Zm-14.18,92.63-144,112a16,16,0,0,1-19.64,0l-144-112a16,16,0,1,1,19.64-25.26L256,251.73,390.18,147.37a16,16,0,0,1,19.64,25.26Z" />
              </svg>
            </span>
            <span class="svg_label">Email</span>
          </a>
          <a href="https://www.linkedin.com/in/angelajgolden">
            <span class="svg_bubble"><svg aria-label="hidden" xmlns="http://www.w3.org/2000/svg" width="512"
                height="512" viewBox="0 0 512 512">
                <path
                  d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z" />
              </svg></span>
            <span class="svg_label">LinkedIn</span>
          </a>
          <a href="https://github.com/angelajholden">
            <span class="svg_bubble"><svg aria-label="hidden" xmlns="http://www.w3.org/2000/svg" width="512"
                height="512" viewBox="0 0 512 512">
                <path
                  d="M416,160a64,64,0,1,0-96.27,55.24c-2.29,29.08-20.08,37-75,48.42-17.76,3.68-35.93,7.45-52.71,13.93V151.39a64,64,0,1,0-64,0V360.61a64,64,0,1,0,64.42.24c2.39-18,16-24.33,65.26-34.52,27.43-5.67,55.78-11.54,79.78-26.95,29-18.58,44.53-46.78,46.36-83.89A64,64,0,0,0,416,160ZM160,64a32,32,0,1,1-32,32A32,32,0,0,1,160,64Zm0,384a32,32,0,1,1,32-32A32,32,0,0,1,160,448ZM352,192a32,32,0,1,1,32-32A32,32,0,0,1,352,192Z" />
              </svg></span>
            <span class="svg_label">Github</span>
          </a>
          <a href="https://www.pinterest.com/angelajholden">
            <span class="svg_bubble"><svg aria-label="hidden" xmlns="http://www.w3.org/2000/svg" width="512"
                height="512" viewBox="0 0 512 512">
                <path
                  d="M256.05,32c-123.7,0-224,100.3-224,224,0,91.7,55.2,170.5,134.1,205.2-.6-15.6-.1-34.4,3.9-51.4,4.3-18.2,28.8-122.1,28.8-122.1s-7.2-14.3-7.2-35.4c0-33.2,19.2-58,43.2-58,20.4,0,30.2,15.3,30.2,33.6,0,20.5-13.1,51.1-19.8,79.5-5.6,23.8,11.9,43.1,35.4,43.1,42.4,0,71-54.5,71-119.1,0-49.1-33.1-85.8-93.2-85.8-67.9,0-110.3,50.7-110.3,107.3,0,19.5,5.8,33.3,14.8,43.9,4.1,4.9,4.7,6.9,3.2,12.5-1.1,4.1-3.5,14-4.6,18-1.5,5.7-6.1,7.7-11.2,5.6-31.3-12.8-45.9-47-45.9-85.6,0-63.6,53.7-139.9,160.1-139.9,85.5,0,141.8,61.9,141.8,128.3,0,87.9-48.9,153.5-120.9,153.5-24.2,0-46.9-13.1-54.7-27.9,0,0-13,51.6-15.8,61.6-4.7,17.3-14,34.5-22.5,48a225.13,225.13,0,0,0,63.5,9.2c123.7,0,224-100.3,224-224S379.75,32,256.05,32Z" />
              </svg></span>
            <span class="svg_label">Pinterest</span>
          </a>
        </nav>
      </article>
    </section>

    <?php include_once('../partials/footer.php'); ?>
  </main>
</body>

</html>
