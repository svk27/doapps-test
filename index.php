
<html>
     <head>
          <title>TestX</title>
          <!-- Global site tag (gtag.js) - Google Analytics -->
          <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZGL6JC8748"></script>
          <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-ZGL6JC8748');
          </script>
     </head>
     <body>
          <h1>page load successful</h1>
          <br><br><br>
          <?php
          // so this script here is basically printing number from 0 to 100,000
          for($i = 0; $i < 100000; $i++) {
               echo $i;
               echo "<br>";
          }
          ?>
     </body>
</html>
