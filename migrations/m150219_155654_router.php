<?php

use yii\db\Schema;
use yii\db\Migration;

class m150219_155654_router extends Migration
{
    public function up()
    {
        $tableOptions = null;

        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%router}}', [
            'id'        => Schema::TYPE_PK,
            'pattern'      => Schema::TYPE_STRING  . ' NOT NULL',
            'route'     => Schema::TYPE_STRING  . ' NOT NULL',
            'suffix'    => Schema::TYPE_STRING  . "",
            'defaults'  => Schema::TYPE_BOOLEAN . ""
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%router}}');
    }
}
