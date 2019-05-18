@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            {{$information['subject']}}
        @endcomponent
    @endslot

    {{-- Body --}}
    <table border="1">
        <tr>
            <td>Adı Soyadı</td>
            <td>{{$information['name']}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{$information['email']}}</td>
        </tr>
        <tr>
            <td>Konu</td>
            <td>{{$information['subject']}}</td>
        </tr>
        <tr>
            <td>Mesaj</td>
            <td>{{$information['message']}}</td>
        </tr>
        <tr>
            <td>Telefon</td>
            <td>{{$information['phone']}}</td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="mailto:{{$information['email']}}?subject={{$information['subject']}}"
                   target="_blank">İlgili müşteriye hemen cevap vermek için tıkla</a>
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
