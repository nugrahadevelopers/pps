<x-theme.modal modalTitle="Hapus Pelanggan" modalOpenBtnIcon="fa-regular fa-trash-can"
    class="space-x-0 bg-rose-500 hover:bg-rose-600 text-sm text-rose-950">
    <form action="{{ route('panel.admin.items.destroy', $item) }}" method="POST" class="mt-5">
        @csrf
        @method('DELETE')

        <p>Anda yakin akan menghapus <span class="font-medium">{{ $item->name }}</span> dari data item?</p>

        <div class="flex justify-end mt-6">
            <button type="submit"
                class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-rose-600 rounded-md dark:bg-rose-600 dark:hover:bg-rose-700 dark:focus:bg-rose-700 hover:bg-rose-600 focus:outline-none focus:bg-rose-600 focus:ring focus:ring-rose-300 focus:ring-opacity-50">
                Hapus
            </button>
        </div>
    </form>
</x-theme.modal>
