<?php


namespace Inheritance;


class Student extends Person
{
    private int $studentId;

    /**
     * @param int $studentId
     * @return int
     */


    public function setStudentId(int $studentId): void
    {
        $this->studentId = $studentId;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }
}
