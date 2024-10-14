<div>
    @if (session()->has('message'))
    <div class="alert alert-success text-center">
        {{ session('message') }}
    </div>
    @endif
    
    <form wire:submit='save'>
        <div class="mb-3 container-custom">
            <input type="text" placeholder="Titolo" class="form-control input-custom" id="title" wire:model.blur="title">
            @error('title')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3 container-custom">
            <textarea class="form-control input-custom" placeholder="Descrizione" cols="30" rows="10" id="description" wire:model.blur="description"></textarea>
            @error('description')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3 container-custom">
            <input type="text" class="form-control input-custom" placeholder="Prezzo" id="price" wire:model.blur="price">
            @error('price')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3 container-custom">
            <select class="form-select my-bg-sec text-white" id="category" wire:model="category">
                <option class="my-bg-ter text-white select-custom" label disabled>Seleziona una categoria</option>
                
                @foreach ($categories as $category)
                <option class="my-bg-ter text-white select-custom" value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
                
            </select>
            @error('category')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-info-custom my-bg-quar">Crea</button>
    </form>
</div>
