@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.inventory.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.inventories.update", [$inventory->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.inventory.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $inventory->name) }}">
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="sku">{{ trans('cruds.inventory.fields.sku') }}</label>
                <input class="form-control {{ $errors->has('sku') ? 'is-invalid' : '' }}" type="text" name="sku" id="sku" value="{{ old('sku', $inventory->sku) }}">
                @if($errors->has('sku'))
                    <span class="text-danger">{{ $errors->first('sku') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.sku_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price">{{ trans('cruds.inventory.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', $inventory->price) }}" step="0.01">
                @if($errors->has('price'))
                    <span class="text-danger">{{ $errors->first('price') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="inventory">{{ trans('cruds.inventory.fields.inventory') }}</label>
                <input class="form-control {{ $errors->has('inventory') ? 'is-invalid' : '' }}" type="number" name="inventory" id="inventory" value="{{ old('inventory', $inventory->inventory) }}" step="1">
                @if($errors->has('inventory'))
                    <span class="text-danger">{{ $errors->first('inventory') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.inventory_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="desc">{{ trans('cruds.inventory.fields.desc') }}</label>
                <textarea class="form-control {{ $errors->has('desc') ? 'is-invalid' : '' }}" name="desc" id="desc">{{ old('desc', $inventory->desc) }}</textarea>
                @if($errors->has('desc'))
                    <span class="text-danger">{{ $errors->first('desc') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.desc_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="short_desc">{{ trans('cruds.inventory.fields.short_desc') }}</label>
                <textarea class="form-control {{ $errors->has('short_desc') ? 'is-invalid' : '' }}" name="short_desc" id="short_desc">{{ old('short_desc', $inventory->short_desc) }}</textarea>
                @if($errors->has('short_desc'))
                    <span class="text-danger">{{ $errors->first('short_desc') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.short_desc_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="image">{{ trans('cruds.inventory.fields.image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image-dropzone">
                </div>
                @if($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.image_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="gallery">{{ trans('cruds.inventory.fields.gallery') }}</label>
                <div class="needsclick dropzone {{ $errors->has('gallery') ? 'is-invalid' : '' }}" id="gallery-dropzone">
                </div>
                @if($errors->has('gallery'))
                    <span class="text-danger">{{ $errors->first('gallery') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.gallery_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="category_id">{{ trans('cruds.inventory.fields.category') }}</label>
                <select class="form-control select2 {{ $errors->has('category') ? 'is-invalid' : '' }}" name="category_id" id="category_id">
                    @foreach($categories as $id => $entry)
                        <option value="{{ $id }}" {{ (old('category_id') ? old('category_id') : $inventory->category->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('category'))
                    <span class="text-danger">{{ $errors->first('category') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.category_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="brand_id">{{ trans('cruds.inventory.fields.brand') }}</label>
                <select class="form-control select2 {{ $errors->has('brand') ? 'is-invalid' : '' }}" name="brand_id" id="brand_id">
                    @foreach($brands as $id => $entry)
                        <option value="{{ $id }}" {{ (old('brand_id') ? old('brand_id') : $inventory->brand->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('brand'))
                    <span class="text-danger">{{ $errors->first('brand') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.brand_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.inventory.fields.product_unit') }}</label>
                <select class="form-control {{ $errors->has('product_unit') ? 'is-invalid' : '' }}" name="product_unit" id="product_unit" required>
                    <option value disabled {{ old('product_unit', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Inventory::PRODUCT_UNIT_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('product_unit', $inventory->product_unit) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('product_unit'))
                    <span class="text-danger">{{ $errors->first('product_unit') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.product_unit_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="box_quantity">{{ trans('cruds.inventory.fields.box_quantity') }}</label>
                <input class="form-control {{ $errors->has('box_quantity') ? 'is-invalid' : '' }}" type="number" name="box_quantity" id="box_quantity" value="{{ old('box_quantity', $inventory->box_quantity) }}" step="1">
                @if($errors->has('box_quantity'))
                    <span class="text-danger">{{ $errors->first('box_quantity') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.box_quantity_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="product_cost">{{ trans('cruds.inventory.fields.product_cost') }}</label>
                <input class="form-control {{ $errors->has('product_cost') ? 'is-invalid' : '' }}" type="number" name="product_cost" id="product_cost" value="{{ old('product_cost', $inventory->product_cost) }}" step="0.01">
                @if($errors->has('product_cost'))
                    <span class="text-danger">{{ $errors->first('product_cost') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.product_cost_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price_group_1">{{ trans('cruds.inventory.fields.price_group_1') }}</label>
                <input class="form-control {{ $errors->has('price_group_1') ? 'is-invalid' : '' }}" type="number" name="price_group_1" id="price_group_1" value="{{ old('price_group_1', $inventory->price_group_1) }}" step="0.01">
                @if($errors->has('price_group_1'))
                    <span class="text-danger">{{ $errors->first('price_group_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.price_group_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price_group_2">{{ trans('cruds.inventory.fields.price_group_2') }}</label>
                <input class="form-control {{ $errors->has('price_group_2') ? 'is-invalid' : '' }}" type="number" name="price_group_2" id="price_group_2" value="{{ old('price_group_2', $inventory->price_group_2) }}" step="0.01">
                @if($errors->has('price_group_2'))
                    <span class="text-danger">{{ $errors->first('price_group_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.price_group_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price_group_3">{{ trans('cruds.inventory.fields.price_group_3') }}</label>
                <input class="form-control {{ $errors->has('price_group_3') ? 'is-invalid' : '' }}" type="number" name="price_group_3" id="price_group_3" value="{{ old('price_group_3', $inventory->price_group_3) }}" step="0.01">
                @if($errors->has('price_group_3'))
                    <span class="text-danger">{{ $errors->first('price_group_3') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.price_group_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price_group_4">{{ trans('cruds.inventory.fields.price_group_4') }}</label>
                <input class="form-control {{ $errors->has('price_group_4') ? 'is-invalid' : '' }}" type="number" name="price_group_4" id="price_group_4" value="{{ old('price_group_4', $inventory->price_group_4) }}" step="0.01">
                @if($errors->has('price_group_4'))
                    <span class="text-danger">{{ $errors->first('price_group_4') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.price_group_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price_group_5">{{ trans('cruds.inventory.fields.price_group_5') }}</label>
                <input class="form-control {{ $errors->has('price_group_5') ? 'is-invalid' : '' }}" type="number" name="price_group_5" id="price_group_5" value="{{ old('price_group_5', $inventory->price_group_5) }}" step="0.01">
                @if($errors->has('price_group_5'))
                    <span class="text-danger">{{ $errors->first('price_group_5') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.price_group_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price_group_6">{{ trans('cruds.inventory.fields.price_group_6') }}</label>
                <input class="form-control {{ $errors->has('price_group_6') ? 'is-invalid' : '' }}" type="number" name="price_group_6" id="price_group_6" value="{{ old('price_group_6', $inventory->price_group_6) }}" step="0.01">
                @if($errors->has('price_group_6'))
                    <span class="text-danger">{{ $errors->first('price_group_6') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.price_group_6_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.inventory.fields.product_unit_wholse') }}</label>
                <select class="form-control {{ $errors->has('product_unit_wholse') ? 'is-invalid' : '' }}" name="product_unit_wholse" id="product_unit_wholse">
                    <option value disabled {{ old('product_unit_wholse', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Inventory::PRODUCT_UNIT_WHOLSE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('product_unit_wholse', $inventory->product_unit_wholse) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('product_unit_wholse'))
                    <span class="text-danger">{{ $errors->first('product_unit_wholse') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.product_unit_wholse_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_qty">{{ trans('cruds.inventory.fields.unit_qty') }}</label>
                <input class="form-control {{ $errors->has('unit_qty') ? 'is-invalid' : '' }}" type="number" name="unit_qty" id="unit_qty" value="{{ old('unit_qty', $inventory->unit_qty) }}" step="1">
                @if($errors->has('unit_qty'))
                    <span class="text-danger">{{ $errors->first('unit_qty') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.unit_qty_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="items_per_unit">{{ trans('cruds.inventory.fields.items_per_unit') }}</label>
                <input class="form-control {{ $errors->has('items_per_unit') ? 'is-invalid' : '' }}" type="number" name="items_per_unit" id="items_per_unit" value="{{ old('items_per_unit', $inventory->items_per_unit) }}" step="1">
                @if($errors->has('items_per_unit'))
                    <span class="text-danger">{{ $errors->first('items_per_unit') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.items_per_unit_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.inventory.fields.sale') }}</label>
                <select class="form-control {{ $errors->has('sale') ? 'is-invalid' : '' }}" name="sale" id="sale">
                    <option value disabled {{ old('sale', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Inventory::SALE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('sale', $inventory->sale) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('sale'))
                    <span class="text-danger">{{ $errors->first('sale') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.sale_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="discount">{{ trans('cruds.inventory.fields.discount') }}</label>
                <input class="form-control {{ $errors->has('discount') ? 'is-invalid' : '' }}" type="number" name="discount" id="discount" value="{{ old('discount', $inventory->discount) }}" step="0.01">
                @if($errors->has('discount'))
                    <span class="text-danger">{{ $errors->first('discount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.discount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="start_sale_date_time">{{ trans('cruds.inventory.fields.start_sale_date_time') }}</label>
                <input class="form-control datetime {{ $errors->has('start_sale_date_time') ? 'is-invalid' : '' }}" type="text" name="start_sale_date_time" id="start_sale_date_time" value="{{ old('start_sale_date_time', $inventory->start_sale_date_time) }}">
                @if($errors->has('start_sale_date_time'))
                    <span class="text-danger">{{ $errors->first('start_sale_date_time') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.start_sale_date_time_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="end_sale_date_time">{{ trans('cruds.inventory.fields.end_sale_date_time') }}</label>
                <input class="form-control datetime {{ $errors->has('end_sale_date_time') ? 'is-invalid' : '' }}" type="text" name="end_sale_date_time" id="end_sale_date_time" value="{{ old('end_sale_date_time', $inventory->end_sale_date_time) }}">
                @if($errors->has('end_sale_date_time'))
                    <span class="text-danger">{{ $errors->first('end_sale_date_time') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.end_sale_date_time_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="howtouse">{{ trans('cruds.inventory.fields.howtouse') }}</label>
                <textarea class="form-control {{ $errors->has('howtouse') ? 'is-invalid' : '' }}" name="howtouse" id="howtouse">{{ old('howtouse', $inventory->howtouse) }}</textarea>
                @if($errors->has('howtouse'))
                    <span class="text-danger">{{ $errors->first('howtouse') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.howtouse_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="youtube_link">{{ trans('cruds.inventory.fields.youtube_link') }}</label>
                <input class="form-control {{ $errors->has('youtube_link') ? 'is-invalid' : '' }}" type="text" name="youtube_link" id="youtube_link" value="{{ old('youtube_link', $inventory->youtube_link) }}">
                @if($errors->has('youtube_link'))
                    <span class="text-danger">{{ $errors->first('youtube_link') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.inventory.fields.youtube_link_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    Dropzone.options.imageDropzone = {
    url: '{{ route('admin.inventories.storeMedia') }}',
    maxFilesize: 4, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 4,
      width: 1500,
      height: 1500
    },
    success: function (file, response) {
      $('form').find('input[name="image"]').remove()
      $('form').append('<input type="hidden" name="image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($inventory) && $inventory->image)
      var file = {!! json_encode($inventory->image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
<script>
    var uploadedGalleryMap = {}
Dropzone.options.galleryDropzone = {
    url: '{{ route('admin.inventories.storeMedia') }}',
    maxFilesize: 4, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 4,
      width: 1500,
      height: 1500
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="gallery[]" value="' + response.name + '">')
      uploadedGalleryMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedGalleryMap[file.name]
      }
      $('form').find('input[name="gallery[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($inventory) && $inventory->gallery)
      var files = {!! json_encode($inventory->gallery) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.preview)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="gallery[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection