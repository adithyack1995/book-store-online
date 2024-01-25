<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\ShoppingCart;
use App\Models\User;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countItem = 0;
        $user = auth()->user();
        foreach ($user->cartItems as $cartItem) {
            $countItem = $cartItem->quantity + $countItem;
        }
        return response()->json([
            'success' => true,
            'items' => $countItem
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(User $user, Book $book)
    {
        $data['book_id'] = $book->id;
        $data['user_id'] = $user->id;
        $cartQuantity = ShoppingCart::where('book_id', $book->id)->where('user_id', $user->id)->first();
        ShoppingCart::updateOrCreate(
            [
                'book_id' => $book->id,
                'user_id' => $user->id
            ],
            ['quantity' => $cartQuantity ? $cartQuantity->quantity + 1 : 1]
        );
        $countItem = 0;
        foreach ($user->cartItems as $cartItem) {
            $countItem = $cartItem->quantity + $countItem;
        }
        return response()->json([
            'success' => true,
            'items' => $countItem
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = auth()->user();
        $cartItems = $user->cartItems;
        return view('user.view-cart', compact('cartItems'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ShoppingCart $shoppingCart, Request $request)
    {
        $shoppingCart->update(['quantity' => $request->itemCount]);
        $countItem = 0;
        foreach ($shoppingCart->user->cartItems as $cartItem) {
            $countItem = $countItem + $cartItem->quantity;
        }
        return response()->json([
            'success' => true,
            'items' => $countItem
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShoppingCart $shoppingCart)
    {
        $shoppingCart->delete();
        return response()->json([
            'success' => true
        ]);
    }
}
