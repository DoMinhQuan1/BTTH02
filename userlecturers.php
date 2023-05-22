<?php
 include('connect.php');
?>
<!DOCTYPE html> 
<html> 
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
</head> 
<body> 
    <h1>Giảng Viên</h1>
    <table border = 2>
        <tr>
            <th>course_id</th>
            <th>student_id</th>
            <th>course_name</th>
            <th>enroll_date</th>
            <th>describe</th>
            <th><a href="enrollments_add.php">Them</a></th>
        </tr>
        <?php
            $sql = "SELECT * FROM enrollments";
            $result = mysqli_query($connect,$sql);
            while($rows = mysqli_fetch_array($result)){
        ?>
        <tr>
        <td><?php echo $rows["course_id"];?></td>
        <td><?php echo $rows["student_id"];?></td>
        <td><?php echo $rows["course_name"];?></td>
        <td><?php echo $rows["enroll_date"];?></td>
        <td><?php echo $rows["describe"];?></td>
        <td><a href="">Sửa</a>|<a href="">Xóa</a></td>
        </tr>
        <?php } ?>   
    </table>
    <table border = 2>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>birth date</th>
            <th>
                <a href="student_add.php">Them</a>
            </th>
        </tr>
        <?php
            $sql = "SELECT * FROM students";
            $result = mysqli_query($connect,$sql);
            while($rows = mysqli_fetch_array($result)){
        ?>

        <tr>
        <td><?php echo $rows["id"];?></td>
        <td><?php echo $rows["name"];?></td>
        <td><?php echo $rows["email"];?></td>
        <td><?php echo $rows["birthdate"];?></td>
        <td><a href="">Sửa</a>|<a href="">Xóa</a></td>
        </tr>
        
        <?php } ?>

        
    </table>
</body> 
</html>