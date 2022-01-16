<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\User;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class UsersCelecChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $users = User::query();
        return Chartisan::build()
            ->labels(['Yes', 'No'])
            ->dataset('USTHB', [$users->where("is_member", true)->count(), $users->where("is_member", false)->count()]);
    }
}