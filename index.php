<?php

include 'db.php';
$data = new Databases;
$msg = '';
if(isset($_POST["submit"]))
{
    $insert_data = array(
    'email' => mysqli_real_escape_string($data->con, $_POST['email'])
    );
    if($data->insert('emailtable', $insert_data))
    {
        $msg = "Email inserted successfully into database.";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enter your email</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <form method="post">
       <div style="margin: auto; width: 25%; margin-top: 60px;">
        <label>Enter your email:</label><br>
        <input type="email" name="email" required>
        <input type="submit" name="submit" value="Submit"><br>
        <span>
            <?php
            if (isset($msg))
            {
                echo $msg;
            }
            ?>
        </span>
       </div>
    </form>
</body>
</html>
