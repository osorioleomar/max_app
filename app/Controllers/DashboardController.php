<?php

namespace App\Controllers;

use App\Models\TrackerModel;
use App\Models\CampaignModel;

class DashboardController extends BaseController
{
    protected $trackerModel;

    public function __construct()
    {
        $this->trackerModel = new TrackerModel();
        $this->campaignModel = new CampaignModel();
    }

    public function index($campaignId)
    {
        // Get the campaign name
        $campaign = $this->campaignModel->find($campaignId);
        
        // Check if campaign exists
        if (!$campaign) {
            // Redirect to 404 page or display error message
            return redirect()->to('/404');
        }
        
        $campaignName = $campaign['name'];
        
        // Get the number of opens and list of emails that opened
        $opens = $this->trackerModel->getOpensByCampaign($campaignId);
        $numOpens = count($opens);
        
        // Prepare the data to be passed to the view
        $data = [
            'campaignName' => $campaignName,
            'numOpens' => $numOpens,
            'opens' => $opens
        ];
        // Render the view
        return view('dashboard', $data);
    }
    
    
}
