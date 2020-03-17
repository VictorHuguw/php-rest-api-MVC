<?php

require_once('ConnectionDao.php');

class BaseDao{

    public static function fetchAllAssoc($query,$params = array()){
        
        $result = Connection::getInstance()->prepare($query);
        $result->execute($params);
        return $result->fetch(PDO::FETCH_ASSOC);

    }

    public static function fetchAssoc($query,$params = array()){
        
        $result = Connection::getInstance()->prepare($query);
        $result->execute($params);
        return $result->fetch(PDO::FETCH_ASSOC);

    }

    public static function executeAndGetRowCount($query,$params = array()){

        $result = Connection::getInstance()->prepare($query);
        $result->execute($params);
        return $result->rowCount();

    }

}