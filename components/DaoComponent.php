<?php
/**
 * Created by PhpStorm.
 * User: AlexOkara
 * Date: 30/03/2019
 * Time: 16:45
 */

namespace app\components;


use yii\base\Component;

class DaoComponent extends Component
{
    public function getDB() {
        return \Yii::$app->db;
    }

    public function getAllusers() {
        $sql = 'select * from users;';
        return $this->getDB()->createCommand($sql)->queryAll();
    }

    public function getActivitybyuser($user_id) {
        $sql = 'select * from testactivity where user_id=:user';
        return $this->getDB()->createCommand($sql, [':user'=>$user_id])->queryAll();
    }

    public function insertActivity($name, $email, $begin, $end, $notify) {
        return $this->getDB()->createCommand()->insert('testactivity',
            [
                'name' => $name,
                'email' => $email,
                'begin' => $begin,
                'end' => $end,
                'notify' => $notify,
                'user_id' => 1
            ]
            )->execute();
    }

}