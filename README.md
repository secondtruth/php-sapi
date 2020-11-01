# PHP SAPI Library

[![Latest Stable](http://img.shields.io/packagist/v/secondtruth/sapi.svg)](https://packagist.org/p/secondtruth/sapi)
[![Build Status](https://img.shields.io/travis/com/secondtruth/php-sapi.svg)](https://travis-ci.com/github/secondtruth/php-sapi)
[![Scrutinizer](http://img.shields.io/scrutinizer/g/secondtruth/php-sapi.svg)](https://scrutinizer-ci.com/g/secondtruth/php-sapi)
[![Coverage](http://img.shields.io/scrutinizer/coverage/g/secondtruth/php-sapi.svg)](https://scrutinizer-ci.com/g/secondtruth/php-sapi)
[![License](http://img.shields.io/packagist/l/secondtruth/sapi.svg)](https://packagist.org/p/secondtruth/sapi)

A SAPI Library written in PHP.


## How to use?

```php
$argv = ['foo', 'bar', '--baz'];
$sapi = new CLI($argv);

$input = $sapi->getInput();
$input->getArgs(); // ['foo', 'bar', '--baz']
$input->getArgsCount(); // 3
$input->read();
$input->readLine();
$input->readAll();

$output = $sapi->getOutput();
$output->write('My message...');
```


## Installation

### Install via Composer

[Install Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos) if you don't already have it present on your system.

To install the library, run the following command and you will get the latest version:

    $ composer require secondtruth/sapi


## Requirements

* You must have at least PHP version 7.4 installed on your system.
