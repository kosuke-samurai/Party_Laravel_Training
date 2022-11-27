@extends('layouts.admin')

@section('content')
    <section class="py-8">
        <div class="container px-4 mx-auto">
            <div class="py-4 bg-white rounded">
                <form action="{{ route('admin.users_topi.update', ['topi' => $topi->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="flex px-6 pb-4 border-b">
                        <h3 class="text-xl font-bold">ユーザー編集とユーザー特別トピ編集</h3>
                        <div class="ml-auto">
                            <button type="submit"
                                class="py-2 px-3 text-xs text-white font-semibold bg-indigo-500 rounded-md">更新</button>
                        </div>
                    </div>

                    <div class="pt-4 px-6">
                        <!-- ▼▼▼▼エラーメッセージ▼▼▼▼　-->
                        @if ($errors->any())
                            <div class="mb-8 py-4 px-6 border border-red-300 bg-red-50 rounded">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="text-red-400">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- ▲▲▲▲エラーメッセージ▲▲▲▲　-->
                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="name">氏名（※姓と名の間に半角ナシ※）</label>
                            <input id="name" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded"
                                type="text" name="name" value="{{ old('name', $topi->name) }}">
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="password">パスワード（※ハッシュ化済のため編集不可）</label>
                            <input id="password" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded"
                                type="text" name="password" value="{{ old('password', $topi->password) }}" readonly>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="title">15.5文字見出し</label>
                            <input id="title" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded"
                                type="text" name="title" value="{{ old('title', $topi->title) }}">
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="hl_image">HL画像（正方形）</label>
                            <div class="flex items-end">
                                <img id="previewhl_image" src="{{ asset('storage/' . $topi->hl_image) }}"
                                    data-noimage="{{ asset('storage/' . $topi->hl_image) }}" alt=""
                                    class="rounded shadow-md w-64">
                                <input id="hl_image" class="block w-full px-4 py-3 mb-2" type="file" accept='image/*'
                                    name="hl_image">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="main_image">HL画像（長方形）</label>
                            <div class="flex items-end">
                                <img id="previewmain_image" src="{{ asset('storage/' . $topi->main_image) }}"
                                    data-noimage="{{ asset('storage/' . $topi->main_image) }}" alt=""
                                    class="rounded shadow-md w-64">
                                <input id="main_image" class="block w-full px-4 py-3 mb-2" type="file" accept='image/*'
                                    name="main_image">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="body">HLリード文</label>
                            <textarea id="body" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" name="body"
                                rows="5">{{ old('body', $topi->body) }}</textarea>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="kokopoi_question">ココポイ「Q」</label>
                            <input id="kokopoi_question" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded"
                                type="text" name="kokopoi_question"
                                value="{{ old('kokopoi_question', $topi->kokopoi_question) }}">
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="kokopoi_answer">ココポイ「A」</label>
                            <textarea id="kokopoi_answer" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" name="kokopoi_answer"
                                rows="5">{{ old('kokopoi_answer', $topi->kokopoi_answer) }}</textarea>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="emb_img_title">画像エンべのタイトル</label>
                            <input id="emb_img_title" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded"
                                type="text" name="emb_img_title"
                                value="{{ old('emb_img_title', $topi->emb_img_title) }}">
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2" for="emb_img">エンべ画像</label>
                            <div class="flex items-end">
                                <img id="previewemb_img" src="{{ asset('storage/' . $topi->emb_img) }}"
                                    data-noimage="{{ asset('storage/' . $topi->emb_img) }}" alt=""
                                    class="rounded shadow-md w-64">
                                <input id="emb_img" class="block w-full px-4 py-3 mb-2" type="file"
                                    accept='image/*' name="emb_img">
                            </div>
                        </div>

                        <div class="mb-6">
                            <input id="administrators_id" class="block w-full px-4 py-3 mb-2" type="hidden"
                                accept='image/*' name="administrators_id"
                                value="{{ Auth::guard('administrators')->user()->id }}">
                        </div>

                    </div>


            </div>
            </form>
        </div>
        </div>
    </section>

    <script>
        // 画像プレビュー
        // 画像プレビュー
        document.getElementById('hl_image').addEventListener('change', e => {
            const previewImageNode = document.getElementById('previewhl_image')
            const fileReader = new FileReader()
            fileReader.onload = () => previewImageNode.src = fileReader.result
            if (e.target.files.length > 0) {
                fileReader.readAsDataURL(e.target.files[0])
            } else {
                previewImageNode.src = previewImageNode.dataset.noimage
            }
        })

        document.getElementById('main_image').addEventListener('change', e => {
            const previewImageNode = document.getElementById('previewmain_image')
            const fileReader = new FileReader()
            fileReader.onload = () => previewImageNode.src = fileReader.result
            if (e.target.files.length > 0) {
                fileReader.readAsDataURL(e.target.files[0])
            } else {
                previewImageNode.src = previewImageNode.dataset.noimage
            }
        })

        document.getElementById('emb_img').addEventListener('change', e => {
            const previewImageNode = document.getElementById('previewemb_img')
            const fileReader = new FileReader()
            fileReader.onload = () => previewImageNode.src = fileReader.result
            if (e.target.files.length > 0) {
                fileReader.readAsDataURL(e.target.files[0])
            } else {
                previewImageNode.src = previewImageNode.dataset.noimage
            }
        })
    </script>
@endsection
