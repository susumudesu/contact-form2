@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">
      <div class="confirm__heading">Confirm</div>
      <form class="form" action="/thanks" method="post">
        @csrf
        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
                <div class="confirm-table__text-name">
                  <div><input type="text" name="first_name" value="{{ $contacts['first_name'] }}" readonly/></div>
                  <div><input type="text" name="last_name" value="{{ $contacts['last_name'] }}" readonly/></div>
                </div>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">性別</th>
              <td class="confirm-table__text">
                <input type="hidden" name="gender" value="{{ $contacts['gender'] }}" readonly/>
                @if ($contacts['gender'] == '1')
                  <span class="confirm-table__text-input">男性</span>
                @elseif ($contacts['gender'] == '2')
                  <span class="confirm-table__text-input">女性</span>
                @elseif ($contacts['gender'] == '3')
                  <span class="confirm-table__text-input">その他</span>
                @endif
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__text">
                <input type="email" name="email" value="{{ $contacts['email'] }}" readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">電話番号</th>
              <td class="confirm-table__text">
                <input type="tel" name="tel" value="{{ $tel }}" readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">住所</th>
              <td class="confirm-table__text">
                <input type="text" name="address" value="{{ $contacts['address'] }}" readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">建物名</th>
              <td class="confirm-table__text">
                <input type="text" name="building" value="{{ $contacts['building'] }}" readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせの種類</th>
              <td class="confirm-table__text">
                <input type="hidden" name="category_id" value="{{ $contacts['category_id'] }}" readonly/>
                @if ($contacts['category_id'] == '1')
                  <span class="confirm-table__text-input">商品のお届けについて</span>
                @elseif ($contacts['category_id'] == '2')
                  <span class="confirm-table__text-input">商品の交換について</span>
                @elseif ($contacts['category_id'] == '3')
                  <span class="confirm-table__text-input">商品トラブル</span>
                @elseif ($contacts['category_id'] == '4')
                  <span class="confirm-table__text-input">ショップへのお問い合わせ</span>
                @elseif ($contacts['category_id'] == '5')
                  <span class="confirm-table__text-input">その他</span>
                @endif
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせ内容</th>
              <td class="confirm-table__text">
                <input type="text" name="detail" value="{{ $contacts['detail'] }}" readonly/>
              </td>
            </tr>
          </table>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
          <a class="form__button-fix" href="/">修正</a>
        </div>
      </form>
    </div>
@endsection