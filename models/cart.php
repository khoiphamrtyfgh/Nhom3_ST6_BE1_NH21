<?php
class Cart extends Db{
    public function getAllCart(){
        $sql = self::$connection->prepare("SELECT * FROM cart");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array   
    }
    public function getCartById_user($id_user){
        $sql = self::$connection->prepare("SELECT * FROM cart WHERE id_user = ?");
        
        $sql->bind_param("i",$id_user);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function addCart($id_user, $id ,$pty){
        $sql = self::$connection->prepare("INSERT INTO `cart`(`id_user`, `id_product`, `pty`) VALUES (?,?,?)");
        
        $sql->bind_param("iii",$id_user, $id ,$pty);
        return $sql->execute(); 
    }
    public function updateCart($id_user, $id, $pty){
        $sql = self::$connection->prepare("UPDATE `cart` SET `pty`= ? WHERE `id_user`= ? AND`id_product`= ? ");
        $sql->bind_param("iii",$pty,$id_user,$id);
        return $sql->execute(); 
    }
    public function deleteCart1($id_user, $id){
        $sql = self::$connection->prepare("DELETE FROM `cart` WHERE `id_user` = ?  AND `id_product`= ?");
        
        $sql->bind_param("ii",$id_user, $id);
        return $sql->execute(); 
    }
    public function deleteCartAll($id_user){
        $sql = self::$connection->prepare("DELETE FROM `cart` WHERE `id_user` = ?");
        
        $sql->bind_param("i",$id_user);
        return $sql->execute(); 
    }
 
}
