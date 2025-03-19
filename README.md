# Tugas-1-PWL
## Setup Proyek Microservices di VS Code 
Untuk memulai, buat folder baru untuk proyek microservices dan jalankan perintah 
berikut untuk membuat layanan-layanan menggunakan Laravel: 
mkdir e-commerce-microservices && cd e-commerce-microservices 
composer create-project --prefer-dist laravel/laravel user-service 
composer create-project --prefer-dist laravel/laravel product-service 
composer create-project --prefer-dist laravel/laravel order-service 
composer create-project --prefer-dist laravel/laravel api-gateway

## Implementasi User Service 
Implementasikan UserService untuk menangani registrasi dan login pengguna.

## Setup Product Service
### Model Database Produk 
Schema::create('products', function (Blueprint $table) { 
$table->id(); 
$table->string('name'); 
$table->decimal('price', 10, 2); 
$table->timestamps(); 
}); 
### Controller Produk 
public function index() { 
return response()->json(Product::all()); 
}

## Implementasi API Gateway 
Untuk memastikan bahwa layanan-layanan microservices dapat diakses dalam satu 
endpoint, kita menggunakan API Gateway. API Gateway akan meneruskan 
permintaan ke layanan terkait. 

## Pengujian dan Dokumentasi API 
Gunakan Postman untuk menguji layanan: 
• User Service → POST http://localhost:8000/user/register 
• Product Service → GET http://localhost:8000/product/products 
• Order Service → POST http://localhost:8000/order/store 
Pastikan setiap service merespon dengan benar sebelum menghubungkan frontend ke 
API.
