<?php

    session_start();


    $myfile = fopen("index.html", "w");
    $txt = "";
    inceput($txt);
    
    function inceput(&$txt){

        $txt = "
        <!DOCTYPE html>
        <html lang=\"en\">
        
        <head>
            <meta charset=\"UTF-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
                integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
            <title>Main</title>
        
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            
            <script>
        
                $(document).ready(function(){
                    $('#home').click(function() {
        
                        $(\"#adauga\").css(\"display\", \"none\");
                        $(\"#modifica\").css(\"display\", \"none\");
                        $(\"#filtru\").css(\"display\", \"none\");
                        $(\"#sterge\").css(\"display\", \"none\");
        
                        $('#reload').click();
        
                    });
        
                    $('#add').click(function() {
        
                        $(\"#modifica\").css(\"display\", \"none\");
                        $(\"#filtru\").css(\"display\", \"none\");
                        $(\"#sterge\").css(\"display\", \"none\");
        
                        $('#adauga').slideToggle(\"slow\",\"swing\");
                    });
        
                    $('#mod').click(function() {
        
                        $(\"#adauga\").css(\"display\", \"none\");
                        $(\"#filtru\").css(\"display\", \"none\");
                        $(\"#sterge\").css(\"display\", \"none\");
        
                        $('#modifica').slideToggle(\"slow\",\"swing\");
                    });
        
                    $('#del').click(function() {
        
                        $(\"#adauga\").css(\"display\", \"none\");
                        $(\"#filtru\").css(\"display\", \"none\");
                        $(\"#modifica\").css(\"display\", \"none\");
        
                        $('#sterge').slideToggle(\"slow\",\"swing\");
                    });
        
                    $('#fil').click(function() {
        
                        $(\"#adauga\").css(\"display\", \"none\");
                        $(\"#modifica\").css(\"display\", \"none\");
                        $(\"#sterge\").css(\"display\", \"none\");
        
                        $('#filtru').slideToggle(\"slow\",\"swing\");
                        
                    });
        
                    $('#badd').click(function() {
        
                        $('#bradd').click();
        
                    });


                    $('#ocutie').click(function() {
        
                        $('#iflt').attr('value', 'ocutie');
                        $('#brflt').click();

                    });
                    $('#onume').click(function() {

                        $('#iflt').attr('value', 'onume');
                        $('#brflt').click();

                    });
                    $('#ocod').click(function() {

                        $('#iflt').attr('value', 'ocod');
                        $('#brflt').click();

                    });
        
                    $('#fcut').click(function() {
        
                        $('#iflt').attr('value', 'cutie');
                        $('#brflt').click();
        
                    });
                    $('#fnum').click(function() {
        
                        $('#iflt').attr('value', 'nume');
                        $('#brflt').click();
        
                    });
                    $('#fcod').click(function() {
        
                        $('#iflt').attr('value', 'cod');
                        $('#brflt').click();
        
                    });
        
                });
                
        
            </script>
        
        </head>
        
        <body>
        
            <nav class=\"navbar navbar-expand-lg bg-light\">
                <div class=\"container-fluid\">
                    <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
                        <div class=\"navbar-nav\">
                            <a id=\"home\" class=\"nav-link active\" aria-current=\"page\" href=\"#\">Acasa</a>
                            <a id=\"add\" class=\"nav-link active\" aria-current=\"page\" href=\"#\">Adauga</a>
                            <a id=\"mod\" class=\"nav-link active\" aria-current=\"page\" href=\"#\">Modifica</a>
                            <a id=\"del\" class=\"nav-link active\" aria-current=\"page\" href=\"#\">Sterge</a>
                            <a id=\"fil\" class=\"nav-link active\" aria-current=\"page\" href=\"#\">Filtru</a>
                        </div>
                    </div>
                </div>
            </nav>
        
            <br><br>
        
        
            <table class=\"table table-hover table-borderless\">
                <thead>
                    <tr>
                        <th scope=\"col\">Cod</th>
                        <th scope=\"col\">Nume</th>
                        <th scope=\"col\" class=\"numere\">Cantitate</th>
                        <th scope=\"col\" class=\"numere\">Pret</th>
                        <th scope=\"col\" class=\"numere\">Cutie</th>
                    </tr>
                </thead>
                <tbody>
        ";


    }

    function sfarsit(&$txt){

        $fin = "
                </tbody>
            </table>


            <div class=\"adauga\" id=\"acasa\">

                <form method=\"post\" action=\"loader.php\">
                    <button id=\"reload\" type=\"submit\" class=\"btn btn-primary\" type=\"button\">Reload</button>
                </form>

            </div>

            <div class=\"adauga\" id=\"adauga\">

                <form method=\"post\" action=\"action.php\">

                    <div class=\"form-floating mb-3 butAdauga\" style=\"margin-top:35px\">
                        <input type=\"number\" class=\"form-control\" id=\"cod\" placeholder=\"Cod\" name=\"cod\">
                        <label for=\"cod\">Cod</label>
                    </div>

                    <div class=\"form-floating mb-3 butAdauga\">
                        <input type=\"text\" class=\"form-control\" id=\"nume\" placeholder=\"Nume\" name=\"nume\">
                        <label for=\"nume\">Nume</label>
                    </div>

                    <div class=\"form-floating mb-3 butAdauga\">
                        <input type=\"number\" class=\"form-control\" id=\"cantitate\" placeholder=\"Cantitate\" name=\"cantitate\">
                        <label for=\"cantitate\">Cantitate</label>
                    </div>

                    <div class=\"form-floating mb-3 butAdauga\">
                        <input type=\"text\" class=\"form-control\" id=\"pret\" placeholder=\"Pret\" name=\"pret\">
                        <label for=\"pret\">Pret</label>
                    </div>

                    <div class=\"form-floating mb-3 butAdauga\">
                        <input type=\"text\" class=\"form-control\" id=\"cutie\" placeholder=\"Cutie\" name=\"cutie\">
                        <label for=\"cutie\">Cutie</label>
                    </div>

                    <button type=\"reset\" class=\"btn btn-primary\" type=\"button\">Reset</button>
                    <button id=\"badd\" class=\"btn btn-primary\" type=\"button\">Adauga</button>

                    <input type=\"text\" name=\"tip\" value=\"adauga\" style=\"display: none;\">
                    <button type=\"submit\" id=\"bradd\" style=\"display: none;\"></button>

                </form>

            </div>

            <div class=\"adauga\" id=\"modifica\">

                <form method=\"post\" action=\"action.php\">

                    <div class=\"form-floating mb-3 butAdauga\" style=\"margin-top:35px\">
                        <input type=\"number\" class=\"form-control\" id=\"cod\" placeholder=\"Cod\" name=\"cod\">
                        <label for=\"cod\">Cod</label>
                    </div>

                    <div class=\"form-floating mb-3 butAdauga\">
                        <input type=\"text\" class=\"form-control\" id=\"nume\" placeholder=\"Nume\" name=\"nume\">
                        <label for=\"nume\">Nume</label>
                    </div>

                    <div class=\"form-floating mb-3 butAdauga\">
                        <input type=\"number\" class=\"form-control\" id=\"cantitate\" placeholder=\"Cantitate\"  name=\"cantitate\">
                        <label for=\"cantitate\">Cantitate</label>
                    </div>

                    <div class=\"form-floating mb-3 butAdauga\">
                        <input type=\"text\" class=\"form-control\" id=\"pret\" placeholder=\"Pret\" name=\"pret\">
                        <label for=\"pret\">Pret</label>
                    </div>

                    <div class=\"form-floating mb-3 butAdauga\">
                        <input type=\"text\" class=\"form-control\" id=\"cutie\" placeholder=\"Cutie\" name=\"cutie\">
                        <label for=\"cutie\">Cutie</label>
                    </div>

                    <button type=\"reset\" class=\"btn btn-primary\" type=\"button\">Reset</button>
                    <button type=\"submit\" id=\"bmod\" class=\"btn btn-primary\" type=\"button\">Modifica</button>

                    <input id=\"imod\" type=\"text\" name=\"tip\" style=\"display: none;\" value=\"modifica\">

                </form>

            </div>

            <div class=\"adauga\" id=\"sterge\">

                <form method=\"post\" action=\"action.php\">

                    <div class=\"form-floating mb-3 butAdauga\" style=\"margin-top:35px\">
                        <input type=\"number\" class=\"form-control\" id=\"cod\" placeholder=\"Cod\" name=\"cod\">
                        <label for=\"cod\">Cod</label>
                    </div>

                    <button type=\"reset\" class=\"btn btn-primary\" type=\"button\">Reset</button>
                    <button type=\"submit\" id=\"bdel\" class=\"btn btn-primary\" type=\"button\">Sterge</button>

                    <input type=\"text\" name=\"tip\" value=\"sterge\" style=\"display: none;\">

                </form>

            </div>

            <div class=\"adauga\" id=\"filtru\">

                <form method=\"post\" action=\"filter.php\">

                    <h3 style=\"text-align: center; margin-top: 35px\" >Ordoneaza dupa:</h3>

                    <div class=\"btn-group grupBut\" role=\"group\" aria-label=\"Basic example\" style=\"width: 47.5em;\">
                        <button id=\"onume\" type=\"button\" class=\"btn btn-primary\">Nume</button>
                        <button id=\"ocutie\" type=\"button\" class=\"btn btn-primary\">Cutie</button>
                        <button id=\"ocod\" type=\"button\" class=\"btn btn-primary\">Cod</button>
                    </div>

                    <h3 style=\"text-align: center; margin-top: 35px\" >Filtreaza dupa:</h3>
                
                    <div class=\"form-floating mb-3 butAdauga\">
                        <input type=\"text\" class=\"form-control\" id=\"cod\" placeholder=\"Cod\" name=\"cutie\">
                        <label for=\"cod\">Cutie</label>
                    </div>
                    <button id=\"fcut\" class=\"btn btn-primary butAdauga\" type=\"button\" style=\"margin-top: -10px;\">Filtreaza dupa cutie</button>

                    <div class=\"form-floating mb-3 butAdauga\">
                        <input type=\"text\" class=\"form-control\" id=\"cod\" placeholder=\"Cod\" name=\"nume\">
                        <label for=\"cod\">Nume</label>
                    </div>
                    <button id=\"fnum\" class=\"btn btn-primary butAdauga\" type=\"button\" style=\"margin-top: -10px;\">Filtreaza dupa nume</button>

                    <div class=\"form-floating mb-3 butAdauga\">
                        <input type=\"number\" class=\"form-control\" id=\"cod\" placeholder=\"Cod\" name=\"cod\">
                        <label for=\"cod\">Cod</label>
                    </div>
                    <button id=\"fcod\" class=\"btn btn-primary butAdauga\" type=\"button\" style=\"margin-top: -10px;\">Filtreaza dupa cod</button>


                    <button type=\"reset\" class=\"btn btn-primary butAdauga\" type=\"button\" style=\"margin-top:25px\">Reset</button>

                    <input type=\"text\" name=\"tip\" id=\"iflt\" style=\"display: none;\">
                    <button type=\"submit\" id=\"brflt\" style=\"display: none;\"></button>

                </form>

            </div>   
            



        </body>

        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\"
            integrity=\"sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2\"
            crossorigin=\"anonymous\"></script>

        </html>
        ";

        $txt .= $fin; 

    }

    function get_data($cod,&$nume,&$cantitate,&$pret,&$cutie){

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cosmetice";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT cod,nume,cantitate,pret,cutie FROM produse WHERE cod = $cod ");
            $stmt->execute();
                
        
            foreach(new RecursiveArrayIterator($stmt->fetchAll()) as $k=>$v) {
                    
                $nume = $v['nume'];
                $cantitate = $v['cantitate'];
                $pret = $v['pret'];
                $cutie = $v['cutie'];
        
            }
                
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            $conn = null;

    }

    function item($cod,$nume,$cantitate,$pret,$cutie){
        
        $row = "
        <tr>
                <th scope=\"row\">" . $cod . "</th>
                <td>" . $nume . "</td>
                <td class=\"numere\">" . $cantitate . "</td>
                <td class=\"numere\">" . $pret . "</td>
                <td class=\"numere\">" . $cutie . "</td>
            </tr>

        ";

        return $row;

    }


    function esteCutie($cutie){

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cosmetice";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT cutie FROM produse");
        $stmt->execute();

        foreach(new RecursiveArrayIterator($stmt->fetchAll()) as $k=>$v) {
            
            if( $v['cutie'] == $cutie )
            return true;

        }
        
        } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        }
        $conn = null;

        return false;
    }
    function esteCod($cod){

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cosmetice";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT cod FROM produse");
        $stmt->execute();

        foreach(new RecursiveArrayIterator($stmt->fetchAll()) as $k=>$v) {
            
            if( $v['cod'] == $cod )
            return true;

        }
        
        } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        }
        $conn = null;

        return false;
    }
    function esteNume($nume){

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cosmetice";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT cod FROM produse WHERE nume LIKE CONCAT('%', ? , '%') ");
        $stmt->execute([$_POST['nume']]);

        foreach(new RecursiveArrayIterator($stmt->fetchAll()) as $k=>$v) {
            
            return true;

        }
        
        } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        }
        $conn = null;

        return false;

    }



    if( $_POST["tip"] == "cutie" ){
        
        if( !$_POST['cutie'] ){
            $_SESSION['error'] = 1;
            header("location:load_error.php");
            exit();
        }

        if( !esteCutie($_POST['cutie']) ){
            $_SESSION['error'] = 2;
            header("location:load_error.php");
            exit();
        }
        else{

            $cod = "";
            $nume = "";
            $cantitate = "";
            $pret = "";
            $cutie = "";

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "cosmetice";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT cod FROM produse WHERE cutie=? ");
                $stmt->execute([$_POST['cutie']]);
                    
                foreach(new RecursiveArrayIterator($stmt->fetchAll()) as $k=>$v) {
                        
                    $cod = $v['cod'];
                    get_data($cod,$nume,$cantitate,$pret,$cutie);
                    $txt .= item($cod,$nume,$cantitate,$pret,$cutie);
            
                }
                    
                } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
            }
            $conn = null;

        }

    }

    if( $_POST["tip"] == "nume" ){
        
        if( !$_POST['nume'] ){
            $_SESSION['error'] = 1;
            header("location:load_error.php");
            exit();
        }

        if( !esteNume($_POST['nume']) ){
            $_SESSION['error'] = 2;
            header("location:load_error.php");
            exit();
        }
        else{

            $cod = "";
            $nume = "";
            $cantitate = "";
            $pret = "";
            $cutie = "";

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "cosmetice";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT cod FROM produse WHERE nume LIKE CONCAT('%', ? , '%') ");
                $stmt->execute([$_POST['nume']]);
                    
                foreach(new RecursiveArrayIterator($stmt->fetchAll()) as $k=>$v) {
                        
                    $cod = $v['cod'];
                    get_data($cod,$nume,$cantitate,$pret,$cutie);
                    echo $nume;
                    $txt .= item($cod,$nume,$cantitate,$pret,$cutie);
            
                }
                    
                } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
            }
            $conn = null;

        }

    }

    if( $_POST["tip"] == "cod" ){
        
        if( !$_POST['cod'] ){
            $_SESSION['error'] = 1;
            header("location:load_error.php");
            exit();
        }
        if( !esteCod($_POST['cod']) ){
            $_SESSION['error'] = 2;
            header("location:load_error.php");
            exit();
        }
        else{

            $cod = "";
            $nume = "";
            $cantitate = "";
            $pret = "";
            $cutie = "";

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "cosmetice";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT cod FROM produse WHERE cod = ? ");
                $stmt->execute([$_POST['cod']]);
                    
                foreach(new RecursiveArrayIterator($stmt->fetchAll()) as $k=>$v) {
                        
                    $cod = $v['cod'];
                    get_data($cod,$nume,$cantitate,$pret,$cutie);
                    echo $nume;
                    $txt .= item($cod,$nume,$cantitate,$pret,$cutie);
            
                }
                    
                } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
            }
            $conn = null;

        }

    }

    if( $_POST["tip"] == "ocutie" ){
        
        $cod = "";
            $nume = "";
            $cantitate = "";
            $pret = "";
            $cutie = "";

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "cosmetice";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT cod FROM produse ORDER BY cutie ");
                $stmt->execute();
                    
                foreach(new RecursiveArrayIterator($stmt->fetchAll()) as $k=>$v) {
                        
                    $cod = $v['cod'];
                    get_data($cod,$nume,$cantitate,$pret,$cutie);
                    $txt .= item($cod,$nume,$cantitate,$pret,$cutie);
            
                }
                    
                } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
            }
            $conn = null;

    }

    if( $_POST["tip"] == "onume" ){
        $cod = "";
            $nume = "";
            $cantitate = "";
            $pret = "";
            $cutie = "";

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "cosmetice";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT cod FROM produse ORDER BY nume ");
                $stmt->execute();
                    
                foreach(new RecursiveArrayIterator($stmt->fetchAll()) as $k=>$v) {
                        
                    $cod = $v['cod'];
                    get_data($cod,$nume,$cantitate,$pret,$cutie);
                    $txt .= item($cod,$nume,$cantitate,$pret,$cutie);
            
                }
                    
                } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
            }
            $conn = null;
    }

    if( $_POST["tip"] == "ocod" ){
        $cod = "";
            $nume = "";
            $cantitate = "";
            $pret = "";
            $cutie = "";

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "cosmetice";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT cod FROM produse ORDER BY cod ");
                $stmt->execute();
                    
                foreach(new RecursiveArrayIterator($stmt->fetchAll()) as $k=>$v) {
                        
                    $cod = $v['cod'];
                    get_data($cod,$nume,$cantitate,$pret,$cutie);
                    $txt .= item($cod,$nume,$cantitate,$pret,$cutie);
            
                }
                    
                } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
            }
            $conn = null;
    }


    sfarsit($txt);

    fwrite($myfile, $txt);
    fclose($myfile);
    header("location:index.html");  
        exit();

?>