<?php

use yii\db\Migration;

/**
 * Class m190330_091618_insertvalues
 */
class m190330_091618_insertvalues extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

       $this->insert('users', [
                'id' => 1,
                'email' => 'lyantsev@mail.ru',
                'password_hash' => 'qwerty',
                'token' => 'a',
                'auth_key' => 'b'
            ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190330_091618_insertvalues cannot be reverted.\n";
        $this->delete('users');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190330_091618_insertvalues cannot be reverted.\n";

        return false;
    }
    */
}
