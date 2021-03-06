<?php
class Manufacture extends Db{
    public function getAllManufacture(){
        $sql = self::$connection->prepare("SELECT * FROM manufactures");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array   
    }
    public function addManufacture($manu_name){
        $sql = self::$connection->prepare("INSERT INTO `manufactures`( `manu_name`) 
        VALUES (?)");     
        $sql->bind_param("s",$manu_name );
        return $sql->execute();
    }
    public function delManufacture($manu_id){
        $sql = self::$connection->prepare("DELETE FROM `manufactures` WHERE `manu_id` =  ?");     
        $sql->bind_param("i",$manu_id);
        return $sql->execute();
    }
    public function getManuByID($manu_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `manufactures` WHERE `manu_id`=?");
        $sql->bind_param("i", $manu_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function editManufacture($manu_id,$manu_name)
        {
            $sql = self::$connection->prepare("UPDATE `manufactures` SET `manu_name`= ? WHERE `manu_id`= ? ");
            $sql->bind_param("si",$manu_name,$manu_id);
            return $sql->execute();
        }
   
}
