<?php

namespace App\Http\Livewire;

use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class CustomerTable extends Component
{


    public $customers;
    public $start_date = '';
    public $end_date = '';
    public $total;

    public $labels = [];
    public $values = [];

    public function render()
    {
        if ($this->start_date !== '' || $this->end_date !== ''){

            if ($this->start_date === ''){

                $this->start_date = Carbon::now()->format('Y-m-d');
            }

            if ($this->end_date === ''){

                $this->end_date = Carbon::now()->format('Y-m-d');
            }
        }





       $response = Http::asForm()->post('http://192.168.80.32:8099/homsi/index.php', [
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ]);

        $this->customers = $response->json();
        $this->emit('renderChart');
        $this->total = 0;
         foreach ($this->customers as $c){
            $this->total+=$c['phone_count'];
         }

        $columnChartModel =
        (new ColumnChartModel())
            ->setTitle('Expenses by Type')
            ->addColumn('Food', 100, '#f6ad55')
            ->addColumn('Shopping', 200, '#fc8181')
            ->addColumn('Travel', 300, '#90cdf4')
    ;


        return view('livewire.customer-table')  ->with([
            'columnChartModel' => $columnChartModel,
        ]);
    }


    public function getCustomers(){


        $this->total = 0;



        $response = Http::asForm()->post('http://192.168.80.32:8099/homsi/index.php', [
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ]);





       // dd($this->end_date);
         //  dd($response->json());

        $this->customers = $response->json();
        foreach ($this->customers as $c){
            $this->total+=$c['phone_count'];
        }

    }
}
