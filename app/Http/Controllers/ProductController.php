<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|max:2048',
            'description' => 'nullable|string',
            'location' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('', 'public');
            $image = basename($path);
        } else {
            $image = null;
        }

        Product::create([
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'image' => $image,
            'description' => $request->description,
            'location' => $request->location,
        ]);

        return redirect()->route('products.index')->with('success', 'Producto creado exitosamente.');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|max:2048',
            'description' => 'nullable|string',
            'location' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $path = $request->file('image')->store('', 'public');
            $image = basename($path);
        } else {
            $image = $product->image;
        }

        $product->update([
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'image' => $image,
            'description' => $request->description,
            'location' => $request->location,
        ]);

        return redirect()->route('products.index')->with('success', 'Producto actualizado exitosamente.');
    }

    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Producto eliminado exitosamente.');
    }
}
