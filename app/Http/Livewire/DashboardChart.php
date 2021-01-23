<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class DashboardChart extends Component
{
    public $year = '2021';
    public $chart_data;
    public $labels = [];
    public $values = [];
    public $customers = null;


    protected $listeners = ['renderChart' => '$refresh'];


    public function render()
    {

        if ($this->customers == null){

            $response = Http::asForm()->post('http://192.168.80.32:8099/homsi/chart.php', [
                'year' => $this->year,
            ]);

            $this->chart_data = $response->json();

            foreach ($response->json()[0] as $key=>$val){
                $this->labels[]  = $key;
                $this->values[] = $val;
            }
        }else{

            foreach ($this->customers as $val){
                $this->labels[]  = $val['branch_name'];
                $this->values[] = $val['phone_count'];
            }

        }


        return view('livewire.dashboard-chart');
    }
}
