<?php
class Users {
    public function getUsers() {
        $link = mysqli_connect('localhost', 'root', '', 'prueba');
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        $result = mysqli_query($link, "SELECT id, user_name, first_name, last_name FROM vtiger_users");
        
        $rows = array();
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $rows[] = $row;
        }

        return $rows;
    }
}