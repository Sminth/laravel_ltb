<?php

namespace App\Http\Controllers\Admin\Charts;

use App\Models\Categories;
use App\Models\Clients;
use App\Models\Commande;
use App\Models\Marques;
use App\Models\Produits;
use App\User;
use Backpack\CRUD\app\Http\Controllers\ChartController;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class NewEntriesChartController extends ChartController
{
    public function setup()
    {
        $this->chart = new Chart();

        // MANDATORY. Set the labels for the dataset points
        $labels = [];
        for ($days_backwards = 0; $days_backwards < 30; $days_backwards++) {
            if ($days_backwards == 0) {
                $labels[] ='aujourd\'hui';
            }
            else $labels[] ='il y a '. $days_backwards.' jours';
        }
        $this->chart->labels($labels);

        // RECOMMENDED. Set URL that the ChartJS library should call, to get its data using AJAX.
        $this->chart->load(backpack_url('charts/new-entries'));

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
        for ($days_backwards = 0; $days_backwards <30; $days_backwards++) {
            // Could also be an array_push if using an array rather than a collection.
            $cmd[] = Commande::whereDate('created_at', today()->subDays($days_backwards))
                ->count();
            $articles[] = Produits::whereDate('created_at', today()->subDays($days_backwards))
                ->count();
            $categories[] = Categories::whereDate('created_at', today()->subDays($days_backwards))
                ->count();
            // $tags[] = Marques::whereDate('created_at', today()->subDays($days_backwards))
            //     ->count();
        }

        $this->chart->dataset('Commandes', 'line', $cmd)
            ->color('rgb(66, 186, 150)')
            ->backgroundColor('rgba(66, 186, 150, 0.4)');

        $this->chart->dataset('Produits', 'line', $articles)
            ->color('rgb(96, 92, 168)')
            ->backgroundColor('rgba(96, 92, 168, 0.4)');

        $this->chart->dataset('Categories', 'line', $categories)
            ->color('rgb(255, 193, 7)')
            ->backgroundColor('rgba(255, 193, 7, 0.4)');

        // $this->chart->dataset('Marques', 'line', $tags)
        //     ->color('rgba(70, 127, 208, 1)')
        //     ->backgroundColor('rgba(70, 127, 208, 0.4)');
    }
}
