<?php


class Student
{
    protected $name;
    protected $number;

    public static $printCreateMessage = true;
    public static $printDestructMessage = true;

    public function __construct($name, $number)
    {
        if (trim($number) === "") {
            throw new Exception("Student number cannot be empty");
        }

        $this->name = $name;
        $this->number = $number;

        if (self::$printCreateMessage) {
            echo "Creating student: {$this->name}<br>";
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function __toString()
    {
        return "Student: {$this->name} ({$this->number})";
    }

    public function __destruct()
    {
        if (self::$printDestructMessage) {
            echo "Student {$this->name} has left the system<br>";
        }
    }
}

?>