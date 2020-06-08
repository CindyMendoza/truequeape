<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
    // $this->call(UserSeeder::class);
    // DB::table('users')->insert([
    //   'name' => Str::random(10),
    //   'email' => Str::random(10) . '@gmail.com',
    //   'password' => Hash::make('password'),
    // ]);
    DB::table('headcompany')->insert([
      'name' => 'Agroindustrias'
    ]);
    DB::table('headcompany')->insert([
      'name' => 'Alimentos y bebidas'
    ]);
    DB::table('headcompany')->insert([
      'name' => 'Catering'
    ]);
    DB::table('headcompany')->insert([
      'name' => 'Construcción'
    ]);
    DB::table('headcompany')->insert([
      'name' => 'Cuero y calzado'
    ]);
    DB::table('headcompany')->insert([
      'name' => 'Electronica'
    ]);
    DB::table('headcompany')->insert([
      'name' => 'Ferreteria'
    ]);
    DB::table('headcompany')->insert([
      'name' => 'Medios de Comunicación'
    ]);
    DB::table('headcompany')->insert([
      'name' => 'Muebles en General'
    ]);
    DB::table('headcompany')->insert([
      'name' => 'Publicidad y Marketing'
    ]);
    DB::table('headcompany')->insert([
      'name' => 'RestaurantesTextiles'
    ]);
    DB::table('headcompany')->insert([
      'name' => 'Transporte'
    ]);
    DB::table('headcompany')->insert([
      'name' => 'Turismo'
    ]);

  }
}
