<?php
namespace App\Providers;
use App\LoginModel; // write model name here
use Illuminate\Support\ServiceProvider;
class DynamicServiceProvider1 extends ServiceProvider
{
public function boot()
{
        view()->composer('*',function($view){
        $view->with('petugas', LoginModel::all());
    });
}

}
?>