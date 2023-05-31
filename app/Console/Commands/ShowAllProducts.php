<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class ShowAllProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'show:product';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show All Avaiable products';

    /**
     * Execute the console command.
     *
     * @return array
     */
    public function handle()
    {
        print_r(Product::all()->toArray());
        $headers = ['id' , 'Title', 'Original Price','Current Price', 'Stock', 'Created At', 'Updated At'];
        $data = Product::all()->toArray();
        $this->table($headers, $data);
    }
}
