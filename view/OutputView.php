<?php
require_once 'controller/RovarSprak.php';

class OutputView {
    private $rovarsprak;

    function __construct() {
        $this->rovarsprak = new RovarSprak();
    }
    public function render() {
        return '<div>'.$this->rovarsprak->render().'</div>';
    }
}