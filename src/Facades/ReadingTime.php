<?php

namespace Z4yed\ReadingTime\Facades;

class ReadingTime extends \Illuminate\Support\Facades\Facade
{
  protected static function getFacadeAccessor(): string
  {
    return 'reading-time';
  }
}
