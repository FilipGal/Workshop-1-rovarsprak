<?php
class RovarSprak
{
    public function render(): string
    {
        if (isset($_POST['text'])) {
            return $this->translateToRovarsprak($_POST['text']);
        } else {
            return '';
        }
    }

    private function translateToRovarsprak($str): string
    {
        return preg_replace("([bcdfghjklmnpqrstvwxzBCDFGHJKLMNPQRSTVWXZ])", '${0}o${0}', $str);
    }
}
