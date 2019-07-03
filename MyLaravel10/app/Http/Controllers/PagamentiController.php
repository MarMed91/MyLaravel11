<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PagamentiController extends Controller
{
    //function getPagamenti() {

    //  $pagamenti = DB::select('

    //  SELECT *
    //  FROM pagamenti
    //  WHERE status = "pending"
    //  ORDER BY price DESC

    //  ');

    //  return view('page.home', [ "pagamenti" => $pagamenti ]);
    //}

    function getPagamenti() {

      $pagamenti = DB::table('pagamenti')
                        ->selectRaw('id, status, price')
                //      ->select('id', 'status', 'price')
                        ->where('status', '=', 'pending')
                        ->orderBy('price', 'DESC')
                        ->get();

      return view('page.home', [ "pagamenti" => $pagamenti ]);
    }

    function getPagamento($id) {

      $pagamento = DB::table('pagamenti')
                        ->where('id', '=', $id)
                        ->get();



    }
}
