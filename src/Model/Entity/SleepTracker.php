<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SleepTracker Entity
 *
 * @property int $id
 * @property int $user_id
 * @property \Cake\I18n\Date $sleep_date
 * @property \Cake\I18n\Time $sleep_time
 * @property \Cake\I18n\Time $wake_time
 * @property string|null $naps
 * @property int|null $wake_score
 * @property string|null $comment
 * @property bool|null $sport_done
 * @property int|null $cycles_completed
 * @property \Cake\I18n\DateTime|null $created_at
 * @property \Cake\I18n\DateTime|null $updated_at
 *
 * @property \App\Model\Entity\User $user
 */
class SleepTracker extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'user_id' => true,
        'sleep_date' => true,
        'sleep_time' => true,
        'wake_time' => true,
        'naps' => true,
        'wake_score' => true,
        'comment' => true,
        'sport_done' => true,
        'cycles_completed' => true,
        'created_at' => true,
        'updated_at' => true,
        'user' => true,
    ];
}
