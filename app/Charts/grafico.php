<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use App\Charts\SampleChart;

class grafico extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    public function grafico()
    {
        $chart = new SampleChart();
        $chart->labels(['Edad',]);
        $chart->dataset('My dataset 1', 'line', [1, 2, 3, 4]);
        $chart->dataset('My dataset 2', 'line', collect([3, 4, 5, 6]));
        return view('sample_view', compact('chart'));
    }
}
