<?php

/**
 * The file contains the Student entity class.
 */
namespace Project\Classes;

/**
 * The student entity class.
 */
class Student {
    
    /**
     * The student's index namber.
     * @var string
     */
    private $index;
    
    /**
     * The currenty year of study.
     * @var int
     */
    private $year;
    
    /**
     * Return the student's index naumber.
     * @return string
     */
    public function getIndex() {
        return $this->index;
    }
    
    /**
     * Returns the student's current year of study.
     * @return int
     */
    public function getYear() {
        return $this->year;
    }
    
    /**
     * Sets the student's index number.
     * @param string $index
     * @return \Project\Classes\Student
     */
    public function setIndex($index) {
        $this->index = $index;
        return $this;
    }
    
    /**
     * Set the studnet's current year of study.
     * @param string $year
     * @return \Project\Classes\Student
     */
    public function setYear($year) {
        $this->year = $year;
        return $this;
    }
    
    /**
     * The student class contructor.
     * @param int $id The student's personal identification number.
     * @param string $forename The student's forename.
     * @param string $surname The student's surname.
     * @param string $index The student's index naumber.
     * @param int $year The student's current year of study.
     */
    public function __construct($id, $forename, $surname, $index, $year) {
        parent::__contructor($id, $forename, $surname);
        $this->setIndex($index);
        $this->setYear($year);
    }
    
    /**
     * Return the string that this student uses to identfy himself or herself.
     * @return string
     */
    public function identify() {
        return sprintf("My name is %s %s, Index: %s", $this->getForename(), $this->getSurname(), $this->getIndex());
    }
}
