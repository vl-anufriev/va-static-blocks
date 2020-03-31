<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%block}}`.
 */
class m200331_090200_create_block_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%block}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'slug' => $this->string(),
            'body' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%block}}');
    }
}
