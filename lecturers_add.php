<?php
    session_start();
    header('Content-Type: text/html; charset=UTF-8');
    include('connect.php');
    if(isset($_POST['add']))
    {   
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        if($id=="" || $name == "" ||  $email == ""|| $phone ==""){
            echo"Yêu cầu nhập đầy đủ thông tin cần thiết";
        }else{
            $sql = "INSERT INTO lecturers(id,name,email,phone) VALUES ('$id','$name','$email','$phone')";
            $result = mysqli_query($connect,$sql);
            header("loccation: Admin.php");
        }
    }
?>
<h1>Thêm</h1>
<form action='' class = "lecturers_add" method='POST'> 
        <label for="id">ID</label>
        <input type="text" name = "id"><br>
        <label for="name">Họ và Tên</label>
        <input type="text" name = "name"><br>
        <label for="email">Email</label>
        <input type="text" name = "email"><br>
        <label for="Phone">Số điện thoại</label>
        <input type="text" name = "phone"><br>
        <input type='submit' class="button" name="add" value='Hoan tat'/>
<form> 