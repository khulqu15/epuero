<?php

namespace App\Http\Controllers\Web\Fire;

use App\Http\Controllers\Controller;
use App\Models\Fire;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
class FireController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request): Response
    {
        $query = Fire::query();
        $data = $query->get();
        return Inertia($this->component('Index'), [
            "fires" => $data
        ]);
    }

    /**
     * Get a component in the resource.
     *
     * @return string
     */
    protected function component(string $name): string
    {
        return 'App/Fire/'.$name;
    }
}
