<h1>Traqueur de sommeil</h1>
<p><a href="<?= $this->Url->build(['action' => 'add']) ?>">Ajouter une nouvelle entrée</a></p>

<table>
    <thead>
        <tr>
            <th>Date</th>
            <th>Heure de coucher</th>
            <th>Heure de réveil</th>
            <th>Sieste</th>
            <th>Score matin</th>
            <th>Sport</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $entry): ?>
        <tr>
            <td><?= h($entry->date) ?></td>
            <td><?= h($entry->bedtime) ?></td>
            <td><?= h($entry->wake_time) ?></td>
            <td><?= $entry->naps ? 'Oui' : 'Non' ?></td>
            <td><?= h($entry->morning_score) ?>/10</td>
            <td><?= $entry->sport ? 'Oui' : 'Non' ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
