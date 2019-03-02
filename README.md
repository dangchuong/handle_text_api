HOW TO INSTALL:
1) Clone source code
	git clone git@github.com:dangchuong/handle_text_api.git
2) composer install
3) cp .env.example .env
4) sudo chmod -R 777 storage
5) sudo chmod -R 777 bootstrap/cache
6) Create database name with named text_api
7) php artisan migrate --seed
8) php artisan serve
9) Import text_api.postman_collection.json into postman to testing API
Done

API END POINT URL:
GET http://127.0.0.1:8000/api/v1/current-text
PUT http://127.0.0.1:8000/api/v1/color-cup
PUT http://127.0.0.1:8000/api/v1/type-drink
PUT http://127.0.0.1:8000/api/v1/table-material
PUT http://127.0.0.1:8000/api/v1/temperature