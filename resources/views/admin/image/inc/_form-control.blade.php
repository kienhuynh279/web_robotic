<x-wp-layout>
    @slot('sidebar')
    <div id="settings-accordion" role="tablist" aria-multiselectable="true">
        <div class="block mb-0">
            <div class="block-header block-header-default p-0" role="tab" id="settings-accordion_h1">
                <a class="font-w600 d-block w-100 p-3" data-toggle="collapse" data-parent="#settings-accordion"
                    href="#settings-accordion_s1" aria-expanded="true" aria-controls="settings-accordion_s1">Update Status</a>
            </div>
            <div id="settings-accordion_s1" class="collapse show" role="tabpanel"
                aria-labelledby="settings-accordion_h1" data-parent="#settings-accordion" style="">
                <div class="block-content">
                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label" for="date-created">Create at</label>
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
    @endslot

    @slot('slot')
   
    <div class="form-group">
        <label for="">Image</label>
        <div class="input-group">
            <input type="text" class="form-control @error("Image") is-invalid @enderror" id="Image" name="Src"
                placeholder="image" value="{{!old("Src") ? $image->Src ?? false ? $image->Src : old("Src") : old("Src") }}">
            <div class="input-group-append">
                <button type="button" class="btn btn-dark" onclick="selectFileCKFinder('Image')">Choose Image</button>
            </div>
        </div>

        @error('Image')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

     <div class="form-row">
        <x-input-form type="text" label="Note" name="Alt" classGroup="col-md" class="" placeholder="Note"
            :value="$image->Alt ?? ''" />
    </div>
    @endslot

</x-wp-layout>