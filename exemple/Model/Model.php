<?php
namespace Model;

abstract class Model
{

/**
 * Get undocumented variable
 *
 * @return  string
 */
    public function getTable()
    {
        return $this->table;
    }

/**
 * Set undocumented variable
 *
 * @param  string  $table  Undocumented variable
 *
 * @return  self
 */
    public function setTable(string $table)
    {
        $this->table = $table;

        return $this;
    }

/**
 * Get undocumented variable
 *
 * @return  array
 */
    public function getModel()
    {
        return $this->model;
    }

/**
 * Set undocumented variable
 *
 * @param  array  $model  Undocumented variable
 *
 * @return  self
 */
    public function setModel(array $model)
    {
        $this->model = $model;

        return $this;
    }

}
