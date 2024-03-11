<?php
 require "./connect.php";
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP UrlShortner</title>
    <link rel="stylesheet" href="style.css">
 </head>
 <body>
    <header class="design">
        <h1>PHP URL SHORTNER</h1>
    </header><br><br>
    <main>
        <section >
          
            <form action="shorten.php" method="post" >
            <p>Enter a URL to shorten</p>
                <input type="text" name="urls"><br><br>
                <button type="submit">Shorten the URL</button>
                <button type="reset">Cancel</button>
            </form>
        </section>
</main>
 </body>
 </html>