<?php

require_once('BaseDao.php');

class AppDao extends BaseDao{

    public static function getDados(){
        return self::fetchAllAssoc("SELECT * FROM aluno");
    }

    public static function GetDado($id){
        return self::fetchAssoc("SELECT * from aluno WHERE id = " .$id);
    }

    public static function save($data){
        return self::executeAndGetRowCount(
            "INSERT INTO aluno SET nome = :nome, matricula = :matricula",
        [
            ':nome'=>$data->nome,
            ':matricula'=>$data->matricula
        ]);
    }

}