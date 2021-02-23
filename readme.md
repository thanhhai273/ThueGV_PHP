Cách chạy project:
Project chạy bằng Laravel nên các bạn phải cài đặt sẵn Laravel và các phần mềm cần thiết trước
1. Tạo database tên homestead trên cơ sở dữ liệu phpmyadmin
2. Copy file .env.example sang file .env
3. Config file .env
4. Chạy command: composer install
4. chạy command: php artisan migrate
5. chạy command: php artisan db:seed
6. Chạy command: php artisan db:seed --class=UserSeeder
7. Chạy:php artisan serve
8. Chương trình sẽ được chạy tại cổng: localhost:8000
