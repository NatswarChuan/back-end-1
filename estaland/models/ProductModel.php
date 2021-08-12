<?php
class ProductModel extends Db{
    public function getProductIndex(){
        $sql = parent::$conection->prepare("SELECT * FROM `products` JOIN `posts` on `posts`.`post_id` = `products`.`post_id` ORDER BY `posts`.`post_date` DESC LIMIT 6");
        return parent::select($sql);
    }

    public function getProductsPages($page,$perPage){
        $start = $perPage * ($page-1);
        $sql = parent::$conection->prepare("SELECT * FROM `products` JOIN `posts` on `posts`.`post_id` = `products`.`post_id` ORDER BY `posts`.`post_date` DESC LIMIT ?,?");
        $sql->bind_param('ii',$start,$perPage);
        return parent::select($sql);
    }
    
    public function getCountProducts(){
        $sql = parent::$conection->prepare("SELECT COUNT(`posts`.`post_id`) FROM `products` JOIN `posts` on `posts`.`post_id` = `products`.`post_id` ORDER BY `posts`.`post_date`");
        return parent::select($sql)[0]['COUNT(`posts`.`post_id`)'];
    }
}