<?php

use Illuminate\Database\Seeder;

class MailerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    factory(App\Models\Mailer::class, 15)->create()->each(function($u) {
		    $u->issues()->save(factory(App\Models\Mailer::class)->make());
	    });
    }
}
