<?php
namespace Repository;
use Model\Film;
use Susano\Executer;
use Susano\Validator;
use Susano\ParsingModel;
class FilmRepository
{

    public function __construct()
    {
        $this->model=new Film;
        $this->validator=new Validator;
        $this->conn = Executer::getInstance();
    }
    public function findAll($orderBy=null){
        $className=get_class($this->model);
        $parser= new ParsingModel($this->model->getModel());
        $myTables=($parser->getNameRows());
        var_dump($myTables);
        $nameTable = ($parser->getTableName());
        if($orderBy==null){
            $req=$this->conn->exec("SELECT * FROM $nameTable");
        }else{
            $i=(array_values($orderBy));
            $desc=$i[0];
            $j=(array_keys($orderBy));
            $row=$j[0];
            $req=$this->conn->exec("SELECT * FROM $nameTable ORDER BY $row $desc ");
        }
        
        $results=[];
        while($result = $req->fetch())
        {
            $film=new $className;
            foreach ($result as $name => $data) {
                foreach ($myTables as $key => $value) {
                    if($key==$name){ 
                        $film->$key=$this->validator->castInType($data,$value);
                    }
                }
            }
            $results[]=$film;
        }
        return ($results);
    }

    public function find($id){
        $className=get_class($this->model);

        $parser= new ParsingModel($this->model->getModel());
        $idRow=$parser->getPrimaryRow();
        $myTables=($parser->getNameRows());
        var_dump($myTables);
        $nameTable = ($parser->getTableName());
        
        $req=$this->conn->exec("SELECT * FROM $nameTable WHERE $idRow='$id' ");
        $results=[];
        while($result = $req->fetch())
        {
            $film=new $className;
            foreach ($result as $name => $data) {
                foreach ($myTables as $key => $value) {
                    if($key==$name){ 
                        $film->$key=$this->validator->castInType($data,$value);
                    }
                }
            }
        }
        return ($film);
    }

    public function findBy($critere,$orderBy=null)
    {
        $className=get_class($this->model);
        $i=(array_values($critere));
        $filter=$i[0];
        $j=(array_keys($critere));
        $rowFilter=$j[0];
        $parser= new ParsingModel($this->model->getModel());
        $myTables=($parser->getNameRows());
        $nameTable = ($parser->getTableName());
        if($orderBy==null){
            $req=$this->conn->exec("SELECT * FROM $nameTable WHERE $rowFilter='$filter' ");
        }else{
            $i=(array_values($orderBy));
            $desc=$i[0];
            $j=(array_keys($orderBy));
            $row=$j[0];
            $req=$this->conn->exec("SELECT * FROM $nameTable WHERE $rowFilter='$filter' ORDER BY $row $desc");
        }

        $results=[];
        while($result = $req->fetch())
        {
            $film=new $className;
            foreach ($result as $name => $data) {
                foreach ($myTables as $key => $value) {
                    if($key==$name){ 
                        $film->$key=$this->validator->castInType($data,$value);
                    }
                }
            }
            $results[]=$film;
        }
        return ($results);

    

    }

    public function count(){

    }

}