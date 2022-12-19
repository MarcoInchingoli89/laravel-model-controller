## - Consegna Laravel Model Controller

1. Create un nuovo progetto Laravel 9 OK
2. tramite phpMyAdmin create un nuovo database laravel_model_controller OK
3. Importate nel vostro database la tabella movies in allegato OK
4. inserite le vostre credenziali per il database nel file .env OK
5. Create un model Movie php artisan make:model Movie OK
6. Create un controller che gestirà la rotta /  usando il comando php artisan make:controller Guest/PageController OK
7. All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.
