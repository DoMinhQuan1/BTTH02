<?php
    session_start();
    header('Content-Type: text/html; charset=UTF-8');
    if(isset($_POST['login']))
    {
        include('connect.php');
        $username = addslashes($_POST['username']);
        $password = addslashes($_POST['password']);
        $role = addslashes($_POST['role']);
        if (!$username || !$password || !$role) {
            echo "Tài khoản/mật khẩu chưa chính xác hoặc chưa chọn chức vụ";
            exit;
        }    
        $sql = "SELECT * FROM users WHERE username='$username' and password='$password' and role = '$role'";
        $result = mysqli_query($connect,$sql);
        if(mysqli_num_rows($result)>0){
            if($role === "Admin"){
                include('useradmin.php');
                }else if($role === "Giảng Viên"){
                        include('userlecturers.php');
                        }else if($role === "Sinh Viên"){
                                    include('userstudent.php');
                                }
        }
        else
        {
            echo "ERROR!!!!!!!!!";
        }
       $connect->close();
    }
?>