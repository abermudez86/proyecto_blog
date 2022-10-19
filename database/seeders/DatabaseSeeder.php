<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*creamos un admin*/
        /*User::factory()->create([
            'name' => 'Admin',
            'email' => 'test@example.com',
            'password' => '123',
        ]);*/

        /* luego algunos usuarios */
        User::factory(10)->create();

       $this->call([
           //seedeamos las alicuotas de la AFIP aca
           AlicuotasAfipTableSeeder::class,
           TiposComprobanteAfipSeeder::class,
       ]
       );
    }
}
