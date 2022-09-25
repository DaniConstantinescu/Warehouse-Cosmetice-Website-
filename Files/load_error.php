<?php

    session_start();

    /*

        1 = date introduse incorect
        2 = produsul nu a putut fii gasit 

    */


    switch ($_SESSION['error']){
        case 1:
            $eroare = 'Date introduse incorect';
            break;
        case 2:
            $eroare = "Produsul nu a putut fii gasit ";
            break;
            
    }


    $myfile = fopen("error.html", "w");

    $txt = "
    <!DOCTYPE html>
        <html lang=\"en\">
        <head>
            <meta charset=\"UTF-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
                integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
            <title>Error</title>

            <style>

                #main{

                    margin-top: 20em;
                    text-align: center;
                }

                .centru{
                    margin-left: auto;
                    margin-right: auto;
                }

            </style>

        </head>
        <body>
            
            <div id=\"main\">
                <h1>" . $eroare . "</h1>
            </div>

            <br>

            <div class=\"col text-center\">
                <button type=\"button\" class=\"btn btn-primary btn-lg\" onclick=\"window.location.href='loader.php';\" >OK!</button>
            </div>


        </body>

        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\"
            integrity=\"sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2\"
            crossorigin=\"anonymous\"></script>

        </html>
    ";


    fwrite($myfile, $txt);
    fclose($myfile);

    header("location:error.html"); 
        exit();


?>