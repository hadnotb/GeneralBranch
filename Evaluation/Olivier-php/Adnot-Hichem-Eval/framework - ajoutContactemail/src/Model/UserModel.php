<?php 

namespace App\Model;

use App\Framework\AbstractModel;

class UserModel extends AbstractModel {

    public function getUserByEmail(string $email)
    {
        $sql = 'SELECT *
                FROM subscribers
                WHERE email = ?';

        return $this->database->getOneResult($sql, [$email]);
    }
    public function insertSubscriber(string $email,$idOrigins)
    {
        $sql = 'INSERT INTO subscribers (createdAt,email,origin_id)
                VALUES (NOW(),?,?)';

        return $this->database->insert($sql, [$email,$idOrigins]);
    }
}    