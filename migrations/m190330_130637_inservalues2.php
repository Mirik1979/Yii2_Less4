<?php

use yii\db\Migration;

/**
 * Class m190330_130637_inservalues2
 */
class m190330_130637_inservalues2 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->batchInsert('testactivity',
            ['name', 'user_id', 'email', 'begin', 'end', 'notify'],
                [
                    ['Miros', 1, 'lyantsev@mail.ru', date('Y-m-d'), date('Y-m-d'), 1]
                ]
            );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190330_130637_inservalues2 cannot be reverted.\n";
        $this->delete('testactivity');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190330_130637_inservalues2 cannot be reverted.\n";

        return false;
    }
    */
}
