<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%course}}`.
 */
class m251120_085237_add_position_column_to_course_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%course}}', 'student_amount', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%course}}', 'student_amount');
    }
}
