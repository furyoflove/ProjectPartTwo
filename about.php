
<?php session_start(); ?>
<?php require_once("email.php") ?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Francis Mangornong</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
  </head>

  <body>

      <header>
        <h1>Thanks for visiting!</h1>
      </header>

      <main>
        <div class="description">
          <section>
            <p>Currently I'm a student at the University of Pittsburgh</p>
            <p> and I'm using this site as a personal portfolio.</p>
          </section>
        </div>

        <div class="line"></div>
        <br>

        <div class="socialmedia">
          <section>
            <p>Come find me on social media</p>
            <nav>
              <ul>
                <li><a href="https://www.facebook.com/fmangornong">Facebook</a></li>
                <li><a href="https://twitter.com/FrancisMango">Twitter</a></li>
                <li><a href="https://www.instagram.com/furi0us/">Instagram</a></li>
              </ul>
            </nav>
          </section>
        </div>

        <div class="line"></div>
        <br>

        <div class="links">
          <section>
            <nav>
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact Me</a></li>
              </ul>
            </nav>
          </section>
        </div>

      </main>

  </body>

</html>
