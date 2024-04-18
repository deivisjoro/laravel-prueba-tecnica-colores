<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColorCompatibilityController extends Controller
{
    public function showForm()
    {
        return view('colors.form');
    }

    public function colorCompatibility(Request $request)
    {
        $validatedData = $request->validate([
            'color1' => 'required|regex:/^#[a-fA-F0-9]{6}$/',
            'color2' => 'required|regex:/^#[a-fA-F0-9]{6}$/',
        ]);

        list($r1, $g1, $b1) = $this->hexToRGB($validatedData['color1']);
        list($r2, $g2, $b2) = $this->hexToRGB($validatedData['color2']);

        $diff = sqrt(pow($r2 - $r1, 2) + pow($g2 - $g1, 2) + pow($b2 - $b1, 2));
        $compatibilityScore = 1 - ($diff / 441.67295593);

        return view('colors.compatibility', [
            'color1' => $validatedData['color1'],
            'color2' => $validatedData['color2'],
            'compatibilityScore' => $compatibilityScore
        ]);
    }

    private function hexToRGB($hex)
    {
        $hex = str_replace("#", "", $hex);
        $r = hexdec(substr($hex, 0, 2));
        $g = hexdec(substr($hex, 2, 2));
        $b = hexdec(substr($hex, 4, 2));
        return [$r, $g, $b];
    }
}
