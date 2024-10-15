<div>
    @if (session()->has('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit='save'>

        <div class="row ">
            {{-- inserisci --}}
            <div class="col-12 justify-content-center mb-5">
                <h2 class="text-center text-white">Inserisci il tuo articolo</h2>
            </div>
            {{-- titolo, prezzo e categoria --}}
            <div class="col-12 col-md-6">
                <div class="mb-3 container-custom">
                    <input type="text" placeholder="Titolo" class="form-control input-custom w-100 py-2" id="title"
                        wire:model.blur="title">
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 container-custom">
                    <input type="text" class="form-control input-custom w-100 py-2" placeholder="Prezzo"
                        id="price" wire:model.blur="price">
                    @error('price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 container-custom">
                    <select class="form-select my-bg-sec text-white" id="category" wire:model="category">
                        <option class="my-bg-ter text-white select-custom" label disabled>Seleziona una categoria
                        </option>

                        @foreach ($categories as $category)
                            <option class="my-bg-ter text-white select-custom" value="{{ $category->id }}">
                                {{ $category->name }}</option>
                        @endforeach

                    </select>
                    @error('category')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>


            {{-- descrizione --}}
            <div class="col-12 col-md-6">
                <div class="mb-3 container-custom">
                    <textarea class="form-control input-custom w-100" placeholder="Descrizione" cols="30" rows="10"
                        id="description" wire:model.blur="description"></textarea>
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            {{-- crea --}}
            <div class="col-12 d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-info-custom my-bg-quar">Crea</button>
            </div>
        </div>

    </form>

</div>
