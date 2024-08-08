<?php

/**
 * Child class
 */
class classB extends classA
{
	public function methodB(int $int): string
	{
		return parent::methodA($int);
	}

}