<?php

error_reporting(0);
session_start();


if (!isset($_SESSION['username'])) {
    header('location:login.php');
    exit();
} elseif ($_SESSION['usertype'] == 'student') {
    header("location:login.php");
    exit();
}

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);

$sql = "SELECT * FROM user";
$result = mysqli_query($data, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>

    <?php include 'admin_css.php'; ?>

    <style type="text/css">
        .table_th {
            padding: 20px;
            font-size: 20px;
        }

        .table_td {
            padding: 20px;
            background-color: red;
        }
    </style>
</head>
<body>

<?php include 'admin_sidebar.php'; ?>

<div class="content">
    <h1>Te dhenat e studentit</h1>


    <?php
    if($_SESSION['message'])
    {
        echo $_SESSION['message'];
    }
    unset($_SESSION['message']);

    
    ?>

    <table border="1px">
        <tr>
            <th class="table_th">Emri</th>
            <th class="table_th">Email</th>
            <th class="table_th">Nr mobil</th>
            <th class="table_th">Password</th>
            <th class="table_th">Fshij</th>
        </tr>

        <?php
        while ($info = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td class="table_td"><?php echo htmlspecialchars($info['username']); ?></td>
            <td class="table_td"><?php echo htmlspecialchars($info['email']); ?></td>
            <td class="table_td"><?php echo htmlspecialchars($info['phone']); ?></td>
            <td class="table_td"><?php echo htmlspecialchars($info['password']); ?></td>

            <td class="table_td">
                <a href="delete.php?student_id=<?php echo $info['id']; ?>" onClick="return confirm('A je i sigurt qe deshiron ta fshish?');">
                    Fshij
                </a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>

</body>
</html>
