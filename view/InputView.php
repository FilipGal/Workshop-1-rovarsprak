<?php
class InputView {
    public function render() {
        return '
        <form action="index.php" method="post">
        <p>Input text to translate to rovarsprak</p>
        <textarea id="text" name="text">

        </textarea><br>
        <button>Translate</button>
        </form>
        ';
    }
}
