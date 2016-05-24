<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BigFish\PDF417\PDF417;
use BigFish\PDF417\Renderers\ImageRenderer;
use BigFish\PDF417\Renderers\SvgRenderer;

class GeneratorController extends Controller
{
    public function __construct()
    {
        // Code...
    }

    public function index()
    {
        return view('home');
    }

    public function generate(Request $request)
    {
        $price = sprintf('%015d',round($request->input("price") * 100));
        //"000000000750000";

        // Text to be encoded into the barcode
        $text = "HRVHUB30".PHP_EOL.
                $request->input("currency", "HRK").PHP_EOL.
                $price.PHP_EOL.
                $request->input("name").PHP_EOL.
                $request->input("address1").PHP_EOL.
                $request->input("address2").PHP_EOL.
                $request->input("address3").PHP_EOL.
                $request->input("address4").PHP_EOL.
                $request->input("address5").PHP_EOL.
                $request->input("iban").PHP_EOL.
                $request->input("model", "HR00").PHP_EOL.
                $request->input("invoice_number").PHP_EOL.
                $request->input("type", "COST").PHP_EOL.
                $request->input("description", "PLAĆANJE PREMA RAČUNU")
                ;

        // Encode the data, returns a BarcodeData object
        $pdf417 = new PDF417();
        $data = $pdf417->encode($text);


        // Create a PNG image
        $renderer = new ImageRenderer(['format' => 'data-url']);
        $image    = $renderer->render($data);

        // return $text;
        echo $text;
        return '<br><br><img src="'.$image->encoded.'">';
    }
}
