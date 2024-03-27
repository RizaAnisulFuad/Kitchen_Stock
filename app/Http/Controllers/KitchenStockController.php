<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Models\KitchenStock;
use App\Models\KitchenStock as ModelsKitchenStock;
use Illuminate\Support\Facades\Validator;

class KitchenStockController extends Controller
{
    public function index(){
        $stocks = ModelsKitchenStock::all();
        return view('stocks.index', compact('stocks'));
    }

    public function create(Request $request){
        $validate = ['name' => 'required', 'stock' => 'numeric | required', 'description' => 'required'];
        $validator = Validator :: make($request -> all(), $validate);
        if($validator -> fails()){
            return view('stocks.create');    
        }
        ModelsKitchenStock ::create([
            'name' => $request->name,
            'stock' => $request->stock,
            'description' => $request->description
        ]);  
        return view('stock.create');
    }

    public function show(ModelsKitchenStock$stock){
        return view('stocks.show', compact('stock'));
    }
    
    public function edit(ModelsKitchenStock $stock){
        return view('stocks.edit', compact('stock'));
    }

    public function update(Request $request, ModelsKitchenStock $stock){
        $stock->update($request->all());
        return redirect()->route('stocks.index');
    }

    public function destroy(ModelsKitchenStock $stock){
    if ($stock->canBeDeleted()) {
        $stock->delete();
    }
    return redirect()->route('stocks.index');
}

}
