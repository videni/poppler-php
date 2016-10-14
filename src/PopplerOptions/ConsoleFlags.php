<?php
/**
 * Php-PopplerUtils
 *
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/13/2016
 * Time:    1:08 AM
 **/

namespace NcJoes\PhpPoppler\PopplerOptions;

use NcJoes\PhpPoppler\Constants as C;

trait ConsoleFlags
{
    use HelpFlags;
    use VersionFlags;

    protected function consoleFlags()
    {
        return [C::_Q, C::_STDOUT];
    }

    protected function allConsoleFlags()
    {
        return array_merge(
            $this->consoleFlags(),
            $this->helpFlags(),
            $this->versionFlags()
        );
    }

    public function suppressConsoleOutput()
    {
        return $this->setFlag(C::_Q);
    }

    public function outputToConsole()
    {
        return $this->setFlag(C::_STDOUT);
    }
}