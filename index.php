<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        var_dump($_PSOT);
        //Do stuff...
        //Write results to session
        session_start();
        $_SESSION['stuff'] = $something;
        //You can store stuff such as the user ID, so you can remeember him.
        //redirect:
        header('Location: ', true, 303);
        //The redirection will cause the browser to request with GET
        //The results of the operation are in the session variable
        //It has empty location because we are redirecting to the same page
        //Otherwise use `header('Location: anotherpage.php', true, 303);`
        exit();
    }
    else
    {
        //You could assume you got a GET
        var_dump($_GET); //Use this to see what info we got!
        //Get stuff from session
        session_start();
        if (array_key_exists('stuff', $_SESSION))
        {
           $something = $_SESSION['stuff'];
           //we got stuff
           //later use present the results of the operation to the user.
        }
        //clear stuff from session:
        unset($_SESSION['stuff']);
        //set headers
        header('Content-Type: text/html; charset=utf-8');
        //This header is telling the browser what are we sending.
        //And it says we are sending HTML in UTF-8 encoding
    }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta char-set="utf-8">
    <title>Page title</title>
  </head>
  <body>
    <?php if (isset($something)){ echo '<span>'.$something.'</span>'}?>;
    <form action="" method="POST">
      <input type="text" value="default value, you can edit it" name="myfield">
      <input type="submit" value = "post">
    </form>
  </body>
</html>
