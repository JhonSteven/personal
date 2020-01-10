@extends('layouts.master')
@section('title','Herramienta SEO gratis para etiquetas - Parratags')
@section('content')
<div id="parratags">
    <div class="bg-gris py-4">
        <div class="seotags">
            <div class="container">
                <div class="content py-2">
                    <h2 class="text-center title-h2 mt-0 bold">PARRATAGS</h2>
                    <h1 class="text-center text-h1">Herramienta SEO gratis para análisis de etiquetas en los SERP's de Google, según el término de búsqueda.</h1>
                    <form method="post" action="/" v-on:submit.prevent="getURLs">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-12 col-md-8 col-lg-6 pb-2">
                                <input name="termino" autocomplete="off" type="text" v-bind:disabled="loading" v-model="search.termino" class="form-control" id="busqueda" placeholder="Ingrese su búsqueda">
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 pb-2">
                                <div class="form-group mb-0">
                                    <select class="form-control" name="country" id="selectCountry" v-bind:disabled="loading" v-model="search.country">
                                        @foreach ($paises as $key => $pais)
                                        <option value="{{$key}}" id="select-{{$key}}">{{$pais}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <button type="submit" v-bind:disabled="loading" class="btn btn-success btn-block">
                                    <span v-if="!loading">Buscar en SERP'S</span>
                                    <span v-if="loading" class="d-none-partial"><i class="fa fa-spin fa-spinner"></i> Un momento por favor...</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- <div class="text-center d-none-partial"> --}}
        <div class="text-center d-none-partial" v-if="loading">
            <div>
                <span v-if="urls.length>0"> Obteniendo etiquetas en @{{urls[progress.actual-1]}}...</span>
                <span v-if="urls.length==0"> Obteniendo SERP's...</span>
            </div>
        </div>
        <div class="text-center  d-none-partial" v-if="(pauseExecution || loading) && urls.length>0">
            <a v-on:click="pause" class="pointer text-primary icon-play" v-if="!pauseExecution && loading"><i class="text-primary fa fa-pause-circle"></i></a>
            <a v-on:click="play" class="pointer text-success icon-play" v-if="pauseExecution && !loading"><i class="text-success fa fa-play-circle"></i></a>
            <a v-on:click="stop" class="pointer text-warning icon-play ml-3"><i class="text-warning fa fa-stop-circle"></i></a>
            <a v-on:click="cancel" class="pointer text-danger icon-play ml-3"><i class="text-danger fa fa-times-circle"></i></a>
        </div>
    </div>
    <div class="progress d-none-partial" v-if="barProgress<100">
        <div class="progress-bar" v-bind:class="{'progress-bar-animated progress-bar-striped':progress.actual<progress.total && !pauseExecution}" role="progressbar" v-bind:aria-valuenow="barProgress" aria-valuemin="0" aria-valuemax="progress.total" v-bind:style="'width:'+barProgress+'%'">
            <span v-if="barProgress">@{{barProgress}}%</span>
        </div>
    </div>
    <resultados class="d-none-partial" v-bind:resultados="resultados" v-on:cancel="cancel" v-bind:loading="loading" v-bind:urls="urls"></resultados>
</div>
@endsection
@section('scripts')
    <script src="{{URL::asset('js/seotags.js')}}"></script>
    <style>
        .d-none-partial{
            display: inherit;
        }
    </style>
@endsection
