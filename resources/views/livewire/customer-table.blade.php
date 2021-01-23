<div  style="padding: 15px">

    <label>تاريخ البداية</label>
    <input  class="form-control"  type="date" wire:model="start_date">
    @error('start_date') <span class="error">{{ $message }}</span> @enderror
    <label>تاريخ النهاية</label>
    <input  class="form-control"  type="date" wire:model="end_date">
    @error('end_date') <span class="error">{{ $message }}</span> @enderror
    <br>
    <button id="export">Export to excel</button>
    <div class="row">


        <div class="col">
            <div class="table-responsive">
                <table class="table align-middle" >
                    <thead class="table-light">
                    <tr>

                        <th scope="col">اسم الفرع</th>
                        <th scope="col">عدد الأرقام</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($customers as $c)
                        <tr>

                            <td>{{$c['branch_name']}}</td>
                            <td>{{$c['phone_count']}}</td>
                        </tr>

                    @endforeach
                    <tfoot>
                    <td>All</td>
                    <td>{{$total}}</td>
                    </tfoot>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col">
            <livewire:livewire-column-chart
                :column-chart-model="$columnChartModel"
            />
            <livewire:scripts />
            @livewireChartsScripts
        </div>
    </div>

</div>
