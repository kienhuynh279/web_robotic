@include('client.components.head-import')
@include('client.components.header')
<div id="app">
    @switch($page ?? 'home')
    @case('home.index')
    @include('client.page.home.index')
    @break
    @default
    @include('client.page.exam.index')
    @endswitch
</div>

@include('client.components.footer')