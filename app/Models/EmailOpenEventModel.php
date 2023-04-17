<?php

namespace App\Models;

use CodeIgniter\Model;

class EmailOpenEventModel extends Model
{
    protected $table = 'email_open_events';
    protected $primaryKey = 'id';
    protected $allowedFields = ['recipient_id', 'ip_address', 'user_agent', 'opened_at'];
}
