<?php

    session_start();

    function append(){
        $servername = "localhost";
        $dbname = "cosmetice";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO produse (cod, nume, cantitate, pret, cutie) VALUES (?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$_POST['cod'], $_POST['nume'], $_POST['cantitate'], $_POST['pret'], $_POST['cutie']]);
            
            header("location:loader.php"); 

        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

        $conn = null;
    }

    function isIn($cod){

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

    function adauga(){

        if( isIn($_POST['cod']) )
            if( !$_POST['cantitate'] )
            {
                $_SESSION['error'] = '1';
                header("location:load_error.php");
            }
            else
                {
                    $servername = "localhost";
                    $dbname = "cosmetice";
        
                    try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", "root", "");
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                    $cod = $_POST['cod'];
        
                    $sql = "UPDATE produse SET cantitate=cantitate+? WHERE cod=$cod";
        
                    $stmt = $conn->prepare($sql);
                    $stmt->execute([$_POST['cantitate']]);
        
                    header("location:loader.php"); 
        
                    } catch(PDOException $e) {
                    echo $sql . "<br>" . $e->getMessage();
                    }
        
                    $conn = null;

                }
        else
            if( !$_POST['cod'] || !$_POST['nume'] || !$_POST['cantitate'] || !$_POST['pret'] || !$_POST['cutie'] )
                {
                    $_SESSION['error'] = '1';
                    header("location:load_error.php");
                }
            else
                append();



    }

    function modifica(){
        
        if( !$_POST['cod'] ){
            $_SESSION['error'] = '1';
            header("location:load_error.php");
            exit();
        }

        if( !isIn($_POST['cod']) ){
            $_SESSION['error'] = '2';
            header("location:load_error.php");
            exit();
        }

        if(!$_POST['nume'] && !$_POST['cantitate'] && !$_POST['pret'] && !$_POST['cutie'] ){
            $_SESSION['error'] = '1';
            header("location:load_error.php");
            exit();
        }

        $servername = "localhost";
        $dbname = "cosmetice";
        $cod = $_POST['cod'];

        if( $_POST['nume'] ){
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", "root", "");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "UPDATE produse SET nume=? WHERE cod=$cod";
    
                $stmt = $conn->prepare($sql);
                $stmt->execute([$_POST['nume']]);
    
                } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
                }

        }

        if( $_POST['cantitate'] ){
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", "root", "");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "UPDATE produse SET cantitate=? WHERE cod=$cod";
    
                $stmt = $conn->prepare($sql);
                $stmt->execute([$_POST['cantitate']]);
    
                } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
                }

        }

        if( $_POST['pret'] ){
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", "root", "");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "UPDATE produse SET pret=? WHERE cod=$cod";
    
                $stmt = $conn->prepare($sql);
                $stmt->execute([$_POST['pret']]);
    
                } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
                }

        }

        if( $_POST['cutie'] ){
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", "root", "");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "UPDATE produse SET cutie=? WHERE cod=$cod";
    
                $stmt = $conn->prepare($sql);
                $stmt->execute([$_POST['cutie']]);
    
                } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
                }

        }

        $conn = null;

        header("location:loader.php"); 


    }

    function sterge(){
        
        $servername = "localhost";
        $dbname = "cosmetice";

        $cod = $_POST['cod'];

        if (!isIn($cod)){
            $_SESSION['error'] = '2';
            header("location:load_error.php");

            exit();
        }

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "DELETE FROM produse WHERE cod = $cod";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            
            header("location:loader.php");
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

        $conn = null;

    }


    if($_POST["tip"] == "adauga"){
        adauga();
    }
    if($_POST["tip"] == "modifica"){
        modifica();
    }
    if($_POST["tip"] == "sterge"){
        sterge();
    }

?>