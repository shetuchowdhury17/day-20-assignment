<?php


namespace App\classes;


class Student
{
    public function saveStudentInfo($data)
    {
//        echo '<pre>';
//        print_r($data);
//-------------------------------------------------------------------------
        $link = mysqli_connect('localhost', 'root', '', 'bitm');
//        echo '<pre>';
//        print_r($link);
        $sql = "INSERT INTO students (name, email, mobile) VALUES ('$data[name]', '$data[email]', '$data[mobile]')";
        if(mysqli_query($link, $sql))
        {
            $message = "Student info save successfully";
            return $message;
        }
        else
        {
            die('Query problem'.mysqli_error($link));
        }
    }

    public function getAllStudentInfo()
    {
        $link = mysqli_connect('localhost', 'root', '', 'bitm');
        $sql = "SELECT * FROM students";
        if (mysqli_query($link, $sql))
        {
            $queryResult = mysqli_query($link, $sql);
            return $queryResult;
        }
        else
        {
            die('Query problem'.mysqli_error($link));
        }
    }
}