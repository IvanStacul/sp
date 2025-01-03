<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ordinance;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrdinanceController extends Controller
{
    public function index(Request $request)
    {
        // Obtener el primer año de las ordenanzas
        $firstYear = Carbon::create(Ordinance::active()->orderBy('date', 'asc')->first() ? Ordinance::active()->orderBy('date', 'asc')->first()->date : Carbon::now())->format('Y');
        $lastYear = date('Y');

        // Array de años
        $years = range($firstYear, $lastYear);

        $paginator = env('PER_PAGE', 15);

        // Construir la consulta base
        $query = Ordinance::active()->orderBy('date', 'desc');

        // Filtro por año
        if ($request->has('year') && $request->year != "all" && $request->year != null) {
            $query->whereYear('date', $request->year);
        }

        if ($request->has('category') && $request->category != "all") {
            if ($request->has('search') && $request->search != null) {
                $ordinances = $query->search($request->search, $request->category);
            } else {
                // search by category slug
                $ordinances = $query->whereHas('category', function ($query) use ($request) {
                    $query->where('slug', $request->category);
                });
            }
        } else {
            if ($request->has('search') && $request->search != null) {
                $ordinances = $query->search($request->search);
            } else {
                $ordinances = $query;
            }
        }


        // Paginación de los resultados
        $ordinances = $query->paginate($paginator);

        return view('pages.ordinances.index', [
            'categories' => Category::orderBy('name')->has('ordinances')->get(),
            'docs' => $ordinances,
            'years' => $years,
        ]);
    }

    public function show($ordinanceId)
    {
        $ordinance = Ordinance::where('old_id', $ordinanceId)->firstOrFail();

        return redirect()->route('ordinances.index', ['search' => $ordinance->number]);
    }
}
