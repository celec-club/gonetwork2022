<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\User;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class UsersUsthbChart extends BaseChart {

    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan {
        $users = User::query();
        return Chartisan::build()
            ->labels(['From usthb', 'Not from usthb'])
            ->dataset('USTHB', [$users->where("is_usthb", true)->count(), $users->where("is_usthb", false)->count()]);
    }
}