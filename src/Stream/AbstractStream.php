<?php
/*
 * PHP SAPI Library
 * Copyright (C) 2020 Christian Neff
 *
 * Permission to use, copy, modify, and/or distribute this software for
 * any purpose with or without fee is hereby granted, provided that the
 * above copyright notice and this permission notice appear in all copies.
 */

namespace Secondtruth\SAPI\Stream;

/**
 * The AbstractStream class.
 *
 * @author Christian Neff <christian.neff@gmail.com>
 */
abstract class AbstractStream
{
    /**
     * @var resource
     */
    protected $stream;

    /**
     * Stream constructor.
     *
     * @param resource $stream
     */
    public function __construct($stream)
    {
        $this->setStream($stream);
    }

    /**
     * @return resource
     */
    public function getStream()
    {
        return $this->stream;
    }

    /**
     * @param resource|string $stream
     */
    protected function setStream($stream): void
    {
        if (is_string($stream)) {
            $stream = $this->openStream($stream);
        } elseif (!is_resource($stream) || get_resource_type($stream) !== 'stream') {
            throw new \InvalidArgumentException(sprintf('The stream must be a valid resource or a path string.'));
        }

        $this->stream = $stream;
    }

    /**
     * @param resource|string $stream
     *
     * @return false|resource
     */
    abstract protected function openStream(string $stream);
}
