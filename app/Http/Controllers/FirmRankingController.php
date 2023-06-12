<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;
use App\Exceptions\RegionNotFoundException;

class FirmRankingController extends Controller
{
    /**
     * Used to store the filename of the json we need to return
     */
    public static $codeTestFile = 'legalease-code-test-api.json';

    /**
     * Lists out the Firm Ranking JSON
     * 
     * @method GET
     * @param int $regionID The ID of the region of the firm
     * @return JSON
     */
    public function list($regionId): JsonResponse|Response
    {
        try {
            if ($regionId != 170) {
                throw new RegionNotFoundException('Region ID not supported');
            }
        } catch(RegionNotFoundException $exception) {
            return response()->json([
                'status' => 'error',
                'data' => [
                    'message' => $exception->getMessage()
                ]
            ]);
        }

        $json = File::get(static::$codeTestFile);
        return response($json);
    }
}