<?php
/*
 * PHP SAPI Library
 * Copyright (C) 2020 Christian Neff
 *
 * Permission to use, copy, modify, and/or distribute this software for
 * any purpose with or without fee is hereby granted, provided that the
 * above copyright notice and this permission notice appear in all copies.
 */

namespace Secondtruth\SAPI\Output;

use Secondtruth\SAPI\OutputInterface;
use Secondtruth\SAPI\Stream\AbstractStream;

/**
 * The StreamOutput class.
 *
 * @author Christian Neff <christian.neff@gmail.com>
 */
class StreamOutput extends AbstractStream implements OutputInterface
{
    /**
     * {@inheritdoc}
     */
    public function write($data)
    {
        fwrite($this->stream, $data);
    }

    /**
     * {@inheritdoc}
     */
    protected function openStream(string $stream)
    {
        return fopen($stream, 'w');
    }
}
