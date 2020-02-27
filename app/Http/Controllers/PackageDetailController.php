<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PackageDetail;

class PackageDetailController extends Controller
{
    public function __invoke(Request $request) {

        if($request->ajax()) {
            $packageID = $request->packageID;
            $packageDetail = PackageDetail::all();
            
            $data = [
                'packageID' => $packageID,
                'packageDetail' => $packageDetail->toJson(),
            ];
            return response()->json(['data' => $data]);
        }
    }
}
