@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
        @endcomponent
    @endslot

    {{-- Body --}}
    <table border="1">
        <tr>
            <td>Adı Soyadı</td>
            <td>{{$information['name']}}</td>
        </tr>
        <tr>
            <td>Telefon</td>
            <td>{{$information['phone']}}</td>
        </tr>
        <tr>
            <td colspan="2">
            </td>
        </tr>
    </table>

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
        @endcomponent
    @endslot
@endcomponent
