<x-wp-layout>

    @slot('slot')
    <div class="form-group">
        <button class="btn btn-outline-primary">Save Change</button>
    </div>
   
    <div class="form-group">
        <label for="editor" class="@error(" Description") text-danger @enderror">Description</label>
        <textarea id="editor" class="form-control" name="Description"
            rows="3">{{!old("Description") ? $about->Description ?? false ? $about->Description : old("Description") : old("Description") }}</textarea>
    </div>

    @endslot

</x-wp-layout>