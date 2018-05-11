<?php
include('Controller.php');
class DefaultController extends Controller {
  public function actionIndex() {
    $this->render('default/index', [
      'title'=>'Prueba Will'
    ]);
  }
}