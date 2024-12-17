<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SleepTrackersFixture
 */
class SleepTrackersFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'sleep_tracker';
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
                'user_id' => 1,
                'sleep_date' => '2024-12-10',
                'sleep_time' => '09:40:56',
                'wake_time' => '09:40:56',
                'naps' => 'Lorem ipsum dolor sit amet',
                'wake_score' => 1,
                'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'sport_done' => 1,
                'cycles_completed' => 1,
                'created_at' => '2024-12-10 09:40:56',
                'updated_at' => '2024-12-10 09:40:56',
            ],
        ];
        parent::init();
    }
}
