@extends('layout.appad')
@section('title')
Edit produit
@endsection
@section('content')
      <div class="row grid-margin">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Editer produit</h4>
              
              @if (Session::has('status'))
                  <div class="alert alert-success">
                    {{Session::get('status')}}
                  </div>
                @endif
                @if (count($errors)>0)
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{$error}}</li>
                      @endforeach
                    </ul>
                  </div>
               @endif
                {!!Form::open(['action'=>'App\Http\Controllers\PoductController@modifierproduit',
                  'method'=>'POST','class'=>'cmxform' ,'id'=>'commentForm'])!!}
                 {{ csrf_field() }}
                 {{ Form::hidden ('id',$product->id) }}

                 <div class="form-group">
                   {{Form::label('','desc1 du produit',['for'=>'cname'])}}
                   {{Form::text('desc1',$product->desc1,['class'=>'form-control','id'=>'cname'])}}
                  </div>
                  

                  <div class="form-group">
                   {{Form::label('','desc2 du produit',['for'=>'cname'])}}
                   {{Form::text('desc2',$product->desc1,['class'=>'form-control','id'=>'cname'])}}
                  </div>
                  
                  <div class="form-group">
                   {{Form::label('','info1 du produit',['for'=>'cname'])}}
                   {{Form::text('info1',$product->desc1,['class'=>'form-control','id'=>'cname'])}}
                  </div>
                  
                  <div class="form-group">
                   {{Form::label('','info2 du produit',['for'=>'cname'])}}
                   {{Form::text('info2',$product->desc1,['class'=>'form-control','id'=>'cname'])}}
                  </div>
                  
                  <div class="form-group">
                   {{Form::label('','info3 du produit',['for'=>'cname'])}}
                   {{Form::text('info3',$product->desc1,['class'=>'form-control','id'=>'cname'])}}
                  </div>
                 
                  <div class="form-group">
                    {{Form::label('','prix du produit',['for'=>'cpredesc1'])}}
                    {{Form::text('prix',$product->prix,['class'=>'form-control','id'=>'cpredesc1'])}}
                   </div>
                   
                  <div class="form-group">
                    {{Form::label('','image du produit',['for'=>'cname'])}}
                    {{Form::file('product_image',['class'=>'form-control','id'=>'cname'])}}
                   </div> 
                  
                  {{Form::submit('modifier',['class'=>'btn btn-primary'])}}
                  {!!Form::close()!!}
               
              </form>
            </div>
          </div>
        </div>
      
      </div>
@endsection

@section('script')
{{-- <script src="backend/js/form-validation.js"></script>
<script src="backend/js/bt-maxLength.js"></script> --}}
@endsection