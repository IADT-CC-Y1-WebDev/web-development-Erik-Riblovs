<?php


class Student
{
    protected $name;
    protected $number;

    public function __construct($name, $number)
    {
        if (trim($number) === "") {
            throw new Exception("Student number cannot be empty");
        }

        $this->name = $name;
        $this->number = $number;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNumber()
    {
        return $this->number;
    }
}
?>