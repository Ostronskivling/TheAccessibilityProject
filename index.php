<?php require_once 'simple_html_dom.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>examples</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
        <script src="main.js"></script>
    </head>
    <body>
        <?php
            $htmlKod1 = file_get_html('https://www.aftonbladet.se/nyheter/a/J1eymR/forskarupprop-mot-kinesiska-omskolningslager');
            foreach ($htmlKod1->find('._11S-G') as $class) {
                echo $class->text();
            }  
            echo "<p> . $class . </p>";

            foreach ($htmlKod1->find('.c-Cz1') as $class) {
                //echo $class->text();
            }  
            //echo "<p id=Summering> . $class . </p>";
            
            print "<p id='Summering'> hmmmmmmmm  <font color=black> " . $class . "</p>";

            /*$Color = "red";
            $Text = "This text is red";
        
        
            echo '<div style="Color:'.$Color.'">'.$Text.'</div>';*/
            ?>
            <p id="Summering"> <?=$class;?></p>
    </body>
</html>