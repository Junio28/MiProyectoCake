<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SongFixture
 */
class SongFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'song';
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
                'length' => 'Lorem ipsum dolor sit amet',
                'singer_id' => 1,
                'genre_id' => 1,
                'created' => '2021-12-08 19:41:11',
                'modified' => '2021-12-08 19:41:11',
            ],
        ];
        parent::init();
    }
}
