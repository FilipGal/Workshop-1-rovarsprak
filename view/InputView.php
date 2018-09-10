<?php
class InputView {
    public function render() {
        echo '
        <form action="/index.php">
        <p>Input text to translate to rovarsprak</p>
        <textarea id="text">
        
        </textarea><br>
        <button type="button">Translate</button>
        </form>
        ';
    }
}