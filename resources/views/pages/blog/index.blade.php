{{--
    Chemin :/resources/views/pages/Blog.blade.php
    Description: Affiche le contenu du blog
    Données disponible: $news[ $new[id, titre, content, created_at, updated_at]]
--}}

@extends('templates.master')

@section('title')
Blog
@stop
@section('content')
<div class="cercle">
    <div class="cercle-blog-2"></div>
</div>
<div class="container">
    <div class="row">
        <div class=" col-12  my-5 fw-bold font-sketchflow text-uppercase h1 animate__animated animate__fadeInDown ">
            mon blog
        </div>
        @foreach ($news as $new)
          @if($i==0)
          <?php $i++ ?>
        <div class="offset-md-1 col-md-10">
            <div class="card shadow-lg my-2">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <img src=" {{ asset($new->image) }}" class="card-img w-100" alt="image news">
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card-body h-100">
                            <div class="card-title fw-bold h1 text-capitalize">{!! $new->titre!!}</div>
                            <div class="my-1 colorBlue">Date de publication : <span
                                    class="fw-bold colorDark">{{\Carbon\Carbon::parse($new->created_at)->format('d-m-Y') }}</span>
                            </div>
                            <div class="card-text">{!! Str::words($new->content,30) !!}...</div>
                            <a type="button"
                                href="{{ URL::route('blog.show',['id'=>$new->id,'slug'=>Str::slug($new->titre, '-')]) }}"
                                class="btn btn-outline-ColorPrivBlue text-uppercase fw-bold text-bottom mt-3">lire
                                suite
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         @elseif($i==1)
         <?php $i++?>
        <div class="offset-md-1 col-md-10">
            <div class="card shadow-lg my-2">
                <div class="row">
                    <div class="col-12 col-lg-4 order-2 order-lg-1">
                        <div class="card-body h-100">
                            <div class="card-title fw-bold h1 text-capitalize">{{ $new->titre }}</div>
                            <div class="my-1 colorBlue">Date de publication : <span
                                    class="fw-bold colorDark">{{\Carbon\Carbon::parse($new->created_at)->format('d-m-Y') }}</span>
                            </div>
                             <div class="card-text">{!! Str::words($new->content,30) !!}...</div>
                            <a type="button"
                                href="{{ URL::route('blog.show',['id'=>$new->id,'slug'=>Str::slug($new->titre, '-')]) }}"
                                class="btn btn-outline-ColorPrivBlue text-uppercase fw-bold text-bottom mt-3">lire
                                suite
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 order-1 order-lg-2">
                       <img src=" {{ asset($new->image) }}" class="card-img w-100" alt="image news">
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="offset-md-1 col-md-10">
            <div class="card shadow-lg my-2">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <img src=" {{ asset($new->image) }}" class="card-img w-100" alt="image news">
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card-body h-100">
                            <div class="card-title fw-bold h1 text-capitalize">{{ $new->titre }}</div>
                            <div class="my-1 colorBlue">Date de publication : <span
                                    class="fw-bold colorDark">{{\Carbon\Carbon::parse($new->created_at)->format('d-m-Y') }}</span>
                            </div>
                            <div class="card-text">{!! Str::words($new->content,30) !!}...</div>
                            <a type="button"
                                href="{{ URL::route('blog.show',['id'=>$new->id,'slug'=>Str::slug($new->titre, '-')]) }}"
                                class="btn btn-outline-ColorPrivBlue text-uppercase fw-bold text-bottom mt-3">lire
                                suite</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
<div class="my-6"></div>
@stop
