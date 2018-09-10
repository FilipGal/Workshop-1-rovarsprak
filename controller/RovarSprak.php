<?php
class RovarSprak {
    public function render() {
        if (isset($_POST['text'])) {
            return $this->translateToRovarsprak($_POST['text']);
        } else {
            return ''; 
        }
    }    
    private function translateToRovarsprak($str) {
        return preg_replace("([bcdfghjklmnpqrstvwxzBCDFGHJKLMNPQRSTVWXZ])", '${0}o${0}', $str);
    }
}