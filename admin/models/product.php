<?php
class Product extends Db{
    public function getAllProducts(){
        $sql = self::$connection->prepare("SELECT * 
        FROM `products`,`manufactures`,`protypes`
        WHERE `products`.`manu_id` = `manufactures`.`manu_id`
        AND `products`.`type_id` = `protypes`.`type_id`");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array   
    }
    public function getAllProductsDesc(){
        $sql = self::$connection->prepare("SELECT * 
        FROM `products`,`manufactures`,`protypes`
        WHERE `products`.`manu_id` = `manufactures`.`manu_id`
        AND `products`.`type_id` = `protypes`.`type_id`
        ORDER BY `id` DESC");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array   
    }
    
    public function get10AllProducts( $page, $perPage)
    {
        // Tính số thứ tự trang bắt đầu
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * 
        FROM `products`,`manufactures`,`protypes`
        WHERE (`products`.`manu_id` = `manufactures`.`manu_id`
        AND `products`.`type_id` = `protypes`.`type_id`)LIMIT ?, ?");
        $sql->bind_param("ii", $firstLink, $perPage);
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
    public function addProduct($name , $manu_id , $type_id, $price ,$image, $description ,$feature ,$time){
        $sql = self::$connection->prepare("INSERT INTO `products`( `name`, `manu_id`, `type_id`, `price`, `image`, `description`, `feature`, `created_at`) 
        VALUES (  ? , ? , ? , ? , ? , ? , ? ,?)");     
        $sql->bind_param("siiissis",$name , $manu_id , $type_id, $price ,$image, $description ,$feature,$time);
        return $sql->execute();
    }
    public function delProduct($id){
        $sql = self::$connection->prepare("DELETE FROM `products` WHERE `id`= ?");     
        $sql->bind_param("i",$id);
        return $sql->execute();
    }
}
