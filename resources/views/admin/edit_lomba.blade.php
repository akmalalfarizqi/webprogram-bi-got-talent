<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Mata Lomba: {{ $lomba->nama_lomba }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('admin.lomba.update', $lomba->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nama Mata Lomba</label>
                        <input
                            type="text"
                            name="nama_lomba"
                            value="{{ old('nama_lomba', $lomba->nama_lomba) }}"
                            class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm w-full"
                            required
                        >
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Singkat</label>
                        <textarea
                            name="deskripsi"
                            rows="3"
                            class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm w-full"
                        >{{ old('deskripsi', $lomba->deskripsi) }}</textarea>
                    </div>

                    <div class="flex justify-end gap-2">
                        <a href="{{ route('admin.lomba') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-md">
                            Batal
                        </a>
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-md">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>