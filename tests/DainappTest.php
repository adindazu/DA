<?php
/**
 * Tests for DAINApp
 */

use PHPUnit\Framework\TestCase;
use Dainapp\Dainapp;

class DainappTest extends TestCase {
    private Dainapp $instance;

    protected function setUp(): void {
        $this->instance = new Dainapp(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Dainapp::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
