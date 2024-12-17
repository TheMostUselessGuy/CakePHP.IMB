<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table\SleepTrackerTable;
use Cake\ORM\TableRegistry;

class SleepTrackerController extends AppController
{
    public function index()
    {
        $sleepTracker = TableRegistry::getTableLocator()->get('SleepTracker');
        $userId = $this->request->getAttribute('identity')->id;

        $data = $this->SleepTracker->find('all', [
            'conditions' => ['user_id' => $userId]
        ]);

        $this->set(compact('data'));
    }

    public function add()
    {
        $sleepTracker = TableRegistry::getTableLocator()->get('SleepTracker');
        $sleepData = $sleepTracker->newEmptyEntity();

        if ($this->request->is('post')) {
            $sleepData = $sleepTracker->patchEntity($sleepData, $this->request->getData());
            $sleepData->user_id = $this->request->getAttribute('identity')->id;

            $sleepData->date = date('Y-m-d');

            if (empty($sleepData->bedtime)) {
                $sleepData->bedtime = '22:00:00';
            }

            if (!isset($sleepData->morning_score)) {
                $sleepData->morning_score = 0; // Définir uniquement si la valeur n'est pas envoyée
            }            

            if ($sleepTracker->save($sleepData)) {
                $this->Flash->success(__('Les données de sommeil ont été enregistrées.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Impossible d’enregistrer les données.'));
        }

        $this->set(compact('sleepData'));
    }

    public function isAuthorized($user)
    {
        return !empty($user);
    }
}
