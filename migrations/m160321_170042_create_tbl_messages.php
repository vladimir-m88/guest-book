<?php

use yii\db\Migration;

class m160321_170042_create_tbl_messages extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('tbl_messages', [
            'id' => $this->primaryKey(),
            'user_name' => $this->string(16)->notNull(),
            'email' => $this->string(128)->notNull(),
            'homepage' => $this->string(128),
            'text' => $this->text()->notNull(),
            'public_date' => $this->dateTime()->notNull(),
            'IP' => $this->string(15)->notNull(),
            'browser' => $this->string(255)->notNull(),
        ], $tableOptions);
        
        // генерируем строки таблицы и заполняем ее
        $rows = $this->generateRows(60);
        foreach ($rows as $row) {
            $this->insert('tbl_messages',$row);
        }
        
    }
    
    public function down()
    {
        $this->dropTable('tbl_messages');
    }
    
    /*
     * Метод, который генерирует массив данных для начального заполнения 
     * таблицы.
     */
    private function generateRows($count = 0) {
        $rows = [];
        $dt = new \DateTime();
        for ($i = 0; $i < $count; $i++) {
            $j = $i + 1;
            $rows[$i] = [
                'id' => $j,
                'user_name' => "user" . $j,
                'email' => "user" . $j . "@mail.com",
                'homepage' => "user" . $j . "-site.com",
                'text' => "Текст сообщения пользователя user" . $j,
                'public_date' => $dt->format('Y-m-d H:i:s'),
                'IP' => "127.0.0.1",
                'browser' => "Sample browser",
            ];
            $dt = $dt->modify('+1 second');
        }
        return $rows;
    }
    
}
