<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 01.03.17
 * Time: 02:36
 */

namespace PiwiApp\Controllers;


use Piwi\BaseErrorController;

class Error extends BaseErrorController
{
    public function show()
    {
        echo $this->exception->getCode();
    }
}