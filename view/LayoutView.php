<?php
class LayoutView {
    public function render(InputView $iv, OutputView $ov) : string {
        echo '<!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <title>Rovarsprak</title>
                <link rel="stylesheet" href="style.css">
                <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
            </head>
            <body>
                '.$iv->render().'
                '.$ov->render().'
            </body>
        </html>
        '; 
    }
}