<?php

namespace FileUpload;

use FileUpload;
use FileUploadFactory;
use PHPUnit\Framework\TestCase;

class FileUploadFactoryTest extends TestCase
{
    public function testCreate()
    {
        $factory = new FileUploadFactory(new \PathResolver\Simple(''), new \FileSystem\Mock());
        $instance = $factory->create([], []);

        $this->assertTrue($instance instanceof FileUpload);
    }
}
