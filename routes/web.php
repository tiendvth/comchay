<?php



use App\Http\Controllers\FeedBackController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\ProductClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\UploadImageController;
use App\Http\Middleware\CheckAdmin;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->middleware(['auth', CheckAdmin::class])->group(function (){
    require_once __DIR__ . '/admin.php';
});

Route::get('/', function () {
    $selling = Product::query()->join('order_details','products.id', '=', 'order_details.productId')->select('products.*')->orderBy('quantity','DESC')->limit(8)->get();
    $new = Product::query()->orderBy('created_at', 'DESC')->limit(8)->get();
    $featured = Product::query()->where('is_featured','=' , 1)->get();
    $categories = Category::query()->limit(8)->get();
    return view('clients.index',[
        'selling' => $selling,
        'new' => $new,
        'featured' => $featured,
        'categories' => $categories
    ]);
})->name('index');


Route::get('abouts', function () {return view('clients.abouts');})->name('abouts');
Route::get('blog', function () {return view('clients.blog');})->name('blog');
Route::get('contact', function () {return view('clients.contact');})->name('contact');
Route::post('contact', [FeedBackController::class, 'store'])->name('store');


Route::get('products',[ProductClientController::class,'list'])->name('products');
Route::get('detail-profile/{id}', [\App\Http\Controllers\UserController::class,'detailProfile'])->name('detail-profile');
Route::get('/product-detail/{id}', [ProductClientController::class,'detail'])->name('product_detail');



Route::post('login',[EntryController::class,'login'])->name('login');
Route::get('logout',[EntryController::class,'logout'])->name('logout');
Route::post('register',[EntryController::class,'register'])->name('register');

Route::get('add/{id}', [ShoppingCartController::class, 'add'])->name('addCart');
Route::get('listCart', [ShoppingCartController::class, 'show'])->name('listCart');
Route::get('remove/{rowId}', [ShoppingCartController::class, 'remove']);
Route::get('update', [ShoppingCartController::class, 'update']);
Route::get('destroy', [ShoppingCartController::class, 'destroy']);
Route::post('orders/save', [OrderController::class, 'save'])->name('saveOrder');
Route::get('orders/{id}', [OrderController::class, 'detail'])->name('detailOrder');

Route::get('/api/ward/{id}', [ShoppingCartController::class, 'api']);

Route::get('mail',[MailController::class,'send_mail']);

Route::get('mail-design',function (){
    return view('mails.mail');
});
Route::post('/paypal/create-payment', [PaypalController::class, 'createPayment']);
Route::post('/paypal/execute-payment', [PaypalController::class, 'executePayment']);


