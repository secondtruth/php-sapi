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
 * Interface SAPI.
 *
 * @author   Christian Neff <christian.neff@gmail.com>
 */
interface SAPI
{
    /**
     * @return InputInterface
     */
    public function getInput(): InputInterface;

    /**
     * @return OutputInterface
     */
    public function getOutput(): OutputInterface;

    /**
     * @return string
     */
    public function getName(): string;
}
