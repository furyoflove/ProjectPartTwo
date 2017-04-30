
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
    <div class="myform">
      <form name="form" id="form" action="email.php" method="post">
        <fieldset>
          <legend>Send Me a Message!</legend>

          <label for="name">Your name:</label>
          <input type="text" name="name"/><br><br>

          <label for="email">Your email:</label>
          <input type="text" name="email"/><br><br>

          <label for="message">Message: </label>
          <textarea name="message" maxlength="1000" rows="6" cols="25"></textarea> <br>

          <input type="submit" value="submit">

        </fieldset>
      </form>
    </div>
    <br>

    <div class="line"></div>
    <br>

    <div class="links">
      <section>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Me</a></li>
          </ul>
        </nav>
      </section>
    </div>

  </body>

</html>
