<div>
   <textarea
        {{ $attributes->except('class') }}
        {{ $attributes->merge(['class' => 'bla your-standard-input-classes']) }}
   ></textarea>

    @error($attributes['wire:model'])
      <x-validation-error>
        {{ $message }}
      </x-validation-error>
    @enderror
</div>
