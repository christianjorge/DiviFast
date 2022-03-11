# Divifast - Laravel + Blade


##Instalação
Ambiente: Utilizei Windows como SO, Xampp para BD.
Instalar 
 - Composer (https://getcomposer.org/download/)
 - Laravel (Via Composer, especificar versão 8.*) 
```composer global require laravel/installer```
 - Crie diretório e clone o projeto
 - Crie BD divifast ou configure um diferente na ```.env``` do projeto
 - Execute ```php artisan migrate``` para gerar as tabelas e estrutura do BD.
 - Executa ```php artisan db:seed``` para popular as tabelas
 - Execute ```php artisan serve``` para Iniciar o server da API.
 - Acesse o servidor local via navegador para executar os testes no CRUD (no meu caso: http://localhost:8000/), 
ou utilize os endpoints a seguir para efetuar outros testes.


