<?php
class Controller {
    public function render($viewName, $_params_ = []) {
        $viewName = dirname(__FILE__).'/../views/'.$viewName.'.php';
        extract($_params_);
        require(dirname(__FILE__).'/../views/header.php');
        require($viewName);
        require(dirname(__FILE__).'/../views/footer.php');
    }
}