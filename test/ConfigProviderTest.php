<?php

namespace SMRhoney\Test;

use SMRhoney\ConfigProvider;

final class ConfigProviderTest extends \PHPUnit_Framework_TestCase
{
    public function testGetConfig()
    {
        $config = new ConfigProvider();
        $this->assertInternalType('array', $config->getConfig());
    }
}
