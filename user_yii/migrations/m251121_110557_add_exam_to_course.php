<?php

use yii\db\Migration;

class m251121_110557_add_exam_to_course extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('course', 'exam', $this->string()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('course', 'exam');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m251121_110557_add_exam_to_course cannot be reverted.\n";

        return false;
    }
    */
}
