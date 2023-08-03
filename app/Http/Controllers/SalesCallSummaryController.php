<?php

namespace App\Http\Controllers;

use App\Enum\Role;
use App\Http\Requests\StoreSalesCallSummaryRequest;
use App\Http\Requests\UpdateSalesCallSummaryRequest;
use App\Models\SalesCallSummary;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class SalesCallSummaryController extends Controller
{

    public function index()
    {
        $sales = SalesCallSummary::all();
        if (auth()->user()->role == Role::ROLES[1]) {
            $sales = SalesCallSummary::query()->where('user_id', auth()->user()->id)->get();
        }
        return view('salesCallSummary.index', compact('sales'));
    }


    public function create()
    {
        return view('salesCallSummary.create');
    }


    public function store(StoreSalesCallSummaryRequest $request): RedirectResponse
    {
        SalesCallSummary::query()->create($request->all());
        Alert::toast('Sales Call Summary Successfully Saved', 'success');
        return to_route('salesCallSummary.index');
    }


    public function show(SalesCallSummary $salesCallSummary)
    {
        return view('salesCallSummary.show', compact('salesCallSummary'));
    }

    public function edit(SalesCallSummary $salesCallSummary)
    {
        return view('salesCallSummary.edit', compact('salesCallSummary'));
    }


    public function update(UpdateSalesCallSummaryRequest $request, SalesCallSummary $salesCallSummary): RedirectResponse
    {
        $salesCallSummary->update($request->all());
        Alert::toast('Sales Call Summary Successfully Updated', 'success');
        return to_route('salesCallSummary.index');
    }

    public function destroy(SalesCallSummary $salesCallSummary): RedirectResponse
    {

        $salesCallSummary->delete();
        Alert::toast('Sales Call Summary Successfully Removed', 'success');
        return to_route('salesCallSummary.index');
    }
}
