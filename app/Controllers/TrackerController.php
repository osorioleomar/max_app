<?php

namespace App\Controllers;

use App\Models\TrackerModel;

class TrackerController extends BaseController
{
    protected $trackerModel;

    public function __construct()
    {
        $this->trackerModel = new TrackerModel();
    }

    public function trackEmailOpens()
    {
        // Check if the request includes a campaign ID
        if ($_GET['c'] !== null) {
            // Get the current timestamp
            $openTime = date('Y-m-d H:i:s', time());
        
            // Store the open timestamp for the given recipient email and campaign
            $this->trackerModel->insert([
                'campaign_id' => $_GET['c'],
                'email' => $_GET['email'],
                'time_opened' => $openTime
            ]);
            
        }
    }
    
    public function trackImage()
{
    // Check if the request includes a campaign ID
    if ($_GET['c'] !== null) {
        // Get the current timestamp
        $openTime = date('Y-m-d H:i:s', time());

        // Store the open timestamp for the given recipient email and campaign
        $this->trackerModel->insert([
            'campaign_id' => $_GET['c'],
            'email' => $_GET['email'],
            'time_opened' => $openTime
        ]);

        // Output the pixel image
        header("Content-type: image/png");
        echo file_get_contents("pixel.png");
        exit;
    }
}
    
}
