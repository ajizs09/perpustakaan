<?php
    session_start();
    include "../../config/koneksi.php";

      $username  = $_POST['username'];
      $password  = $_POST['password'];
//  echo $username;
//  echo $password;
    if(empty($username) == true OR empty($password) == true) {
         $errors[] = '* Username/Password field is required';
    }
    else{
        // echo $username;

    //     //if username exists
        $sql = "SELECT * FROM user where Username ='$username'";
        $query = $db->query($sql);
        if( $query->num_rows > 0) {
            // echo $username;
    //         //check username and password
            $password = $password;

            $sql = "SELECT * FROM user WHERE username = '$username'";
            $query = $db->query($sql);
    //         //check usrname and password
            $password = $password;

            $sql = "SELECT * FROM user WHERE username = '$username'
            AND password = '$password'";
            // echo $sql;
            $query = $db->query($sql);
            // print_r($query);
            $result = $query->fetch_array();

            $db->close();
            // $hasil = $query->num_rows;


            if($query->num_rows == 1)   {
                $_SESSION['logged_id'] = true;
                $_SESSION['user_id']   = $result['id_user'];
                $_SESSION['username']  = $result['username'];
                $_SESSION['level']     = $result['level'];
               
                header ('location: ../../beranda.php');
                exit();
            // echo "berhasil";

            }
            else {
                header('location: ../../index.php');
            }
        }
        else {
            header('location: ../../index.php');
        }
    }    
               