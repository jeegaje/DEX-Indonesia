import './bootstrap';
import 'flowbite';
import * as FilePond from 'filepond';
import 'filepond/dist/filepond.min.css';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css';

// Ambil semua elemen input file dengan kelas 'filepond'
const inputElements = document.querySelectorAll('input[type="file"].filepond');

// Ambil token CSRF
const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

// Daftarkan plugin image preview
FilePond.registerPlugin(FilePondPluginImagePreview);

// Iterasi melalui setiap elemen input file
inputElements.forEach(inputElement => {
    // Buat instansi FilePond untuk setiap elemen input
    FilePond.create(inputElement, {
        server: {
            process: './uploads/process', // URL proses upload
            headers: {
                'X-CSRF-TOKEN': csrfToken, // Kirim token CSRF dengan setiap permintaan
            },
        },
        labelIdle: '+ Gambar', // Ubah label default
    });
});
