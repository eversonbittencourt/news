# API News G1

Essa aplicação laravel é um teste com objetivo de criar uma pequena API que realiza consulta de posts do portal G1 (http://pox.globo.com/rss/g1/economia)

### Instalação

O projeto pode ser executado como uma aplicação Laravel padrão, não possuindo uma prefência de servidor ou ferramenta.

### Requisitos

- Possuir instalado o Node js
- A versão do PHP ulitilizada deve ser 7.1.3 ou versao mais recente.

### Instruções

- Realize o clone do repositório do projeto (git clone https://github.com/eversonbittencourt/news.git).
- No CMD execute o comando ```composer install```.
- Através do CMD acesse o dirétório do projeto e execute o comando ```php artisan serve```, esse comaando vai iniciar o projeto permitindo começar a utilizar a API.

### API

- Consulta de Posts
	A URL para essa consuta é http://localhost:8000/api/news/ ou http://localhost:8000/api/news/2, na primeira opção será retornado por padrão a página de 1 de posts, na segunda oção é possível setar a numeração da página.
	Outros exemplos:
		http://localhost:8000/api/news/3
		http://localhost:8000/api/news/2  

- Consulta de Single Post
	A URL para essa consulta é http://localhost:8000/api/news/SLUG DO POST, nas informações que são disponibilizadas pelo portal da G1, não é possível localizar um ID, tendo em vista essa situação, foi criado uma processo onde é gerado um slug dos posts baseado no título do post, segue abaixo alguns exemplos e URL que podem ser utilizadas na API para trazer a informação do post.
	Exemplos:
		http://localhost:8000/api/news/banco-central-reduz-para-13-previsao-de-crescimento-do-pib-em-2018
		http://localhost:8000/api/news/pib-do-brasil-deve-crescer-2-em-2019-diz-cepal


### Teste Unitários

Para executar os testes unitário necessáio executar o comando ```./vendor/bin/phpunit tests/Unit/TestNews.php```


