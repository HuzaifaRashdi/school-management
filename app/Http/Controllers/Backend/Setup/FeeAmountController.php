<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentFee;
use App\Models\StudentClass;
use App\Models\FeeCategoryAmount;


class FeeAmountController extends Controller
{
   public function viewFeeAmount()
   {
    $data['alldata'] = FeeCategoryAmount::all()->sortByDesc("created_at");
    return view('admin.backend.setup.fee_amount.view_amount', $data);
   }

   public function addFeeAmount()
    {

        $data['fee_categories'] = StudentFee::all();
        $data['classes'] = StudentClass::all();

        return view ('admin.backend.setup.fee_amount.add_amount', $data);

    }
}
