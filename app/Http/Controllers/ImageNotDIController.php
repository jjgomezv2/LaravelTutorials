<?php

namespace App\Http\Controllers;

use App\Util\ImageLocalStorage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ImageNotDIController extends Controller
{
    public function index(): View
    {
        return view('imagenotdi.index'); // Blade de la vista sin DI
    }

    public function save(Request $request): RedirectResponse
    {
        // Aquí creas directamente la instancia -> fuerte acoplamiento
        $storeImageLocal = new ImageLocalStorage();
        $storeImageLocal->store($request);

        return back();
    }
}
