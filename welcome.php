<?php

   $name = htmlspecialchars($_POST["name"]);
   $email = htmlspecialchars($_POST["email"]);
   $message = htmlspecialchars($_POST["message"]);

   echo "Submission:";
   echo $name;
   echo $email;
   echo $message;
?>