<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SingerFixture
 */
class SingerFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'singer';
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
                'nationality' => 'Lorem ipsum dolor sit amet',
                'created' => '2021-12-08 19:40:04',
                'modified' => '2021-12-08 19:40:04',
            ],
        ];
        parent::init();
    }
}
