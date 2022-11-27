@extends('layouts.default')

@section('title', '記事ページ')

@section('content')

    <main id="article_main" class="article_main">

        <article class="article_detail">
            <div>
                <img src="{{ asset('storage/' . \Auth::user()->main_image) }}" alt="" class="article_detail_img">
            </div>

            <div class="">
                <h1 class="article_title">{{ \Auth::user()->title }}</h1>
                <p class="topi_time">11/17（金）17:29</p>
            </div>

        </article>

        <div class="article_lead">
            <p class="article_detail_text">
                {{ \Auth::user()->body }}
            </p>

        </div>

        <div>

            <div class="kokopoi">
                <img src="/img/ring.jpg" alt="">
            </div>

            <div>
                <dl class="kokopoi_detail">
                    <dt>Q.{{ \Auth::user()->kokopoi_question }}</dt>
                    <dd class="kokopoi_detail_qa">
                        <div class="kokopoi_detail_question">A.</div>
                        <div class="kokopoi_detail_answer">
                            {{ \Auth::user()->kokopoi_answer }}
                        </div>
                    </dd>
                </dl>


                <dl class="kokopoi_detail">
                    <dt> {{ \Auth::user()->emb_img_title }}</dt>
                    <dd class="img_center">
                        <img src="{{ asset('storage/' . \Auth::user()->emb_img) }}" alt=""
                            class="kokopoi_detail_photo">
                    </dd>
                </dl>


            </div>

        </div>


    </main>

@endsection
