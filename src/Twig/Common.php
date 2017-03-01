<?php

namespace PiwiApp\Twig;

use Piwi\PiwiTwigExtension;

class Common extends PiwiTwigExtension
{
    /**
     * Get defined functions
     *
     * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('dump', [$this, 'dump'])
        ];
    }

    /**
     * Dump the variable
     *
     * @param mixed $var
     */
    public function dump($var)
    {
        //This what we can use in this class
        //var_dump($this->session);
        //var_dump($this->config);
        //var_dump($this->request);


        var_dump($var);
    }

    public function getName()
    {
        return 'Common';
    }
}