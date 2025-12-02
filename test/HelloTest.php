<?php
use PHPUnit\Framework\TestCase;
use App\Hello;

final class HelloTest extends TestCase {
    public function testGreet() {
        $h = new Hello();
        $this->assertStringContainsString('Hello', $h->greet());
    }
}
