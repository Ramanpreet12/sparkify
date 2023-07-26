<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ManageCategory;
use Carbon;

class ManageCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manage_categoryRecords = [
            ['id' => 1 ,'categories_id' => 1 ,  'name' => 'occupation name' , 'status' => 'active' ,
            'created_at' => \Carbon\Carbon::now() , 'updated_at' =>\Carbon\Carbon::now()]
        ];
        ManageCategory::insert($manage_categoryRecords);
    }
}
