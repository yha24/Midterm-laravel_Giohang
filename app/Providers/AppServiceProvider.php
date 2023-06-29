<?php

namespace App\Providers;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
use App\Models\Products;
use App\Models\type_products;
use Illuminate\Support\ServiceProvider;
use App\Models\Wishlist;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header', function ($view) {
            $loai_sp =  type_products::all();
            $view->with('loai_sp', $loai_sp);
        });

        view()->composer('page.product_type', function ($view) {
            $product_new =  products::where('new', 1)->orderBy('id', 'DESC')->skip(1)->take(8)->get();
            $view->with('product_new', $product_new);
        });

        view()->composer('header', function ($view) {										
                  if (Session('cart')) {										
                    $oldCart = Session::get('cart');										
                    $cart = new Cart($oldCart);										
                    $view->with(['cart' => Session::get('cart'), 										
                                'product_cart' => $cart->items, 										
                                'totalPrice' => $cart->totalPrice, 										
                                'totalQty' => $cart->totalQty										
                                ]);										
                                }										
                });

    }
}














                
        // view()->composer('header', function ($view) {										
        //     if (Session('Wishlist')) {										
        //         $oldWishlist = Session::get('Wishlist');										
        //         $Wishlist = new Wishlist($oldWishlist);										
        //         $view->with(['Wishlist' => Session::get('Wishlist'), 										
        //                     'product_id' => $Wishlist->items, 										
        //                     'totalPrice' => $Wishlist->totalPrice, 										
        //                     'totalQty' => $Wishlist->totalQty										
        //                     ]);										
        //                     }										
        //     });
            

