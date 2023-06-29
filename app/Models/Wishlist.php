<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
  public $items = null;
  public $totalQty = 0;
//   public $totalPrice = 0;
  /**
   * Summary of __construct
   * @param mixed $oldWishlist
   */
  public function __construct($oldWishlist)
  {
    if ($oldWishlist) {
      $this->items = $oldWishlist->items;
      $this->totalQty = $oldWishlist->totalQty;

    }
  }
  //Thêm phần tử vào mục yêu thích                
  public function add($item, $id, $qty = 1)
  {
    if ($item->promotion_price == 0) {
      $Wishlist = ['qty' => 0, 
                  'price' => $item->unit_price, 
                  'item' => $item];
      if ($this->items) {
        if (array_key_exists($id, $this->items)) {
          $Wishlist = $this->items[$id];
        }
      }
      $Wishlist['qty'] = $Wishlist['qty'] + $qty;
      $Wishlist['price'] = $item->unit_price * $Wishlist['qty'];
      $this->items[$id] = $Wishlist;
      $this->totalQty = $this->totalQty + $qty;
    } else {
      $Wishlist = ['qty' => 0, 'price' => $item->promotion_price, 'item' => $item];
      if ($this->items) {
        if (array_key_exists($id, $this->items)) {
          $Wishlist = $this->items[$id];
        }
      }
      $Wishlist['qty'] = $Wishlist['qty'] + $qty;
      $Wishlist['price'] = $item->promotion_price * $Wishlist['qty'];
      $this->items[$id] = $Wishlist;
      $this->totalQty = $this->totalQty + $qty;

    }
  }
 
}


