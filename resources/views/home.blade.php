@extends('layout.layout')

@section('content')

<!-- <h1>{{ $pageName }}</h1> -->
<main>
    <div class="main-logo">
        <img src="{{ asset('assets/images/big-logo.png') }}" alt="LOGO">
    </div>
    <div class="form-box">
        <form class="checkbox-form" action="" method="">
            <div class="checkbox-grid">
                <label>
                    <input type="checkbox" name="type[]" value="lounge">清吧 (Lounge Bar)
                </label>
                <label>
                    <input type="checkbox" name="type[]" value="izakaya">居酒屋 (Izakaya)
                </label>
                <label>
                    <input type="checkbox" name="type[]" value="KTV">KTV酒吧 (KTV Bar)
                </label>
                <label>
                    <input type="checkbox" name="type[]" value="craft">精釀啤酒吧 (Craft Beet Bar)
                </label>
                <label>
                    <input type="checkbox" name="type[]" value="nightclub">夜店 (Nightclub)
                </label>
                <label>
                    <input type="checkbox" name="type[]" value="whiskey">威士忌吧 (Whiskey Bar)
                </label>
                <label>
                    <input type="checkbox" name="type[]" value="cocktail">雞尾酒吧 (Cocktail Bar)
                </label>
                <label>
                    <input type="checkbox" name="type[]" value="LGBTQ">LGBTQ
                </label>
                <label>
                    <input type="checkbox" name="type[]" value="KPOP">KPOP
                </label>
                <label>
                    <input type="checkbox" name="type[]" value="JPOP">JPOP
                </label>
                <label>
                    <input type="checkbox" name="type[]" value="POP">POP
                </label>
                <label>
                    <input type="checkbox" name="type[]" value="blues">藍調
                </label>
            </div>

            <div class="search-button">
                <button>
                    <img src="{{ asset('assets/images/Vector.png') }}" alt="search">
                    <span>搜尋</span>
                </button>
            </div>
        </form>
    </div>
</main>

@endsection

