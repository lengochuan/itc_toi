<?php

class users extends Model
{
    protected $class_name = 'users';
    protected $id;
    protected $first_name;
    protected $last_name;
    protected $name;
    protected $email;
    protected $phone;
    protected $password;
    protected $created_at;
    protected $updated_at;
    protected $role;

    public function user($email ){
        global $db;
        
        $sql = "SELECT email,password FROM `users` WHERE email = '$email'; ";
        
        $result = $db->executeQuery_list( $sql );
    
        return $result;
    }
}
