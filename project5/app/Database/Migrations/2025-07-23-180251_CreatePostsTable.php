<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'author' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'default'    => 'John Doe'
            ],
            'content' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['published', 'draft'],
                'default'    => 'draft'
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
                'default'        => null
            ]

        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('posts', true);
    }

    public function down()
    {
        $this->forge->dropTable('posts');
    }
}
