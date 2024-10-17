<?php

namespace  MyVendor\MyLaravelPackage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use MyVendor\MyLaravelPackage\Controller\MyController;
class MyServiceProvider extends ServiceProvider
{
  public function boot()
  {
    // 将 Payment 类注册为单例
    $this->app->singleton('Payment', function () {
      return new MyController();
    });


  }


  public function register()
  {
    Log::info("在这里可以进行一些启动时的操作，比如监听事件、注册视图合成器等");
  }


  public function provides()
  {
    return ['Payment'];
  }
}
