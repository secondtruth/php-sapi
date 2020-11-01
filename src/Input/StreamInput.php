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

use Secondtruth\SAPI\InputInterface;
use Secondtruth\SAPI\Stream\AbstractStream;

/**
 * The StreamInput class.
 *
 * @author Christian Neff <christian.neff@gmail.com>
 */
class StreamInput extends AbstractStream implements InputInterface
{
    /**
     * {@inheritdoc}
     */
    public function read(int $length): ?string
    {
        $chunk = fread($this->stream, $length);

        return $chunk !== false ? $chunk : null;
    }

    /**
     * {@inheritdoc}
     */
    public function readLine(?int $length = null): ?string
    {
        $chunk = fgets($this->stream, $length);

        return $chunk !== false ? $chunk : null;
    }

    /**
     * {@inheritdoc}
     */
    public function readAll(): ?string
    {
        $contents = stream_get_contents($this->stream);

        return $contents !== false ? $contents : null;
    }

    /**
     * {@inheritdoc}
     */
    protected function openStream(string $stream)
    {
        return fopen($stream, 'r');
    }
}
