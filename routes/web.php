<?php

use App\Http\Livewire\Accordion;
use App\Http\Livewire\Alerts;
use App\Http\Livewire\Avatar;
use App\Http\Livewire\Background;
use App\Http\Livewire\Badge;
use App\Http\Livewire\Blog;
use App\Http\Livewire\Border;
use App\Http\Livewire\Breadcrumbs;
use App\Http\Livewire\Buttons;
use App\Http\Livewire\Calendar;
use App\Http\Livewire\Cards;
use App\Http\Livewire\Carousel;
use App\Http\Livewire\ChartChartjs;
use App\Http\Livewire\ChartEchart;
use App\Http\Livewire\ChartFlot;
use App\Http\Livewire\ChartMorris;
use App\Http\Livewire\ChartPeity;
use App\Http\Livewire\ChartSparkline;
use App\Http\Livewire\Chat;
use App\Http\Livewire\Collapse;
use App\Http\Livewire\Contacts;
use App\Http\Livewire\Counters;
use App\Http\Livewire\Display;
use App\Http\Livewire\Draggablecards;
use App\Http\Livewire\Dropdown;
use App\Http\Livewire\Editprofile;
use App\Http\Livewire\Emptypage;
use App\Http\Livewire\Error404;
use App\Http\Livewire\Error500;
use App\Http\Livewire\Extras;
use App\Http\Livewire\Faq;
use App\Http\Livewire\Flex;
use App\Http\Livewire\Forgot;
use App\Http\Livewire\FormAdvanced;
use App\Http\Livewire\FormEditor;
use App\Http\Livewire\FormElements;
use App\Http\Livewire\FormLayouts;
use App\Http\Livewire\FormValidation;
use App\Http\Livewire\FormWizards;
use App\Http\Livewire\Gallery;
use App\Http\Livewire\Height;
use App\Http\Livewire\Horizontal;
use App\Http\Livewire\Icons;
use App\Http\Livewire\ImageCompare;
use App\Http\Livewire\Images;
use App\Http\Livewire\Index;
use App\Http\Livewire\Invoice;
use App\Http\Livewire\ListGroup;
use App\Http\Livewire\Lockscreen;
use App\Http\Livewire\Mail;
use App\Http\Livewire\MailCompose;
use App\Http\Livewire\MailRead;
use App\Http\Livewire\MailSettings;
use App\Http\Livewire\MapLeaflet;
use App\Http\Livewire\MapVector;
use App\Http\Livewire\Margin;
use App\Http\Livewire\MediaObject;
use App\Http\Livewire\Modals;
use App\Http\Livewire\Navigation;
use App\Http\Livewire\Notification;
use App\Http\Livewire\Padding;
use App\Http\Livewire\Pagination;
use App\Http\Livewire\Popover;
use App\Http\Livewire\Position;
use App\Http\Livewire\Pricing;
use App\Http\Livewire\ProductCart;
use App\Http\Livewire\ProductDetails;
use App\Http\Livewire\Products;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Progress;
use App\Http\Livewire\Rangeslider;
use App\Http\Livewire\Rating;
use App\Http\Livewire\Reset;
use App\Http\Livewire\Search;
use App\Http\Livewire\Signin;
use App\Http\Livewire\Signup;
use App\Http\Livewire\Spinners;
use App\Http\Livewire\SweetAlert;
use App\Http\Livewire\TableBasic;
use App\Http\Livewire\TableData;
use App\Http\Livewire\Tabs;
use App\Http\Livewire\Tags;
use App\Http\Livewire\Thumbnails;
use App\Http\Livewire\Timeline;
use App\Http\Livewire\Toast;
use App\Http\Livewire\Todotask;
use App\Http\Livewire\Tooltip;
use App\Http\Livewire\Treeview;
use App\Http\Livewire\Typography;
use App\Http\Livewire\Underconstruction;
use App\Http\Livewire\Userlist;
use App\Http\Livewire\Vertical;
use App\Http\Livewire\WidgetNotification;
use App\Http\Livewire\Widgets;
use App\Http\Livewire\Width;
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

Route::get('/', function () {
    return redirect('/dashboard');
});

// User SignIn
Route::get('/login', 'App\Http\Controllers\UserController@Login')->name('login');
Route::post('/dologin', 'App\Http\Controllers\UserController@DoLogin');

// User SignOut
Route::get('signout', 'App\Http\Controllers\UserController@DoLogOut')->middleware('authadminonly');

// Dashboard
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->middleware('authadminonly');

// Account Management
Route::get('/accounts', 'App\Http\Controllers\AccountController@index')->middleware('authadminonly');
Route::post('/tblAccount', 'App\Http\Controllers\AccountController@getDataTable')->middleware('authadminonly');
Route::post('/dosavenewaccount', 'App\Http\Controllers\AccountController@doSaveNewAccount')->middleware('authadminonly');
Route::post('/getdetailaccount', 'App\Http\Controllers\AccountController@getDetailAccount')->middleware('authadminonly');
Route::post('/dosaveeditaccount', 'App\Http\Controllers\AccountController@doSaveEditAccount')->middleware('authadminonly');
Route::post('/dodeleteaccount', 'App\Http\Controllers\AccountController@doDeleteAccount')->middleware('authadminonly');

