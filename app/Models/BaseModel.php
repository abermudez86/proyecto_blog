<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use HasFactory;

    protected $primaryKey = null;

    public $incrementing = false;

    public $timestamps = false;

    public $dateFormat = 'Y-m-d H:m:s';

    protected $UseCreatedUser = false;

    protected $UseUpdatedUser = false;

    protected $UseCreatedAt = false;

    protected $UseUpdatedAt = true;

    protected $codeService = null;

    protected $dateFilter = null;

    protected $createdUser = 'id_persona_creacion';

    protected $updatedUser = 'id_persona';

    protected $created_at = 'fecha_creacion';

    protected $updated_at = 'fecha_movimiento';

    public function getCodeService()
    {
        return $this->codeService;
    }

    public function getDateFilter()
    {
        return $this->dateFilter;
    }

    public function getUserCreated()
    {
        return $this->UseCreatedUser ? $this->createdUser : null;
    }

    public function getUserUpdated()
    {
        return $this->UseUpdatedUser ? $this->updatedUser : null;
    }

    public function getCreatedAtColumn()
    {
        return $this->UseCreatedAt ? $this->created_at : null;
    }

    public function getUpdatedAtColumn()
    {
        return $this->UseUpdatedAt ? $this->updated_at : null;
    }
}
