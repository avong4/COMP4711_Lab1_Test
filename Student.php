<?php


class Student {

    /**

     * Instantiates a student.

     */

    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }


/*
 * Function to add email to student.
 */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }


/*
 * Function to add a grade to student.
 */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    
/*
 * Function to calculate student average.
 */
    function average() {
        $total = 0;
        foreach($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    
/*
 * Function to display information.
 */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach($this->emails as $which=> $what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }
}