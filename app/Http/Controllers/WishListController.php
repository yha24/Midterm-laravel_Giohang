<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Products;

class WishListController extends Controller
{
    // public function WishListShow($product_id)
    // {
    //     Wishlist::create([
    //         'id_user' => Auth::id(),
    //         'id_product' => $product_id,
    //     ]);

    //     return response()->json(['message' => 'Product added to wishlist.']);
    // }

    // public function addToWishlist(Request $request)
    // {
    //     $wishlist = Wishlist::where('id_user', $request->user()->id)
    //         ->where('id_product', $request->product_id)
    //         ->first();

    //     if ($wishlist) {
    //         return response()->json(['message' => 'Product already exists in wishlist.']);
    //     } else {
    //         Wishlist::create([
    //             'id_user' => $request->user()->id,
    //             'id_product' => $request->product_id,
    //         ]);

    //         return response()->json(['message' => 'Product added to wishlist.']);
    //     }
    // }

    public function getWishlist() {
        if (Session('Wishlist')) {
            $oldWishlist = Session::get('Wishlist');
            $Wishlist = new Wishlist($oldWishlist);										
            return view('page.Wishlist') ->with(['Wishlist' => Session::get('Wishlist'),
                        'product_id' => $Wishlist->items,										
                        'totalQty' => $Wishlist->totalQty
                        ]);		
                        }
    }									

    public function getAddToWishlist(Request $req, $id)																				
      {																				
        if (Session::has('user')) {																				
          if (products::find($id)) {																				
            $product = Products::find($id);																				
            $oldWishlist = Session('Wishlist') ? Session::get('Wishlist') : null;																				
            $Wishlist = new Wishlist($oldWishlist);																				
            $Wishlist->add($product, $id);																			
            $req->session()->put('Wishlist', $Wishlist);																				
            return redirect()->back();																				
          } else {																				
            return '<script>alert("Không tìm thấy sản phẩm này.");window.location.assign("/");</script>';																				
          }																				
        } else {																				
          return '<script>alert("Vui lòng đăng nhập để sử dụng chức năng này.");window.location.assign("/login");</script>';																				
        }																				
      }																				
                                                                                                                                                            
    
    public function getDelItemWishlist($id){
        $oldWishlist = Session::has('Wishlist')?Session::get('Wishlist'):null;
        $Wishlist = new Wishlist($oldWishlist);
        $Wishlist->removeItem($id);
        if(count($Wishlist->items)>0){
        Session::put('Wishlist',$Wishlist);

        }
        else{
            Session::forget('Wishlist');
        }
        return redirect()->back();
    }

}
