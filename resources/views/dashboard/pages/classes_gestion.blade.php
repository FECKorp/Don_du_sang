@extends("dashboard.template")
@section("content")
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Dashboard - Classes Gestion</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal"></a></li>
                    </ol>
                    <button
                        class="btn btn-primary d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white"
                        type="button" data-toggle="modal" data-target="#create-classe">
                        Créer une Classe
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex mb-3" data-bs-toggle="collapse" data-bs-target="#admin_user_card">
                    <h3 class="box-title mb-0">Classes</h3>
                </div>
                <div class="collapse show" id="admin_user_card">
                    <div class="table-responsive">
                        <table class="table no-wrap">
                            <thead>
                            <tr>
                                <th class="border-top-0">Nom</th>
                                <th class="border-top-0">Modifier</th>
                                <th class="border-top-0">Supprimer</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($classes as $classe)
                                <tr>
                                    <td>{{ $classe->nom }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-toggle="modal"
                                                data-target="#update-classe-{{$classe->id}}">Modifier
                                        </button>
                                    </td>
                                    <td>
                                        <form action="{{route("classe-delete", $classe->id)}}" method="post">
                                            @method("delete")
                                            @csrf
                                            <input type="submit" class="btn btn-danger" value="Supprimer">
                                        </form>
                                    </td>
                                </tr>

                                <!-- Uodate Classe -->
                                <div class="modal fade" id="update-classe-{{$classe->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modifier
                                                    Classe</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="post" action="{{ route("classe-update") }}">
                                                @method("patch")
                                                @csrf
                                                <div class="modal-body">
                                                    <input type="hidden" name="id" value="{{$classe->id}}">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1">Nom</label>
                                                        <input type="text" class="form-control" name="nom" value="{{$classe->nom}}">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal" style="color: #fff">Close
                                                    </button>
                                                    <button type="submit" class="btn btn-warning">Sauvegarder
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Classe -->
    <div class="modal fade" id="create-classe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Créer Classe</h5>
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{ route("classe-create") }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nom</label>
                            <input type="text" class="form-control" name="nom" value="{{old("nom")}}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-dismiss="modal" style="color: #fff">Close
                        </button>
                        <button type="submit" class="btn btn-warning">Sauvegarder
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
