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
        $data = $query->orderBy('created_at', $request->get('sort', 'DESC'));
        $data->paginate(10);
        return Inertia::render($this->component('Index'), [$data]);
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
