<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Delivery;

class DeliveryController extends Controller
{
    public function index(Request $request)
    {
        try {
            $deliveries = Delivery::with(['driver', 'assignedBy'])->latest()->get();

            return response()->json([
                'status' => true,
                'code' => 200,
                'message' => 'Delivery data retrieved successfully',
                'data' => [
                    'deliveries' => $deliveries
                ]
            ], 200); // HTTP status code bhi 200
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'code' => 500,
                'message' => 'Failed to retrieve delivery data',
                'error' => $e->getMessage() // Optional: hata bhi sakte ho production mein
            ], 500); // Internal Server Error
        }
    }

    public function deliveryDetails(Request $request)
    {
        try {
            $deliveryId = $request->input('id');
            $delivery = Delivery::with(['driver', 'assignedBy'])->findOrFail($deliveryId);

            return response()->json([
                'status' => true,
                'code' => 200,
                'message' => 'Delivery details retrieved successfully',
                'data' => [
                    'delivery' => $delivery
                ]
            ], 200); // HTTP status code bhi 200
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'code' => 500,
                'message' => 'Failed to retrieve delivery details',
                'error' => $e->getMessage() // Optional: hata bhi sakte ho production mein
            ], 500); // Internal Server Error
        }
    }
}
