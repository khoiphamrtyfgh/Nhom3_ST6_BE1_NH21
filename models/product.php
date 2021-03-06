<?php
class Product extends Db{
    public function getAllProducts(){
        $sql = self::$connection->prepare("SELECT * FROM products");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array   
    }
    public function getProductById($id){
        $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
        
        $sql->bind_param("i",$id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductType($type_id){
        $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = ?");
     
        $sql->bind_param("i",$type_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function search($keyword ,$searchCol){
        $sql = self::$connection->prepare("SELECT * FROM products WHERE( `name` LIKE ? )AND (`type_id` = ? OR ? = 0)");
        $keyword = "%$keyword%";
        $sql->bind_param("sii", $keyword,$searchCol,$searchCol);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array   
    }
    public function get3ProductsByType($type_id, $page, $perPage)
    {
        // Tính số thứ tự trang bắt đầu
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = ? LIMIT ?, ?");
        $sql->bind_param("iii", $type_id, $firstLink, $perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function get3ProductsBySearch($keyword ,$searchCol, $page, $perPage)
    {
        // Tính số thứ tự trang bắt đầu
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE ( `name` LIKE ? ) AND (`type_id` = ? OR ? = 0 )LIMIT ?, ?");
        $keyword = "%$keyword%";
        $sql->bind_param("siiii",$keyword ,$searchCol,$searchCol, $firstLink, $perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function paginate($url, $total, $perPage,$page)
    {
        $totalLinks = ceil($total/$perPage);
 	    $link ="";
    	for($j=1; $j <= $totalLinks ; $j++)
     	{
            if($page == $j){
                $link = $link."<li class='active'>$j</li>";
            }else
             $link = $link."<li><a href='$url&page=$j'> $j </a></li>";
     	}
         return $link;  
    }
    public function getNewProductType($type_id){
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `type_id` = ? ORDER BY `created_at` DESC LIMIT 10");
     
        $sql->bind_param("i",$type_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getTopProductType($type_id){
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `type_id` = ? AND `feature` = 1 ORDER BY `created_at` DESC LIMIT 10");
     
        $sql->bind_param("i",$type_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getNewProduct4($type_id){
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `type_id` = ? ORDER BY `created_at` DESC LIMIT 4");
     
        $sql->bind_param("i",$type_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllProductByCart($id_user){
        $sql = self::$connection->prepare("SELECT * FROM products , cart WHERE id_user = ? AND id_product = id");            
        
        $sql->bind_param("i",$id_user);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array   
    }
    
}
