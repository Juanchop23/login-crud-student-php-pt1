<?php
    include './includes/conect.php';

    if($data === false){
        die("Fallo al conectar");
    }

    #Something
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM login WHERE username='".$username."' AND password='".$password."' ";

        #Veryfing if username and password exists
        $result = mysqli_query($data, $sql);
        $row = mysqli_fetch_array($result);

        if($row["usertype"]=="admin"){
            $_SESSION["username"]=$username; #Adding the username on admin or user intterface
            header("Location:adminhome.php");
        } 
        elseif($row["usertype"]="user"){ #Para el usuario es un solo igual
            $_SESSION["username"]=$username; #Adding the username on admin or user intterface
            header("Location:userhome.php");
        } 
        else{
            echo "Nombre de usuario o contraseña incorrectos";
        }
    }
