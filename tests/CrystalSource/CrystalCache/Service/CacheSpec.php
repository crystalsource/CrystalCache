<?php

namespace CrystalSource\CrystalCache\Service;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CacheSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('CrystalSource\CrystalCache\Service\Cache');
        $this->shouldImplement('CrystalSource\CrystalCache\Service\CacheInterface');
    }
}
