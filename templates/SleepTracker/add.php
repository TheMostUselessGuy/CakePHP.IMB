<h1>Ajouter une entrée de sommeil</h1>

<?= $this->Form->create($sleepData) ?>
<fieldset>
    <legend>Nouvelle donnée</legend>
    <?= $this->Form->control('date', [
        'type' => 'date',
        'label' => 'Date de sommeil',
        'default' => date('Y-m-d')
    ]) ?>
    <?= $this->Form->control('bedtime', [
        'type' => 'time',
        'label' => 'Heure de coucher',
        'default' => '22:00:00'
    ]) ?>
    <?= $this->Form->control('wake_time', ['type' => 'time', 'label' => 'Heure de réveil']) ?>
    <?= $this->Form->control('naps', ['type' => 'checkbox', 'label' => 'Avez-vous fait une sieste ?']) ?>
    <?= $this->Form->control('nap_time', ['type' => 'text', 'label' => 'Durée de la sieste (optionnel)']) ?>
    <?= $this->Form->control('morning_score', [
        'label' => 'Score du matin',
        'type' => 'number',
        'value' => $sleepData->morning_score ?? '',
    ]) ?>
    <?= $this->Form->control('sport', ['type' => 'checkbox', 'label' => 'Avez-vous fait du sport ?']) ?>
    <?= $this->Form->control('comment', ['type' => 'textarea', 'label' => 'Commentaire (optionnel)']) ?>
</fieldset>
<?= $this->Form->button(__('Enregistrer')) ?>
<?= $this->Form->end() ?>