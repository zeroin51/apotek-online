<div class="modal fade" id="editObat" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Form Edit {{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="text-align: left;">
                <form action="/dashboard/obats/{{ $obat->code }}" method="post" enctype="multipart/form-data" id="editform">
                    @method('put')
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="code" class="form-label">Kode Obat</label>
                        <input type="text" class="form-control  @error('code') is-invalid @enderror" id="code" name="code" required value="{{ old('code') }}">
                        @error('code')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Obat</label>
                        <input type="text" class="form-control" id="name" name="name" required value="{{ old('name') }}">
                    </div>
                    <div class='mb-3'>
                        <label for='img' class='form-label'>Foto Obat</label>
                        <input class="form-control @error('img') is-invalid @enderror" type='file' id='img' name='img'/>
                        @error('img')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi Obat</label>
                        <textarea name="description" id="description" cols="30" rows="5" class="form-control" required>{{ old('description') }}</textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="editbtn" name="editbtn">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>