@extends('dashboard.layouts.main')

@section('container')
<div class="create">
    <div class="container">
        <div class="modal__content">
            <div class="modal__header">
                <div class="modal__container">
                    <h2 class="modal__title">Edit Kontak</h2>
                </div>
            </div>

            <div class="modal__body">
                <div class="modal__container">
                    <form action="/dashboard/contacts/store" method="PUT" enctype="multipart/form-data">
                        @csrf
                        <div class="row row--md">
                            <div class="col-12 form-group form-group--lg">
                                <label class="form-label form-label--sm">Nama</label>
                                <div class="input-group">
                                    <input class="input @error('name') is-invalid @enderror" type="text"
                                        id="name" name="name" autofocus value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 form-group form-group--lg">
                                <label class="form-label form-label--sm" for="category_id">Kategori</label>
                                <select class="form-select @error('category_id') is-invalid @enderror"
                                    name="category_id" id="category_id">
                                    @foreach ($categories as $category)
                                        @if (old('category_id') == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12 form-group form-group--lg">
                                <label class="form-label form-label--sm">Nomor Telepon</label>
                                <div class="input-group">
                                    <input class="input js-phone-number @error('phone_number') is-invalid @enderror"
                                        type="text" id="phone_number" name="phone_number"
                                        value="{{ old('phone_number') }}" required>
                                    @error('phone_number')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 form-group form-group--lg">
                                <label class="form-label form-label--sm">Email</label>
                                <div class="input-group">
                                    <input class="input @error('email') is-invalid @enderror" type="email"
                                        id="email" name="email">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 form-group form-group--lg">
                                <label class="form-label form-label--sm">Alamat</label>
                                <div class="input-group">
                                    <input class="input @error('address') is-invalid @enderror" type="text"
                                        id="address" name="address" value="{{ old('address') }}" required>
                                    @error('address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 form-group form-group--lg">
                                <label class="form-label form-label--sm" for="image">Foto</label>
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                <div class="input-group">
                                    <input class="input @error('image') is-invalid @enderror" type="file"
                                        id="image" name="image" onchange="previewImage()">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button class="button button--primary" type="submit"><span
                                class="button__icon button__icon--left">
                                <svg class="icon-icon-plus">
                                    <use xlink:href="#icon-plus"></use>
                                </svg></span><span class="button__text">Simpan</span>
                        </button>
                        <button class="button button--secondary"><span class="button__text"><a
                                    href="/dashboard/contacts" class="text-decoration-none">Batal</a></span>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = URL.createObjectURL(image.files[0]);
        imgPreview.src = oFReader;
    }
</script>
@endsection
