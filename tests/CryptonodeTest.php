<?php
/**
 * Tests for CryptoNode
 */

use PHPUnit\Framework\TestCase;
use Cryptonode\Cryptonode;

class CryptonodeTest extends TestCase {
    private Cryptonode $instance;

    protected function setUp(): void {
        $this->instance = new Cryptonode(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptonode::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
