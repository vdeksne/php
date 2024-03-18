<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API apstrādes mājasdarbs</title>

    <link rel="stylesheet" href="api_md.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;1,100;1,200&family=Prompt:ital,wght@0,800;0,900;1,900&display=swap" rel="stylesheet">
    
</head>
<body>

    <div id="root">
        <div class="container">

    <?php
        
        $json = file_get_contents("https://v2.jokeapi.dev/joke/Any?safe-mode"); 

        // echo $json;

        if ($json == "") {
            echo "<p>API nav datu!</p>";
        }

        $dati = json_decode($json, true); 
        
    
        // echo "<pre>";
    
        // print_r($dati); // Izvade parbaudei

        $setup = $dati["setup"]; 
        $delivery = $dati["delivery"]; 

        echo "<div class='card'>";

        echo "<p>";

        echo "<h1>$setup</h1>";

        echo"<h1>$delivery</h1>";

        echo "</p>";

        echo "</div>";
  

        ?>

            </div>
        </div>

    
</body>