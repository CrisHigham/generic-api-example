<?php
class TestUser extends \Tina4\ORM
{
    public $tableName="test_user";
    public $primaryKey="id"; //set for primary key
    public $genPrimaryKey=true; //set to true if you want to set the primary key
    public $excludeFields = ["password"];
    public $fieldMapping=["firstName" => "first_name"];

    public $id;
    public $firstName;
    public $lastName;
    public $email;
    public $password;
    public $cellphone;
    public $isActive;
    public $dateCreated;
}