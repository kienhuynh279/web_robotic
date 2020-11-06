<div class="row">
    <div class="col-md-9 px-0 mb-3">
        <div class="block">
            <div class="block-header block-header-default p-0" >
                <a class="font-w600 d-block w-100 p-3" >Nội dung</a>
            </div>
            <div class="block-content p-4">
                {{$slot}}
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        {{$sidebar}}
    </div>    
</div>