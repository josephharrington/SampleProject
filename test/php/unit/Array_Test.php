<?php

class ArrayTest extends PHPUnit_Framework_TestCase
{
	public function test_array_elements_get_added_to_the_back_when_using_associative_indexed_assignment()
	{
		$test_dummy = array(
			'a' => 1,
			'b' => 2,
			'c' => 3,
		);
		unset($test_dummy['a']);
		$test_dummy['a'] = 1;

		$this->assertSame($test_dummy, array(
			'b' =>2,
			'c' =>3,
			'a' =>1,
		), 'Elements got added in an unexpected way.');
	}

	public function test_array_elements_do_not_get_reordered_when_values_for_keys_are_overwritten_using_indexed_assignment()
	{
		$x = array(
			'3' => '0',
			'2' => '1',
			'1' => '2',
		);
		$x['2'] = 'hi';
		$this->assertSame(array(
			'3' => '0',
			'2' => 'hi',
			'1' => '2',
		), $x, 'Array key was overwritten in an unexpected way.');
	}

	public function test_array_elements_get_added_to_the_back_when_using_indexed_assignment()
	{
		$x = array(
			'3' => '0',
			'2' => '1',
			'1' => '2',
		);
		$x[0] = 'hello there';
		$this->assertSame(array(
			'3' => '0',
			'2' => '1',
			'1' => '2',
			0 => 'hello there',
		), $x, 'Elements got added in an unexpected way.');
	}
}
