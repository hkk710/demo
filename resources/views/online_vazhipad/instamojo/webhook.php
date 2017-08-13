<?php

    $data = $_POST;
    $mac_provided = $data['mac'];  // Get the MAC from the POST data
    unset($data['mac']);  // Remove the MAC key from the data.

    $ver = explode('.', phpversion());
    $major = (int) $ver[0];
    $minor = (int) $ver[1];

    if($major >= 5 and $minor >= 4){
        ksort($data, SORT_STRING | SORT_FLAG_CASE);
    }
    else{
        uksort($data, 'strcasecmp');
    }

    $mac_calculated = hash_hmac("sha1", implode("|", $data), config('instamojo.private_salt'));

    if($mac_provided == $mac_calculated){
        echo "MAC is fine";
        // Do something here
        if($data['status'] == "Credit"){
            // Payment was successful, mark it as completed in your database

            $to = 'hkk710@gmail.com';
            $subject = 'Website Payment Request ' .$data['buyer_name'].'';
            $message = "<h1>Payment Details</h1>";
            $message .= "<hr>";
            $message .= '<p><b>ID:</b> '.$data['payment_id'].'</p>';
            $message .= '<p><b>Amount:</b> '.$data['amount'].'</p>';
            $message .= "<hr>";
            $message .= '<p><b>Name:</b> '.$data['buyer_name'].'</p>';
            $message .= '<p><b>Email:</b> '.$data['buyer'].'</p>';
            $message .= '<p><b>Phone:</b> '.$data['buyer_phone'].'</p>';
            $message .= "<hr>";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            // send email
            mail($to, $subject, $message, $headers);

            $cart = App\Cart::all()->where('longurl', '=', $data['longurl'])->first();
            $vazhipad = new App\Vazhipad;
            $vazhipad->name = $cart->name;
            $vazhipad->vtype = $cart->vtype;
            $vazhipad->vname = $cart->vname;
            $vazhipad->prathishta = $cart->prathishta;
            $vazhipad->phone = $cart->phone;
            $vazhipad->star = $cart->star;
            $vazhipad->email = $data['buyer'];
            $vazhipad->date = $cart->date;
            $vazhipad->price = $data['amount'];
            $vazhipad->payment_id = $data['payment_id'];
            $vazhipad->payment_request_id = $data['payment_request_id'];
            $vazhipad->longurl = $data['longurl'];

            $vazhipad->save();
            $cart->delete();

            $income = App\Income;
            $income->type = "Pooja Income";
            $income->amount = $data['amount'];
            $income->date = Carbon\Carbon::now()->day . "/" . Carbon\Carbon::now()->month . "/" . Carbon\Carbon::now()->year;
            $income->save();
        }
        else{
            return 'failed';
        }
    }
    else{
        echo "Invalid MAC passed";
    }

?>
