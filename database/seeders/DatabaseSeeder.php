<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

      /*   User::create([
            'name' => 'M.Thoriq Huda',
            'email' => 'Huda@gmail.com',
            'password' => bcrypt('password1')
        ]);
        User::create([
            'name' => 'Dodi',
            'email' => 'Doddy@gmail.com',
            'password' => bcrypt('password2')
        ]); */
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
            
        ]);
        
        Post::factory(20)->create();

        /* Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum pertama, sit amet consectetur adipisicing elit. Magni, iusto obcaecati quos sunt',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni, iusto obcaecati quos sunt ullam neque atque suscipit, laborum ab eveniet quisquam et officia, molestiae dolores nam mollitia. Exercitationem omnis commodi assumenda optio doloremque dignissimos nesciunt, modi ut veritatis quam perspiciatis deleniti temporibus blanditiis eos ab ea. Explicabo debitis minima expedita consequatur rerum dicta, cum aliquid aut facilis voluptate cupiditate distinctio dolores corrupti optio vel adipisci? Facere maxime at accusantium deserunt sapiente necessitatibus enim corporis ea minus porro blanditiis, vitae distinctio quas unde voluptas. Fuga eveniet mollitia velit esse reprehenderit, natus culpa deserunt aliquid sint, iusto quas laudantium hic accusamus totam?',
            'category_id' => 1,
            'user_id' => 1 
        ]); */
       /*  Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum kedua, sit amet consectetur adipisicing elit. Magni, iusto obcaecati quos sunt',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni, iusto obcaecati quos sunt ullam neque atque suscipit, laborum ab eveniet quisquam et officia, molestiae dolores nam mollitia. Exercitationem omnis commodi assumenda optio doloremque dignissimos nesciunt, modi ut veritatis quam perspiciatis deleniti temporibus blanditiis eos ab ea. Explicabo debitis minima expedita consequatur rerum dicta, cum aliquid aut facilis voluptate cupiditate distinctio dolores corrupti optio vel adipisci? Facere maxime at accusantium deserunt sapiente necessitatibus enim corporis ea minus porro blanditiis, vitae distinctio quas unde voluptas. Fuga eveniet mollitia velit esse reprehenderit, natus culpa deserunt aliquid sint, iusto quas laudantium hic accusamus totam?',
            'category_id' => 1,
            'user_id' => 1 
        ]);
        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum ketiga, sit amet consectetur adipisicing elit. Magni, iusto obcaecati quos sunt',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni, iusto obcaecati quos sunt ullam neque atque suscipit, laborum ab eveniet quisquam et officia, molestiae dolores nam mollitia. Exercitationem omnis commodi assumenda optio doloremque dignissimos nesciunt, modi ut veritatis quam perspiciatis deleniti temporibus blanditiis eos ab ea. Explicabo debitis minima expedita consequatur rerum dicta, cum aliquid aut facilis voluptate cupiditate distinctio dolores corrupti optio vel adipisci? Facere maxime at accusantium deserunt sapiente necessitatibus enim corporis ea minus porro blanditiis, vitae distinctio quas unde voluptas. Fuga eveniet mollitia velit esse reprehenderit, natus culpa deserunt aliquid sint, iusto quas laudantium hic accusamus totam?',
            'category_id' => 2,
            'user_id' => 1 
        ]);
        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum ketiga, sit amet consectetur adipisicing elit. Magni, iusto obcaecati quos sunt',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni, iusto obcaecati quos sunt ullam neque atque suscipit, laborum ab eveniet quisquam et officia, molestiae dolores nam mollitia. Exercitationem omnis commodi assumenda optio doloremque dignissimos nesciunt, modi ut veritatis quam perspiciatis deleniti temporibus blanditiis eos ab ea. Explicabo debitis minima expedita consequatur rerum dicta, cum aliquid aut facilis voluptate cupiditate distinctio dolores corrupti optio vel adipisci? Facere maxime at accusantium deserunt sapiente necessitatibus enim corporis ea minus porro blanditiis, vitae distinctio quas unde voluptas. Fuga eveniet mollitia velit esse reprehenderit, natus culpa deserunt aliquid sint, iusto quas laudantium hic accusamus totam?',
            'category_id' => 2,
            'user_id' => 2 
        ]); */
      

    }
}
