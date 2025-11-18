<?php

namespace MonApp\Models {

    class User
    {
        private $nom;

        public function __construct($nom)
        {
            $this->nom = $nom;
        }

        public function afficher()
        {
            echo "👤 Modèle User : {$this->nom}";
        }
    }
}

namespace MonApp\Controllers {

    class UserController
    {
        public function index()
        {
            echo "📋 Liste des utilisateurs";
        }
    }
}

namespace {
    echo "<br>";
    $user = new \MonApp\Models\User("Jean");
    $user->afficher();

    $controller = new \MonApp\Controllers\UserController();
    $controller->index();
}

namespace {

    use MonApp\Models\User;
    use MonApp\Controllers\UserController;

    echo "<br>";
    $user2 = new User("Marie");
    $user2->afficher();

    $controller2 = new UserController();
    $controller2->index();
}
