# Cidadao de olho
Projeto realizado para demonstrar conhecimento no laravel.


* [Descrição](#Descrição)
* [Instalação e vesão](#Instalação-e-vesão)
* [Como Utilizar](#Como-Utilizar)
* [Rotas](#Rotas)
* [Banco de dados](#Banco-de-dados)


# Descrição
    O projeto tem a finalizade de mostar os dois escripts citados em * [Rotas](#Rotas),
    feito para monstrar conhecimento adquirido em laravel e back-end,
    experiência muito agradavél pelo ambiente e suas facilitações.
    

# Instalação e vesão
    Neste projeto foi utilizado o PHP 8.1.5 (https://www.php.net/downloads.php) e
    o laravel 9 (https://laravel.com/), para ser feito esta instalação,
    podera fazer o download do php direto por seu site, depois disso,
    deverá fazer o download do COMPOSER (https://getcomposer.org/download/). Após esses passos,
    devera seguir a documentação do laravel (link acima) e
    nela explica como fazer a instalação do mesmo e seus comandos.

    
# Como Utilizar
    Para utilizar o script, primeiramente devemos fazer o carregamento do banco de dados ,
    como eu utilizei as pastas dos seeders e migrates,somente será necessário a utilização dos comandos
    " php artisan migrate " e " php artisan db: seed ", após essses comandos serão carregados
    as tabelas do bancos de dados. Com os bancos de dados carregados está na hora de utilizar as rotas,
    (recomendação postman ou eclipse). As rotas estarão descritas abaixo com suas funções.
    
    
# Rotas
    localhost:8000/api/gastos : Rota com a função de mostrar o top 5 deputados que mais gastaram,
    sendo esse rank mensal,contando apenas o ano de 2019;
    localhost:8000/api/redes : Rota com função de demonstar o ranking de redes sociais ,
    para sabermos quais são mais utilizadas.
    
    
# Banco de dados
    Banco de dados foi o Mysql, no arquivo .env pode ser verificado as configuração do banco.
