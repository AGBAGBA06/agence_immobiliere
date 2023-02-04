<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PoductController extends Controller
{
    
    //
    public function products(){
        $produits= Product::get();
        return view('admin.products')->with('produits', $produits);
    }




    public function ajouterproduit(){
    //   $categories=Category::All()->pluck('category_name','category_name');
        return view('admin.ajouterproduit');
    }

    //pour l'ajout
    public function sauverproduit(Request $request){
         $this->validate($request, ['desc1'=>'required',
                                    'prix'=>'required',
                                    'desc2'=>'required',
                                    'info1'=>'required',
                                    'info2'=>'required',
                                    'info3'=>'required',
                                    'product_image'=>'image|nullable|max:1999']);

                                    if($request->hasFile('product_image')){
                                       //1-select image with extension
                                       $fileNameWithExt=$request->file('product_image')->getClientOriginalName();
                                       //2-get just file name
                                       $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
                                       //3-get just extension
                                        $extension = $request->file('product_image')->getClientOriginalExtension();
                                       //4-file name store
                                       $fileNametostore=$fileName.'_'.time().'.'.$extension;
                                       //uplaoder l'image
                                       $path=$request->file('product_image')->storeAs('public/product_images',
                                                  $fileNametostore);
                                    }
                                    else{
                                        
                                        $fileNametostore='noimage.jpg';
                                    }
                                    $produit=new Product();
                                    $produit->desc1=$request->input('desc1');
                                    $produit->prix=$request->input('prix');
                                    $produit->desc2=$request->input('desc2');
                                    $produit->info1=$request->input('info1');
                                    $produit->info2=$request->input('info2');
                                    $produit->info3=$request->input('info3');
                                    // $produit->mot_de_passe=$request->input('mot_de_passe');
                                    // $produit->email=$request->input('email');
                                    
                                    // $product->desc2=$request->input('desc2');
                                    $produit->product_image=$fileNametostore;
                                    $produit->status=1;
                                    $produit->save();
                                    return redirect('/ajouterproduit')->with('status','le  produit  '
                                                       .$produit->desc1.'  a ete bien ajoute');
                                 
                                }
    
     //pour editer
     public function editproduit($id){
        $product= Product::find($id);
       $produit=Product::All()->pluck('desc1','desc1');
    //    $categories=Category::All()->pluck('category_name','category_name');


        return view ('admin.editproduit')->with('product',$product);

        
         }
         
         public function modifierproduit(Request $request){
            $this->validate($request, ['desc1'=>'required',
                                        'prix'=>'required',
                                        'desc2'=>'required',
                                        'info1'=>'required',
                                        'info2'=>'required',
                                        'info3'=>'required',
                                    'product_image'=>'image|nullable|max:1999']);
                                        
            $produit= Product::find($request->input('id'));
            $produit->desc1=$request->input('desc1');
            $produit->prix=$request->input('prix');
            $produit->desc2=$request->input('desc2');
            $produit->info1=$request->input('info1');
            $produit->info2=$request->input('info2');
            $produit->info3=$request->input('info3');
            
            if($request->hasFile('product_image')){
                //1-select image with extension
                $fileNameWithExt=$request->file('product_image')->getClientOriginalName();
                //2-get just file name
                $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
                //3-get just extension
                 $extension = $request->file('product_image')->getClientOriginalExtension();
                //4-file name store
                $fileNametostore=$fileName.'_'.time().'.'.$extension;
                //uplaoder l'image
                $path=$request->file('product_image')->storeAs('public/product_images',
                           $fileNametostore);

                           if ($product->produit_image!='noimage.jpg') {
                            Storage::delete('public/product_images/'.$produit->image);
                           
                           }
                           $produit->product_image=$fileNametostore;
             }


            $produit->update();
            return redirect('/products')->with('status',
          'le produit '.$produit->desc1.' a ete bien modifier');
         }



         public function deleteproduit($id)    {
        $produit = Product::find($id);
        $produit->delete();
        return redirect('/produits')->with(
            'status',
            'la produit' . $produit->desc1. 'a ete bien supprimer'
        );
    }
    
        //pour activer un produit
 public function activer_produit($id){
    $produit= Product::find($id);
    $produit->status=1;
        $produit->update();
        return redirect('/products')->with('status',
        'le produit '.$produit->desc1.' a ete bien desactiver');
        
        //pour desactiver un produit
    }
     public function desactiver_produit($id){
        $produit= Product::find($id);
        $produit->status=0;
        $produit->update();
        return redirect('/products')->with('status',
        'la produit '.$produit->desc1.' a ete bien active');
}

}