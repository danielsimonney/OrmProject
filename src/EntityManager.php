<?php
namespace Susano;

use Susano\Executer;
use Susano\Validator;

class EntityManager
{
    private $conn;

    public function __construct()
    {
        $this->conn = Executer::getInstance();
    }

    public function dispenseConnexion()
    {
        return $this->conn;
    }

    // Fonction qui prend une query et renvoie si l'objet existe ou non
    public function exists($parser, $id)
    {
        $myRepo = ($parser->getRepository());
        $query = $myRepo->find($id);
        if ($query != false) {
            return true;
        } else {
            return false;
        }

    }

    public function save($model)
    {
        $validator = new Validator;
        $parser = new ParsingModel($model->getModel());
        $myRepo = ($parser->getRepository());
        $primaryKey = $parser->getPrimaryRow();

// if($myRepo->find($primaryKey)){

// }else{

// }
        $parser->getPrimaryRow();
        $nameTable = ($parser->getTableName());
        var_dump($model->$primaryKey);
        $validator->validateDatas($parser, $model);
        $nonObligatory = ($parser->getNonObligatoryRows());
        $obligatory = ($parser->getObligatoryRows());
        var_dump($obligatory);
        var_dump($nonObligatory);

        // Doit me renvoyer qqchose du genre
        // [
        //     "model"=>"avatar",
        //     "synopsis"=>"vjnekrnvkrenv"
        // ]
        // Ma data me servira pour l'edit et l'insert donc je la garde pareil pour les deux
        $data = $parser->constructPresentRows($obligatory, $nonObligatory, $model);

        if ($model->$primaryKey != null) {
            if ($this->exists($parser, $model->$primaryKey)) {
                // array_pop($data);
                // UPDATE `film` SET `studio` = 'Holywood', `synopsis` = 'Un petit film sur les violences contre les blancs' WHERE `film`.`id` = 4;
                $i = 0;
                $rows = "";
                $arrayData=[];
            $len = count($data);
                foreach ($data as $key => $value) {
                    $arrayData[] = $value;
                    if ($i == $len - 1) {
                        $rows = $rows . $key."= ?";
                    } else {
                        
                        $rows = $rows . $key . "= ? ,";
                    }

                    $i++;

                }
                $id = $model->$primaryKey;
                var_dump($rows);
                var_dump($data);
        
                $requ = $this->conn->exec("UPDATE $nameTable SET $rows  WHERE $nameTable.$primaryKey=$id", $arrayData);

                $f=$myRepo->reTransformModel($model);

                
                
            }
        } else {
            $arrayData = [];
            $count = "";
            $rows = "";
            $i = 0;
            $len = count($data);
            foreach ($data as $key => $value) {
                $arrayData[] = $value;
                if ($i == $len - 1) {
                    $count = $count . "?";
                    $rows = $rows . $key;
                } else {
                    $count = $count . "?,";
                    $rows = $rows . $key . " ,";
                }

                $i++;

            }
            $requ = $this->conn->exec("INSERT INTO $nameTable ($rows) VALUES($count)", $arrayData);

        }


        var_dump($requ);
        var_dump($model->getTitle());
    }
    public function delete($model){
       
        $parser = new ParsingModel($model->getModel());
        $myRepo = ($parser->getRepository());
        $primaryKey = $parser->getPrimaryRow();
        $nameTable = ($parser->getTableName());
        $id = $model->$primaryKey;
        $requ = $this->conn->exec("DELETE FROM $nameTable WHERE $nameTable.$primaryKey=$id");

       
    }
}
