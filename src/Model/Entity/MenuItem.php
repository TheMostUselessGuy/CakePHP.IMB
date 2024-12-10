<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MenuItem Entity
 *
 * @property int $id
 * @property string $title
 * @property string $url
 * @property int $position
 * @property int|null $parent_id
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\ParentMenuItem $parent_menu_item
 * @property \App\Model\Entity\ChildMenuItem[] $child_menu_items
 */
class MenuItem extends Entity
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
        'title' => true,
        'url' => true,
        'position' => true,
        'parent_id' => true,
        'created' => true,
        'modified' => true,
        'parent_menu_item' => true,
        'child_menu_items' => true,
    ];
}
