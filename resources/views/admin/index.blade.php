@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
    <h1>Личный кабинет: {{ Auth::user()->name }}</h1>
                <div class="bg-gray text-white w-75 mt-5 p-3 border-radius-15">
                    <ul class="list-unstyled">
                        <li><img class="m-2" src="img/codicon_account.png">Личные данные</li>
                        <li><img class="m-2" src="img/akar-icons_search.png">Рассмотрение мероприятий</li>
                        <li><img class="m-2" src="img/akar-icons_search.png">Рассмотрение анкет пользователей</li>
                        <li><img class="m-2" src="img/akar-icons_search.png">Рассмотрение спонсорских программ</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-7 mt-5">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur aut autem consectetur eius error esse ex fugiat illo illum, ipsam nam necessitatibus nulla perferendis porro possimus, quo soluta voluptas.
            </div>
        </div>
    </div>
@endsection
