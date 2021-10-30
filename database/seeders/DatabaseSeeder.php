<?php

namespace Database\Seeders;

use App\Models\Blog;
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


        Blog::create([
            'title'=>"BLOG 1",

            'content'=>"A relationship is very sweet when you care and show love to your partner, let him know how important he is to you, how much you cherish him, and the best way to do this is by sending him long paragraphs of sweet messages."
        ]);
    }
}
