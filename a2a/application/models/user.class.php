<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 10/3/2017
 * Time: 1:47 PM
 */
 ini_set('display_errors',1);
 error_reporting(E_ALL);

class user extends model
{


    public function __construct($type,$model)
    {
        parent::__construct($model);
    }

         function getName() {
             return array (
                 'first'=>'Tom',
                'last'=>'Reust'
            );
        }
    public function __set($name, $value)
    {

    }

    public function __get($name)
    {

    }

    public function __destruct()
    {

    }


}
