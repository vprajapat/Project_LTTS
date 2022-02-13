<?php
    
namespace App\Http\Controllers;
    
use Stripe;
use Session;
use App\Models\Booking;
use Illuminate\Http\Request;
    
class StripeController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout($id)
    {   
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51KP13GSAjxyLBevUgcyl7Z0dAOZiOZBlDKfZ5n4BVnElFMWCKazLBi4ojQrBsIyxjamjgxCOIqr9VIxxDLg4nPlH00PR0sWgXV');

        $booking = Booking::find($id);
        $amount  =$booking->total_pass*10;	
        $amount1  =$booking->total_pass*10;	
		
		$amount *= 100;
        $amount = (int) $amount;
        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'INR',
			'description' => 'Payment From Codehunger',
			'payment_method_types' => ['card'],
		]);
		$intent = $payment_intent->client_secret;

		return view('checkout.credit-card',compact('intent','amount','amount1'));

    }

    public function afterPayment()
    {
        

        $notification = array(
            'message' => 'Your Ticket Has been Booked',
            'alert-type' => 'success'
    
    
        );
        
        return redirect()->route('dashboard')->with($notification);
    }
}