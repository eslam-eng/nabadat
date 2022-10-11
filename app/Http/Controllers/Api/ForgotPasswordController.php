<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ForgotPasswordRequest;
use App\Models\ResetCodePassword;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function __invoke(ForgotPasswordRequest $request)
    {
        ResetCodePassword::where('email', $request->email)->delete();
        // Create a new code
        $codeData = ResetCodePassword::create($request->data());
         if ($codeData)
             return apiResponse(data: $codeData->code , message: __('lang.code_send_successfully'));
    }
}
