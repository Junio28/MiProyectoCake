<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SingerTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SingerTable Test Case
 */
class SingerTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SingerTable
     */
    protected $Singer;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Singer',
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
        $config = $this->getTableLocator()->exists('Singer') ? [] : ['className' => SingerTable::class];
        $this->Singer = $this->getTableLocator()->get('Singer', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Singer);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SingerTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
