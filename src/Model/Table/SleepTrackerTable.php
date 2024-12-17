<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;

class SleepTrackerTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('sleep_tracker');
        $this->setPrimaryKey('id');
        $this->addBehavior('Timestamp');
    }

    // Ajouter une règle pour définir une valeur par défaut pour `date`
    public function beforeSave($event, $entity, $options)
    {
        if ($entity->isNew() && empty($entity->date)) {
            $entity->date = date('Y-m-d'); // Définir la date actuelle par défaut
        }

        if (!isset($entity->morning_score)) {
            $entity->morning_score = 0; // Définir uniquement si aucune valeur n'est fournie
        }
    }
}