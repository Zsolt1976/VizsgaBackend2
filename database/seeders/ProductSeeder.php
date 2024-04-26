<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Manufacturer;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = new Product();
        $product->name = "kristalycukor";
        $product->quantity_unit = "karton";
        $product->unit = "10kg/karton";
        $product->type_id = Type::where('name', "kristalycukor")->first()->id;
        $product->invQty = 30;
        $product->other = "finomitott";
        $product->manufacturer_id = Manufacturer::where('name', "kabai_cukorgyar")->first()->id;
        $product->consumable = 2024-07-22;
        $product->save();

        $product = new Product();
        $product->name = "uditoital";
        $product->quantity_unit = "zsugor";
        $product->unit = "8db/zsugor";
        $product->type_id = Type::where('name', "kristalycukor")->first()->id;
        $product->invQty = 40;
        $product->other = "narancs_izu";
        $product->manufacturer_id = Manufacturer::where('name', "kabai_cukorgyar")->first()->id;
        $product->consumable = 2025-07-22;
        $product->save();

        $product = new Product();
        $product->name = "tusfurdo";
        $product->quantity_unit = "karton";
        $product->unit = "10db/karton";
        $product->type_id = Type::where('name', "kristalycukor")->first()->id;
        $product->invQty = 23;
        $product->other = "ferfi";
        $product->manufacturer_id = Manufacturer::where('name', "kabai_cukorgyar")->first()->id;
        $product->consumable = 2024-01-01;
        $product->save();

        $product = new Product();
        $product->name = "UHT_tej";
        $product->quantity_unit = "karton";
        $product->unit = "10l/karton";
        $product->type_id = Type::where('name', "kristalycukor")->first()->id;
        $product->invQty = 2;
        $product->other = "3,5%-os";
        $product->manufacturer_id = Manufacturer::where('name', "kabai_cukorgyar")->first()->id;
        $product->consumable = 2024-06-11;
        $product->save();

        $product = new Product();
        $product->name = "keztorlo";
        $product->quantity_unit = "csomag";
        $product->unit = "12db/csomag";
        $product->type_id = Type::where('name', "kristalycukor")->first()->id;
        $product->invQty = 10;
        $product->other = "3_retegu";
        $product->manufacturer_id = Manufacturer::where('name', "kabai_cukorgyar")->first()->id;
        $product->consumable = 2024-01-01;
        $product->save();

        $product = new Product();
        $product->name = "szorp";
        $product->quantity_unit = "rekesz";
        $product->unit = "16db/rekesz";
        $product->type_id = Type::where('name', "kristalycukor")->first()->id;
        $product->invQty = 25;
        $product->other = "epres";
        $product->manufacturer_id = Manufacturer::where('name', "kabai_cukorgyar")->first()->id;
        $product->consumable = 2024-07-22;
        $product->save();
    }
}
