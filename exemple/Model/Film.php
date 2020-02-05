<?php

namespace Model;

use Model\Model as SuperModel;

class Film extends SuperModel
{

/**
 * Undocumented variable
 *
 * @var string
 */
    public $table = "film";

/**
 * Undocumented variable
 *
 * @var int
 */
    public $id;

/**
 * Undocumented variable
 *
 * @var string
 */
    public $title;
/**
 * Undocumented variable
 *
 * @var int
 */
    public $duree;
/**
 * Undocumented variable
 *
 * @var string
 */
    public $category;
/**
 * Undocumented variable
 *
 * @var string
 */
    public $studio;
/**
 * Undocumented variable
 *
 * @var string
 */
    public $synopsis;

/**
 * Undocumented variable
 *
 * @var DateTime
 */
    public $releasedate;

/**
 * Undocumented variable
 *
 * @var array
 */
    public $model = [
        "table" => "film",
        "champs" => [
            "id" => [
                "auto_increment" => true,
                "primary_key" => true,
                "type" => "Integer",
                "allowNull" => true,
            ],
            "title" => [
                "type" => "String",
                "allowNull" => false,
            ],
            "duree" => [
                "type" => "Integer",
                "allowNull" => false,
            ],
            "category" => [
                "type" => "String",
                "allowNull" => false,
            ],
            "studio" => [
                "type" => "String",
                "allowNull" => false,
            ],
            "synopsis" => [
                "type" => "String",
                "allowNull" => false,
            ],
            "releasedate" => [
                "type" => "Datetime",
                "allowNull" => false,
            ],
        ],
    ];

/**
 * Get undocumented variable
 *
 * @return  int
 */
    public function getId()
    {
        return $this->id;
    }

/**
 * Set undocumented variable
 *
 * @param  int  $id  Undocumented variable
 *
 * @return  self
 */
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

/**
 * Get undocumented variable
 *
 * @return  string
 */
    public function getTitle()
    {
        return $this->title;
    }

/**
 * Set undocumented variable
 *
 * @param  string  $title  Undocumented variable
 *
 * @return  self
 */
    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }

/**
 * Get undocumented variable
 *
 * @return  int
 */
    public function getDuree()
    {
        return $this->duree;
    }

/**
 * Set undocumented variable
 *
 * @param  int  $duree  Undocumented variable
 *
 * @return  self
 */
    public function setDuree(int $duree)
    {
        $this->duree = $duree;

        return $this;
    }

/**
 * Get undocumented variable
 *
 * @return  string
 */
    public function getCategory()
    {
        return $this->category;
    }

/**
 * Set undocumented variable
 *
 * @param  string  $category  Undocumented variable
 *
 * @return  self
 */
    public function setCategory(string $category)
    {
        $this->category = $category;

        return $this;
    }

/**
 * Get undocumented variable
 *
 * @return  string
 */
    public function getStudio()
    {
        return $this->studio;
    }

/**
 * Set undocumented variable
 *
 * @param  string  $studio  Undocumented variable
 *
 * @return  self
 */
    public function setStudio(string $studio)
    {
        $this->studio = $studio;

        return $this;
    }

/**
 * Get undocumented variable
 *
 * @return  string
 */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

/**
 * Set undocumented variable
 *
 * @param  string  $synopsis  Undocumented variable
 *
 * @return  self
 */
    public function setSynopsis(string $synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

/**
 * Get undocumented variable
 *
 * @return  DateTime
 */
    public function getReleasedate()
    {
        return $this->releasedate;
    }

/**
 * Set undocumented variable
 *
 * @param  DateTime  $releasedate  Undocumented variable
 *
 * @return  self
 */
    public function setReleasedate($releasedate)
    {
        $this->releasedate = $releasedate;

        return $this;
    }
}
