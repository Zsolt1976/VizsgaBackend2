<?php

namespace Database\Seeders;

use App\Models\Manufacturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $manufacturer = new Manufacturer();
        $manufacturer->name = "kabai_cukorgyar";
        $manufacturer->control = true;
        $manufacturer->save();

        $manufacturer = new Manufacturer();
        $manufacturer->name = "szikszoi";
        $manufacturer->control = true;
        $manufacturer->save();

        $manufacturer = new Manufacturer();
        $manufacturer->name = "jozsi_es_jozsi";
        $manufacturer->control = false;
        $manufacturer->save();

        $manufacturer = new Manufacturer();
        $manufacturer->name = "tejtermelo_kft";
        $manufacturer->control = true;
        $manufacturer->save();

        $manufacturer = new Manufacturer();
        $manufacturer->name = "dunai_papirgyar";
        $manufacturer->control = false;
        $manufacturer->save();

        $manufacturer = new Manufacturer();
        $manufacturer->name = "szoboszlai";
        $manufacturer->control = true;
        $manufacturer->save();
    }
}
