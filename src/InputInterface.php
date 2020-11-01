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

/**
 * Interface InputInterface.
 *
 * @author   Christian Neff <christian.neff@gmail.com>
 */
interface InputInterface
{
    /**
     * @param int $length
     *
     * @return string|null
     */
    public function read(int $length): ?string;

    /**
     * @param int|null $length
     *
     * @return string|null
     */
    public function readLine(?int $length = null): ?string;

    /**
     * @return string|null
     */
    public function readAll(): ?string;
}
