<?php
namespace Modules;
use File;
//use Modules\ModuleServiceProvider;
use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    public function register() {}
    private $middlewares = [
        //'demo' => DemoMiddleware::class
    ];
    private $commands = [
        // TestCommand::class
    ];
    public function boot( ) {
        // Đăng ký modules theo cấu trúc thư mục
        //$directories = array_map('basename' , File::directories( __DIR__)) ;
        $modules = $this->getModules();
        foreach($modules  as $module){
          $this->registerModule($module) ;
        }

        // Middlewares
         //$this->registerMiddlewares();
         //Commands
         //$this->commands($this->commands);

     }
    // Khai báo đăng ký cho từng modules
    private function registerModule($module){
        $modulePath = __DIR__ . "/{$module}";
        // Khai báo thành phần ở đây
        // Khai báo route
        if(File::exists($modulePath . "/routes/routes.php") ) {
            $this->loadRoutesFrom($modulePath."/routes/routes.php") ;
        }
        
        // Khai báo migration
        // Toàn bộ file migration của modules sẽ tự động được load
        if(File::exists($modulePath."/migrations")) {
            $this->loadMigrationsFrom($modulePath."/migrations") ;
        }

        
        // Khai báo languages
        if(File::exists($modulePath."/resources/lang") ) {
            // Đa ngôn ngữ theo file php
            // Dùng đa ngôn ngữ tại file php resources/lang/en/general. php : @lang( ' Demo: : general. hello' ) Laravel Modules 4
            $this->loadTranslationsFrom($modulePath."/resources/lang", $module) ;
            // Đa ngôn ngữ theo file j son
            $this->loadJSONTranslationsFrom($modulePath.'/resources/lang') ;
        } 


        // Khai báo views
        // Gọi view thì ta sử dụng: view( ' Demo: : index' ) , @extends( ' Demo: : index' ) , @include( ' Demo: : index' )
        if(File::exists($modulePath."/resources/views") ) {
            $this->loadViewsFrom($modulePath."/resources/views", $module);
        }

        
        // Khai báo helpers
        if (File::exists($modulePath."/helpers") ) {
            // Tất cả files có tại thư mục helpers
            $helper_dir = File::allFiles( $modulePath."/helpers") ;
            // khai báo helpers
            foreach ($helper_dir as $key => $value) {
                $file = $value->getPathName() ;
                require $file;
            }
        }

    }

    private function getModules(){
        $directories = array_map('basename' , File::directories( __DIR__)) ;
        return $directories;
    }
    private function registerConfig($module){
        
    }
    private function registerMiddlewares($module){
        
    }
}
