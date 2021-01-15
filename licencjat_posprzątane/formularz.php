<?php
    define('DB_SERVER', 'localhost');
    define('DB_USER', '17_sularz');
    define('DB_PASSWORD', 'C2b3f5r8w1');
    define('DB_DATABASE', '17_sularz');
    
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if($conn->connection_error){
        die("Połączenie z serwerem nieudane. Spróbuj jeszcze raz".$conn->connection_error);
        header("refresh:10; url=index.html");
    }
    session_start();

    if(isset($_POST['submit'])){
        $email= $_POST['email'];
        $content = $_POST['content'];
        $sql = "INSERT INTO form(email, content) VALUES('$email', '$content');";
        if($conn->query($sql) === TRUE) {
            echo 'Twoja wiadomość jest już na moim mailu. Wkrótce się do Ciebie odezwę!';
        }
        mysqli_close($conn);      
    }
?>
