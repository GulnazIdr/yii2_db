<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%course}}`.
 */
class m251120_084928_drop_position_column_from_course_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%course}}', 'student_amount');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('{{%course}}', 'student_amount', $this->integer());
    }
}
