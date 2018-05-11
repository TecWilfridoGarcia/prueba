<?php
include('Controller.php');
include(dirname(__FILE__).'/../models/Users.php');
class AjaxController extends Controller {
    public function actionGetUsers() {
        $user = new Users();
        $users = $user->getUsers();
        header('Content-Type: application/json');
        echo json_encode($users);
    }
}