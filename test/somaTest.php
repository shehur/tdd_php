﻿<?php

use PHPUnit\Framework\TestCase;

require 'soma.php';

class SomaTest extends TestCase {

	public function testSomaComParametros() {
		$this->assertEquals(5, somar(2, 3));
	}

}