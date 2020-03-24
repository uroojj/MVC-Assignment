<?php

use Illuminate\Database\Seeder;

class EmployeeTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aboutpage = array(
            0 =>  array(
                "first_name" => "Syeda Urooj",
                "last_name" => "Sohail",
                "gender" => "Female",
                "HiredDate" => "10-01-2019",
                "salary" => "100000"

                ),

        );

            foreach($aboutpage as $key => $list){
                DB::table('employees')->insert($list);
            }
    }
}
