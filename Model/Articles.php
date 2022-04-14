<?php

require_once('Model.php');

class Article extends Model {

    function getAllArticles(){

        $sql = "SELECT * FROM blog";
        $result = $this->selectQuery($sql);
        $articles = $result->fetchAll(PDO::FETCH_ASSOC);
        return $articles;
    }

    function getOneArt($id){
        $sql = "SELECT * FROM blog WHERE id = :id";
        $params= ['id' => $id];
        $result = $this->selectQuery($sql,$params);
        $one_art = $result->fetchAll(PDO::FETCH_ASSOC);
        return $one_art;
    }
}