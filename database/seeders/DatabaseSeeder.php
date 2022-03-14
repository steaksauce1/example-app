<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //housekeeping, cleaning up the database

        /** ////////////
         * 
         * WARNIGN!
         * Cannot use "truncate();" with foreign keys
         * 
         * /////////////////////
         */
        //
        // Comment::truncate();
        // Category::truncate();
        // User::truncate();
        // Post::truncate();
       
            /** ////////////
         * 
         * WARNIGN!
         * Cannot use "truncate();" with foreign keys
         * 
         * /////////////////////
         */
        //

        //letting factory make some posts
        Post::factory(5)->create(); //random posts
        Post::factory(3)->create(['category_id' => 1]); //makes multiple posts in the same category
        Post::factory(5)->create(['user_id' => 1]); //posts from the same uers so they have more than just '1'
        Post::factory(4)->create(['user_id' => 2]); //"   " same with this guy "   "
        Post::factory(3)->create(['user_id' => 3]); //"   " same with this guy "   "
        Post::factory(2)->create(['user_id' => 4]); //"   " same with this guy "   "
        Post::factory(5)->create(['user_id' => 5]); //"   " same with this guy "   "



        //manually making custom category
        $testcategory = Category::create([
            'name' => 'Test-Category',
            'slug' => 'testcategory'
        ]);
        $testcategory2 = Category::create([
            'name' => 'Test-Category2',
            'slug' => 'testcategory2'
        ]);









        //manually making users, these guys don't post yet
        $user = User::create([
            'name' => 'Test-User',
            'username' => 'bobbar',
            'email' => 'test@test.net',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $user = User::create([
            'name' => 'Test-User2',
            'username' => 'bobbar2',
            'email' => 'test2@test.net',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);










        //forced posts to give users more than "1" post
        $post = Post::create([
            'user_id' => 1,
            'category_id' => 1,
            'slug' => 'this-is-first-post',
            'title' => 'This is The First Post',
            'excerpt' => 'Watching the Sopranos, it\'s pretty fun',
            'body' => 'the sopranons is a pretty alright show but its a bit violent and I dont linke the t vioslensts that maucha I hate work9ing ont his keyboard Id rather use the other otherolinear keyboard that is much weaeir tyho use so I just type giberish here so That h it liik sliek I m tiyping soemthing'
        ]);
        $post = Post::create([
            'user_id' => 2,
            'category_id' => 1,
            'slug' => 'this-is-second-post',
            'title' => 'This is The First Post from second user',
            'excerpt' => 'Watching the Sopranos, it\'s pretty fun',
            'body' => 'the sopranons is a pretty alright show but its a bit violent and I dont linke the t vioslensts that maucha I hate work9ing ont his keyboard Id rather use the other otherolinear keyboard that is much weaeir tyho use so I just type giberish here so That h it liik sliek I m tiyping soemthing'
        ]);
        $post = Post::create([
            'user_id' => 1,
            'category_id' => 2,
           'slug' => 'this-is-third-post',
            'title' => 'This is The Second Post From First User',
            'excerpt' => 'Watching the Sopranos, it\'s pretty fun',
            'body' => 'typing things here is fun and stuff bou can I type up a storm you cannot believe all the things I cant type boy oh boy can this go on forever and ever but man I am tired so I will stop now'
        ]);




         //\App\Models\User::factory(10)->create();
        }
    }

