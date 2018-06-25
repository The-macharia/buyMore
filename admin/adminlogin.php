<?php 
include('../core/connection.php'); // Get the Connection Class

if(isset($_POST['username'], $_POST['password'])){
  
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    if ($username ==" " and $password == "")
    {
        echo "Please fill all the fields";
    }
else{
    $query = $pdo -> prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
    $query -> bindValue(1,$username);
    $query -> bindValue(2,$password);
    $query -> execute();
}
    $num = $query -> rowCount();
    if($num == 1){
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        header('Location: adminHome.php');
        exit();
    }else{
        $error = "Error";
}
}
?>