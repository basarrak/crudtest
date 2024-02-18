<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <button> 
    <a href="form.php ">เพิ่มข้อมูล</a>
    </button>
        <table>
        <thead>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>oper</th>
        </thead>
        
        <?php

        include "connect.php";

        $sql = "SELECT * FROM `crud`";

        $result = mysqli_query($conn,$sql);

        while ($row = mysqli_fetch_assoc($result)){
            echo"
        <tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['phone']}</td>

        <td>
        <button>
        <a href='edit.php?eid={$row['id']}'>เพิ่ม</a>
        </button>
      
        <button>
        <a href='del.php?did={$row['id']}'>ลบ</a>
        </button>

        </td>
        </tr>  
         ";

        }

        ?>

        
</table>
</body>
</html>