@extends('backEnd.layouts.master')
@section('title','List Categories')
@section('content')
    <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('category.index')}}" class="current">Categories</a></div>
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong></strong> {{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>Liste Categories</h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                    <tr>
                        <th> Nom categorie</th>
                        <th>Catégorie parent</th>
                        <th>Créer</th>
                        <th>Etat</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <?php
                                $parent_cates = DB::table('categories')->select('name')->where('id',$category->parent_id)->get();
                            ?>
                            <tr class="gradeC">
                                <td>{{$category->name}}</td>
                                <td>
                                    @foreach($parent_cates as $parent_cate)
                                        {{$parent_cate->name}}
                                    @endforeach
                                </td>
                                <td style="text-align: center;">{{$category->created_at->diffForHumans()}}</td>
                                <td style="text-align: center;">{{($category->status==0)?' Disabled':'Activer'}}</td>
                                <td style="text-align: center;">
                                    <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary btn-mini">Modifier</a>
                                    <a href="javascript:" rel="{{$category->id}}" rel1="delete-category" class="btn btn-danger btn-mini deleteRecord">Supprimer</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('jsblock')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.tables.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>
    $(".deleteRecord").click(function () {
       var id=$(this).attr('rel');
       var deleteFunction=$(this).attr('rel1');
       swal({
           title:'Êtes-vous sûr(e)?',
           text:"Vous pourrez pas retourner en arrière!",
           type:'warning',
           showCancelButton:true,
           confirmButtonColor:'#f50f16',
           cancelButtonColor:'#d33',
           confirmButtonText:'Oui, supprimé!',
           cancelButtonText:'Non, Annulé!',
           confirmButtonClass:'btn btn-success',
           cancelButtonClass:'btn btn-danger',
           buttonsStyling:false,
           reverseButtons:true
       },function () {
          window.location.href="/admin/"+deleteFunction+"/"+id;
       });
    });
  </script>
@endsection
