<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateAlbumSong extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('album_song');
        $table->addColumn('song_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('album_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);

        $table->addForeignKey('song_id', 'song', 'id', ['delete'=> 'CASCADE', 'update'=> 'NO_ACTION']);
        $table->addForeignKey('album_id', 'album', 'id', ['delete'=> 'CASCADE', 'update'=> 'NO_ACTION']);

        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
