Запуск: docker-compose up --build -d    
Миграции БД: docker exec -it kinetica-php-fpm bin/console doctrine:migrations:migrate    
Используется 8081-ый порт (http://localhost:8081)    
В переменных окружения прописаны параметры для подключения к БД (при изменении, стоит также изменить и в ./kinetica/.env)   

DATABASE_URL="mysql://kinetica:kinetica@mysql/kinetica?erverVersion=8.0" 
