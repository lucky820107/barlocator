@extends('layout.layout')

@section('content')

<main>
    <div class="mapbax">
        <div class="map-wrapper">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3625.025969403815!2d121.53426061500054!3d25.041814983972527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442abdd661cd9b1%3A0x89a3d24643cc37fd!2sKOR%20Taipei!5e0!3m2!1szh-TW!2stw!4v1693906179837!5m2!1szh-TW!2stw"
                width="100%"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="information">
            <div class="information-box">
                <div class="logo-icon">
                    <img src="" alt="">
                </div>
                <div class="info">
                    <h2 class="store">name</h2>
                    <div class="tags">
                        <span class="tag">清吧</span>
                        <span class="tag">居酒屋</span>
                        <span class="tag">KTV酒吧</span>
                    </div>
                </div>
            </div>
            <div class="brief-box">
                <p><strong>地址：</strong>110054 台北市信義區仁愛路四段505號</p>
                <p><strong>訂位方式：</strong>現場候位</p>
                <p><strong>費用計算：</strong><br>女生入場費100元<br>男生入場費100元<br>餐點低消100元</p>
                <p><strong>營業時間：</strong>PM5:00 - AM2:00</p>
                <p><strong>店休日：</strong>一 二</p>
            </div>

        </div>
    </div>
</main>
@endsection
