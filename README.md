## Ambiente Docker

1. Clonar o repositório:
`git clone https://github.com/nilbertooliveira/backend-careers.git`

2. Instalar as dependências:
 ```
docker-compose exec phpfpm composer install
docker-compose exec phpfpm php artisan key:generate
docker-compose exec phpfpm php artisan passport:install
 ```
2. Acessar a pasta do projeto "docker" e rodar o comando:
	`docker-compose up -d`

3. Conectar a uma ferramenta de banco como o "DBeaver" e criar o database com o nome "backend-careers":
```
Host: 10.5.0.4
Port: 3306
User: root
Pass: Nil#123@
```
6. Configurar a base de dados
```
docker-compose exec phpfpm php artisan migrate --seed
```
## Utilização das APIS
[Documentação Postman](https://www.getpostman.com/collections/256f18e27c13afeed675)
