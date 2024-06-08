<?php
        function insert_user($email,$user,$pass){
            $sql="insert into user(email,user,pass) values('$email','$user','$pass')";
            pdo_execute($sql);
        }
        function check_user($user,$pass){
            $sql="select * from user where user='".$user."' and pass='".$pass."' ";
            $sp=pdo_query_one($sql);
            return $sp;
        }
        function check_email($email){
            $sql="select * from user where email='".$email."'";
            $sp=pdo_query_one($sql);
            return $sp;
        }
        function update_user($email,$user,$pass,$address,$tel,$id){
            $sql="update user set email='".$email."', user='".$user."', pass='".$pass."', address='".$address."', tel='".$tel."'  where id=".$id;   
            pdo_execute($sql);
        }
        function loadall_taikhoan(){
            $sql= "select * from user order by id desc";
            $list_user=pdo_query($sql);
            return $list_user;
        }
        function delete_tk($id){
            $sql="delete from user where id=".$id;
            pdo_execute($sql);
        }
?>