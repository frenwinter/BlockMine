<?php
/**
 * Tests for BlockMine
 */

use PHPUnit\Framework\TestCase;
use Blockmine\Blockmine;

class BlockmineTest extends TestCase {
    private Blockmine $instance;

    protected function setUp(): void {
        $this->instance = new Blockmine(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockmine::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
