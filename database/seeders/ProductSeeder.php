<?php
// database/seeders/ProductSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'nama_produk' => 'Tape Singkong Khas Desa Cikasungka',
            'deskripsi' => 'Tape singkong asli dari desa kami dengan rasa manis dan lembut.',
            'harga' => 15000,
            'gambar' => 'product/tape1.jpg', // simpan di storage/app/public/produk/tape1.jpg
            'stok' => 100,
            'penjual' => 'Bu Euis'
        ]);
    }
}
