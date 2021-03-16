<?php

namespace Uccello\Country\Models;

use App\Models\UccelloModel;
use Uccello\Core\Support\Traits\UccelloModule;

class Country extends UccelloModel
{
    use UccelloModule;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'countries';

    /**
     * Returns record label
     *
     * @return string
     */
    public function getRecordLabelAttribute() : string
    {
        return trim($this->name);
    }
}
