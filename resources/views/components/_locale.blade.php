<form class="d-inline selettore-lingua rounded py-3 px-0" action="{{ route('setLanguage', $lang) }}" method="POST">
    @csrf
    <button type="submit" class="btn p-0 mb-2 btn-flag">
        <img src="{{asset('vendor/blade-flags/language-' . $lang . '.svg')}}" width="32" height="32" />
    </button>
</form>