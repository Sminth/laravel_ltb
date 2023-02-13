<?php

namespace App\Http\Controllers\Admin\Charts;

use App\Models\Clients;
use Backpack\CRUD\app\Http\Controllers\ChartController;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class LatestUsersChartController extends ChartController
{
    public function setup()
    {
        $this->chart = new Chart();

        // MANDATORY. Set the labels for the dataset points
        $this->chart->labels(array_reverse(['il y a 6 jours', 'il y a  5 jours', 'il y a  4 jours', 'il y a 3 jours', 'il y a 2 jours', 'hier', 'aujourd\'hui']));

        // RECOMMENDED. Set URL that the ChartJS library should call, to get its data using AJAX.
        $this->chart->load(backpack_url('charts/users'));

        // OPTIONAL
        $this->chart->minimalist(false);
        $this->chart->displayLegend(true);
    }

    /**
     * Respond to AJAX calls with all the chart data points.
     *
     * @return json
     */
    public function data()
    {
        $today_users = Clients::whereDate('created_at', today())->count();
        $yesterday_users = Clients::whereDate('created_at', today()->subDays(1))->count();
        $users_2_days_ago = Clients::whereDate('created_at', today()->subDays(2))->count();
        $users_3_days_ago = Clients::whereDate('created_at', today()->subDays(3))->count();
        $users_4_days_ago = Clients::whereDate('created_at', today()->subDays(4))->count();
        $users_5_days_ago = Clients::whereDate('created_at', today()->subDays(5))->count();
        $users_6_days_ago = Clients::whereDate('created_at', today()->subDays(6))->count();

        $this->chart->dataset('compte crée', 'bar', [
            $today_users,
            $yesterday_users,
            $users_2_days_ago,
            $users_3_days_ago,
            $users_4_days_ago,
            $users_5_days_ago,
            $users_6_days_ago,
        ])->color('rgb(66, 186, 150, 1)')
            ->backgroundColor('rgb(66, 186, 150, 0.4)');
    }
}