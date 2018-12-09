<?php

/**
 * This file contains the base class for all people entity classes.
 */
namespace Project\Classes;

use Project\Interfaces\Identifiable;

/**
 * The base class for all person entity in the application.
 */
abstract class Person implements Identifiable {
    /**
     * The person identification number.
     * @var int
     */
    private $id;
    
    /**
     * The forename of this person.
     * @var string
     */
    private $forename;
    
    /**
     * The surname of this person.
     * @var string
     */
    private $surname;
    
    /**
     * Return personal identification number.
     * @return int
     */
    public function getId() {
        return $this->id;
    }
    
    /**
     * Returns the person's forename.
     * @return string
     */
    public function getForename() {
        return $this->forename;
    }
    
    /**
     * Returns the person's surname.
     * @return string
     */
    public function getSurname() {
        return $this->surname;
    }
    
    /**
     * The set person's id.
     * @param int $id
     */
    public function setId($id) {
        $this->id = $id;
    }
    
    /**
     * The set person's forename.
     * @param string $forename
     */
    public function setForename($forename) {
        $this->forename = $forename;
    }
    
    /**
     * The set person's surname.
     * @param string $surname
     */
    public function setSurname($surname) {
        $this->surname = $surname;
    }
    
    /**
     * The person class contrucotr.
     * @param int $id
     * @param string $forename
     * @param string $surname
     */
    public function __construct($id, $forename, $surname) {
        $this->id = $id;
        $this->forename = $forename;
        $this->surname = $surname;
    }
}
