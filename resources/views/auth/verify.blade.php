
@extends('user.master')

@section('content')
<style>
    .background-none {
        background: transparent;
    }
    .border-redius10{
        border-redius: 10px;
    }
    .text-zard {
        color: #ffc107 !important;
    }
    .bold {
        font-weight: bold;
    }
    [data-gradient=body-default] #page, .background-changer .body-default {
        background-image: none !important;
    }
    /* body {        
        background: url("/source/asset/assets/images/back.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-size: 540px auto;

    } */
    .theme-light input, select, textarea {
        border-color: black !important;
        border-radius: 10px;
        padding: 10px;
        text-align: left;
    }
    .body-login {
        position: fixed;
        bottom: 0px;
        background: white;
        padding: 0px;
        margin: 0px;
        width: 100%;
    }
    .welcome-logo {
        width: 220px;
        position: absolute;
        top: 40px;
    }
    button.btn {
        padding: 12px 0px;
    }
    .invate-form-big2 {
        position: fixed;
        bottom: 180px;
        width: 540px;
        background: #ffffff99;
    }
    .invate-form-big3 {
        position: fixed;
        bottom: 175px;
        width: 540px;
    }
    .theme-light input, select, textarea {
        border-radius: 0px;
        border-color: transparent !important;
        border-bottom-color: rgba(0, 0, 0, 0.08) !important;
    }
    /* .theme-light input:hover, input:focus, input:active {
        border: none;
        border-color: transparent !important;
        background: transparent !important;
        border-bottom: 1px solid #2f665f !important;
        padding-bottom: 18px;
        font-size: 12px !important;
        color: #2f665f !important;
        border-radius: 0px;

    } */
    .theme-light input, select, textarea, input::placeholder {
        font-size: 18px !important;
        text-align: right !important;
    }
    /* .theme-light input, select, textarea, input:hover::placeholder {
        transition: 0.6s !important;
        font-size: 12px !important;
        color: #2f665f !important;
    } */

    .floating-form-group > .floating-label {
        width: 100%;
    }
    button.btn {
        padding: 12px 0px;
    }
    button.btn:hover {
        color: white;
    }
</style>

    <main class="flex-shrink-0">
        <div class="container text-center mt-4">
            <div class="icon icon-100 text-white mb-4 text-center">
                <img src="\{{ \App\Model\Setting::find(1)->icon_site }}" alt="{{ \App\Model\Setting::find(1)->title }}" style="width: 100px;border-radius: 50px;">
            </div>
            <h4 class="mb-4">{{ \App\Model\Setting::find(1)->title }}</h4>
        </div>
        <div class="container">
            <div class="login-box">
                <form method="POST" action="/sign-up-using-mobile/{{$number}}">
                    <div class="form-group floating-form-group">
                        <input type="text" name="mobile" id="mobile" value="{{$number}}" class="form-control floating-input" readonly>
                        <label class="floating-label">?????????? ???????????? ???? ???????? ??????</label>
                    </div>
                    <div class="form-group floating-form-group">
                        <input type="text" name="code" id="mobile" class="form-control floating-input" required autofocus>
                        <label class="floating-label">???? ?????????? ?????? ???? ???????? ????????</label>
                        <h6 class="text-danger text-center p-1">{{$error ?? ''}}</h6>
                    </div>
                    <div class="form-group my-4 text-secondary">
                        <a class="link" href="#" onclick="event.preventDefault(); document.getElementById('resend-code').submit();">
                            ?????????? ???????? ???? ??????????
                        </a>
                    </div>
                    <div class="form-group mb-4 text-secondary">
                        ???? ???????? ?????? ???????? ?????? ???????????? ???? ???????? ??????????
                        <br>
                        <a href="#" data-toggle="modal" data-target="#modal" class="link">???????????? ?? ????????????</a>
                    </div>
                    <button type="submit" class="btn btn-block col-12 btn-info mt-2">?????????? ????</button>
                    @method('patch')
                    @csrf
                </form>
                <form id="resend-code" method="POST" action="/sign-up-using-mobile" class="d-none">
                    @csrf
                    <input type="hidden" name="mobile" value="{{$number}}" id="mobile">
                    <button type="submit">?????????? ???????? ???? ??????????</button>
                </form>
            </div>
        </div>
    </main>
     
    <div class="modal" id="modal">
        <div class="modal-dialog modal-dialog-scrollable pt-4">
            <div class="modal-content" style="border-radius: 30px;">
                <div class="modal-body">
                    <h4 class="mb-3">{{App\Model\About::find(1)->title_rule}}</h4>
                    {!! App\Model\About::find(1)->text_rule !!}
                    <button data-dismiss="modal" class="btn btn-success col-12 btn-block mt-3">???????????? ???? ???????? ???????? </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function(){
            $("input[name='mobile']").on('input', function (e) {
                $(this).val($(this).val().replace(/[^0-9]/g, ''));
            });
        });
    </script>
@endsection


