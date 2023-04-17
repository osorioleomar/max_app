<?php

namespace App\Models;

use CodeIgniter\Model;

class RecipientModel extends Model
{
    protected $table = 'recipients';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'campaign_id', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
}
