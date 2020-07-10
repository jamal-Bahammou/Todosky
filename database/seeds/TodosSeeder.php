<?php

use Illuminate\Database\Seeder;

class TodosSeeder extends Seeder {

    public function run() {
        factory(App\Todo::class, 5)->create();
    }
    
}
