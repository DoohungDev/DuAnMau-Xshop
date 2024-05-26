<?php
    function pdo_get_connection(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        
        try {
        $conn = new PDO("mysql:host=$servername;dbname=x-shop", $username, $password);
          // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected database successfully";
        return $conn;
        } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }
    }

    // hàm thực thi câu lệnh sql
    function pdo_execute($sql){
        $sql_args = array_slice(func_get_args() , 1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn -> prepare($sql);
            $stmt -> execute($sql_args);
        }catch(PDOExecption $e){
            throw $e;
        }finally{
            unset($conn);
        }
    }

    // hàm truy vấn nhiều data
    function pdo_query($sql){
        $sql_args = array_slice(func_get_args() , 1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn -> prepare($sql);
            $stmt -> execute($sql_args);
            $rows = $stmt->fetchAll();
            return $rows;
        }catch(PDOExecption $e){
            throw $e;
        }finally{
            unset($conn);
        }
    }
    
    // hàm truy vấn 1 data
    function pdo_one_query($sql){
        $sql_args = array_slice(func_get_args() , 1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn -> prepare($sql);
            $stmt -> execute($sql_args);
            $rows = $stmt->fetch(PDO::FETCH_ASSOC);
            return $rows;
        }catch(PDOExecption $e){
            throw $e;
        }finally{
            unset($conn);
        }
    }

?> 