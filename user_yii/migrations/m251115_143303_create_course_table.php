<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%course}}`.
 */
class m251115_143303_create_course_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('course', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->text(),
            'price' => $this->integer()->notNull(),
            'category_id' => $this->integer()->notNull(),
        ]);

        $this->addForeignKey(
            name: 'fk_course_category', 
            table: 'course', 
            columns: 'category_id', 
            refTable: 'category', 
            refColumns: 'id', 
            delete: 'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this -> dropForeignKey('fk_course_category', 'course');
        $this->dropTable('course');
    }
}
