<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use App\Models\TabelData;
use Illuminate\Http\Request;

class CommandWeb extends Controller
{
    public function index (TabelData $m) {
        $data = $m->all();
        $content = 'Table.Tank';
        return view('models', compact('data', 'content'));
    }

    public function hapus ($id) {
        TabelData::all()->find($id)->delete();
        return redirect()->back();
    }

    public function ProductShow (Product $p, Category $c) {
        $data = $p->all(); $script1 = true;
        $category = array_combine(collect($c->all())->pluck('id')->toArray(), collect($c->all())->pluck('name')->toArray());
        $content = 'Table.Product';
        return view('models', compact('data', 'content', 'category', 'script1'));
    }

    public function ProductDelete (Request $r) {
        Product::find($r->pass)->delete();
        return redirect()->back();
    }

    public function ProductAdd (Request $r) {
        Product::create([
            'name' => $r->namaI,
            'stock' => $r->StockI,
            'price' => 'Rp, ' . $r->PriceI,
            'category_id' => $r->CategoryI,
            'description' => $r->DesciptionI
        ]);
        return redirect()->back();
    }




    public function CategoryShow (Category $c) {
        $data = $c->all(); $content = 'Table.Category';
        return view('models', compact('data', 'content', 'script2'));
    }

    public function CategoryDelete (Request $r) {
        Category::find($r->pass)->delete();
        return redirect()->back();
    }

    public function CategoryAdd (Request $r) {

        Category::create([
            'name' => $r->namaI,
            'description' => $r->DesciptionI
        ]);
        return redirect()->back();
    }




    public function CustomerShow (Customer $c) {
        $data = $c->all(); $content = 'Table.Customer';
        return view('models', compact('data', 'content'));
    }

    public function CustomerDelete (Request $r) {
        Customer::find($r->pass)->delete();
        return redirect()->back();
    }

    public function CustomerAdd (Request $r) {

        Customer::create([
            'email' => $r->EmailI,
            'password' => $r->PasswordI,
            'address' => $r->AddressI,
            'phone' => $r->PhoneI
        ]);
        return redirect()->back();
    }
}
