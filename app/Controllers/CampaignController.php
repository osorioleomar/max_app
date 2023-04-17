<?php

namespace App\Controllers;

use App\Models\CampaignModel;

class CampaignController extends BaseController
{

    protected $campaignModel;

    public function __construct()
    {
        $this->campaignModel = new CampaignModel();
    }

    public function loadCampaigns()
    {
        $data['campaigns'] = $this->campaignModel->findAll();

        return view('campaign', $data);
    }

    public function createCampaign()
    {
        if ($this->request->getMethod() === 'post') {
            $campaignData = [
                'name' => $this->request->getPost('name')
            ];

            $this->campaignModel->insert($campaignData);

            return redirect()->to('/campaign');
        }

        return view('create_campaign');
    }
}
