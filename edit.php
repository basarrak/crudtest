<?php
include "connect.php";


$eid = $_GET['eid'];

$sql = "SELECT * FROM crud WHERE id = $eid";

$result = mysqli_query($conn, $sql);

if ($result){ 
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row ['phone'];
    }
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    $sql = "UPDATE crud SET 
    name='$name', 
    email='$email', 
    phone='$phone' 
    WHERE id=$eid";
    
    $result = mysqli_query($conn, $sql);
    if($result){
        header("location: index.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไข</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<form method="post" class="from groub my-3">
        <div class="from group">
            <label for="name">ชื่อ-นามสกุล</label>
            <input type="text" name="name" value=<?php echo $name?>>
        </div>
        <div class="from group">
            <label for="email">email</label>
                <input type="text" name="email" value=<?php echo $email?>>

        <div class="form group">
            <label for="phone">เบอร์</label>
            <input type="tel" name="phone" id="phone" value=<?php echo $phone?> >
        </div> <br>
        <input type="submit"  name="submit" value="แก้ไขข้อมูล">




    </form>

    
</body>

</html>