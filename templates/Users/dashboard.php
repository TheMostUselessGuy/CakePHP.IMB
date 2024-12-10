<?php
$authUser = $this->request->getAttribute('identity');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord</title>
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake', 'dashboard']) ?>
    <style>
        .sidebar {
            display: none;
        }
        .sidebar.active {
            display: block;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
</head>

<body>
    <div class="main-content">
        <h1>Bienvenue sur le tableau de bord <?= $authUser ? h($authUser->email) : '' ?></h1>
        <button id="toggle-menu">Afficher/Masquer Menu</button>
    </div>

    <div class="sidebar" id="sidebar">
        <h2>Menu</h2>
        <ul id="menu-list"></ul>
    </div>

    <script>
        const menuItems = [
            { text: 'Liste utilisateur', url: '<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']); ?>' },
            { text: 'Ajout utilisateur', url: '<?= $this->Url->build(['controller' => 'Users', 'action' => 'add']); ?>' },
            { text: 'Éditer utilisateur', url: '<?= $this->Url->build(['controller' => 'Users', 'action' => 'edit', 1]); ?>' },
            { text: 'Déconnexion', url: '<?= $this->Url->build(['controller' => 'Users', 'action' => 'logout']); ?>' }
        ];

        function renderMenu() {
            const menuList = document.getElementById('menu-list');
            menuList.innerHTML = '';
            menuItems.forEach(item => {
                const li = document.createElement('li');
                const a = document.createElement('a');
                a.href = item.url;
                a.textContent = item.text;
                li.appendChild(a);
                menuList.appendChild(li);
            });
        }

        document.getElementById('toggle-menu').addEventListener('click', function() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('active');
        });

        renderMenu();

        new Sortable(document.getElementById('menu-list'), {
            animation: 150,
            onEnd: function (evt) {
                const item = menuItems.splice(evt.oldIndex, 1)[0];
                menuItems.splice(evt.newIndex, 0, item);
                renderMenu();
            }
        });
    </script>
</body>

</html>