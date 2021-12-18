<?php
class User extends Db{
    public function getAllUser(){
        $sql = self::$connection->prepare("SELECT * FROM users");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array   
    }
    public function checkLogin($username,$password){
        $sql=self::$connection->prepare("SELECT * FROM users
        WHERE `username`=? AND `password`=?");
        $password = md5($password);
        $sql->bind_param("ss",$username,$password);
        $sql->execute();
        $items=array();
        $items=$sql->get_result()->num_rows;
        if($items==1){
            return true;
        }
        else{
            return false;
        }
    }
    public function addUser($username, $password,$fullname,$address,$email,$phone)
    {
        $sql = self::$connection->prepare("INSERT INTO `users`(`username`, `password`, `role_id`, `fullname`, `address`, `email`, `phone`) VALUES (?,?,1,?,?,?,?)");
        $password = md5($password);
        $sql->bind_param("ssssss",$username, $password,$fullname,$address,$email,$phone);
        $sql->execute();
        return $sql;
    }
    public function checkUser($username)
    {
        $sql = self::$connection->prepare("SELECT * FROM users WHERE `username`= ?");
        $sql->bind_param("s",$username);
        $sql->execute();
        //$items = array();
        $items = $sql->get_result()->num_rows;
        if ($items == 1){
           return true;
       }
       else {
           return false;
       }
    }
}

