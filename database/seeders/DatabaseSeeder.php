<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name'=>'indra irawan',
            'username'=>'indra',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345678')

        ]);

        User::create([
            'name'=>'Budi Putra',
            'username'=>'budi',
            'email'=>'penulis@gmail.com',
            'password'=>bcrypt('12345678')

        ]);

        Post::create([
            'judul'=>'Judul Pertama',
            'category_id'=>'1',
            'user_id'=>'1',
            'slug'=>'judul-pertama',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quam ea exercitationem, numquam nemo sit tempore soluta iure necessitatibus repudiandae, quo animi. Quia vitae quos eos in at cum! Maiores eos iusto, cum nisi neque quaerat harum ipsum magni deleniti sequi eligendi, vitae iure pariatur hic! Molestiae dolorem, inventore voluptatem repellendus nam saepe provident aliquid ea corporis illum et architecto eaque iusto voluptates officia error atque perferendis quidem sapiente earum laborum expedita optio necessitatibus. Libero dolores doloremque doloribus excepturi alias voluptates est a, consequatur ipsum nisi laborum molestiae. Itaque aliquam nam maiores nobis alias repellendus cum rerum error maxime! Nulla.'
           
          ]);
  
          Post::create([
              'judul'=>'Judul Kedua',
              'category_id'=>'2',
              'user_id'=>'1',
              'slug'=>'judul-kedua',
              'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quam ea exercitationem, numquam nemo sit tempore soluta iure necessitatibus repudiandae, quo animi. Quia vitae quos eos in at cum! Maiores eos iusto, cum nisi neque quaerat harum ipsum magni deleniti sequi eligendi, vitae iure pariatur hic! Molestiae '
             
            ]);
  
            Post::create([
              'judul'=>'Judul Ketiga',
              'category_id'=>'3',
              'user_id'=>'2',
              'slug'=>'judul-ketiga',
              'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quam ea exercitationem, numquam nemo sit tempore soluta iure necessitatibus repudiandae, quo animi. Quia vitae quos eos in at cum! Maiores eos iusto, cum nisi neque quaerat harum ipsum magni deleniti sequi eligendi, vitae iure pariatur hic! Molestiae '
             
            ]);
  
            Post::create([
              'judul'=>'Judul Empat',
              'category_id'=>'2',
              'user_id'=>'1',
              'slug'=>'judul-keempat',
              'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quam ea exercitationem, numquam nemo sit tempore soluta iure necessitatibus repudiandae, quo animi. Quia vitae quos eos in at cum! Maiores eos iusto, cum nisi neque quaerat harum ipsum magni deleniti sequi eligendi, vitae iure pariatur hic! Molestiae '
             
            ]);
  
            Post::create([
              'judul'=>'Judul Kelima',
              'category_id'=>'3',
              'user_id'=>'1',
              'slug'=>'judul-kelima',
              'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quam ea exercitationem, numquam nemo sit tempore soluta iure necessitatibus repudiandae, quo animi. Quia vitae quos eos in at cum! Maiores eos iusto, cum nisi neque quaerat harum ipsum magni deleniti sequi eligendi, vitae iure pariatur hic! Molestiae '
             
            ]);


            Category::create([

                'name'=>'Duta Bahasa',
                'slug'=>'duta-bahasa'
            ]);
    
            Category::create([
    
                'name'=>'Bulan Bahasa',
                'slug'=>'bulan-bahasa'
            ]);
    
            Category::create([
    
                'name'=>'UKBI Adaptif',
                'slug'=>'ukbi-adaptif'
            ]);





    }
}
