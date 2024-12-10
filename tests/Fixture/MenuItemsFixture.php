<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MenuItemsFixture
 */
class MenuItemsFixture extends TestFixture
{
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
                'title' => 'Lorem ipsum dolor sit amet',
                'url' => 'Lorem ipsum dolor sit amet',
                'position' => 1,
                'parent_id' => 1,
                'created' => '2024-12-03 13:31:02',
                'modified' => '2024-12-03 13:31:02',
            ],
        ];
        parent::init();
    }
}
