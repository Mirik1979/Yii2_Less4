<?php

use yii\db\Migration;

/**
 * Class m190330_082050_testmigration
 */
class m190330_082050_testmigration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('testactivity',[
            'id'=>$this->primaryKey(),
            'name'=>$this->string('100')->notNull(),
            'email'=>$this->string(50)->notNull(),
            'begin'=>$this->date()->notNull(),
            'end'=>$this->date(),
            'notify'=>$this->boolean()->notNull(),
            'date_created'=>$this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP')
        ]);

        $this->createTable('users', [
            'id'=>$this->primaryKey(),
            'email'=>$this->string('100')->notNull(),
            'password_hash'=>$this->string('300')->notNull(),
            'token'=>$this->string('300'),
            'auth_key'=>$this->string('150'),
            'date_created'=>$this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('testactivity');
        $this->dropTable('users');

        echo "m190330_082050_testmigration cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190330_082050_testmigration cannot be reverted.\n";

        return false;
    }
    */
}
