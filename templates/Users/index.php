<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<div class="users index content">
    <?= $this->Html->link(__('Nouvel utilisateur'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <?= $this->Html->css(['sidebar']) ?>
    <h3><?= __('Utilisateurs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('Adresse mail') ?></th>
                    <th><?= $this->Paginator->sort('Date de création') ?></th>
                    <th><?= $this->Paginator->sort('Dernière modification') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Détails'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Effacer'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<<  ' . __('première page')) ?>
            <?= $this->Paginator->prev('<  ' . __('précedent')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('suivant') . '  >') ?>
            <?= $this->Paginator->last(__('dernière page') . '  >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} sur {{pages}}, affichant {{current}} enregistrement(s) sur un total de {{count}}')) ?></p>
    </div>
</div>