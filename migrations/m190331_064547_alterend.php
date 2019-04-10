<?php

use yii\db\Migration;

/**
 * Class m190331_064547_alterend
 */
class m190331_064547_alterend extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('testactivity', 'newend', $this->date()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190331_064547_alterend cannot be reverted.\n";

        $this->dropColumn('testactivity', 'newend');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190331_064547_alterend cannot be reverted.\n";

        return false;
    }
    */
}
