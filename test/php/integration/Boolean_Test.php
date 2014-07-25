<?php

class BooleanTest extends PHPUnit_Framework_TestCase
{
	public function test_false_is_uppercase_FALSE()
	{
		$this->assertSame(false, FALSE);
	}

	public function test_false_is_CamelCase_False()
	{
		$this->assertSame(false, False);
	}

	public function test_uppercase_FALSE_is_CamelCase_False()
	{
		$this->assertSame(FALSE, False);
	}

	public function test_true_is_uppercase_TRUE()
	{
		$this->assertSame(true, TRUE);
	}

	public function test_true_is_CamelCase_True()
	{
		$this->assertSame(true, TrUe);
		$this->assertSame(true, tRUE);
		$this->assertSame(true, trUe);
		$this->assertSame(true, truE);
	}

	public function test_uppercase_TRUE_is_CamelCase_True()
	{
		$this->assertSame(TRUE, True);
	}
}
