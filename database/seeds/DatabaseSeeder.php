<?php
use App\User;
use App\Post;
use Illuminate\Database\Seeder;
use App\Topic;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
    factory(User::class,20)->create();
    Topic::create(['name'=>'Featured sitest','slug' => 'featured']);
    Topic::create(['name'=>'Useful links','slug' => 'Links']);
    Topic::create(['name'=>'Guides Tutorials','slug' => 'Tutorials']);

    factory(Post::class,20)->create();

    }
}
