<?php
    session_start();
    header('Content-Type: text/html; charset=UTF-8');
    include('connect.php');
    if(isset($_POST['add']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $birth_date = $_POST['birth_date'];

        if($name == "" ||  $email == ""|| $birth_date ==""){
            echo"Ban chua nhap day du thong tin.Yeu cau nhap day du thong tin";
        }else{
            $sql = "INSERT INTO students(name,email,birth_date) VALUES ('$name','$email','$birth_date')";
            $result = mysqli_query($connect,$sql);
            header("loccation: useradmin.php");
        }
    }
?>
<h1>Thêm</h1>
<form action='' class = "add" method='POST'> 
        <label for="name">Họ và Tên</label>
        <input type="text" name = "name"><br>
        <label for="email">Email</label>
        <input type="text" name = "email"><br>
        <label for="date">Ngày Sinh</label>
        <input type="date" name = "birthdate"><br>
        <input type='submit' class="button" name="add" value='Thực Hiện'/>
<form> 