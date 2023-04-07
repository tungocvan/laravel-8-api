<?php

namespace App\Console\Commands;
use File;
use Illuminate\Console\Command;

class Module extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:module {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Module CLI';

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
        $name = $this->argument('name');
        if(File::exists(base_path('modules/'.$name))){
            $this->error('Module da ton tai');          
        }else{
           File::makeDirectory(base_path('modules/'.$name),0755,true,true) ;
           // tạo thư mục configs
           $configFolder = base_path('modules/'.$name.'/configs');
           if(!File::exists($configFolder)){
            File::makeDirectory($configFolder,0755,true,true) ;
           }

           // tạo thư mục Helper
           $helperFolder = base_path('modules/'.$name.'/helper');
           if(!File::exists($helperFolder)){
            File::makeDirectory($configFolder,0755,true,true) ;
           }

           // tạo thư mục Migrations
           $migrationsFolder = base_path('modules/'.$name.'/migrations');
           if(!File::exists($migrationsFolder)){
            File::makeDirectory($migrationsFolder,0755,true,true) ;
           }
           // tạo thư mục Helpers
           $helpersFolder = base_path('modules/'.$name.'/helpers');
           if(!File::exists($helpersFolder)){
            File::makeDirectory($helpersFolder,0755,true,true) ;
           }
           // tạo thư mục Resources
           $resourcesFolder = base_path('modules/'.$name.'/resources');
           if(!File::exists($resourcesFolder)){               
                 File::makeDirectory($resourcesFolder,0755,true,true) ;
                 // tạo thư mục lang trong Resources
                 $languageFolder = base_path('modules/'.$name.'/resources/lang');                 
                 File::makeDirectory($languageFolder,0755,true,true); 
                 // tạo thư mục views trong Resources
                 $viewsFolder = base_path('modules/'.$name.'/resources/views');
                 File::makeDirectory($viewsFolder,0755,true,true); 

           }
           // tạo thư mục Routes
           $routesFolder = base_path('modules/'.$name.'/routes');
           if(!File::exists($routesFolder)){
               File::makeDirectory($routesFolder,0755,true,true) ;
               // tạo file routes.php
               $routesFile = base_path('modules/'.$name.'/routes/routes.php');
               if(!File::exists($routesFile)){
                    $content = "<?php \n use Illuminate\Support\Facades\Route;";
                    File::put($routesFile,$content);
               }   
           }

           // tạo thư mục src
           $srcFolder = base_path('modules/'.$name.'/src');
           if(!File::exists($srcFolder)){               
                 File::makeDirectory($srcFolder,0755,true,true) ;
                 // tạo thư mục commands trong src
                 $commandsFolder = base_path('modules/'.$name.'/src/Commands');                 
                 File::makeDirectory($commandsFolder,0755,true,true); 
                 // tạo thư mục http trong src
                 $httpFolder = base_path('modules/'.$name.'/src/Http');
                 File::makeDirectory($httpFolder,0755,true,true); 
                    // tạo thư mục controllers trong Http
                    $controllersFolder = base_path('modules/'.$name.'/src/Http/Controllers');
                    File::makeDirectory($controllersFolder,0755,true,true);    
                    // tạo thư mục Middlewares trong src
                    $middlewaresFolder = base_path('modules/'.$name.'/src/Http/Middlewares');
                    File::makeDirectory($middlewaresFolder,0755,true,true); 
                 // tạo thư mục models trong src
                 $modelsFolder = base_path('modules/'.$name.'/src/Models');
                 File::makeDirectory($modelsFolder,0755,true,true); 

           }

           $this->info('Module tạo thành công');
        }
        
    }
}
