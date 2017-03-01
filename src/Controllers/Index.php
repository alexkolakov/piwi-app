<?php

namespace PiwiApp\Controllers;

use \Piwi\BaseController;

class Index extends BaseController
{
    public function home()
    {
        //TODO: Write some business logic here
        $this->view->setGlobal('globalName', 'globalValue'); //this can be used in twig templates
        return $this->view->render('index.html.twig', ['localVar' => 'localValue']);
    }

    public function showControllerCapabilities()
    {
        var_dump($this->config);
        var_dump($this->request);
        var_dump($this->session);
        //$this->session->param = 'param in session';
        //$this->session->getSessionId();

        //$this->view->setGlobal('globalName', 'globalValue'); //this can be used in twig templates

        //$this->view->render('some_twig_file', ['param' => 'value']);
        //$param = $this->getParameter('some_config_param'); // if array only the first level (cannot get subarray values, but you can get the whole subarray)
        //$this->generateFullUrl('route_name', [], []);
        //$this->getBaseUrl();
        //$this->redirectTo('route_name');
        //$this->db //PDO object

        /*$stm = $this->db->prepare('statement');
        if($stm->execute([])) {
            $result = $stm->fetchAll();
        }*/
        exit;
    }
}