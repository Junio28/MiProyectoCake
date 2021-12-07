<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HomeMusicTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HomeMusicTable Test Case
 */
class HomeMusicTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HomeMusicTable
     */
    protected $HomeMusic;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.HomeMusic',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('HomeMusic') ? [] : ['className' => HomeMusicTable::class];
        $this->HomeMusic = $this->getTableLocator()->get('HomeMusic', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->HomeMusic);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\HomeMusicTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
