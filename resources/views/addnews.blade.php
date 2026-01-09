<x-app-layout>
    <div style="margin-top: 1rem; margin-bottom: 3rem;">
        <div class="container-md" style="margin-bottom: 4%;">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
            
        <div class="container-md text-white">
            <form action="{{ route('newsregistration') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="container-md">
                    <h2><b>ADD NEWS</b></h2>
                    <div class="border-top border-1 mb-4 border-primary my-2 border-white"></div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Judul Berita <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                            value="{{ old('name') }}" placeholder="Enter news title" required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="detail" class="form-label">Deskripsi Berita <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('detail') is-invalid @enderror" id="detail" name="detail" rows="5" placeholder="Enter news detail" required>{{ old('detail') }}</textarea>
                        @error('detail')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div for="image" class="pb-2">Unggah Gambar Berita <span class="text-danger">*</span></div>
                        <input type="file" class="form-control bg-white @error('image') is-invalid @enderror" id="image" name="image"
                            value="{{ old('image') }}" style="border: 2px solid; padding: 10px; font-size: 14px;" required>
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="release" class="form-label">Tanggal Rilis Berita <span class="text-danger">*</span></label>
                        <input type="date" class="form-control bg-white @error('release') is-invalid @enderror" id="release" name="release"
                            value="{{ old('release') }}" style="border: 2px solid; padding: 10px; font-size: 14px;" required>
                        @error('release')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-center align-items-center mt-5 text-dark">
                        <x-primary-button type="submit">SUBMIT</x-primary-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>