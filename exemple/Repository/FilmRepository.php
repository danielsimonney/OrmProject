<?php
namespace Repository;

use Model\Film;
use Susano\Validator;
use Susano\ParsingModel;

class FilmRepository
{
    public function findAll($orderBy=null){
        if($orderBy==null){
            $req=$this->conn->query("SELECT * FROM $nameTable ORDER BY ");
        }
        $validator=new Validator;
        $model=new Film;
        $className=get_class($model);
        $parser= new ParsingModel($model->getModel());
        $myTables=($parser->getNameRows());
        var_dump($myTables);
        $nameTable = ($parser->getTableName());
        $req=$this->conn->query("SELECT * FROM $nameTable");
        $results=[];
        while($result = $req->fetch())
        {
            $film=new $className;
            foreach ($result as $name => $data) {
                foreach ($myTables as $key => $value) {
                    if($value==$name){ 
                        $film->$value=$validator->castInType($data,$key);
                    }
                }
            }
            $results[]=$film;
        }
        return ($results);
    }
}