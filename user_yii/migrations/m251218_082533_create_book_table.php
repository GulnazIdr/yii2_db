<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book}}`.
 */
class m251218_082533_create_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'author' => $this->string()->notNull(),
            'year' => $this->integer()->notNull()
        ]);

        $this->insert('{{%book}}', [
            'title' => '1984',
            'author' => 'Джордж Оруэлл',
            'year' => 1949
        ]);  
        $this->insert('{{%book}}', [
            'title' => 'Маленький принц',
            'author' => 'Антуан де Сент-Экзюпери',
            'year' => 1943
        ]);  
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%book}}');
    }

 
}
