<div>
    <div class="row">
        <div class="col">
            <div class="card bg-default">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase ls-1 mb-1">نظرة عامة</h6>
                            <h5 class="h3 mb-0"> عملاء    </h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <!-- Chart wrapper -->
                        <canvas id="chLine" ></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@push('scripts')
    <script>
        var chartData = {
            labels:  {!! json_encode($labels) !!},
            datasets: [{
                label:"Customers",
                data: {!! json_encode($values) !!},
                backgroundColor:'rgba(237, 31, 39, 0.2)',
                pointBackgroundColor:'rgba(237, 31, 39, 1)'
            }]
        };

    </script>
@endpush

