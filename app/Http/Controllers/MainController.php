<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\RegisterMail;
use App\Models\info;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    // index
    public function index() {
        return view('user.wedding');
    }

    public function register(Request $request) {
        $name = $request->name;
        $email = $request->email;
        $attend = $request->attend;
        $message = $request->message;

        $info = new Info();
        $info->name = $name;
        $info->email = $email;
        $info->attend = $attend;
        $info->message = $message;
        dd($info);
        Mail::to('leminhsieu123@gmail.com')->send(new RegisterMail($info));
        $request->session()->flash('success', 'Cảm ơn bạn đã đăng ký. Xin hẹn gặp lại bạn tại lẽ cưới.');
        return redirect()->back();
    }
}
