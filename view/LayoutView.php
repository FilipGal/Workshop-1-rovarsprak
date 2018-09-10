<?php
class LayoutView {
    public function render(InputView $iv, OutputView $ov) {
        echo '<!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <title>Rovarsprak</title>
            </head>
            <body>
                '.$iv->render().'
                '.$ov->render().'
            </body>
        </html>
        '; 
    }
}