<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GenreTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GenreTable Test Case
 */
class GenreTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GenreTable
     */
    protected $Genre;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Genre',
        'app.Song',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Genre') ? [] : ['className' => GenreTable::class];
        $this->Genre = $this->getTableLocator()->get('Genre', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Genre);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\GenreTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
