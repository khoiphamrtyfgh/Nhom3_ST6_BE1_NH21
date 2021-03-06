<?php
class Manufacture extends Db{
    public function getAllManufacture(){
        $sql = self::$connection->prepare("SELECT * FROM manufactures");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array   
    }
    public function getManufactureById($manuid){
        $sql = self::$connection->prepare("SELECT * FROM manufactures WHERE manuid = ?");
        
        $sql->bind_param("i",$manuid);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
 
}
