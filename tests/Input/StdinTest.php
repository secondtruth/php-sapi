<?php
/*
 * PHP SAPI Library
 * Copyright (C) 2020 Christian Neff
 *
 * Permission to use, copy, modify, and/or distribute this software for
 * any purpose with or without fee is hereby granted, provided that the
 * above copyright notice and this permission notice appear in all copies.
 */

namespace Secondtruth\SAPI\Tests\Input;

use Secondtruth\SAPI\Input\Stdin;
use PHPUnit\Framework\TestCase;

class StdinTest extends TestCase
{
    public function testGetArgs()
    {
        $input = new Stdin(['foo', 'bar', '--baz']);

        $this->assertEquals(['foo', 'bar', '--baz'], $input->getArgs());
    }

    public function testGetArgsCount()
    {
        $input = new Stdin(['foo', 'bar', '--baz']);

        $this->assertEquals(3, $input->getArgsCount());
    }
}
