<?php

namespace App\Http\Controllers\Admin;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController
{
    public function index()
    {
        $settings1 = [
            'chart_title'           => 'Test',
            'chart_type'            => 'line',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Transaction',
            'group_by_field'        => 'transaction_date',
            'group_by_period'       => 'month',
            'aggregate_function'    => 'sum',
            'aggregate_field'       => 'amount',
            'filter_field'          => 'created_at',
            'filter_days'           => '90',
            'group_by_field_format' => 'm/d/Y',
            'column_class'          => 'col-md-12',
            'entries_number'        => '5',
            'translation_key'       => 'transaction',
        ];

        $chart1 = new LaravelChart($settings1);

        return view('home', compact('chart1'));
    }
}
