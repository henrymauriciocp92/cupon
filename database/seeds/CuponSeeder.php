<?php

use Illuminate\Database\Seeder;

class CuponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fhandle = fopen(__DIR__.'/detalle_cupones-1.csv', 'r');
        $counter=0;
        while ($row = fgetcsv($fhandle)){
            $counter++;

            $identification=trim($row[0]);
            $secuential=trim($row[1]);
            $box=trim($row[2]);
            $folder=trim($row[3]);
            $file_name=trim($row[4]);

            if($identification=='ID'){
                continue;
            }

            $params = array($box,$folder, chr(92));
            $file_name=trim(str_replace($params,"",$file_name));

            if ( \App\Entities\Cupon::create([
                'identification' => $identification,
                'secuential' => $secuential,
                'box' => $box,
                'folder' => $folder,
                'file_name' => $file_name,
            ]))
            {
                echo 'Agregado #->'. $counter.PHP_EOL;
            }
            else
                echo 'Ocurrio un error: Item->'. $counter.PHP_EOL;



        }
        fclose($fhandle);

    }
}
