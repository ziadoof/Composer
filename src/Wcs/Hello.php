<?php
/**
 * Created by PhpStorm.
 * User: ziadoof
 * Date: 09/04/18
 * Time: 14:50
 */

class Hello
{


    /**
     * Hello constructor.
     */
    private $message;
    public function __construct()
    {
       $this->message ="Hello World , Quette"."<br>";

    }

    /**
     * @return mixed
     */
    public function talk():string
    {
        return $this->message;
    }
}