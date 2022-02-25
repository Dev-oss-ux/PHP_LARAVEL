@extends('backEnd.layouts.master')
@section('title','Setting')
@section('content')
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Retourner à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#" class="current">Parametre</a> </div>
    </div>
    <!--End-breadcrumbs-->
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        @if(Session::has('message'))
                            <h5 class="text-danger" style="color: #0e90d2;">{{Session::get('message')}}</h5>
                        @else
                            <h5>validation de sécurité</h5>
                        @endif
                    </div>
                    <div class="widget-content nopadding">
                        <form class="form-horizontal" method="post" action="{{url('/admin/update-pwd')}}" name="password_validate" id="password_validate" novalidate="novalidate">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="control-group">
                                <label class="control-label">mot de passe actuel</label>
                                <div class="controls">
                                    <input type="password" name="pwd_current" id="pwd_current" />
                                    &nbsp;<span id="chkPwd"></span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Nouveau mot de passe</label>
                                <div class="controls">
                                    <input type="password" name="pwd_new" id="pwd_new" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Confirmer le mot de passe</label>
                                <div class="controls">
                                    <input type="password" name="pwdnew_confirm" id="pwdnew_confirm" />
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Mise à jour du Mot de passe " class="btn btn-success">
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jsblock')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ui.custom.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.uniform.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/matrix.js') }}"></script>
    <script src="{{ asset('js/matrix.form_validation.js') }}"></script>
    <script src="{{ asset('js/matrix.tables.js') }}"></script>
    <script src="{{ asset('js/matrix.popover.js') }}"></script>
@endsection
