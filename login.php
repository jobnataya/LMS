<?php 
include "db.connection.php";
if (isset($_POST['Name']) && isset($_POST['password']) ) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $Name = validate($_POST['Name']);
    $password = validate($_POST['password']);

    if (empty($Name)) {
        header("Location: index.php?error=ID is required");
        exit();
    }else if(empty($password)){
        header("Location: index.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE name='$Name' AND password='$password'";
        
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result)===1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['name'] === $Name && $row  ['password'] === $password) {
                echo"Logged in!";
            }else{
                header("Location: index.pnp?error=Name and Password Incorrect");
            exit();
           }
        }else{
            header("Location: index.php?error=Name and Password Incorrect");
            exit();
        }
    }
}else{
    header("Location: index.php");
    exit();
}
