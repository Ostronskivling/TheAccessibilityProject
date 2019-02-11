
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TheAccessibilityProject</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="style.php" />
        <script src="main.js"></script>
    </head>
    <body>
        <div id="globalNav">
            <form method="GET">
                <input type='text' name="urlInput" placeholder="Klistra in din URL här..." />
                <input type="submit" name="go" value="Submit"/>
            </form>
        </div>
        <?php
            if (isset($_GET['urlInput'])) {
                $url = $_GET['urlInput'];
                $file_headers = @get_headers($url);
                echo $url;
                if (isset($_GET['urlInput']) && isset ($_GET['go'])) {
                    if (\strpos($url, 'aftonbladet.se') !== false) {
                        if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
                            echo "\n\rVi kunde inte hitta hemsidan";                        
                          }  else 
                            header('Location: article.php'); 
                    }
                }
            }
        ?>
    </body>
</html>