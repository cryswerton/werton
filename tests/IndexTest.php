<?php

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase{


    public function testIndexOutputExpectedMessage(){

        ob_start();

        include 'index.php';

        $output = ob_get_clean();

        $message = 'WertonPHP says hello!';

        $this->assertStringContainsString($message, $output);
    }
}

