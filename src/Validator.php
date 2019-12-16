<?php
namespace Susano;

use DateTime;

class Validator
{

    private function VerifyType($type, $data, $model, $name)
    {
        // On verifie le type; si cest une date on l'envoie a un modeleir
        switch ($type) {
            case 'Integer':
                if (is_int($data)) {
                    return true;
                } else {
                    var_dump($data);
                    die("vous devez rentrez un nombre entier");
                }
                break;
            case 'String':
                if (is_string($data)) {
                    return true;
                } else {
                   
                    die("vous devez rentrez un nombre entier");
                }

                break;

            case 'Boolean':
                if (is_bool($data)) {
                    return true;
                } else {
                    die("vous devez rentrez un booleen");
                }

                break;

            case 'Datetime':
                if ($data instanceof DateTime) {
                    $result = $data->format('Y-m-d H:i:s');
                    $model->$name = $result;
                    return true;
                } else {
                    die("Vous devez rentrez un objet de type datetime");
                }
                break;

            default:
                # code...
                break;
        }
    }

    public function StringToDate()
    {

    }

    public function castInType($data, $type)
    {
        switch ($type) {
            case 'String':
                return $data;
                break;
            case 'Datetime':
            
            $format = 'Y-m-d H:i:s';
        $date = DateTime::createFromFormat($format, $data);

                return $date;
                break;
            case 'Integer':
                return intval($data);
                break;
            default:
                return $data;
                break;
        }
    }

    public function validateDatas($parser, $model)
    {
        $rows = ($parser->getRows());
        foreach ($rows as $key => $value) {
            if ($value["allowNull"] == true) {
                if ($model->$key == null) {

                } else {
                    $this->VerifyType($value["type"], $model->$key, $model, $key);
                }
            } else {
                if ($model->$key == null) {
                    var_dump($model);
                    var_dump($key);
                    // die("vs navez pas tt rempli");
                } else {
                    var_dump($key);
                    $this->VerifyType($value["type"], $model->$key, $model, $key);

                }

            }

            //   A implementer:

            // Si c'est un champ obligatoire:

            // Si il n'est pas rempli:erreur

            // Si il est rempli:verif du type

            // Si c'est un champ pas obligatoire:

            // Si il n'est pas rempli:on arrete la

            // Sinon:verif du type
        }
    }

}
