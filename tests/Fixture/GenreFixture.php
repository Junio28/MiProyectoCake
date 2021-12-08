<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GenreFixture
 */
class GenreFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'genre';
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
                'created' => '2021-12-08 19:40:41',
                'modified' => '2021-12-08 19:40:41',
            ],
        ];
        parent::init();
    }
}
