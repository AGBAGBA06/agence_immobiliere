@extends('layout.appad')
@section('title')
Ajouter utilisateur
@endsection
@section('content')
      <div class="row grid-margin">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">ajouter utilisateur</h4>
              
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
               <div>
               {!!Form::open(['action'=>'App\Http\Controllers\PoductController@sauverproduit',
               'method'=>'POST','class'=>'cmxform','id'=>'commentForm','enctype'=>'multipart/form-data'])!!}
                 {{ csrf_field() }}

                  <div class="form-group">
                   {{Form::label('','desc1 du produit',['for'=>'cname'])}}
                   {{Form::text('desc1','',['class'=>'form-control','id'=>'cname'])}}
                  </div>

                  <div class="form-group">
                   {{Form::label('','desc2 du produit',['for'=>'cname'])}}
                   {{Form::text('desc2','',['class'=>'form-control','id'=>'cname'])}}
                  </div>

                  <div class="form-group">
                   {{Form::label('','info1 du produit',['for'=>'cname'])}}
                   {{Form::text('info1','',['class'=>'form-control','id'=>'cname'])}}
                  </div>

                  <div class="form-group">
                   {{Form::label('','info2 du produit',['for'=>'cname'])}}
                   {{Form::text('info2','',['class'=>'form-control','id'=>'cname'])}}
                  </div>

                  <div class="form-group">
                   {{Form::label('','info3 du produit',['for'=>'cname'])}}
                   {{Form::text('info3','',['class'=>'form-control','id'=>'cname'])}}
                  </div>
                  <div class="form-group">
                    {{Form::label('','prix du produit',['for'=>'cpredesc1'])}}
                    {{Form::text('prix','',['class'=>'form-control','id'=>'cpredesc1'])}}
                   </div>

                 
                  <div class="form-group">
                    {{Form::label('','image du produit',['for'=>'cname'])}}
                    {{Form::file('product_image',['class'=>'form-control','id'=>'cname'])}}
                   </div> 

                  {{Form::submit('ajouter',['class'=>'btn btn-primary'])}}
                  {!!Form::close()!!}
               
              </div>
            </div>
          </div>
        </div>
     
      </div>
@endsection

@section('script')
{{-- <script src="backend/js/form-validation.js"></script>
<script src="backend/js/bt-maxLength.js"></script> --}}
@endsection