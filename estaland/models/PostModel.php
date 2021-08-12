<?php
class PostModel extends Db{
    public function getPostIndex(){
        $sql = parent::$conection->prepare("SELECT * FROM `news` JOIN `posts` on `posts`.`post_id` = `news`.`post_id` ORDER BY `posts`.`post_date` DESC LIMIT 4");
        return parent::select($sql);
    }
}