<x-wp-layout>
    {{-- @slot('sidebar')
    <div id="settings-accordion" role="tablist" aria-multiselectable="true">
        <div class="block mb-0">
            <div class="block-header block-header-default p-0" role="tab" id="settings-accordion_h1">
                <a class="font-w600 d-block w-100 p-3" data-toggle="collapse" data-parent="#settings-accordion"
                    href="#settings-accordion_s1" aria-expanded="true" aria-controls="settings-accordion_s1">Status Update</a>
            </div>
            <div id="settings-accordion_s1" class="collapse show" role="tabpanel"
                aria-labelledby="settings-accordion_h1" data-parent="#settings-accordion" style="">
                <div class="block-content">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label" for="date-created">Date Create</label>
                        <div class="col-sm-6 d-flex align-items-center justify-content-end">
                            {{date("d/m/Y H:i:s")}}
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-primary">Save Change</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endslot --}}

    @slot('slot')
    <div class="form-group">
        <button class="btn btn-outline-primary">Save Change</button>
    </div>
    <div class="form-row">
        <x-input-form type="text" label="Title" name="Title" classGroup="col-md" class="" placeholder="Title"
            :value="$banner->Title ?? ''" />
    </div>

    <div class="form-row">
        <x-input-form type="text" label="Link to Page" name="Link" classGroup="col-md" class="" placeholder="Link to Page"
            :value="$banner->Link ?? ''" />
    </div>

    <div class="form-group">
        <label for="Video">Your video (If you do not enter 2 object photo boxes, background image)</label>
        <div class="input-group">
            <input type="text" class="form-control @error("Video") is-invalid @enderror" id="Video" name="Video"
                placeholder="Hình ảnh" value="{{!old("Video") ? $banner->Video ?? false ? $banner->Video : old("Video") : old("Video") }}">
            <div class="input-group-append">
                <button type="button" class="btn btn-dark" onclick="selectFileCKFinder('Video')">Choose video</button>
            </div>
        </div>

        @error('Video')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="">Image </label>
        <div class="input-group">
            <input type="text" class="form-control @error("Object") is-invalid @enderror" id="Object" name="Object"
                placeholder="Hình ảnh" value="{{!old("Object") ? $banner->Object ?? false ? $banner->Object : old("Object") : old("Object") }}">
            <div class="input-group-append">
                <button type="button" class="btn btn-dark" onclick="selectFileCKFinder('Object')">Choose Image</button>
            </div>
        </div>

        @error('Object')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="Background">Background Image</label>
        <div class="input-group">
            <input type="text" class="form-control @error("Background") is-invalid @enderror" id="Background" name="Background"
                placeholder="Hình ảnh" value="{{!old("Background") ? $banner->Background ?? false ? $banner->Background : old("Background") : old("Background") }}">
            <div class="input-group-append">
                <button type="button" class="btn btn-dark" onclick="selectFileCKFinder('Background')">Choose Image</button>
            </div>
        </div>

        @error('Background')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="formTextarea" class="@error("Description") text-danger @enderror">Description</label>
        <textarea id="formTextarea" class="form-control" name="Description" rows="3">{{!old("Description") ? $banner->Description ?? false ? $banner->Description : old("Description") : old("Description") }}</textarea>
    </div>

    @endslot

</x-wp-layout>