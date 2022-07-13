# Setup di un progetto Laravel
## Questi sono i passi da seguire per creare un nuovo progetto Laravel:
1. creare la cartella del progetto
1. aprirla con vscode
1. aprire il terminale e installare Laravel con:
    ```
	composer create-project --prefer-dist laravel/laravel:^7.0 .
    ```
1. finita l'installazione installare le librerie js con:
    ```
	npm install
    ```
1. finita l'installazione avviare il server con:
    ```
	php artisan serve
    ```
1. aprire un'altra tab del terminale e lanciare il watch per compilare le risorse:
    ```
	npm run watch
    ```
	(se da errore rieseguire il comando)
1. aprire un'altra tab del terminale libera per lanciare eventuali altri comandi



## Passi per scaricare un progetto Laravel:
1. copiare .env.example nella stessa cartella e rinominarlo .env
1. php artisan key:generate
1. installare le librerie php con:
	```
    composer install
    ```
1. finita l'installazione installare le librerie js con:
    ```
	npm install
    ```
1. finita l'installazione avviare il server con:
    ```
    php artisan serve
    ```
1. aprire un'altra tab del terminale e lanciare il watch per compilare le risorse:
    ```
	npm run watch
    ```
	(se da errore rieseguire il comando)
1. aprire un'altra tab del terminale libera per lanciare eventuali altri comandi
