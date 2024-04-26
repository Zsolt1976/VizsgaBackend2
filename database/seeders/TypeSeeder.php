<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $type = new Type();
        $type->name = "kristalycukor";
        $type->food = true;
        $type->save();

        $type = new Type();
        $type->name = "uditoital";
        $type->food = true;
        $type->save();

        $type = new Type();
        $type->name = "tusfurdo";
        $type->food = false;
        $type->save();

        $type = new Type();
        $type->name = "UHT_tej";
        $type->food = true;
        $type->save();

        $type = new Type();
        $type->name = "keztorlo";
        $type->food = false;
        $type->save();

        $type = new Type();
        $type->name = "szorp";
        $type->food = true;
        $type->save();

    }
}
