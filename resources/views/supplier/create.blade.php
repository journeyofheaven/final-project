@extends('layout.master')
@push('catatan')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endpush
@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tambah Supplier</h4>
          <h6 class="card-title"><a href="/supplier">Kembali</a>
            <br>
            <br>
          <form class="forms-sample" action="/supplier" method="POST">
            @csrf
            <div class="form-group">
              <label for="namaSupplier">Nama</label>
              <input type="text" class="form-control" name="namaSupplier" placeholder="Nama Supplier">
              @error('namaSupplier')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
            @enderror
            <br>
              <label for="kodeSupplier">Kode Supplier</label>
              <input type="number" class="form-control" name="kodeSupplier" id="kodeSupplier" placeholder="Kode Supplier">
              @error('kodeSupplier')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
            @enderror
            <br>
              <label for="catatan">catatan Supplier</label>
              <textarea name="catatanSupplier" class="form-control my-editor">{!! old('catatan', $catatan ?? '') !!}</textarea>
              @error('catatanSupplier')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
            @enderror
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
@endsection
@push('scripts')
<script>
  var editor_config = {
    path_absolute : "/",
    selector: 'textarea.my-editor',
    relative_urls: false,
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table directionality",
      "emoticons template paste textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    file_picker_callback : function(callback, value, meta) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
      if (meta.filetype == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.openUrl({
        url : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no",
        onMessage: (api, message) => {
          callback(message.content);
        }
      });
    }
  };

  tinymce.init(editor_config);
</script>  
@endpush