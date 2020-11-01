<?php
/*
 * PHP SAPI Library
 * Copyright (C) 2020 Christian Neff
 *
 * Permission to use, copy, modify, and/or distribute this software for
 * any purpose with or without fee is hereby granted, provided that the
 * above copyright notice and this permission notice appear in all copies.
 */

namespace Secondtruth\SAPI\Input;

/**
 * Class Stdin.
 *
 * @author   Christian Neff <christian.neff@gmail.com>
 */
class Stdin extends StreamInput
{
    /**
     * @var array
     */
    private array $argv;

    /**
     * Stdin constructor.
     *
     * @param array $argv
     */
    public function __construct(array $argv)
    {
        parent::__construct(STDIN);

        $this->argv = $argv;
    }

    /**
     * @return array
     */
    public function getArgs(): array
    {
        return $this->argv;
    }

    /**
     * @return int
     */
    public function getArgsCount(): int
    {
        return count($this->argv);
    }
}
