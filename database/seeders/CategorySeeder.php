<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           $subs = [];
           $index = 1;
          for($i = 1 ; $i <= 5 ; $i++){
            $subs[$i] = "category $i";
             DB::table('categories')->insert([ 'name' => "category $i", 'parent_id' => 0]);
            }

            $index = 1;
            for($i = 6 ; $i <= 20 ; $i++){
                $j = random_int ( 1,5);
                $subs[$i] = "sub  $j $index";
                DB::table('categories')->insert([ 'name' =>  $subs[$i], 'parent_id' => $j]);
                $index++; 
            }

            $index = 1;
            for($i = 21 ; $i <= 100 ; $i++){
                $j = random_int ( 6,20);
                $subs[$i] = "sub ".$subs[$j]." $index " ;
                DB::table('categories')->insert([ 'name' =>  $subs[$i], 'parent_id' => $j]);
                $index++;
            }

            $index = 1;
            for($i = 101 ; $i <= 300 ; $i++){
                $j = random_int ( 21,100);
                $subs[$i] = "sub ".$subs[$j]." $index " ;
                DB::table('categories')->insert([ 'name' =>  $subs[$i], 'parent_id' => $j]);
                $index++;
            }

            $index = 1;
            for($i = 301 ; $i <= 1000 ; $i++){
                $j = random_int ( 101,300);
                $subs[$i] = "sub ".$subs[$j]." $index " ;
                DB::table('categories')->insert([ 'name' =>  $subs[$i], 'parent_id' => $j]);
                $index++;
            }
    }
}
