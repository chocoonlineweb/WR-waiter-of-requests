<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\User::class, 80)->create()->each(function ($user) {
          /*$user->author()->save(factory(App\Author::class)->make());
          $user->people()->save(factory(App\Person::class)->make());
          $user->categories()->save(factory(App\Category::class)->make());
          $user->tags()->save(factory(App\Tag::class)->make());*/
      });
      App\User::create([
        'name' => 'elkin',
        'email' => 'elkincp5@gmail.com',
        'avatar' => 'img/d_user/default/profile/user_default.jpg',
        'password' => bcrypt('123'),
        'count' => 1000,
        'qr' => 'qr_defait',
        'status' => 'enabled',
        'socialLogin' => 'google',
      ]);
    }
}
