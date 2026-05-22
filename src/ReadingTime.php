<?php

namespace Z4yed\ReadingTime;

class ReadingTime
{
  public function __construct(
    protected int $wordsPerMinute = 200
  ) {}

  public function forText(string $text): int
  {
    $wordCount = str_word_count($text);

    return max(1, (int) ceil($wordCount / $this->wordsPerMinute));
  }
}
