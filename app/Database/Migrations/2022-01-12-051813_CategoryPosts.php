<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CategoryPosts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'post_id' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'category_id' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp'
        ]);
        $this->forge->addForeignKey('post_id', 'posts', 'id');
        $this->forge->addForeignKey('category_id', 'categories', 'id');
        $this->forge->createTable('category_posts');

    }

    public function down()
    {
        $this->forge->dropTable('category_posts');
    }
}
