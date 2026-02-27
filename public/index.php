<?php
declare(strict_types=1);

session_start();

require_once __DIR__ . '/../src/Support/helpers.php';

$path = $_GET['path'] ?? '/';

switch ($path) {
    case '/':
        echo "Accueil TicketFlow";
        break;

    case 'tickets':
        echo "Liste des tickets";
        break;

    case 'login':
        echo "Page de login";
        break;

    default:
        http_response_code(404);
        echo "Page non trouvée";
}