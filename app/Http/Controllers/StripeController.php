<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Stripe;
use Session;
use App\Models\Package;
use Auth;
use App\Models\Employee;
use App\Models\CompanySubscription;
class StripeController extends Controller
{
    /**
     * payment view
     */
    public function handleGet()
    {
        return view('home');
    }
  
    /**
     * handling payment with POST
     */
    public function handlePost(Request $request)
    {
        Stripe\Stripe::setApiKey('sk_test_51JCiBhBEJyVxZuHvy7nISzbYKYTYJvF72YeNdMP0nj3B3ZjqEFKdP7bWakt75Np1QdL6sOWp0beg6xfHJ0NyeFdD00LxSjgXa3');
        $session = \Stripe\Checkout\Session::create([

  'payment_method_types' => ['card', 'klarna'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'USD',
      'product_data' => [
        'name' => 'T-shirt',
        
      ],
      'unit_amount' => 2000,
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => 'https://example.com/success',
  'cancel_url' => 'https://example.com/cancel',
]);

        // Stripe\Charge::create ([
        //         "amount" => 100 * 1000,
        //         "currency" => "USD",
        //         "source" => $request->stripeToken,
        //         "description" => "Making test payment." 
        // ]);
  
        Session::flash('success', 'Payment has been successfully processed.');
          
        return back();
    }
    
    public function purchase_pkg(Request $request){
        $company_id =    Auth::user()->company_id;
        
        $pkg = Package::where('id',$request->package_id)->first();
        $Date =  date('Y-m-d');
        $exp_date = date('Y-m-d', strtotime($Date. ' + '.$pkg->time_duration.' days'));
        // dd($pkg);
                   
                    // CompanySubscription
                    try {
                         Stripe\Stripe::setApiKey('sk_test_51JCiBhBEJyVxZuHvy7nISzbYKYTYJvF72YeNdMP0nj3B3ZjqEFKdP7bWakt75Np1QdL6sOWp0beg6xfHJ0NyeFdD00LxSjgXa3');
                        Stripe\Charge::create ([
                                "amount" => 100 * $pkg->price,
                                "currency" => "USD",
                                "source" => $request->stripeToken,
                                "description" => "Company Buy's A ".$pkg->name." ." 
                        ]);
                        $save_apyment =  new CompanySubscription();
                        $save_apyment->company_id = $company_id;
                        $save_apyment->pkg_id = $pkg->id;
                        $save_apyment->pkg_exp_date = $exp_date;
                        $save_apyment->amount = $pkg->price;
                        $save_apyment->save();
                        session()->flash('success','Plan Successfully Purcahsed!');
                        Employee::where('id',$company_id)->update([
                            'plan_id' => $pkg->id
                            ]);
                        
                    } catch (Exception $e) {
                        // return $e;
                    session()->flash('danger',$e);
                }
                    return redirect()->to('employe-dashboard'); 
                  
                    }
}