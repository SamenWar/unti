<?php
require_once('Arr.php');
class Newsletter
{
    public function send()
    {
       $users = (new UserRepository)->getUsers();

       foreach ($users as $user){

           If(isset($user["email"])){
                    echo "Email". $user["email"]. "has been sent to user". $user["name"].'</br>';
               }

           if(isset($user['device_id'])){
                echo "Push notification has been sent to user". $user['name']."with device_id". $user['device_id'].'</br>';
               }
           echo '_______________</br>';
       }
    }
}

$session = new Newsletter();
var_dump($session->send());