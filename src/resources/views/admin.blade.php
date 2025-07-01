@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('header')
<form class="form" action="/logout" method="post">
    @csrf
<button class="header-nav__button">logout</button>
</form>
@endsection

@section('content')
<div class="content">
    <div class="admin__heading">Admin</div>
    <form class="form">
        <div class="form__search">
            <div class="form__search--name">
                <input type="text" name="input" value="" placeholder="名前やメールアドレスを入力してください">
            </div>
            <div>
                <select class="form__search--gender" name="gender">
                    <option value="" selected disabled>性別</option>
                    <option value="">全て</option>
                    <option value="">男性</option>
                    <option value="">女性</option>
                    <option value="">その他</option>
                </select>
            </div>
            <div>
                <select class="form__search--kinds" name="content">
                    <option value="" selected disabled>お問い合わせの種類</option>
                    <option value="">サンプルテキスト</option>
                    <option value="">サンプルテキスト</option>
                    <option value="">サンプルテキスト</option>
                    <option value="">サンプルテキスト</option>
                    <option value="">サンプルテキスト</option>
                    <option value="">サンプルテキスト</option>
                </select>
            </div>
            <div class="form__search--date">
                <input type="date" name="birthday">
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">検索</button>
            </div>
            <div class="form__button--reset">
                <a class="form__button--reset-button" href="/admin">リセット</a>
            </div>
        </div>
    </form>

    <br>
    <br>
    <br>

    <table class="content__admin--inner">
        <tr class="content__admin--row">
            <th class="content__admin--header">お名前</th>
            <th class="content__admin--header">性別</th>
            <th class="content__admin--header">メールアドレス</th>
            <th class="content__admin--header">お問い合わせの種類</th>
            <th class="content__admin--header"></th>
        </tr>
        <tr class="content__admin--row">
            @foreach($contacts as $contact)
            <td class="content__admin--text">{{ $contact('</td>
            <td class="content__admin--text">サンプルテキスト</td>
            <td class="content__admin--text">サンプルテキスト</td>
            <td class="content__admin--text">サンプルテキスト</td>
            <td class="content__admin--text">

            <!-- モーダルを開くボタン -->
                <button class="modal-open js-modal-open">詳細</button>

                <!-- モーダル本体 -->
                <div class="modal js-modal">
                <div class="modal-container">
                    <!-- モーダルを閉じるボタン -->
                    <div class="modal-close js-modal-close">×</div>
                    <!-- モーダル内部のコンテンツ -->
                    <div class="modal-content">
                        <table class="modal-content_inner">
                            <tr class="modal-content_row">
                                <th class="modal-content_header">お名前</th>
                                <td class="modal-content_text">サンプルテキスト</td>
                            </tr>
                            <tr class="modal-content_row">
                                <th class="modal-content_header">性別</th>
                                <td class="modal-content_text">サンプルテキスト</td>
                            </tr>
                            <tr class="modal-content_row">
                                <th class="modal-content_header">メールアドレス</th>
                                <td class="modal-content_text">サンプルテキスト</td>
                            </tr>
                            <tr class="modal-content_row">
                                <th class="modal-content_header">電話番号</th>
                                <td class="modal-content_text">サンプルテキスト</td>
                            </tr>
                            <tr class="modal-content_row">
                                <th class="modal-content_header">住所</th>
                                <td class="modal-content_text">サンプルテキスト</td>
                            </tr>
                            <tr class="modal-content_row">
                                <th class="modal-content_header">建物名</th>
                                <td class="modal-content_text">サンプルテキスト</td>
                            </tr>
                            <tr class="modal-content_row">
                                <th class="modal-content_header">お問い合わせの種類</th>
                                <td class="modal-content_text">サンプルテキスト</td>
                            </tr>
                            <tr class="modal-content_row">
                                <th class="modal-content_header">お問い合わせ内容</th>
                                <td class="modal-content_text">サンプルテキストsample text 例例例例例例えば君がいるだけで心が強くなれること</td>
                            </tr>
                        </table>
                        <form class="form" action="">
                            <div class="form-delete">
                                <button class="form-delete_button">削除</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>

            </td>
        </tr>
        <tr class="content__admin--row">
            <td class="content__admin--text">サンプルテキスト</td>
            <td class="content__admin--text">サンプルテキスト</td>
            <td class="content__admin--text">サンプルテキスト</td>
            <td class="content__admin--text">サンプルテキスト</td>
            <td class="content__admin--text">

            <!-- モーダルを開くボタン -->
                <button class="modal-open js-modal-open">詳細</button>
                <div class="modal js-modal">
                <div class="modal-container">
                    <!-- モーダルを閉じるボタン -->
                    <div class="modal-close js-modal-close">×</div>
                    <!-- モーダル内部のコンテンツ -->
                    <div class="modal-content">
                    <p>開きました。</p>
                    </div>
                </div>
                </div>
            </td>
        </tr>
        
    </table>
</div>
<script src="{{ asset('/js/modal.js') }}"></script>
@endsection