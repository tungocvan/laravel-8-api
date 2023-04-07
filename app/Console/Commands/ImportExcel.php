<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;


class ImportExcel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:excel {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import File Excel to Database Mysql';

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
        $file = $this->argument('name');
        $sql_file = storage_path().'/'.$file;
        if(!file_exists($sql_file)){
            $this->info("kiểm tra file $file có nằm trong storage");            
        }else{
            $status = ExceltoArrayUpload($sql_file);
            $this->info($status);
        }
    }
}
