<?php

use yii\db\Migration;

class m251204_080937_add_to_course_column_image extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%course}}', 'image', $this->string()->after('description')->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%course}}', 'image');
    }
}
