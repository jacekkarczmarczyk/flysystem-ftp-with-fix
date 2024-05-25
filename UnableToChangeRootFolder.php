<?php

declare(strict_types=1);

namespace League\Flysystem\Ftp;

use RuntimeException;

final class UnableToChangeRootFolder extends RuntimeException implements FtpConnectionException
{
    public static function forFolder(string $folder): UnableToChangeRootFolder
    {
        return new UnableToChangeRootFolder("Unable to set root folder \"{$folder}\".");
    }
}
