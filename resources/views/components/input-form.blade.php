<!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
<div class="form-group {{$classGroup}}">
    <label for="{{$name}}">{{$label}}</label>
    <input 
        type="{{$type}}" 
        
        class="form-control {{$class}} @error($name) is-invalid @enderror" 
        
        id="{{$name}}" 
        
        name="{{$name}}"
        
        placeholder="{{$placeholder}}"
        
        value="{{!old($name) ? $value ?? "" ? $value : old($name) : old($name)}}"
        
        {{$attributes}}
        >
    
    <small class="@error($name) text-danger @else text-muted  @enderror">
        @error($name)
        {{$message}}
        @enderror
    </small>
</div>