<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Liste des utilisateurs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Ajouter un utilisateur') ?></legend>
                <?php
                    echo $this->Form->control('Email');
                    echo $this->Form->control('Mots de passe');
                ?>
            </fieldset>
            <?= $this->Form->button(__("Ajouter l'utilisateur")) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
