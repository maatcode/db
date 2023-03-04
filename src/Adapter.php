<?php
declare(strict_types=1);

namespace Maatcode\Db;

class Adapter
{
    /**
     * @var mixed
     */
    protected mixed $adapter;

    /**
     * @param $adapter
     * @return void
     */
    public function setAdapter ($adapter): void
    {
        $this->adapter = $adapter;
    }

}
