<?php

if($_POST["submit"]) {
    $recipient="your@email.address";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Portfolio | Rodrigo Cardenas - Developer</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  </head>

  <body>
    <header>
      <div class="navbar">
        <a class="logo" title="Rodrigo Cardenas Design Limited Logo" href="http://rodrigocardenas.xyz/">
          <svg xmlns="http://www.w3.org/2000/svg"
          width="32.000000pt" height="32.000000pt" viewBox="0 0 32.000000 32.000000"
          preserveAspectRatio="xMidYMid meet">
            <g transform="translate(0.000000,32.000000) scale(0.100000,-0.100000)" fill="#e22525" stroke="none">
              <path id="circle" d="M95 306 c-103 -46 -126 -180 -44 -258 51 -48 108 -58 171 -30 64 28
              92 72 93 143 0 62 -17 94 -67 132 -33 25 -113 32 -153 13z m112 -7 c101 -38
              130 -163 56 -241 -102 -107 -290 4 -244 145 26 79 114 124 188 96z"/>
              <path id="r" d="M100 160 c0 -47 4 -80 10 -80 6 0 10 16 10 35 0 30 3 35 24 35 17 0
              31 -11 46 -35 12 -19 28 -35 36 -35 16 0 14 6 -17 51 -17 24 -17 26 2 37 21
              14 25 42 7 60 -7 7 -36 12 -65 12 l-53 0 0 -80z m98 48 c18 -18 -5 -38 -44
              -38 -30 0 -34 3 -34 25 0 22 4 25 33 25 18 0 38 -5 45 -12z"/>
            </g>
          </svg>
          <div class="logo-info">
            <h1>Rodrigo Cardenas</h1>
            <h2>Web Developer</h2>
          </div>
        </a>
        <nav>
          <ul>
            <li>
              <a title="About Rodrigo" href="http://www.rodrigocardenas.xyz/About">About</a>
            </li>
            <li>
              <a title="Rodrigo's Portfolio" href="http://rodrigocardenas.xyz">Portfolio</a>
            </li>
            <li class="hire">
              <a title="Hire Rodrigo" href="http://www.rodrigocardenas.xyz/Hire">Hire</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <main>
      <div class="jumbotron">
        <header>
          <h1>Hire Rodrigo</h1>
          <h2>Enquire about hiring Rodrigo</h2>
        </header>
      </div>

      <?=$thankYou ?>

      <form method="post" action="index.php">
          <label>Name:</label>
          <input name="sender">

          <label>Email address:</label>
          <input name="senderEmail">

          <label>Message:</label>
          <textarea rows="5" cols="20" name="message"></textarea>

          <input type="submit" name="submit">
      </form>
    </main>


    <div class="footer-container">
      <div class="footer">
        <div class="info">
          <div class="pic-container">
            <img src="./assets/img/me.png" alt="Rod's Picture" />
          </div>
          <div class="bio">
            <p class="bio-info">
              Web Developer, electrical engineer, and foodie. Rodrigo combines his education with industrial experience in automation and control to produce quality websites and exceptional user experience.
            </p>
            <p>
              Web Developer
              <br />
              Available September 2016.
              <a title="Enquire about hiring Rodrigo" href="http://www.rodrigocardenas.xyz/Hire">Hire Now <i>&#x21AC</i></a>
            </p>
          </div>
        </div>
        <ul class="social-links">
          <li>
            <a class ="link-image" href="https://www.linkedin.com/in/rodrigoecardenas">
              <img src="./assets/img/linkedIn.png" alt="Link To Rodrigo's LinkedIn Profile" />
            </a>
            <p>
              View Rodrigo's <a href="https://www.linkedin.com/in/rodrigoecardenas">LinkedIn profile</a>
            </p>
          </li>
          <li>
            <a class ="link-image" href="https://github.com/RodCardenas">
              <img src="./assets/img/github.png" alt="Link To Rodrigo's Github Profile"/>
            </a>
            <p>
              View <a href="https://github.com/RodCardenas">@RodCardenas</a> on Github for source code to projects such as <a href="http://rodrigocardenas.xyz/ZoetiCSS/">ZoetiCSS</a>, <a href="http://flow-diy.xyz">Flow-DIY</a>, and more
            </p>
          </li>
          <li>
            <a class ="link-image" href="https://www.facebook.com/rocko2k7">
              <img src="./assets/img/facebook.png" alt="Link To Rodrigo's Facebook Profile" />
            </a>
            <p>
              Add me on <a href="https://facebook.com/rocko2k7">Facebook</a> and we can hang out
            </p>
          </li>
        </ul>
        <nav class="links">
          <dl>
            <dt>
              <a title="About Rodrigo" href="http://www.rodrigocardenas.xyz/About">About</a>
            </dt>
            <dd>
              Learn about Rod's Skills and Workflow
            </dd>
            <dt>
              <a title="Rodrigo's Portfolio" href="http://rodrigocardenas.xyz">Portfolio</a>
            </dt>
            <dd>
              View Rod's development work
            </dd>
            <dt>
              <a title="Hire Rodrigo" href="http://www.rodrigocardenas.xyz/Hire">Hire</a>
            </dt>
            <dd>
              Enquire about hiring Rod
            </dd>
          </dl>
        </nav>
      </div>
    </div>
  </body>
</html>
