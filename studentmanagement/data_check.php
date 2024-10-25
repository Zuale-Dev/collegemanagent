<?php

session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("Connection error");
}

if (isset($_POST['apply'])) {
    // Kontrollojmë nëse të gjitha fushat janë të vendosura për të shmangur paralajmërimet
    $data_name = isset($_POST['name']) ? $_POST['name'] : '';
    $data_email = isset($_POST['email']) ? $_POST['email'] : '';
    $data_phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $data_message = isset($_POST['message']) ? $_POST['message'] : '';

    // Kontrollojmë nëse tabela ekziston për të shmangur gabimin fatal
    $check_table = mysqli_query($data, "SHOW TABLES LIKE 'admission'");
    if (mysqli_num_rows($check_table) == 0) {
        die("Gabim: Tabela 'admission' nuk ekziston. Kontrolloni bazën e të dhënave.");
    }

    // Query për të shtuar të dhënat në tabelë
    $sql = "INSERT INTO admission (name, email, phone, message)
            VALUES ('$data_name', '$data_email', '$data_phone', '$data_message')";

    $result = mysqli_query($data, $sql);

    if ($result) {
      //  echo "Aplikimi u krye me sukses";

        $_SESSION['message']="Aplikimi juaj u dergua me sukses";

        header("location:index.php");

    } else {
        echo "Aplikimi deshtoi: " . mysqli_error($data);
    }
}

?>
