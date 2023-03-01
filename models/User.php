<?php 

require_once 'models/Auth.php';

class User extends Auth{
       
          public function test(){
             try {
               $this->getBdd();
             } catch (\PDOException $msg) {
                echo $msg;
             }
          }
}