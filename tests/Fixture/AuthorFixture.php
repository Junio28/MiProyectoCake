<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AuthorFixture
 */
class AuthorFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'author';
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
                'nationality' => 'Lorem ipsum dolor sit amet',
                'gender' => 'Lorem ipsum dolor sit amet',
                'created' => '2021-12-08 19:42:20',
                'modified' => '2021-12-08 19:42:20',
            ],
        ];
        parent::init();
    }
}
