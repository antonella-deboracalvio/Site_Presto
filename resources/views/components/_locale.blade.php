<form class="d-inline selettore-lingua rounded py-3 px-2" action="{{ route('setLanguage', $lang) }}" method="POST">
    @csrf
    <button type="submit" class="btn p-1 mb-2">
        <img src="{{asset('vendor/blade-flags/language-' . $lang . '.svg')}}" width="32" height="32" />
    </button>
</form>