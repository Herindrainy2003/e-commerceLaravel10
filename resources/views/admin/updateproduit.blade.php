@extends('admin.layout')
@section('title')
Modifier Produit
@endsection
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Forms</a></li>
                                    <li class="active">Basic</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">MODIFIER PRODUITS</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">PRODUITS</h3>
                                        </div>
                                        <hr>
                                        <form action="{{route('produits.update')}}" method="post"  enctype="multipart/form-data">
                                           @csrf
                                            
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Nom Produit</label>
                                                <input id="cc-name" name="nomProduit" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on products" value="{{$produits->nomProduit}}">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Prix Produit</label>
                                                <input id="cc-number" name="prixProduit" type="number" class="form-control cc-number identified visa" value="{{$produits->prixProduit}}" data-val="true" data-val-required="Please enter the price" data-val-cc-number="Please enter a valid card number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Categories</label>
                                                <input  name="categories" type="text"  value="">
                                                
                                            </div>
                                               
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Image</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="image" type="file" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                                       
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="/images/{{$produits->image}}" width="300px">
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                   
                                                    <span id="payment-button-amount">Modifier</span>

                                                   
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div><!--/.col-->


                    
                            </form>
                        </div>
            </div>


        </div><!-- .animated -->
    </div><!-- .content -->

    <div class="clearfix"></div>

    <footer class="site-footer">
        <div class="footer-inner bg-white">
            <div class="row">
                <div class="col-sm-6">
                    Copyright &copy; 2018 Ela Admin
                </div>
                <div class="col-sm-6 text-right">
                    Designed by <a href="https://colorlib.com">Colorlib</a>
                </div>
            </div>
        </div>
    </footer>

</div><!-- /#right-panel -->

<!-- Right Panel -->
@endsection()