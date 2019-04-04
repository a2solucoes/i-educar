<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SchoolManager extends Model
{
    /**
     * @return BelongsTo
     */
    public function individual()
    {
        return $this->belongsTo(Individual::class, 'individual_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function school()
    {
        return $this->belongsTo(School::class, 'school_id', 'cod_escola');
    }

    /**
     * @return BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(ManagerRole::class, 'role_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function accessCriteria()
    {
        return $this->belongsTo(ManagerAccessCriteria::class, 'access_criteria_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function linkType()
    {
        return $this->belongsTo(ManagerLinkType::class, 'link_type_id', 'id');
    }

    /**
     * @return boolean
     */
    public function isChief()
    {
        return $this->chief;
    }
}
