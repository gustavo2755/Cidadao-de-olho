# Cidadao de olho
Projeto realizado para demonstrar conhecimento no laravel.


* [Descrição](#Descrição)
* [Como Utilizar](#Como-Utilizar)
* [Banco de dados](#Banco-de-dados)
* [Rotas](#Rotas)





# Descrição
    O projeto tem a finalizade de mostar os dois escripts citados em * [Rotas](#Rotas),
    feito para monstrar conhecimento adquirido em laravel e back-end,
    experiência muito agradavél pelo ambiente e suas facilitações.
    
    
# Como Utilizar
    Para utilizar o script, primeiramente devemos fazer o carregamento do banco de dados , como eu utilizei as pastas
    dos seeders e migrates,somente será necessário a utilização dos comandos " php artisan migrate " e 
    " php artisan db: seed ", após essses comandos serão carregados as tabelas do bancos de dados. 
    Com os bancos de dados carregados está na hora de utilizar as rotas, (recomendação postman ou eclipse).
    As rotas estarão descritas abaixo com suas funções.
    
    
# Rotas
    localhost:8000/api/gastos : Rota com a função de mostrar o top 5 deputados que mais gastaram, sendo esse rank mensal,
    contando apenas o ano de 2019;
    localhost:8000/api/redes : Rota com função de demonstar o ranking de redes sociais , para sabermos quais são mais utilizadas.
    
    
# Banco de dados
    Banco de dados foi o Mysql, no arquivo .env pode ser verificado as configuração do banco.
