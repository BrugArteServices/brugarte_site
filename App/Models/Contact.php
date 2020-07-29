<?php

namespace App\Models;
use \App\DB\Sql;
use \App\Model;
 
class Contact extends Model {
    public function checksend() {
        $sql= new Sql();
        $results = $sql->select("SELECT * FROM site_contact WHERE (email = :email OR phone = :phone)", 
        array(
            'email'=>$this->getemail(),
            'phone'=>$this->getphone()
        ));
        if(count($results) === 0){
            return true;
        } else {
            $data = $results[0];
            if($data['time']+60*60 > time()){
                return false;
            } else {
                return true;
            }
        }
    }
    public function save() {
        $sql = new Sql();
        $results = $sql->select("INSERT INTO site_contact (name,email,phone,message,time) VALUES (:name,:email,:phone,:message,:time)", 
        array(
            'name'=>$this->getname(),
            'email'=>$this->getemail(),
            'phone'=>$this->getphone(),
            'message'=>$this->getmessage(),
            'time'=>time()
        ));
    }
}
