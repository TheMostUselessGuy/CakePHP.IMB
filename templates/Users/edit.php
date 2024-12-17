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
            <?= $this->Form->postLink(
                __("Effacer l'utilisateur"),
                ['action' => 'Effacer', $user->id],
                ['confirm' => __('Voulez-vous vraiment supprimer l\'utilisateur avec l\'adresse e-mail : {0} ?', $user->email), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Liste des utilisateurs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->css(['sidebar']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Modifier Utilisateur') ?></legend>
                <?php
                echo $this->Form->control('Email');
                echo $this->Form->control('Mot de passe');
                ?>
            </fieldset>
            <?= $this->Form->button(__("Modifier l'utilisateur")) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>