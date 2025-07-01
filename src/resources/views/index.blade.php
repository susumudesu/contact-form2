@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="login-form__content">
  <div class="login-form__heading">Content</div>
  <form class="form" action="/confirm" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前<span class="red">※</span></span>
      </div>
      <div class="form__group-content">
        <span class="form__input--text">
          <input type="text" name="first_name" placeholder="例:山田" value="{{ old('first_name') }}" />
        </span>
        <span class="form__input--text2">
          <input type="text" name="last_name" placeholder="例:太郎" value="{{ old('last_name') }}" />
        </span>
        <div class="form__error">
          @error('first_name')
          {{ $message }}
          @enderror
        </div>
        <div class="form__error">
          @error('last_name')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">性別<span class="red">※</span></span>
      </div>
      <div class="form__group-content">
        <div class="form__input--radio">
          <input type="radio" name="gender" id="man" value="1" />
          <label class="radio-label" for="man">男性</label>
          <input type="radio" name="gender" id="woman" value="2" />
          <label class="radio-label" for="woman">女性</label>
          <input type="radio" name="gender" id="others" value="3" />
          <label class="radio-label" for="others">その他</label>
        </div>
        <div class="form__error">
          @error('gender')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス<span class="red">※</span></span>
      </div>
      <div class="form__group-content">
        <div class="form__input--email">
          <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">電話番号<span class="red">※</span></span>
      </div>
      <div class="form__group-content">
        <span class="form__input--tel">
          <input type="tel" placeholder="080" name="tel1" value="{{ old('tel1') }}" /><span class="hyphen">-</span>
        </span>
        <span class="form__input--tel">
          <input type="tel" placeholder="1234" name="tel2" value="{{ old('tel2') }}" /><span class="hyphen">-</span>
        </span>
        <span class="form__input--tel">
          <input type="tel" placeholder="5678" name="tel3" value="{{ old('tel3') }}" />
        </span>
        <div class="form__error">
          @error('tel1')
          {{ $message }}
          @enderror
        </div>
        <div class="form__error">
          @error('tel2')
          {{ $message }}
          @enderror
        </div>
        <div class="form__error">
          @error('tel3')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">住所<span class="red">※</span></span>
      </div>
      <div class="form__group-content">
        <div class="form__input--address">
          <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
        </div>
        <div class="form__error">
          @error('address')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">建物名</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--building">
          <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}" />
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
       <label class="form__group-title" for="kinds-select">お問い合わせの種類<span class="red">※</span></label>
      </div>
      <div class="form__group-content">
        <select class="content__select" name="category_id" required>
          <option value="">選択してください</option>
            @foreach ($categories as $category)
            <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
            @endforeach
        </select>
        <div class="form__error">
          @error('content')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <label for="text">お問い合わせ内容<span class="red">※</span></label>
      </div>
      <div class="form__group-content">
        <div class="form__input--detail">
          <textarea name="detail" id="text" cols="30" rows="10" placeholder="お問い合わせ内容をご記載ください" value="{{ old('detail') }}" ></textarea>
        </div>
        <div class="form__error">
          @error('detail')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">確認画面</button>
    </div>
  </form>
</div>
@endsection