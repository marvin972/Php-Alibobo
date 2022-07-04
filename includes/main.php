    <main>
        <h1>Main</h1>
        <?php

// // Opérateur ternaire
// $page = isset($_GET['page']) ? $_GET['page'] : "accueil";

// // Opérateur conventionnelle
// if (isset($_GET['page'])){
//     $page = $_GET['page'];
//     dump($page);
// }
// else {
//     $page = "accueil";

// }

// Null coalescent operator
$page = $_GET['page'] ?? "accueil";
autoInclude($page);
        ?>
    </main>
