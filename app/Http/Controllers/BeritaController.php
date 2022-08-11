<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(){
        $data = Berita::latest()->take(5)->get();
        return view ('index',compact('data'));
    }
    public function data(){
        $data = Berita::latest()->take(5)->get();
        // $validate = Detail_Jadwal::where('jadwal_id',$jadwal)->where('waktu',$waktu)->count();
        return view ('data',compact('data'));
    }
    public function galeri(){
        $data = Berita::latest()->take(5)->get();
        return view('galeri',compact('data'));
    }
    public function tambah(Request $request){
        $this->validate($request, [
            'judul_berita' => 'required',
            'kreator' => 'required',
            'isi_berita' => 'required',
            // 'gambar_berita' => 'required',
        ]);

        $gambar_berita = $request->gambar_berita;
        $new_gambar_berita = time().$gambar_berita->getClientOriginalName();
        $berita = Berita::create([
            'judul_berita' => $request->judul_berita,
            'kreator' => $request->kreator,
            'isi_berita' => $request->isi_berita,
            'gambar_berita' => 'uploads/gambar_berita/'.$new_gambar_berita,
        ]);
        $gambar_berita->move('uploads/gambar_berita/',$new_gambar_berita);

        return redirect('data')->with('success', 'Product Created Successfully');
    }  
    public function ubah($id){
        $berita = Berita::select('*')->where('id', $id)->get();
        return view('edit',compact('berita'));
    }
    public function ubah_berita(Request $request,Berita $berita){
        $this->validate($request, [
            'judul_berita'=> 'required',
            'kreator'=> 'required',
            'isi_berita'=> 'required',
        ]);

        if ($request->hasFile('gambar_berita')) {
            $image = $request->file('gambar_berita');
            $image->storeAs('uploads/gambar_berita/', $image->hashName());
            $new_gambar_berita = time().$image->getClientOriginalName();

            // Berita::delete('uploads/gambar_berita/' .$berita->image);

            $berita->update([
                'judul_berita' => $request->judul_berita,
                'kreator' => $request->kreator,
                'isi_berita' => $request->isi_berita,
                'gambar_berita' => 'uploads/gambar_berita/'.$new_gambar_berita,
            ]);
            $image->move('uploads/gambar_berita', $new_gambar_berita);
        }else{
            $berita->update([
                'judul_berita' => $request->judul_berita,
                'kreator' => $request->kreator,
                'isi_berita' => $request->isi_berita,
            ]);
        }
        return redirect ('data')->with('success','Product updated Sucessfully.');
    }
    public function hapus($id){
        $berita = Berita::find($id);
        $berita->delete();

        return redirect('data')->with('success','Product deleted successfully.');
    }
}
