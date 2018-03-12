<?php
use Illuminate\Database\Seeder;
use App\Model\Language;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->delete();
        Language::create([
            'title' => 'English',
            'code' => 'en',
            'site_title' => 'Blog',
            'site_description' => 'My Awesome Blog'
        ]);
    }
}
