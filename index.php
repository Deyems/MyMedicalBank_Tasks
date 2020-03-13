<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
    <title>Task1</title>
    <link rel="stylesheet" href="css/mediaquery.css"></link>
    <link rel="stylesheet" href="css/styling.css"></link>
</head>

    <body>
        <!-- <h1>Create a Flat File</h1> -->
        <div class="wrapper">
        <?php
            include "nav.php";
        ?>
        <div class="contactform">
          <?php
            for ($i=0; $i < 6; $i++) {
              # code...
              echo '<br/>';
            }
          ?>
        <form method="post" id="details" enctype="multipart/form-data" action="process.php">
            <div>
                <label for="fullname">Fullname</label><br/>
                <input type="text" name="fullname" placeholder="enter your fullname" id="">
            </div>
            <div>
                <label for="email">Email Address</label><br/>
                <input type="email" name="email" placeholder="enter your email" id="">
            </div>
            <div>
                <label for="subject">Subject</label><br/>
                <input type="text" name="subject" placeholder="enter your subject" id="">
            </div>
            <div>
                <label for="message">Message</label><br/>
                <textarea rows="10" cols="45" name="message" placeholder="enter your message"></textarea>
            </div>
            <div class="inp-grp">
                <input type="submit" name="send" value="Send">
            </div>
            <!-- <div>
                <a href="<?php ?>"> <?php ?></a>
                <a href="<?php ?>"> <?php ?></a>
          </div> -->
        </form>
        </div>
        <!-- <form>
          <div class="inp-grp">
          </div>
        </form> -->
      </div>
    </body>

    <style>
      form{
        /*border: 2px solid red;*/
        font-family: calibri;
        padding: 10px 12px;
      }

      form div{
        margin: 5px 0;
      }
      form input[type="text"]{
        border-radius: 6px;
        border: 1px solid rgba(0,0,0,0.2);
      }
      form input[type="email"]{
        border-radius: 6px;
        border: 1px solid rgba(0,0,0,0.2);
      }
      textarea{
        border-radius: 6px;
      }
    </style>

</html>
