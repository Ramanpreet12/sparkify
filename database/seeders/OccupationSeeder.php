<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Occupation;
use Carbon;

class OccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $occupationRecords = [
        //     ['id' => 1 , 'name' => 'occupation name' , 'status' => 'active' ,
        //     'created_at' => \Carbon\Carbon::now() , 'updated_at' =>\Carbon\Carbon::now()]
        // ];
        // Occupation::insert($occupationRecords);

        //fake occupations
        Occupation::factory()->times(12)->create();
    }
}
