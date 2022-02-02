<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class InsertUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crear productos';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $this->name = $product->name;
        // $this->description = $product->description;
        // $this->quantity = $product->quantity;
        // $this->price = $product->price;

        Product::create([
            'name'=>'nombre comand',
            'description'=>'description comand',
            'quantity'=>1,
            'price'=>100
        ]);

        $this->info('Insertado correctamente, exitoso');

        return 0;
    }
}
