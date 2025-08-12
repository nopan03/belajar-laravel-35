{{-- 
    Bagian <style> di bawah ini digunakan untuk mengatur tampilan footer agar selalu berada di bawah halaman,
    dengan tinggi 50px, lebar penuh, latar belakang abu-abu gelap, dan teks putih rata tengah.
--}}
<style>
      .footer {
        position: absolute;    {{-- Footer diposisikan absolut di bawah halaman --}}
        bottom: 0;             {{-- Menempel di bagian paling bawah --}}
        right: 0;              {{-- Menempel di sisi kanan --}}
        height: 50px;          {{--Tinggi footer 50px --}}
        width: 100%;           {{-- Lebar footer 100% halaman --}}
        background-color: #303030; {{-- Warna latar belakang abu gelap --}}
        color: #fefefe;        {{-- Warna teks putih --}}
        text-align: center;    {{-- Teks rata tengah --}}
        line-height: 50px;     {{-- Vertikal align teks di tengah --}}
      }
</style>

{{-- 
    Bagian <div> di bawah ini adalah isi dari footer yang akan tampil di bawah halaman.
    Biasanya berisi copyright atau informasi lain.
--}}
<div class="footer">
    <span>Copyright pann tutorial laravel</span>
</div>