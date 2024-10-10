<div>
    <form>
        <div class="mb-3">
            <label for="title" class="form-label">Titolo:</label>
            <input type="text" class="form-control" id="title" wire:model.blur="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione:</label>
            <textarea class="form-control" cols="30" rows="10" id="description" wire:model.blur="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo:</label>
            <input type="text" class="form-control" id="price" wire:model.blur="price">
        </div>
        <div class="mb-3">
            <select class="form-select" id="category" wire:model="category">
                <option label disabled>Seleziona una categoria</option>

                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
</div>
