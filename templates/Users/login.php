<?= $this->Html->css(['sidebar']) ?>

<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Connexion</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Veuillez s\'il vous plaît entrer votre nom d\'utilisateur et votre mot de passe') ?></legend>
        <?= $this->Form->control('email', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Login')); ?>
    <?= $this->Form->end() ?>

    <p>Pas encore de compte ? <?= $this->Html->link("Créer un compte", ['action' => 'add']) ?></p>
    <p><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'resetPasswordRequest']); ?>">Mot de passe oublié ?</a></p>

</div>