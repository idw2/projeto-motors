<?php

class Router {

    private $url;
    private $view;

    public function __construct() {
        new SEO();
    }

    public function load() {
        $get = $_GET;

        if (isset($get['url'])) {
            $params = explode('/', $get['url']);

            $this->url = $params[0];
            if (isset($params[1]))
                $this->view = $params[1];
        }

        if ($this->url == '')
            $this->url = 'add';


        $this->url = str_replace('-', '_', $this->url);
        $pagina = ($this->view == "") ? $pagina = $this->url : $pagina = $this->url . DS . $this->view;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            models($this->url);
        } else {
            views($pagina);
        }
    }

    public function get_view() {
        return $this->view;
    }

}
