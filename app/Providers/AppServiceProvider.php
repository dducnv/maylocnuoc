<?php

namespace App\Providers;

use App\Models\MetaSeo;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (env('APP_ENV') == 'Production') {
            URL::forceScheme('https');
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('money', function ($amount) {
            return "<?php echo number_format($amount, 0, '', ',').' VNĐ' ; ?>";
        });
        view()->composer('*', function($view){
            $grandTotal = 0;
            $cart_qty = 0;

            $categoriesView = Category::where('category_status',0)->get();
            $seo = MetaSeo::findOrFail(1);
            $categoriesNav = Category::where('category_status',0)->get();
            $categoriesNavMobile = Category::where('category_status',0)->get();
            $cart = session()->has("cart")?session()->get("cart"):[];
            foreach ($cart as $item){
                $grandTotal += $item->cart_qty * $item->product_price;
                $cart_qty += $item->cart_qty;
            }
//            dd($grandTotal);
            $view->with('categoriesView',$categoriesView)
                ->with('categoriesNav',$categoriesNav)
                ->with('categoriesNavMobile',$categoriesNavMobile)
                ->with('grandTotal',$grandTotal)
                ->with('cart',$cart)
                ->with('seo',$seo)
                ->with('cart_qty',$cart_qty);
        });
    }
}
