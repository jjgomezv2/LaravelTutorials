<?php

namespace App\Http\Controllers;

use App\Models\Pilot;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PilotController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['pilots'] = Pilot::orderBy('nitro', 'asc')->get();

        return view('pilot.index')->with('viewData', $viewData);
    }

    public function create(): View
    {
        return view('pilot.create');
    }

    public function save(Request $request): RedirectResponse
    {
        Pilot::validate($request);
        Pilot::create($request->only(['name', 'origin', 'nitro']));

        return redirect()->route('pilot.index')->with('success', 'Pilot created successfully.');
    }

    public function statistics(): View
    {
        $pilotsByCity = Pilot::all()
            ->groupBy('origin')
            ->map->count();
        $avgNitro = Pilot::avg('nitro');

        $viewData = [];
        $viewData['pilotsByCity'] = $pilotsByCity;
        $viewData['avgNitro'] = $avgNitro;

        return view('pilot.statistics')->with('viewData', $viewData);
    }
}
