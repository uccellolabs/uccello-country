<?php

namespace Uccello\Country\Models;

use Illuminate\Database\Eloquent\Model;
use Uccello\Core\Support\Traits\UccelloModule;

class Country extends Model
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
