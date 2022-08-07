<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Market Place - Laravel 9 
## Implantando o projeto 
Comece realizando o clone desse repositório utilizando o comando :
```shell
git clone https://github.com/felipesergios/Market_Place_Simple.git
```
Agora prossiga executando o docker-compose que é responsável por subir os containers de aplicação de banco de dados (nesse projeto utilizamos o MariaDb)
->Observação com o comando abaixo você conseguira ver os logs e saída dos container caso não queira vê-los utilize o parâmetro "-d"
```shell
docker-compose up
# docker-compose up -d
```
Aguarde o docker subir os containers e faça o primeiro teste utilizando 
```shell
curl http://localhost:8000/api/produto
```
Ou pode acessar via browser usando a Url 
http://localhost:8000/api/produto
você deverá receber a seguinte resposta :
```json
{
"id":"1",
"product_name":"Meu primeiro produto",
"product_price":"50.5",
"product_campaing":"1"
}
```
Após a validação inicial segue o uso da API 
### Campanha 
```
GET http://localhost:8000/public/api/campanha
# responsavel por trazer todas as campanhas cadastradas
```
```
GET http://localhost:8000/public/api/campanha/{id}
# responsavel por trazer a campanha referente ao id informado
```
```
POST http://localhost:8000/public/api/campanha/
# responsavel por cadastrar uma nova campanha (deverá ser informado o Json com os dados segue exemplo abaixo)
```
```json
{
"campaign_name":"nome da campanha"
}
```
```
PUT http://localhost:8000/public/api/campanha/{id}
# responsavel por editar uma campanha (deverá ser informado o Json com os dados e o ID segue exemplo abaixo)
```

```json
{
"campaign_name":"novo nome da campanha"
}
```

```
DELETE http://localhost:8000/public/api/campanha/{id}
# responsavel deletar uma campanha (deverá ser informado o ID)
```

### Cidade
```
GET http://localhost:8000/public/api/cidade
# responsavel por trazer todas as cidades cadastradas
```
```
GET http://localhost:8000/public/api/cidade/{id}
# responsavel por trazer a cidade referente ao id informado
```
```
POST http://localhost:8000/public/api/cidade/
# responsavel por cadastrar uma nova cidade (deverá ser informado o Json com os dados segue exemplo abaixo)
```
```json
{
"city_name":"Natal",
"city_simbol":"NAT",
"city_state":"RN",
"city_group_id":"1",
}
```
```
PUT http://localhost:8000/public/api/cidade/{id}
# responsavel por editar uma cidade(deverá ser informado o Json com os dados e o ID segue exemplo abaixo)
```

```json
{
"city_name":"novo nome da cidade"
}
```

```
DELETE http://localhost:8000/public/api/cidade/{id}
# responsavel deletar uma cidade (deverá ser informado o ID)
```

### Desconto
```
GET http://localhost:8000/public/api/desconto
# responsavel por trazer todas os descontos cadastrados
```
```
GET http://localhost:8000/public/api/desconto/{id}
# responsavel por trazer o desconto referente ao id informado
```
```
POST http://localhost:8000/public/api/desconto/
# responsavel por cadastrar uma novo desconto (deverá ser informado o Json com os dados segue exemplo abaixo)
observação o campo "discount_campaing" necessita do id da campanha ao qual esse desconto fara parte
```
```json
{
"discount_size":"nome da campanha",
"discount_campaing":"1"
}
```
```
PUT http://localhost:8000/public/api/desconto/{id}
# responsavel por editar um desconto (deverá ser informado o Json com os dados e o ID segue exemplo abaixo)
```

```json
{
"discount_size":"60%"
}
```

```
DELETE http://localhost:8000/public/api/desconto/{id}
# responsavel deletar uma desconto (deverá ser informado o ID)
```

### Grupo
```
GET http://localhost:8000/public/api/grupo
# responsavel por trazer todos os grupos cadastrados
```
```
GET http://localhost:8000/public/api/grupo/{id}
# responsavel por trazer o grupo referente ao id informado
```
```
POST http://localhost:8000/public/api/grupo/
# responsavel por cadastrar uma novo grupo (deverá ser informado o Json com os dados segue exemplo abaixo)
observação o campo "group_campaing" necessita do id da campanha ao qual esse grupo fara parte
```
```json
{
"group_name":"nome do grupo",
"group_campaing":"1"
}
```
```
PUT http://localhost:8000/public/api/grupo/{id}
# responsavel por editar um grupo (deverá ser informado o Json com os dados e o ID segue exemplo abaixo)
```

```json
{
"id":"1"
"group_name":"60%"
}
```

```
DELETE http://localhost:8000/public/api/grupo/{id}
# responsavel deletar uma grupo (deverá ser informado o ID)
```

### Produto
```
GET http://localhost:8000/public/api/produto
# responsavel por trazer todos os produtos cadastrados
```
```
GET http://localhost:8000/public/api/produto/{id}
# responsavel por trazer o produto referente ao id informado
```
```
POST http://localhost:8000/public/api/produto/
# responsavel por cadastrar uma novo produto(deverá ser informado o Json com os dados segue exemplo abaixo)
observação o campo "product_campaing" necessita do id da campanha ao qual esse produto fara parte
```
```json
{
"product_name":"nome do produto",
"product_price":"50.5",
"product_campaing":"1"
}
```
```
PUT http://localhost:8000/public/api/produto/{id}
# responsavel por editar um produto(deverá ser informado o Json com os dados e o ID segue exemplo abaixo)
```

```json
{
"id":"1"
"product_name":"novo nome do produto"
}
```

```
DELETE http://localhost:8000/public/api/produto/{id}
# responsavel deletar um produto (deverá ser informado o ID)
```






