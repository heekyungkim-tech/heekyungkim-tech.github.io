<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact Info</title>
  </head>
  <body>
    <h3>Thank You</h3>
    <?php
      if(isset($_POST["x"])){
        $firstname = $_POST["FirstName"];
        $lastname = $_POST["LastName"];
        $emailFrom= $_POST["email"];
        $subjectFrom= $_POST["subject"];
        $messageFrom= $_POST["message"];

        $arg1 = "heekyung.kim1@baruchmail.cuny.edu";
        $arg2 = "Hello: you got an email from: $firstname";
        $arg3 = "The message is: " . $messageFrom;
        mail($arg1, $arg2, $arg3);
      }
     ?>
  </body>
</html>
