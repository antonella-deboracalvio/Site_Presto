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
                <h2 class="text-center text-white">{{__("ui.insert an article")}}</h2>
            </div>
            {{-- titolo, prezzo e categoria --}}
            <div class="col-12 col-md-6">
                <div class="mb-3 container-custom">
                    <input type="text" placeholder="{{__("ui.title")}}" class="form-control input-custom w-100 py-2" id="title"
                    wire:model.blur="title">
                    @error('title')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 container-custom">
                    <input type="text" class="form-control input-custom w-100 py-2" placeholder="{{__("ui.price")}}"
                    id="price" wire:model.blur="price">
                    @error('price')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 container-custom">
                    <select class="form-select my-bg-sec text-white" id="category" wire:model="category">
                        <option class="my-bg-ter text-white select-custom" label disabled>{{__("ui.select a category")}}
                        </option>
                        
                        @foreach ($categories as $category)
                        <option class="my-bg-ter text-white select-custom" value="{{ $category->id }}">
                            {{__("ui.$category->name")}}</option>
                            @endforeach
                            
                    </select>
                    @error('category')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                {{-- descrizione --}}
                <div class="col-12">
                    <div class="mb-3 container-custom w-100">
                        <textarea class="form-control input-custom w-100" placeholder="{{__("ui.description")}}" cols="30" rows="10"
                        id="description" wire:model.blur="description"></textarea>
                        @error('description')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
                
                {{-- immagine --}}
                
                <div class="col-12 col-md-6">
                    <div class="mb-3 container-custom">
                        <input type="file" class="form-control input-custom py-2 w-100" id="image" wire:model.live="temporary_images" multiple>
                        @error('temporary_images.*')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        @error('temporary_images')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                
                @if (!empty($images))
                <p class="text-white">{{__("ui.image preview")}}</p>
                    <div class="row mb-3">
                        @foreach ($images as $key=> $image)
                            <div wire:key="{{ $key }}" class="col-4 mt-3 d-flex justify-content-center">
                                <div class="img-preview rounded d-flex justify-content-end" style="background-image: url({{ $image->temporaryUrl() }});">
                                    <button wire:click="removeImage({{ $key }})" type="button" class="btn my-bg-acc btn-elimina-img text-white">X</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @endif
                </div>
                
                
                
            </div>
            {{-- crea --}}
            <div class="col-12 d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-info-custom my-bg-quar">{{__("ui.create")}}</button>
            </div>
            
        </form>
        
    </div>
