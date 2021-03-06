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
 * Interface OutputInterface.
 *
 * @author Christian Neff <christian.neff@gmail.com>
 */
interface OutputInterface
{
    /**
     * @param mixed $data
     *
     * @return mixed
     */
    public function write($data);
}
