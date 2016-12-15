@extends('layouts.app')
@section('content')
<div class="mdl-layout__container">
  <div class="jdio-layout mdl-layout">
    <main class="mdl-layout__content">
      <div class="mdl-grid container">
        <div class="mdl-cell mdl-cell--8-col">
          <div class="jdio-login-container">
            <div class="jdio-card mdl-card mdl-shadow--4dp">
              <div class="jdio-title mdl-card__title">
                <h2>Coffeeoto</h2>
              </div>
              <div class="mdl-card__actions">
                <form action="#">
                  <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" name="username" type="text" id="user_name">
                    <label class="mdl-textfield__label" for="user_name">Username</label>
                  </div>
                  <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" name="username" type="text" id="password">
                    <label class="mdl-textfield__label" for="password">Password</label>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>
@endsection
