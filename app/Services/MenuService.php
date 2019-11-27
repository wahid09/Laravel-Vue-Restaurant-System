<?php
namespace App\Services;
use App\Models\Menu;

/**
 * Menu Services
 */
class MenuService
{
  public function getMenuWthCategory($restaurant_id){
    $categories = Menu::whereIn('restaurant_id', $restaurant_id)
                       ->get()
                       ->groupBy('category.name');
    return $categories;
  }
}
