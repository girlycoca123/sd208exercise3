<?php
     if (isset($_POST["submit"])) {
         $input = strtolower($_POST["clickbait_headline"]);

         $clickBait_words = array(
            "scientist",
            "doctors",
            "hate",
            "stupid",
            "weird",
            "simple",
            "tricked",
            "shocked me",
            "you'll never believe",
            "hack",
            "epic",
            "unbelievable"
          );
       $replacement_words = array(
           "so-called scientists",
           "so-called doctors",
           "aren't threatened by",
           "average",
           "completely normal",
           "ineffective",
           "method",
           "is no different than the  others",
           "you won't really be surprised by",
           "slightly improve",
           "boring",
           "normal"
       );
       $honestHeadline = str_replace($clickBait_words, $replacement_words, $input);   
     }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>clickbait</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
        <link rel="stylesheet" href="./style.css">
    </head>

    <body>
        <div class="row">
            <center>
                <form class="text" action="" method="post">
                    <textarea placeholder="Paste click bait headlines here" class="form-control input-lg kumbati" name="clickbait_headline"></textarea>
                    <br>
                    <button class="btn btn-primary btn-lg pull-right laban" name="submit">Change bit headlines</button></center>

            </form>
        </div>
        <br><br>
        <div class="head">
            <center>
                <?php
               if (isset($_POST['submit'])){
                echo"<u> Original Headline</u>";
                echo "<h5 >" . $input . "</h5> <br>";
                echo"<u>Honest Headline</u>";
                echo "<h5>" . $honestHeadline . "</h5>";
               }

               // chngwe
        ?>
            </center>
        </div>
    </body>

    </html>