<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        
        $list_pk = Produk::all();
        if($request->ajax()){
            return datatables()->of($list_pk)
            ->addColumn('action', function($data){
                $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id_produk="'.$data->id_produk.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                $button .= '&nbsp;&nbsp;';
                $button .= '<button type="button" name="delete" id_produk="'.$data->id_produk.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';     
                return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
      
        }
        return view('bluper.produk');

    }


    public function store(Request $request)
    {
        $id_produk = $request->id_produk;

 
        $post   =   Produk::updateOrCreate(
            ['id_produk' => $id_produk],
        [
            'id_produk' => $request->id_produk,
            'nama_produk' => $request->nama_produk,
            'keterangan' => $request->keterangan,
            'harga' => str_replace(".","",$request->harga),
            'jumlah' => $request->jumlah,

        ]); 

    return response()->json($post);
    }

    public function edit($id_produk)
    {
        $where = array('id_produk' => $id_produk);
        $post  = Produk::where($where)->first();
        return response()->json($post);
    }

    public function destroy($id_produk)
    {
        $post = Produk::where('id_produk',$id_produk)->delete();
        return response()->json($post);
    }
}
