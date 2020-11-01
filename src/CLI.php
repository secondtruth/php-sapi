<?php
/*
 * PHP SAPI Library
 * Copyright (C) 2020 Christian Neff
 *
 * Permission to use, copy, modify, and/or distribute this software for
 * any purpose with or without fee is hereby granted, provided that the
 * above copyright notice and this permission notice appear in all copies.
 */

namespace Secondtruth\SAPI;

use Secondtruth\SAPI\Input\Stdin;
use Secondtruth\SAPI\Output\Stdout;

/**
 * The CLI SAPI.
 *
 * @author   Christian Neff <christian.neff@gmail.com>
 */
class CLI implements SAPI
{
    private InputInterface $input;
    private OutputInterface $output;

    /**
     * CLI constructor.
     *
     * @param array $argv
     */
    public function __construct(array $argv)
    {
        $this->input = new Stdin($argv);
        $this->output = new Stdout();
    }

    /**
     * {@inheritdoc}
     *
     * @return Stdin
     */
    public function getInput(): InputInterface
    {
        return $this->input;
    }

    /**
     * {@inheritdoc}
     */
    public function getOutput(): OutputInterface
    {
        return $this->output;
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'cli';
    }
}
