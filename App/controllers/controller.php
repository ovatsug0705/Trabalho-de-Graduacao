<?php
namespace App\controllers;
use App\model\Catecismo;
use App\model\Canodo;
use App\model\DoutrinaSocial;

class Controller {

    private $catecismo, $canodo, $doutrinaSocial;

    public function reqCatecismo($page = 1) {
        $this->catecismo = new Catecismo();
        $this->renderPage($this->catecismo->getCatecismo($page), 'catecismo');
    }

    public function reqCanodo($canon = 1) {
        $this->canodo = new Canodo();
        $this->renderPage($this->canodo->getCanodo($canon), 'canodo');
    }

    public function reqDoutrinaSocial($paragraph = 1) {
        $this->doutrinaSocial = new DoutrinaSocial();
        $this->renderPage($this->doutrinaSocial->getDoutrinaSocial($paragraph), 'doutrina_social');
    }

    private function renderPage($data, $template) {
        if (isset($data) && !empty($data)) {
            require __DIR__. '\..\views/' . $template . '.php';  
        } else {
            require __DIR__. '\..\views\404.php';
        }
    }
}

