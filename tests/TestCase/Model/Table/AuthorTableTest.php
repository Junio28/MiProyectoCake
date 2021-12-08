<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AuthorTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AuthorTable Test Case
 */
class AuthorTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AuthorTable
     */
    protected $Author;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Author',
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
        $config = $this->getTableLocator()->exists('Author') ? [] : ['className' => AuthorTable::class];
        $this->Author = $this->getTableLocator()->get('Author', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Author);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AuthorTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
