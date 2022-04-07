@extends("dashboard.template")
@section("content")

    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Dashboard - Utilisateurs Gestion</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal"></a></li>
                    </ol>
                    <div class="dropdown">
                        <button class="btn btn-primary d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Créer Utilisateur
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><button class="dropdown-item" data-toggle="modal" data-target="#create-user">Créer Utilisateur</button></li>
                            <li><button class="dropdown-item" data-toggle="modal" data-target="#import-user">Importer Utilisateurs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Utilisateurs Total</h3>
                    <ul class="list-inline two-part d-flex align-items-center mb-0">
                        <li>
                            <div id="sparklinedash">
                                <canvas
                                    width="67"
                                    height="30"
                                    style="
                          display: inline-block;
                          width: 67px;
                          height: 30px;
                          vertical-align: top;
                        "
                                ></canvas>
                            </div>
                        </li>
                        <li class="ms-auto">
                            <span class="counter text-success">{{$countAllUsers}}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Elèves</h3>
                    <ul class="list-inline two-part d-flex align-items-center mb-0">
                        <li>
                            <div id="sparklinedash2">
                                <canvas
                                    width="67"
                                    height="30"
                                    style="
                                      display: inline-block;
                                      width: 67px;
                                      height: 30px;
                                      vertical-align: top;
                                    "
                                ></canvas>
                            </div>
                        </li>
                        <li class="ms-auto">
                            <span class="counter text-purple">{{ $eleves->count() }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Utilisateurs Standart</h3>
                    <ul class="list-inline two-part d-flex align-items-center mb-0">
                        <li>
                            <div id="sparklinedash3">
                                <canvas
                                    width="67"
                                    height="30"
                                    style="
                                      display: inline-block;
                                      width: 67px;
                                      height: 30px;
                                      vertical-align: top;
                                    ">
                                </canvas>
                            </div>
                        </li>
                        <li class="ms-auto">
                            <span class="counter text-info">{{ $users->count() }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        @if(Auth::user()->estAdmin())
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="white-box">
                        <div class="d-md-flex mb-3" data-bs-toggle="collapse" data-bs-target="#admin_user_card">
                            <h3 class="box-title mb-0">Administrateurs</h3>
                        </div>
                        <div class="collapse show" id="admin_user_card">
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                    <tr>
                                        <th class="border-top-0">Nom</th>
                                        <th class="border-top-0">Prénom</th>
                                        <th class="border-top-0">Email</th>
                                        <th class="border-top-0">Modifier</th>
                                        <th class="border-top-0">Supprimer</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($admins as $admin)
                                        <tr>
                                            <td>{{ $admin->nom }}</td>
                                            <td>{{ $admin->prenom }}</td>
                                            <td>{{ $admin->email }}</td>
                                            <td>
                                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                                        data-target="#update-admin-{{$admin->id}}">Modifier
                                                </button>
                                            </td>
                                            <td>
                                                <form action="{{route("user-delete", $admin->id)}}" method="post">
                                                    @method("delete")
                                                    @csrf
                                                    <input type="submit" class="btn btn-danger" value="Supprimer">
                                                </form>
                                            </td>
                                        </tr>

                                        <!-- Uodate Admin -->
                                        <div class="modal fade" id="update-admin-{{$admin->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modifier
                                                            Utilisateur</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="post" action="{{ route("user-update-admin") }}">
                                                        @method("patch")
                                                        @csrf
                                                        <div class="modal-body">
                                                            <input type="hidden" name="admin" value="{{$admin->id}}">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <label for="exampleFormControlInput1">Nom</label>
                                                                        <input type="text" class="form-control" name="nom" value="{{$admin->nom}}">
                                                                    </div>
                                                                    <div class="col">
                                                                        <label for="exampleFormControlInput1">Prénom</label>
                                                                        <input type="text" class="form-control" name="prenom" value="{{$admin->prenom}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Email</label>
                                                                <input type="email" class="form-control" name="email" value="{{$admin->email}}">
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
        @endif

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <div class="d-md-flex mb-3" data-bs-toggle="collapse" data-bs-target="#eleves_user_card">
                        <h3 class="box-title mb-0">Élèves</h3>
                    </div>
                    <div class="collapse show" id="eleves_user_card">
                        <div class="table-responsive">
                            <table class="table no-wrap">
                                <thead>
                                <tr>
                                    <th class="border-top-0">Nom</th>
                                    <th class="border-top-0">Prénom</th>
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">Classe</th>
                                    <th class="border-top-0">Modifier</th>
                                    <th class="border-top-0">Supprimer</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($eleves as $eleve)
                                    <tr>
                                        <td>{{ $eleve->nom }}</td>
                                        <td>{{ $eleve->prenom }}</td>
                                        <td>{{ $eleve->email }}</td>
                                        <td>{{ $eleve->classe->nom }}</td>
                                        <td>
                                            <button type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#update-eleve-{{$eleve->id}}">Modifier
                                            </button>
                                        </td>
                                        <td>
                                            <form action="{{route("user-delete", $eleve->id)}}" method="post">
                                                @method("delete")
                                                @csrf
                                                <input type="submit" class="btn btn-danger" value="Supprimer">
                                            </form>
                                        </td>
                                    </tr>

                                    <!-- Uodate Eleves -->
                                    <div class="modal fade" id="update-eleve-{{$eleve->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modifier Utilisateur</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="post" action="{{ route("user-update-eleve") }}">
                                                    @method("patch")
                                                    @csrf
                                                    <div class="modal-body">
                                                        <input type="hidden" name="eleve" value="{{$eleve->id}}">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label>Nom</label>
                                                                    <input type="text" class="form-control" name="nom" value="{{$eleve->nom}}">
                                                                </div>
                                                                <div class="col">
                                                                    <label>Prénom</label>
                                                                    <input type="text" class="form-control" name="prenom" value="{{$eleve->prenom}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control" name="email" value="{{$eleve->email}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Classe</label>
                                                            <select class="form-control" name="classe">
                                                                @foreach($classes as $classe)
                                                                    @if($classe->id == $eleve->classe->id)
                                                                        <option value="{{$classe->id}}"
                                                                                selected>{{ $classe->nom }}</option>
                                                                    @else
                                                                        <option
                                                                            value="{{$classe->id}}">{{ $classe->nom }}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                                                style="color: #fff">Close
                                                        </button>
                                                        <button type="submit" class="btn btn-warning">Sauvegarder</button>
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

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <div class="d-md-flex mb-3" data-bs-toggle="collapse" data-bs-target="#standart_user_card">
                        <h3 class="box-title mb-0">Utilisateurs standard</h3>
                    </div>
                    <div class="collapse show" id="standart_user_card">
                        <div class="table-responsive">
                            <table class="table no-wrap">
                                <thead>
                                <tr>
                                    <th class="border-top-0">Nom</th>
                                    <th class="border-top-0">Prénom</th>
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">Modifier</th>
                                    <th class="border-top-0">Supprimer</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->nom }}</td>
                                        <td>{{ $user->prenom }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <button type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#update-user-{{$user->id}}">Modifier
                                            </button>
                                        </td>
                                        <td>
                                            <form action="{{route("user-delete", $user->id)}}" method="post">
                                                @method("delete")
                                                @csrf
                                                <input type="submit" class="btn btn-danger" value="Supprimer">
                                            </form>
                                        </td>
                                    </tr>

                                    <!-- Uodate User -->
                                    <div class="modal fade" id="update-user-{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modifier Utilisateur</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="post" action="{{ route("user-update-admin") }}">
                                                    @method("patch")
                                                    @csrf
                                                    <div class="modal-body">
                                                        <input type="hidden" name="admin" value="{{$user->id}}">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label>Nom</label>
                                                                    <input type="text" class="form-control" name="nom" value="{{$user->nom}}">
                                                                </div>
                                                                <div class="col">
                                                                    <label>Prénom</label>
                                                                    <input type="text" class="form-control" name="prenom" value="{{$user->prenom}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control" name="email" value="{{$user->email}}">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                                                style="color: #fff">Close
                                                        </button>
                                                        <button type="submit" class="btn btn-warning">Sauvegarder</button>
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
    </div>

    <!-- Create User -->
    <div class="modal fade" id="create-user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Créer Utilisateur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{ route("user-create") }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Type Utilisateur</label>
                            <select class="form-control" id="selectTypeUserForCreate" name="type" onchange="showClasseForm()">
                                @if(Auth::user()->estAdmin())
                                    <option value="1">Admin</option>
                                @endif
                                <option value="2">Elève</option>
                                <option value="3">Utilisateur Classique</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Nom</label>
                                    <input type="text" class="form-control" name="nom">
                                </div>
                                <div class="col">
                                    <label>Prénom</label>
                                    <input type="text" class="form-control" name="prenom">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group" id="groupAddClasse" hidden>
                            <label>Classe</label>
                            <select class="form-control" name="classe">
                                @foreach($classes as $classe)
                                        <option value="{{$classe->id}}">{{ $classe->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="generatePasswordBool" id="generateBoolPassword" value="0">
                            <div class="row" id="passwordForm">
                                <div class="col">
                                    <label>Mot de passe</label>
                                    <input type="password" class="form-control" name="password_one">
                                </div>
                                <div class="col">
                                    <label>Confirmation Mot de passe</label>
                                    <input type="password" class="form-control" name="password_confirm">
                                </div>
                            </div>
                            <p id="passwordGenerateMessage" hidden>
                                Le mot de passe sera automatiquement généré et envoyer à l'utilisateur par mail.
                            </p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color: #fff">Close
                        </button>
                        <button type="button" class="btn btn-warning" onclick="ShowPasswordGenerate()">Générer Mot de passe</button>
                        <button type="submit" class="btn btn-primary">Créer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Import Users -->
    <div class="modal fade" id="import-user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Importer des utilisateurs</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{ route("import-users-file") }}" enctype="multipart/form-data" accept-charset="UTF-8">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="AddFileUserCsvForm">Fichier csv</label>
                            <input type="file" class="form-control-file" id="import-file-user-id"
                                   accept=".csv, .xlsx, .xlsx" name="import-file-user">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" style="color: #fff" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
