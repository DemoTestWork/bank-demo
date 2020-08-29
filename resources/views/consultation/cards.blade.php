@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <h1 class="h2 text-left text-main pt-4 m-4">{{ __('test.cards') }}</h1>
</div>

<div class="container-fluide m-4 p-3">
    <div class="table-responsive-xl">

        <form class="form-inline my-2 my-lg-1 float-lg-right">
            <input class="form-control " type="search" placeholder="Search" aria-label="Search">
        </form>

        <table class="table table-over">
            <thead class="container">
                <tr>
                    <th scope="col">{{ __('test.wording') }}</th>
                    <th scope="col">{{ __('test.Card_number') }}</th>
                    <th scope="col">{{ __('test.subscription_date') }}</th>
                    <th scope="col">{{ __('test.expiration_date') }}</th>
                    <th scope="col">{{ __('test.card status') }}</th>
                </tr>
            </thead>
            <tbody>
                <div class="container-fluide m-2 p-2">
                    <tr>
                        <td>AISANCE</td>
                        <td>XXXXXXXXXXX45687</td>
                        <td>30.05.2004</td>
                        <td>31.05.2006</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 90%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>
                            <div class="container">
                                </span><i class="fa fa-cog" aria-hidden="true"></i><span>
                                    <br>
                            </div>
                        </td>
                    </tr>
                </div>
            </tbody>
        </table>
    </div>
</div>
@endsection
