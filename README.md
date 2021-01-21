<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# API - Clientes

* Desenvolvido em Laravel 7.*

* Veja a documentação no [site oficial](https://laravel.com)

* Veja a [documentação](http://arpclientesapi.herokuapp.com/public/docs/) desta API

* Veja a [demo](http://arpclientesapi.herokuapp.com/api/clientes/1) deste projeto

## Server Requirements

[Laravel Requirements](https://laravel.com/docs/7.x#server-requirements)

* PHP >= 7.2.5
* BCMath PHP Extension
* Ctype PHP Extension
* Fileinfo PHP extension
* JSON PHP Extension
* Mbstring PHP Extension
* OpenSSL PHP Extension
* PDO PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension


## Instalando

1. Faça um clone do projeto

2. Faça uma cópia do arquivo `".env.example"` e renomeie para `".env"`

3. Configure o apontamento para o seu banco de dados

  * Caso queira testar com sqlite:

    * Remova a linhas abaixo do arquivo .env:

      - DB_HOST=127.0.0.1
      - DB_PORT=3306
      - DB_DATABASE=laravel
      - DB_USERNAME=root
      - DB_PASSWORD=  

    * Atribua "sqlite" ao tipo de conexão
      
      DB_CONNECTION=slqite

    * Crie um arquivo vazio com a extensão ".sqlite"

      "database\database.sqlite"

4. No terminal execute:

    ```bash
    $ composer install
    ```

5. Gerar uma key [terminal]

    ```bash
    $ php artisan key:generate
    ```    

6. Execute as migrations

    ```bash
    $ php artisan migrate
    ```

7. Para executar o servidor [terminal]

    ```bash
    $ php artisan serve
    ```
