<?php
namespace Susano;

use Repository\FilmRepository;

class ParsingModel
{

    private $model;
    public function __construct($model)
    {
        $this->model = $model;
    }

    public function getRepository(){
        $name=ucfirst($this->model["table"]."Repository");

        $path='Repository\\'.$name;


        return new $path;

    }


    public function getPrimaryRow(){
        $champs = $this->model["champs"];
        foreach ($champs as $key => $value) {
            if (isset($value["primary_key"])) {
                return $key;
            }
        }
    }

    public function getRows(){
        return $this->model["champs"];
    }

    public function getObligatoryRows()
    {
        $obligatory = [];
        $champs = $this->model["champs"];
        foreach ($champs as $key => $value) {
            if ($value["allowNull"] == false) {

                $obligatory[] = $key;
            }
        }
        return $obligatory;
    }

    public function getNonObligatoryRows()
    {
        $nonObligatory = [];
        $champs = $this->model["champs"];
        foreach ($champs as $key => $value) {
            if ($value["allowNull"] == true) {

                $nonObligatory[] = $key;
            }
        }
        return $nonObligatory;
    }

    public function getNameRows()
    {
        $champs = $this->model["champs"];
        foreach ($champs as $key => $value) {
           
            $results[$key]=$value["type"];
        }

        return $results;
    }

    public function getTableName()
    {
        return $this->model["table"];
    }

    public function constructPresentRows($obligatory, $permit, $film)
    {
        $result = [];

        foreach ($obligatory as $key => $value) {
        
            $recupValue = $film->$value;
            $result[$value] = $recupValue;
        }
        foreach ($permit as $key => $value) {
            if ($film->$value == null) {

            } else {
                $recupValue = $film->$value;
                $result[$value] = $recupValue;
                
            }
        }
        return $result;
    }

}
