<?php

namespace App\Http\Controllers;

use App\Models\Outgoing;
use App\Consts\CategoryConst;
use Illuminate\Http\Request;

class OutgoingController extends Controller
{
    public function index()
    {
        $viewYear = date('Y');
        $viewMonth = date('m');
        $yearMonth = $viewYear . '-' . $viewMonth .'%';
        
        $categorySums = [
            CategoryConst::RENT          => Outgoing::index($yearMonth)->categorySum(CategoryConst::RENT),
            CategoryConst::INSURANCE     => Outgoing::index($yearMonth)->categorySum(CategoryConst::INSURANCE),
            CategoryConst::UTILITY       => Outgoing::index($yearMonth)->categorySum(CategoryConst::UTILITY),
            CategoryConst::FOOD          => Outgoing::index($yearMonth)->categorySum(CategoryConst::FOOD),
            CategoryConst::COMMODITY     => Outgoing::index($yearMonth)->categorySum(CategoryConst::COMMODITY),
            CategoryConst::COMMUNICATION => Outgoing::index($yearMonth)->categorySum(CategoryConst::COMMUNICATION),
            CategoryConst::MEDICAL       => Outgoing::index($yearMonth)->categorySum(CategoryConst::MEDICAL),
            CategoryConst::BEAUTY        => Outgoing::index($yearMonth)->categorySum(CategoryConst::BEAUTY),
            CategoryConst::AMUSEMENT     => Outgoing::index($yearMonth)->categorySum(CategoryConst::AMUSEMENT),
            CategoryConst::CLOTHING      => Outgoing::index($yearMonth)->categorySum(CategoryConst::CLOTHING),
            CategoryConst::GOODS         => Outgoing::index($yearMonth)->categorySum(CategoryConst::GOODS),
            CategoryConst::SOCIAL        => Outgoing::index($yearMonth)->categorySum(CategoryConst::SOCIAL),
            CategoryConst::BOOKS         => Outgoing::index($yearMonth)->categorySum(CategoryConst::BOOKS),
            CategoryConst::EATING_OUT    => Outgoing::index($yearMonth)->categorySum(CategoryConst::EATING_OUT),
            CategoryConst::TRIP          => Outgoing::index($yearMonth)->categorySum(CategoryConst::TRIP),
            CategoryConst::SPECIAL       => Outgoing::index($yearMonth)->categorySum(CategoryConst::SPECIAL),
        ];

        return view('index')
            ->with('viewYear', $viewYear)
            ->with('viewMonth', $viewMonth)
            ->with('categorySums', $categorySums);
    }
}
