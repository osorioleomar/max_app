<?php

namespace App\Models;

use CodeIgniter\Model;

class TrackerModel extends Model
{
    protected $table = 'email_open_events';
    protected $primaryKey = 'id';
    protected $allowedFields = ['campaign_id', 'email', 'time_opened'];
    
    public function getOpensByCampaign($campaignId)
    {
        return $this->select('email, time_opened, COUNT(*) as opens')
                    ->where('campaign_id', $campaignId)
                    ->groupBy('email')
                    ->orderBy('opens', 'desc')
                    ->findAll();
    }
    
    public function getCampaignName($campaignId)
    {
        $campaignModel = new CampaignModel();
        $campaign = $campaignModel->find($campaignId);
        return $campaign['name'];
    }
}
