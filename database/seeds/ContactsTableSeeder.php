<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('contacts')->delete();

        $contacts = array(
            ['id' => 1, 'subject' => 'Project 1', 'name' => 'Project 1','email'=>'project@gmail.com','feedback'=>'Which is very good','is_reply'=>'', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('contacts')->insert($contacts);
    }

}