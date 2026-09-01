<?php
/**
 * Tests for SolidityBaseDiamond
 */

use PHPUnit\Framework\TestCase;
use Soliditybasediamond\Soliditybasediamond;

class SoliditybasediamondTest extends TestCase {
    private Soliditybasediamond $instance;

    protected function setUp(): void {
        $this->instance = new Soliditybasediamond(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Soliditybasediamond::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
