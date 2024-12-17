    <?php
    /**
     * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
     * Licensed under The MIT License
     *
     * @var \App\View\AppView $this
     */

    use Cake\Utility\Text;

    $cakeDescription = 'Application PHP projet Ishaq';
    $authUser = $this->request->getAttribute('identity');
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>

        <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake']) ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>
        <nav class="top-nav">
            <div class="top-nav-title">
                <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'login']) ?>">Ishaq</a>
            </div>

            <div class="top-nav-links">
                <?php if ($authUser): ?>
                    <span><?= h($authUser->email) ?></span>
                    <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'logout']) ?>">Déconnexion</a>
                <?php else: ?>
                    <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'login']) ?>">Connexion</a>
                <?php endif; ?>
            </div>
        </nav>
        <main class="main">
            <div class="container">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </main>
        <footer>
        </footer>
    </body>
    </html>
