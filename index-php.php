<?php include 'database.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="css/12col.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.js"></script>
    <script src="https://momentjs.com/downloads/moment.js"></script>
    <link rel="stylesheet" href="dist/app.css">
    <link rel="shortcut icon" href="img/.ico">
    <title>Spotify</title>
  </head>
  <body>

    <div id="main-wrapper">

      <!-- Header - Navbar -->
      <header>
        <div class="container">
          <nav>
            <img class="logo" src="img/logo.png" alt="Logo">
          </nav>
        </div>
      </header>


      <!-- Main - album musicali -->
      <main>
        <div class="cds-container container">
            <?php foreach ($database as $cd) { ?>
              <!-- <?php var_dump($database); ?>
              <?php var_dump($cd); ?> -->
              <div class="cd-card">
                <img src="<?php echo $cd['poster']; ?>" alt="cd-cover">
                <h3 class="cd-title"><?php echo $cd['title']; ?></h3>
                <span class="cd-author"><?php echo $cd['author']; ?></span>
                <span class="cd-year"><?php echo $cd['year']; ?></span>
              </div>
            <?php } ?>
        </div>
      </main>
      
    </div>

    <script type="text/javascript" src="js/script.js"></script>

  </body>
</html>