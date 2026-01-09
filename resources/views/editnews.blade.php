<x-app-layout>
    <div class="container-md" style="margin-top: 2rem; margin-bottom: 2rem;">
        <h2 style="color: #fff;"><b>Edit News</b></h2>
        <div class="border-top border-1 mb-4 border-primary my-2 border-white"></div>

        <form action="{{ route('news.update', $news->id) }}" method="POST" class="needs-validation" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="name" class="form-label" style="color: #fff;">Judul Berita <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name', $news->name) }}" placeholder="Enter news title" required>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="detail" class="form-label" style="color: #fff;">Deskripsi Berita <span class="text-danger">*</span></label>
                <textarea class="form-control @error('detail') is-invalid @enderror" id="detail" name="detail" rows="5" placeholder="Enter news detail" required>{{ old('detail', $news->detail) }}</textarea>
                @error('detail')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="release" class="form-label" style="color: #fff;">Tanggal Rilis Berita <span class="text-danger">*</span></label>
                <input type="date" class="form-control bg-white @error('release') is-invalid @enderror" id="release" name="release"
                    value="{{ old('release', $news->release) }}" required>
                @error('release')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <div for="image" class="pb-2" style="color: #fff;">Unggah Gambar Berita (Optional)</div>
                <input type="file" class="form-control bg-white @error('image') is-invalid @enderror" id="image" name="image">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="d-flex justify-content-center align-items-center mt-5 text-dark">
                <x-primary-button type="submit">UPDATE</x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>