<x-theme.modal modalTitle="Tambah Item" modalOpenBtnLabel="Tambah">
    <form action="{{ route('panel.admin.items.store') }}" method="POST" class="mt-5">
        @csrf
        <div>
            <x-theme.form.input-label for="name" value="Nama" />
            <x-theme.form.text-input id="name" name="name" value="{{ old('name') }}" type="text" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-theme.form.input-label for="price" value="Harga" />
            <x-theme.form.text-input id="price" name="price" value="{{ old('price') }}" type="number" />
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-theme.form.input-label for="description" value="Deskripsi" />
            <x-theme.form.text-input id="description" name="description" value="{{ old('description') }}"
                type="text" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-6">
            <button type="submit"
                class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-sky-600 rounded-md dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:bg-sky-700 hover:bg-sky-600 focus:outline-none focus:bg-sky-600 focus:ring focus:ring-sky-300 focus:ring-opacity-50">
                Simpan
            </button>
        </div>
    </form>
</x-theme.modal>
