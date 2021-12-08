<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SongTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SongTable Test Case
 */
class SongTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SongTable
     */
    protected $Song;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Song',
        'app.Singer',
        'app.Genre',
        'app.Album',
        'app.Author',
        'app.Media',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Song') ? [] : ['className' => SongTable::class];
        $this->Song = $this->getTableLocator()->get('Song', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Song);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SongTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SongTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
