<?php

namespace App\Http\Controllers;

use App\Shop;
use App\ShoppingItem;
use Illuminate\Http\Request;

class ShoppingItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = ShoppingItem::with('shop')->whereNull('onPurchase')->get();
        return view('shoppingItems.index',
        [
            'list' => $list,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shops = Shop::all();
        return view('shoppingItems.add', ['shops' => $shops]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = ShoppingItem::create($request->all());
        $item->save();
        return redirect()->route('shoppingItems.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ShoppingItem  $shoppingItem
     * @return \Illuminate\Http\Response
     */
    public function show(ShoppingItem $shoppingItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ShoppingItem  $shoppingItem
     * @return \Illuminate\Http\Response
     */
    public function edit(ShoppingItem $shoppingItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ShoppingItem  $shoppingItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShoppingItem $shoppingItem)
    {
        //
    }

    public function buy($id){
        $item = ShoppingItem::find($id);
        $item->onPurchase = date('Y-m-d');
        $item->save();
        return redirect()->route('shoppingItems.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShoppingItem  $shoppingItem
     * @return \Illuminate\Http\Response
     */
    public function archiveIndex(){
        $list = ShoppingItem::with('shop')->whereNotNull('onPurchase')->get();
        return view('shoppingItems.archive', ['list' => $list]);
    }

    public function destroy(ShoppingItem $shoppingItem)
    {
       /* ShoppingItem::destroy($shoppingItem->id);
        return redirect()->route('shoppingItems.index');*/
    }

    public function delete($id){
        ShoppingItem::destroy($id);
        return redirect()->route('shoppingItems.index');
    }

}
