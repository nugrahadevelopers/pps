<x-theme.modal modalTitle="Tambah Pelanggan" modalOpenBtnLabel="Tambah">
    <form action="{{ route('panel.admin.customers.store') }}" method="POST" class="mt-5">
        @csrf
        <div>
            <x-theme.form.input-label for="name" value="Nama" />
            <x-theme.form.text-input id="name" name="name" value="{{ old('name') }}" type="text" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-theme.form.input-label for="address" value="Alamat" />
            <x-theme.form.text-input id="address" name="address" value="{{ old('address') }}" type="text" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-theme.form.input-label for="phone" value="Nomor Tlp" />
            <x-theme.form.text-input id="phone" name="phone" value="{{ old('phone') }}" type="text" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-theme.form.input-label for="email" value="Email" />
            <x-theme.form.text-input id="email" name="email" value="{{ old('email') }}" type="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-6">
            <button type="submit"
                class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-sky-600 rounded-md dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:bg-sky-700 hover:bg-sky-600 focus:outline-none focus:bg-sky-600 focus:ring focus:ring-sky-300 focus:ring-opacity-50">
                Simpan
            </button>
        </div>
    </form>
</x-theme.modal>
