<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\bikeDetail;
use App\Models\newBike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class adminBackendUpload extends Controller
{

    public function index(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp', // Assuming maximum file size of 2MB
        ]);

        if ($request->hasFile('image')) {
            try {
                $image = $request->file('image');
                $originalExtension = $image->getClientOriginalExtension();
                $providedFilename = Str::slug($request->input('name'), '_');
                $newFilename = "{$providedFilename}.{$originalExtension}";

                // Use the absolute path to the public/bike_image directory
                $destinationPath = public_path('bike_image');

                // Ensure the directory exists
                if (!File::exists($destinationPath)) {
                    File::makeDirectory($destinationPath, 0755, true);
                }

                // Check for existing files and append a counter to the filename if needed
                $finalFilename = $newFilename;
                $counter = 1;
                while (file_exists($destinationPath . '/' . $finalFilename)) {
                    $finalFilename = "{$providedFilename}_{$counter}.{$originalExtension}";
                    $counter++;
                }

                // Move the file to the public/bike_image directory
                $image->move($destinationPath, $finalFilename);

                // Create new product instance
                $product = new bikeDetail();
                $product->image = $finalFilename; // Save only the filename in the database
                $product->name = $request->name;
                $product->price = $request->price;
                $product->variant = $request->variant;
                $product->category = $request->category;
                $product->engine_type = $request->engine_type;
                $product->displacement = $request->displacement;
                $product->cooling_system = $request->cooling_system;
                $product->top_speed = $request->top_speed;
                $product->clutch_type = $request->clutch_type;
                $product->start_type = $request->start_type;
                $product->fuel_type = $request->fuel_type;
                $product->emission_type = $request->emission_type;
                $product->fuel_supply = $request->fuel_supply;
                $product->max_torque = $request->max_torque;
                $product->mileage = $request->mileage;
                $product->gears = $request->gears;

                // Save product to database
                $product->save();

                // Redirect back with success message or any other action
                return redirect('/admin')->with('success', 'Product uploaded successfully');
            } catch (\Exception $e) {
                Log::error($e->getMessage());
                return back()->with('error', 'An error occurred while uploading the image');
            }
        } else {
            return back()->with('error', 'Image is required');
        }
    }
    public function handleEdit(Request $request)
    {
        $bikeFullDetail = bikeDetail::find($request->id);
        $updateResult = $bikeFullDetail->update([
            'name' => $request->name,
            'price' => $request->price,
            'varient' => $request->varient,
            'category' => $request->category,
            'engine_type' => $request->engine_type,
            'displacement' => $request->displacement,
            'cooling_system' => $request->cooling_system,
            'top_speed' => $request->top_speed,
            'clutch_type' => $request->clutch_type,
            'start_type' => $request->start_type,
            'fuel_type' => $request->fuel_type,
            'fuel_supply' => $request->fuel_supply,
            'max_torque' => $request->max_torque,
            'mileage' => $request->mileage,
            'gears' => $request->gears,
        ]);
        if ($updateResult) {
            return redirect()->back()->with('success', 'Bike detail updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to update bike detail. Please try again.');
        }
    }
}
