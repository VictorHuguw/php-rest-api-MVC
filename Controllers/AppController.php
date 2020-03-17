<?php

require_once('./DAO/AppDao.php');

class AppController extends AppDao{

    public static function save(){
        $data = json_decode(file_get_contents("php://input"));
        AppDao::save($data);
    }

    public static function getDados(){
        $data = AppDao::getDados();

        if(!$data){
            flight::json(array('message' => 'Sem dados cadastrados'));  
        }else{
            flight::json($data);
        }
        
    }

    public static function getDado($id){
        $data = AppDao::GetDado($id);

        if(!$data){
            flight::json(array('message' => 'Dado não encontrado'));  
        }
        else{
            flight::json($data);
        }
        
    }

}