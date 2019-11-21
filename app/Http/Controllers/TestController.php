<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function index()
    {
        $products = DB::table('products')->get();

        return view('test', compact('products'));
    }

    public function search(Request $request){
        if ($request->ajax()) {
            $output = '';
            $products = DB::table('products')->where('product_name', 'LIKE', '%' . $request->search . '%')->get();
            if ($products) {
                foreach ($products as $key => $product) {
                    $output .= '<tr>
                    <td>' . $product->product_id . '</td>
                    <td>' . $product->product_name . '</td>
                    <td>' . $product->description . '</td>
                    <td>' . $product->unit_price . '</td>
                    </tr>';
                }
            }

            return Response($output);
        }

    }
}
