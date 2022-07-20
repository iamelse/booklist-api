# Study Case
Salah satu instansi pemerintah memerlukan API pusat informasi daftar buku di perpustakaan agar developer aplikasi bisa menggunakannya ke dalam aplikasinya.
Sebagai software developer, bantu pemerintah tersebut untuk mewujudkan keinginannya dengan detail spesfikasi berikut:

- Sebuah admin panel untuk mengelola buku dan penulis (CRUD)
    - Buku
        - Create ✔
        - Read ✔
        - Update
        - Delete
    - Penulis
        - Create
        - Read
        - Update
        - Delete
- Admin harus login terlebih dahulu ke admin panel untuk bisa mengelola buku dan penulis buku ✔
- One buku hasMany penulis dan One penulis hasMany buku ✔
- Terdapat 5 endpoint API yang disajikan, seperti:
    - Daftar buku ✔ `/api/books`
    - Detail buku ✔ `/api/book/detail/{book_id}`
    - Pencarian buku berdasarkan judul ✔ `/api/books?search={keyword_from_book_title}`
    - Detail Writer ✔ `/api/books/writer/{writer_id}`
    - Filter buku berdasarkan penulis ✔ `/api/writers`
- API daftar buku harus berisi:
    - Judul ✔
    - Banyak halaman ✔
    - Waktu pembuatan (tahun terbit) ✔
- API detail buku harus berisi:
    - Judul ✔
    - Isi (deskripsi buku) ✔
    - Gambar (cover) ✔
    - Banyak halaman ✔
    - Waktu pembuatan (tahun terbit) ✔
- Response pencarian buku sama dengan daftar buku ✔
- Semua response berbentuk JSON ✔