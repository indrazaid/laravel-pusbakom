<?php

namespace Database\Seeders;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
          'judul'=>'Judul Pertama',
          'category_id'=>'1',
          'slug'=>'judul-pertama',
          'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quam ea exercitationem, numquam nemo sit tempore soluta iure necessitatibus repudiandae, quo animi. Quia vitae quos eos in at cum! Maiores eos iusto, cum nisi neque quaerat harum ipsum magni deleniti sequi eligendi, vitae iure pariatur hic! Molestiae dolorem, inventore voluptatem repellendus nam saepe provident aliquid ea corporis illum et architecto eaque iusto voluptates officia error atque perferendis quidem sapiente earum laborum expedita optio necessitatibus. Libero dolores doloremque doloribus excepturi alias voluptates est a, consequatur ipsum nisi laborum molestiae. Itaque aliquam nam maiores nobis alias repellendus cum rerum error maxime! Nulla.'
         
        ]);

        Post::create([
            'judul'=>'Judul Kedua',
            'category_id'=>'2',
            'slug'=>'judul-kedua',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quam ea exercitationem, numquam nemo sit tempore soluta iure necessitatibus repudiandae, quo animi. Quia vitae quos eos in at cum! Maiores eos iusto, cum nisi neque quaerat harum ipsum magni deleniti sequi eligendi, vitae iure pariatur hic! Molestiae '
           
          ]);

          Post::create([
            'judul'=>'Judul Ketiga',
            'category_id'=>'3',
            'slug'=>'judul-ketiga',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quam ea exercitationem, numquam nemo sit tempore soluta iure necessitatibus repudiandae, quo animi. Quia vitae quos eos in at cum! Maiores eos iusto, cum nisi neque quaerat harum ipsum magni deleniti sequi eligendi, vitae iure pariatur hic! Molestiae '
           
          ]);
    }
}
