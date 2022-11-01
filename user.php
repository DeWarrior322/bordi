
<?php
if (isset($_POST["userFIO"]) && isset($_POST["userEmail"]) && isset($_POST["userPhone"]) && isset($_POST["userPassword"])) {
      
    $conn = new mysqli("localhost", "root", "root", "accounts");
    
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $FIO = $conn->real_escape_string($_POST["userFIO"]);
    $Email = $conn->real_escape_string($_POST["userEmail"]);
    $Phone = $conn->real_escape_string($_POST["userPhone"]);
    $Pass = $conn->real_escape_string($_POST["userPassword"]);
    $sql = "INSERT INTO accounts (FIO, Email, Phone, Pass) VALUES ('$FIO', $Email, $Phone, $Password)";
    if($conn->query($sql)){
        echo "Данные успешно добавлены";
    } else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
}
?>