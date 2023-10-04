<?php

  namespace Database\datamasuk;

  use Illuminate\Database\datamasuk;
  use App\Models\User;
  use Illuminate\Support\Facades\DB;
  use Illuminate\Support\LazyCollection;

  class ProductSeeder extends Seeder 
  {
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    LazyCollection::make(function () {
      $handle = fopen(public_path("products.csv"), 'r');
      
      while (($line = fgetcsv($handle, 4096)) !== false) {
        $dataString = implode(", ", $line);
        $row = explode(';', $dataString);
        yield $row;
      }

      fclose($handle);
    })
    ->skip(1)
    ->chunk(1000)
    ->each(function (LazyCollection $chunk) {
      $records = $chunk->map(function ($row) {
        return [
            "name" => $row[0],
            "description" => $row[1],
        ];
      })->toArray();
      
      DB::table('products')->insert($records);
    });
  }
}