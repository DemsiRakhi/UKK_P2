<?php
namespace App\Providers;
use App\MasyarakatModel; // write model name here
use Illuminate\Support\ServiceProvider;
class DynamicServiceProvider extends ServiceProvider
{
public function boot()
{
        view()->composer('*',function($view){
        $view->with('masyarakat', MasyarakatModel::all());
    });
}

}
?>