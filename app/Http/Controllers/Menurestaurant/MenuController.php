<?php

namespace App\Http\Controllers\Menurestaurant;

use App\Http\Controllers\Controller;
use App\Models\MenuRestau;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/getMenuData",
     *      operationId="getMenuData",
     *      tags={"Menu"},
     *      summary="Get",
     *      description="Returns list",
     *      @OA\Response(
     *          response=200,
     *          description="Successful",
     * *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *       ),
     *     )
     */
    public function getMenuData()
    {
        $data = MenuRestau::join('categories', 'categories.id', '=', 'menu_restaus.category_id')
            ->select('menu_restaus.*', 'categories.designation as category')->get();
        $result = [
            'message' => 'success',
            'success' => true,
            'status' => 201,
            'data' => $data
        ];
        return response()->json($result);
    }
}
