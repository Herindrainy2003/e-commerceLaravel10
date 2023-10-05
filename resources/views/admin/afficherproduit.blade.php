@extends('admin.layout')
@section('title')
Afficher produit
@endsection
@section('content')

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
                            <li><a href="#">Table</a></li>
                            <li class="active">Basic table</li>
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
                <!-- <div class="card">
                    <div class="card-header"> -->
                        <strong class="card-title">LES PRODUITS</strong>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th class="avatar">Image</th>
                                    
                                    <th>Nom</th>
                                    <th>Categories</th>
                                    <th>Prix</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="serial">1.</td>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>
                                        </div>
                                    </td>
                                    <td> rash </td>
                                    <td>  <span class="name">Louis Stanley</span> </td>
                                    <td> <span class="product">iMax</span> </td>
                                   
                                    <td>
                                        <span class="badge badge-complete">Complete</span>
                                    </td>
                                    <td>
                                     <form action="{{route('produits.edit',
                                     $Produit->id)}}" method="post">

                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-outline-primary">Modifier</button>
                                    </form>
                                    <form action="{{route('produits.edit',$produit->id)}}" method="post">
                                        <button class="btn btn-outline-danger">Supprimer</button>
                                     </form> 
                                </td>
                                </tr>
                                <tr>
                                    <td class="serial">2.</td>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="images/avatar/2.jpg" alt=""></a>
                                        </div>
                                    </td>
                                    <td> #5468 </td>
                                    <td>  <span class="name">Gregory Dixon</span> </td>
                                    <td> <span class="product">iPad</span> </td>
                                   
                                    <td>
                                        <span class="badge badge-complete">Complete</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary">Modifier</button>
                                        <button class="btn btn-outline-danger">Supprimer</button>
                                     </td>
                                </tr>
                                <tr>
                                    <td class="serial">3.</td>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="images/avatar/3.jpg" alt=""></a>
                                        </div>
                                    </td>
                                    <td> #5467 </td>
                                    <td>  <span class="name">Catherine Dixon</span> </td>
                                    <td> <span class="product">SSD</span> </td>
                                  
                                    <td>
                                        <span class="badge badge-complete">Complete</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary">Modifier</button>
                                        <button class="btn btn-outline-danger">Supprimer</button>
                                     </td>
                                </tr>
                                <tr>
                                    <td class="serial">4.</td>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="images/avatar/4.jpg" alt=""></a>
                                        </div>
                                    </td>
                                    <td> #5466 </td>
                                    <td>  <span class="name">Mary Silva</span> </td>
                                    <td> <span class="product">Magic Mouse</span> </td>
                                  
                                    <td>
                                        <span class="badge badge-pending">Pending</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary">Modifier</button>
                                        <button class="btn btn-outline-danger">Supprimer</button>
                                     </td>
                                </tr>
                            </tbody>
                        </table>
                   
            </div>
            
        </div>
    </div>
</div>
</div><!-- .animated -->
</div><!-- .content -->



</div><!-- /#right-panel -->

<!-- Right Panel -->
@endsection()
