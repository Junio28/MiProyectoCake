<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HomeMusicFixture
 */
class HomeMusicFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'home_music';
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
                'created' => '2021-12-07 22:27:22',
                'modified' => '2021-12-07 22:27:22',
            ],
        ];
        parent::init();
    }
}
