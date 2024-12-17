<div class="welcome">
    <h1>Bienvenue sur mon projet PHP</h1>
    <p>Je suis ravis de vous accueillir. Veuillez vous connecter pour continuer.</p>
    <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'login']); ?>" class="button">
        Accéder au formulaire de connexion
    </a>
</div>
