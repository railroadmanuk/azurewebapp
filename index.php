<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Azure Web App Demo</title>
    <style>
      body {background-color: powderblue;}
      h1   {color: blue;}
      p    {color: red;}
    </style>
  </head>
  <body>
    <?php
      $myhost = gethostname();
      echo "<p>Hello there, hostname of server is {$myhost}!</p>";
    ?>
  </body>
</html>
