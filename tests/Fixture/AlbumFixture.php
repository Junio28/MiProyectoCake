<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlbumFixture
 */
class AlbumFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'album';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'release_date' => '2021-12-08',
                'home_music_id' => 1,
                'created' => '2021-12-08 00:08:45',
                'modified' => '2021-12-08 00:08:45',
            ],
        ];
        parent::init();
    }
}
