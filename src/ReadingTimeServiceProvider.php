<?php

namespace Z4yed\ReadingTime;

use Illuminate\Support\ServiceProvider;

class ReadingTimeServiceProvider extends ServiceProvider
{
  public function register(): void
  {
    $this->mergeConfigFrom(__DIR__ . '/../config/reading-time.php', 'reading-time');

    $this->app->singleton('reading-time', function ($app) {
      return new ReadingTime($app['config']['reading-time.words_per_minute']);
    });
  }

  public function boot(): void
  {
    // php artisan vendor:publish --tag=reading-time-config
    if ($this->app->runningInConsole()) {
      $this->publishes([
        __DIR__ . '/../config/reading-time.php' => config_path('reading-time.php'),
      ], 'reading-time-config');
    }
  }
}
