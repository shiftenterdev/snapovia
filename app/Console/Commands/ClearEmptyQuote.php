<?php

namespace App\Console\Commands;

use App\Models\Quote;
use Illuminate\Console\Command;

class ClearEmptyQuote extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:quote';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear all the empty quote';

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
        Quote::where('grand_total',0)->where('customer_id',0)->delete();
        $this->info('All empty quote cleared successfully');
        return 0;
    }
}
