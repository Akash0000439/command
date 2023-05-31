<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class CreateNewProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:prodct';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Product Using Artisan';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $title = $this->ask('what is the product title?');
        $original_price = $this->ask('what is the product price?');
        $current_price = $this->ask('what is the current product price?');
        $in_stock = $this->ask('what is the product stock?');

        Product::create([
            'title' => $title,
            'original_price' => $original_price,
            'current_price' => $current_price,
            'in_stock' => $in_stock,
        ]);

        $this->comment('Product has been created!');

    }
}
