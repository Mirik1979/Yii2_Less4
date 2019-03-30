<?php

use yii\db\Migration;

/**
 * Class m190330_090422_altertestmigration
 */
class m190330_090422_altertestmigration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('testactivity', 'user_id', $this->integer()->notNull());
        $this->addForeignKey('userrel', 'testactivity', 'user_id', 'users', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190330_090422_altertestmigration cannot be reverted.\n";
        $this->dropForeignKey('userrel', 'testactivity');
        $this->dropColumn('testactivity', 'user_id');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190330_090422_altertestmigration cannot be reverted.\n";

        return false;
    }
    */
}
