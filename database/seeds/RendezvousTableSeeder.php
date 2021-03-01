<?php

use App\Rendezvous;
use Illuminate\Database\Seeder;

class RendezvousTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Rendezvous::class, 10)->create();
    }
}
