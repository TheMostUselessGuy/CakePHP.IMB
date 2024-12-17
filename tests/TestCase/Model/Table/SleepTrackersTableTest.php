<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SleepTrackersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SleepTrackersTable Test Case
 */
class SleepTrackersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SleepTrackersTable
     */
    protected $SleepTrackers;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.SleepTrackers',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SleepTrackers') ? [] : ['className' => SleepTrackersTable::class];
        $this->SleepTrackers = $this->getTableLocator()->get('SleepTrackers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SleepTrackers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SleepTrackersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
