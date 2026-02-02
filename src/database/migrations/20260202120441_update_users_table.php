<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class UpdateUsersTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $this->table('users', ['id' => false, 'primary_key' => 'id'])
            ->changeColumn('id', 'string', ['null' => false])
            ->renameColumn('name', 'first_name')
            ->addColumn('last_name', 'string')
            ->changeColumn('email', 'string', [
                'after' => 'last_name'
            ])
            ->addColumn('address_id', 'string', ['null' => false])
            ->addForeignKey('address_id', 'addresses', 'id', [
                'update' => 'CASCADE',
                'delete' => 'CASCADE'
            ])
            ->addColumn('role_id', 'integer', ['signed' => false, 'null' => false])
            ->addForeignKey('role_id', 'roles', 'id', [
                'update' => 'CASCADE',
                'delete' => 'CASCADE'
            ])
            ->changeColumn('created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'after' => 'role_id'
            ])
            ->changeColumn('updated_at', 'timestamp', [
                'null' => true,
                'update' => 'CURRENT_TIMESTAMP',
                'after' => 'created_at'
            ])
            ->update();
    }
}
