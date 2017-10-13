<?php

namespace PHPKitchen\Domain\Exceptions;

/**
 * Represents
 *
 * @package data\Yii2Domain\src\exceptions
 * @author Dmitry Kolodko <prowwid@gmail.com>
 */
class UnableToSaveEntityException extends \Exception {
    public $errorsList = [];
}
