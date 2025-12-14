# Sistem Manajemen Skincare Inventory

Aplikasi web full-stack untuk mengelola inventori produk skincare dengan operasi CRUD, dibangun menggunakan React.js, PHP, dan MySQL.


## Tentang Aplikasi
Proyek ini adalah aplikasi CRUD (Create, Read, Update, Delete) yang dirancang untuk membantu mengelola inventori produk skincare secara efisien. Pengguna dapat melacak detail produk termasuk nama, brand, kategori, jumlah, harga, dan tanggal kadaluarsa melalui interface web yang intuitif.
Tujuan: Aplikasi ini dikembangkan sebagai proyek pembelajaran untuk memahami pengembangan web full-stack, mengintegrasikan teknologi frontend (React), backend (PHP), dan database (MySQL).

## Teknologi yang digunakan
Frontend: React.js, Tailwind CSS, Lucide React, JavaScript 

Backend: PHP dan REST API

Database: MySQL, phpMyAdmin

## Instalasi
Pastikan telah menginstal: 

- XAMPP (untuk Apache dan MySQL)
 
- Node.JS (v14 atau lebih tinggi)

- git.

## Setup Backend:
1. Clone repository

   git clone https://github.com/username-anda/skincare-inventory.git
cd skincare-inventory

2. Setup Backend (PHP API)

   Copy file backend ke folder htdocs XAMPP

   cp -r backend/ C:/xampp/htdocs/skincare-api/

3. Buat database
   
   - Start XAMPP (Apache & MySQL)

   - Buka phpMyAdmin: http://localhost/phpmyadmin

   - Buat database: skincare_inventory

   - Import file SQL atau jalankan query ini:


    ```
    CREATE DATABASE skincare_inventory;

    USE skincare_inventory;

    CREATE TABLE products (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        brand VARCHAR(255) NOT NULL,
        category VARCHAR(100) NOT NULL,
        quantity INT NOT NULL,
        price DECIMAL(10, 2) NOT NULL,
        expiry_date DATE NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ```

4. Test backend API
 
   Buka di browser:

   http://localhost/skincare-api/read.php

   Harus mengembalikan response JSON

  ## Setup Frontend
  
  1. Install dependencies
     ```
     cd frontend
     npm install
     ```

  2. Install package yang diperlukan
     ```
     npm install lucide-react
     npm install -D tailwindcss postcss autoprefixer
     npx tailwindcss init -p
     ```
     
  3. Konfigurasi Tailwind CSS

     Update tailwind.config.js:

     ```
     module.exports = {
       content: [
          "./src/**/*.{js,jsx,ts,tsx}",
       ],
       theme: {
         extend: {},
       },
       plugins: [],
     }
     ```

     Update src/index.css:

      ```
     @tailwind base;
     @tailwind components;
     @tailwind utilities;
      ```

   4. Jalankan development server
      ```
      npm start
      ```
       Aplikasi akan terbuka di http://localhost:3000


## Cara penggunaan

Menambahkan produk

- Klik tombol "Add Product"
  
- Isi form dengan detail produk
  
- Klik "Create" untuk menyimpan


Mengedit produk

- Klik icon Edit (pensil) pada baris produk
  
- Ubah informasi yang diperlukan
  
- Klik "Update" untuk menyimpan perubahan

  
Menghapus produk

- Klik icon Delete (trash) pada baris produk
  
- Konfirmasi penghapusan
  
- Produk akan dihapus dari inventori
  

Mencari produk

- Ketik di search bar untuk memfilter produk berdasarkan nama, brand, atau kategori

  
Hasil akan diupdate secara real-time