// User SignUp
Route::get('/signup', 'App\Http\Controllers\UserController@SignUp');
Route::post('/dosignup', 'App\Http\Controllers\UserController@DoSignUp');

// Market
Route::get('/market', 'App\Http\Controllers\MarketController@index')->middleware('authadminonly');

// Exchange
Route::get('/exchange', 'App\Http\Controllers\ExchangeController@index')->middleware('authadminonly');

// Wallet
Route::get('/wallet', 'App\Http\Controllers\WalletController@index')->middleware('authadminonly');




//Route::get('index', Index::class);
Route::get('error404', Error404::class);
Route::get('error500', Error500::class);
Route::get('accordion', Accordion::class);
Route::get('alerts', Alerts::class);
Route::get('avatar', Avatar::class);
Route::get('background', Background::class);
Route::get('badge', Badge::class);
Route::get('blog', Blog::class);
Route::get('border', Border::class);
Route::get('breadcrumbs', Breadcrumbs::class);
Route::get('buttons', Buttons::class);
Route::get('calendar', Calendar::class);
Route::get('cards', Cards::class);
Route::get('carousel', Carousel::class);
Route::get('chart-chartjs', ChartChartjs::class);
Route::get('chart-echart', ChartEchart::class);
Route::get('chart-flot', ChartFlot::class);
Route::get('chart-morris', ChartMorris::class);
Route::get('chart-peity', ChartPeity::class);
Route::get('chart-sparkline', ChartSparkline::class);
Route::get('chat', Chat::class);
Route::get('collapse', Collapse::class);
Route::get('contacts', Contacts::class);
Route::get('counters', Counters::class);
Route::get('display', Display::class);
Route::get('draggablecards', Draggablecards::class);
Route::get('dropdown', Dropdown::class);
Route::get('editprofile', Editprofile::class);
Route::get('emptypage', Emptypage::class);
Route::get('extras',Extras::class);
Route::get('faq', Faq::class);
Route::get('flex', Flex::class);
Route::get('forgot', Forgot::class);
Route::get('form-advanced', FormAdvanced::class);
Route::get('form-editor', FormEditor::class);
Route::get('form-elements', FormElements::class);
Route::get('form-layouts', FormLayouts::class);
Route::get('form-validation', FormValidation::class);
Route::get('form-wizards', FormWizards::class);
Route::get('gallery', Gallery::class);
Route::get('height', Height::class);
Route::get('icons', Icons::class);
Route::get('image-compare', ImageCompare::class);
Route::get('images', Images::class);
Route::get('invoice', Invoice::class);
Route::get('list-group', ListGroup::class);
Route::get('lockscreen', Lockscreen::class);
Route::get('mail-compose', MailCompose::class);
Route::get('mail-read', MailRead::class);
Route::get('mail-settings', MailSettings::class);
Route::get('mail', Mail::class);
Route::get('map-leaflet', MapLeaflet::class);
Route::get('map-vector', MapVector::class);
Route::get('margin', Margin::class);
Route::get('media-object', MediaObject::class);
Route::get('modals', Modals::class);
Route::get('navigation', Navigation::class);
Route::get('notification', Notification::class);
Route::get('padding', Padding::class);
Route::get('pagination', Pagination::class);
Route::get('popover', Popover::class);
Route::get('position', Position::class);
Route::get('pricing', Pricing::class);
Route::get('product-cart', ProductCart::class);
Route::get('product-details', ProductDetails::class);
Route::get('products', Products::class);
Route::get('profile', Profile::class);
Route::get('progress', Progress::class);
Route::get('rangeslider', Rangeslider::class);
Route::get('rating', Rating::class);
Route::get('reset', Reset::class);
Route::get('search', Search::class);
//Route::get('signin', Signin::class);
//Route::get('signup', Signup::class);
Route::get('spinners', Spinners::class);
Route::get('sweet-alert', SweetAlert::class);
Route::get('table-basic', TableBasic::class);
Route::get('table-data', TableData::class);
Route::get('tabs', Tabs::class);
Route::get('tags', Tags::class);
Route::get('thumbnails', Thumbnails::class);
Route::get('timeline', Timeline::class);
Route::get('toast', Toast::class);
Route::get('todotask', Todotask::class);
Route::get('tooltip', Tooltip::class);
Route::get('treeview', Treeview::class);
Route::get('typography', Typography::class);
Route::get('underconstruction', Underconstruction::class);
Route::get('userlist', Userlist::class);
Route::get('widget-notification', WidgetNotification::class);
Route::get('widgets', Widgets::class);
Route::get('width', Width::class);
Route::get('vertical', Vertical::class);
Route::get('horizontal', Horizontal::class);





